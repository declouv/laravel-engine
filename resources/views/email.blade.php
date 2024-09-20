<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:style>
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/app-email.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
    </x-slot:style>
    <div class="container-xxl flex-grow-1 container-p-y">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="app-email card">
            <div class="row g-0">
                <!-- Email Sidebar -->
                <div class="col app-email-sidebar border-end flex-grow-0" id="app-email-sidebar">
                    <div class="btn-compost-wrapper d-grid">
                        <button class="btn btn-primary btn-compose" data-bs-toggle="modal"
                            data-bs-target="#emailComposeSidebar" id="emailComposeSidebarLabel">Compose</button>
                    </div>
                    <!-- Email Filters -->
                    <div class="email-filters pt-4 pb-2">
                        <!-- Email Filters: Folder -->
                        <ul class="email-filter-folders list-unstyled">
                            <li class="active d-flex justify-content-between align-items-center mb-1"
                                data-target="inbox">
                                <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
                                    <i class="bx bx-envelope"></i>
                                    <span class="align-middle ms-2">Inbox</span>
                                </a>
                                <div class="badge bg-label-primary rounded-pill">{{ count($emails->where('receiver_id', Auth::user()->id)) }}</div>
                            </li>
                            <li class="d-flex mb-1" data-target="sent">
                                <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
                                    <i class="bx bx-send"></i>
                                    <span class="align-middle ms-2">Sent</span>
                                </a>

                                <div class="badge bg-label-success rounded-pill ms-auto">
                                    {{ count($emails->where('sender_id', Auth::user()->id)) }}</div>
                            </li>
                            <li class="d-flex justify-content-between align-items-center mb-1" data-target="draft">
                                <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
                                    <i class="bx bx-edit"></i>
                                    <span class="align-middle ms-2">Draft</span>
                                </a>
                                {{-- <div class="badge bg-label-warning rounded-pill">2</div> --}}
                                <div class="badge bg-label-secondary rounded-pill">
                                    {{ count($emails->filter(function ($email) {return $email->receiver_id == Auth::user()->id && $email->is_draft == 'true';})) == 0? '0': count($emails->filter(function ($email) {return $email->receiver_id == Auth::user()->id && $email->is_draft == 'true';})) }}
                                </div>
                            </li>
                            <li class="d-flex justify-content-between mb-1" data-target="starred">
                                <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
                                    <i class="bx bx-star"></i>
                                    <span class="align-middle ms-2">Starred</span>
                                </a>
                                <div class="badge bg-label-warning rounded-pill">
                                    {{ count($emails->filter(function ($email) {return $email->receiver_id == Auth::user()->id && $email->is_stared == 'true';})) == 0? '0': count($emails->filter(function ($email) {return $email->receiver_id == Auth::user()->id && $email->is_stared == 'true';})) }}
                                </div>
                            </li>
                            <li class="d-flex justify-content-between align-items-center mb-1" data-target="spam">
                                <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
                                    <i class="bx bx-error-alt"></i>
                                    <span class="align-middle ms-2">Spam</span>
                                </a>
                                {{-- <div class="badge bg-label-danger rounded-pill">4</div> --}}
                                <div class="badge bg-label-danger rounded-pill">
                                    {{ count($emails->filter(function ($email) {return $email->receiver_id == Auth::user()->id && $email->is_spam == 'true';})) == 0? '0': count($emails->filter(function ($email) {return $email->receiver_id == Auth::user()->id && $email->is_spam == 'true';})) }}
                                </div>
                            </li>
                            <li class="d-flex align-items-center" data-target="trash">
                                <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
                                    <i class="bx bx-trash"></i>
                                    <span class="align-middle ms-2">Trash</span>
                                </a>
                            </li>
                            {{-- <li class="d-flex align-items-center" data-target="important">
                                <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
                                    <i class='bx bxs-message-square-error'></i>
                                    <span class="align-middle ms-2">Important</span>
                                </a>
                            </li> --}}
                        </ul>
                        <!-- Email Filters: Labels -->
                        <div class="email-filter-labels pt-4">
                            <p class="small mx-6 text-muted text-uppercase">Labels</p>
                            <ul class="list-unstyled mb-2">
                                <li data-target="work">
                                    <a href="javascript:void(0);">
                                        <i class="badge badge-dot bg-success"></i>
                                        <span class="align-middle ms-2">Personal</span>
                                    </a>
                                </li>
                                <li data-target="company">
                                    <a href="javascript:void(0);">
                                        <i class="badge badge-dot bg-primary"></i>
                                        <span class="align-middle ms-2">Company</span>
                                    </a>
                                </li>
                                <li data-target="important">
                                    <a href="javascript:void(0);">
                                        <i class="badge badge-dot bg-warning"></i>
                                        <span class="align-middle ms-2">Important</span>
                                    </a>
                                </li>
                                <li data-target="private">
                                    <a href="javascript:void(0);">
                                        <i class="badge badge-dot bg-danger"></i>
                                        <span class="align-middle ms-2">Private</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--/ Email Filters -->
                    </div>
                </div>
                <!--/ Email Sidebar -->

                <!-- Emails List -->
                <div class="col app-emails-list">
                    <div class="card shadow-none border-0 rounded-0">
                        <div class="card-body emails-list-header p-3 py-2">
                            <!-- Email List: Search -->
                            <div class="d-flex justify-content-between align-items-center px-3 mt-2">
                                <div class="d-flex align-items-center w-100">
                                    <i class="bx bx-menu bx-lg cursor-pointer d-block d-lg-none me-4 mb-4"
                                        data-bs-toggle="sidebar" data-target="#app-email-sidebar"
                                        data-overlay=""></i>
                                    <div class="mb-4 w-100">
                                        <div class="input-group input-group-merge shadow-none">
                                            <span class="input-group-text border-0 p-0 pe-4" id="email-search">
                                                <i class="bx bx-search bx-md text-body"></i>
                                            </span>
                                            <input type="text"
                                                class="form-control email-search-input border-0 py-0"
                                                placeholder="Search mail" aria-label="Search mail"
                                                aria-describedby="email-search">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mx-n3 emails-list-header-hr mb-2">
                            <!-- Email List: Actions -->
                            <div class="d-flex justify-content-between align-items-center ps-1">
                                <div class="d-flex align-items-center">
                                    <div class="form-check mb-0 ms-2">
                                        <input class="form-check-input" type="checkbox" id="email-select-all">
                                        <label class="form-check-label" for="email-select-all"></label>
                                    </div>
                                    <div class="btn btn-icon me-1"><i
                                            class="bx bx-trash bx-md email-list-delete cursor-pointer"></i></div>
                                    <div class="btn btn-icon me-1"><i
                                            class="bx bx-envelope-open bx-md email-list-read cursor-pointer"></i></div>
                                    <div class="dropdown me-1">
                                        <button class="btn btn-icon p-0" type="button" id="dropdownMenuFolderOne"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-folder bx-md"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuFolderOne">
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="bx bx-error-alt bx-sm me-1"></i>
                                                <span class="align-middle">Spam</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="bx bx-edit bx-sm me-1"></i>
                                                <span class="align-middle">Draft</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="bx bx-trash bx-sm me-1"></i>
                                                <span class="align-middle">Trash</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dropdown mx-1">
                                        <button class="btn btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown" aria-expanded="true" id="dropdownLabelOne">
                                            <i class="bx bx-label bx-md"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownLabelOne">
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="badge badge-dot bg-success me-1"></i>
                                                <span class="align-middle">Workshop</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="badge badge-dot bg-primary me-1"></i>
                                                <span class="align-middle">Company</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="badge badge-dot bg-warning me-1"></i>
                                                <span class="align-middle">Important</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="badge badge-dot bg-danger me-1"></i>
                                                <span class="align-middle">Private</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="btn btn-icon me-1">
                                        <i class="bx bx-refresh bx-md scaleX-n1-rtl cursor-pointer email-refresh"></i>
                                    </span>
                                    <div class="dropdown">
                                        <button class="btn btn-icon p-0" type="button" id="emailsActions"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded bx-md"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="emailsActions">
                                            <a class="dropdown-item" href="javascript:void(0)">Mark as read</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Mark as unread</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Archive</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="container-m-nx m-0">

                        <!-- Email List: Items -->
                        <div class="email-list pt-0">
                            <ul class="list-unstyled m-0">
                                {{--  --}}
                                @foreach ($emails as $e)
                                    @if ($e->receiver_id == Auth::user()->id || $e->sender_id == Auth::user()->id)
                                        <li class="email-list-item @if($e->sender_id != Auth::user()->id && $e->is_read == 'false') email-marked-read @endif d-flex align-items-center"
                                            @if ($e->is_stared == 'true') data-starred="true" @endif
                                            @if ($e->is_spam == 'true') data-spam="true" @endif
                                            @if ($e->is_draft == 'true') data-draft="true" @endif
                                            @if ($e->is_trash == 'true') data-trash="true" @endif
                                            @if ($e->sender_id == Auth::user()->id) data-sent="true" @endif
                                            @if ($e->receiver_id == Auth::user()->id) data-inbox="true" @else data-inbox="false" @endif
                                            {{-- data-sent="{{ $e->sender_id == Auth::user()->id ? 'false' : 'true' }}" --}}
                                            data-bs-toggle="sidebar" data-target="#app-email-view-{{ $e->id }}">
                                            <div class="d-flex align-items-center w-100">
                                                <div class="form-check mb-0 ms-2">
                                                    <input class="email-list-item-input form-check-input" type="checkbox"
                                                        id="email-{{ $e->id }}">
                                                    <label class="form-check-label"
                                                        for="email-{{ $e->id }}"></label>
                                                </div>

                                                <span class="ms-sm-3 me-4 d-sm-inline-block d-none">
                                                    <form action="{{ route('email.stared', ['id' => $e->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        {{-- <input type="hidden" name="id"
                                                        value="{{ $e->id }}"> --}}
                                                        <button type="submit"
                                                            style="background:transparent; border:none">
                                                            <i class="email-list-item-bookmark bx bx-star bx-md cursor-pointer ms-1"></i>
                                                            {{-- <i class='bx bx-envelope bx-md' type="submit"></i> --}}
                                                        </button>
                                                    </form>
                                                </span>

                                                <img src="assets/img/avatars/@if($e->sender_id == Auth::user()->id){{ $e->receiver->img }} @else{{ $e->sender->img }} @endif" alt="user-avatar"
                                                    class="d-block flex-shrink-0 rounded-circle me-sm-2 me-0"
                                                    height="32" width="32">
                                                <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                                                    <span
                                                        class="email-list-item-username me-2 text-heading">
                                                        @if ($e->sender_id == Auth::user()->id) Your mail to {{ $e->receiver->name }} @else {{ $e->sender->name }} @endif</span>
                                                    <small
                                                        class="email-list-item-subject d-xl-inline-block d-block">{{ $e->subject }}</small>
                                                </div>
                                                <div class="email-list-item-meta ms-auto d-flex align-items-center">
                                                    @switch($e->label)
                                                        @case('Private')
                                                            <span
                                                                class="email-list-item-label badge badge-dot bg-danger d-none d-md-inline-block me-2"
                                                                data-label="private"></span>
                                                        @break

                                                        @case('Personal')
                                                            <span
                                                                class="email-list-item-label badge badge-dot bg-success d-none d-md-inline-block me-2"
                                                                data-label="personal"></span>
                                                        @break

                                                        @case('Company')
                                                            <span
                                                                class="email-list-item-label badge badge-dot bg-primary d-none d-md-inline-block me-2"
                                                                data-label="company"></span>
                                                        @break

                                                        @case('Important')
                                                            <span
                                                                class="email-list-item-label badge badge-dot bg-warning d-none d-md-inline-block me-2"
                                                                data-label="important"></span>
                                                        @break
                                                    @endswitch
                                                    <small
                                                        class="email-list-item-time text-muted">{{ $e->created_at->diffForHumans() }}</small>
                                                    <ul class="list-inline email-list-item-actions">
                                                        @if ($e->sender_id != Auth::user()->id && $e->is_read == 'false')
                                                            <li class="list-inline-item btn btn-icon">
                                                                <form
                                                                    action="{{ route('email.readed', ['id' => $e->id]) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    {{-- <input type="hidden" name="id"
                                                                        value="{{ $e->id }}"> --}}
                                                                    <button type="submit"
                                                                        style="background:transparent; border:none">
                                                                        <i class='bx bx-envelope bx-md'
                                                                            type="submit"></i>
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        @endif
                                                        <li class="list-inline-item btn btn-icon">
                                                            <form action="{{ route('email.delete', ['id' => $e->id]) }}"
                                                                method="POST">
                                                                {{-- <form action="" method="POST"> --}}
                                                                @csrf
                                                                @method('DELETE')
                                                                {{-- <input type="hidden" name="id" value="{{ $e->id }}"> --}}
                                                                <button type="submit"
                                                                    style="background:transparent; border:none">
                                                                    <i class='bx bx-trash bx-md' type="submit"></i>
                                                                </button>
                                                            </form>
                                                        </li>
                                                        {{-- <li class="list-inline-item btn btn-icon"><i
                                                            class='bx bx-info-circle bx-md'></i></li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <ul class="list-unstyled m-0">
                                <li class="email-list-empty text-center d-none">No items found.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="app-overlay"></div>
                </div>
                <!-- /Emails List -->

                <!-- Email View -->
                @foreach ($emails as $e)
                    @if ($e->receiver_id == Auth::user()->id || $e->sender_id == Auth::user()->id)
                    <div class="col app-email-view flex-grow-0 bg-lighter" id="app-email-view-{{ $e->id }}">
                        <div class="card shadow-none border-0 rounded-0 app-email-view-header p-5 pt-md-4 py-2">
                            <!-- Email View : Title  bar-->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <span class="ms-sm-2 me-4"><i class="bx bx-chevron-left bx-md cursor-pointer"
                                            data-bs-toggle="sidebar"
                                            data-target="#app-email-view-{{ $e->id }}"></i></span>
                                    <h6 class="text-truncate mb-0 me-2 fw-normal">{{ $e->subject }}</h6>
                                    @switch($e->label)
                                        @case('Private')
                                            <span class="badge bg-label-danger">Private</span>
                                        @break

                                        @case('Personal')
                                            <span class="badge bg-label-success">Personal</span>
                                        @break

                                        @case('Company')
                                            <span class="badge bg-label-primary">Company</span>
                                        @break

                                        @case('Important')
                                            <span class="badge bg-label-warning">Important</span>
                                        @break
                                    @endswitch
                                </div>
                                <!-- Email View : Action bar-->
                                {{-- <div class="d-flex align-items-center">
                                    <span class="btn btn-icon p-0 me-2 text-muted">
                                        <i class='bx bx-chevron-left bx-md'></i>
                                    </span>
                                    <span class="btn btn-icon p-0">
                                        <i class="bx bx-chevron-right bx-md"></i>
                                    </span>
                                </div> --}}
                            </div>
                            <hr class="app-email-view-hr mx-n5 mb-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    {{-- <span class="btn btn-icon me-1"><i
                                            class='bx bx-trash bx-md cursor-pointer'></i></span> --}}
                                    <form action="{{ route('email.delete', ['id' => $e->id]) }}" method="POST"
                                        class="btn btn-icon">
                                        {{-- <form action="" method="POST"> --}}
                                        @csrf
                                        @method('DELETE')
                                        {{-- <input type="hidden" name="id" value="{{ $e->id }}"> --}}
                                        <button type="submit" style="background:transparent; border:none">
                                            <i class='bx bx-trash bx-md btn btn-icon'></i>
                                        </button>
                                    </form>
                                    {{-- <span class="btn btn-icon me-1"><i
                                            class='bx bx-envelope-open bx-md cursor-pointer' data-bs-toggle="sidebar"
                                            data-target="#app-email-view"></i></span> --}}
                                    <div class="dropdown">
                                        <button class="btn btn-icon p-0 me-1" type="button"
                                            id="dropdownMenuFolderTwo" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="bx bx-folder bx-md"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuFolderTwo">
                                                <div class="dropdown-item">
                                                    <form action="{{ route('email.spam', ['id' => $e->id]) }}"
                                                        method="POST" class="btn btn-icon">
                                                        {{-- <form action="" method="POST"> --}}
                                                        @csrf
                                                        @method('PUT')
                                                        {{-- <input type="hidden" name="id" value="{{ $e->id }}"> --}}
                                                        <button type="submit"
                                                            style="background:transparent; border:none">
                                                            {{-- <i class='bx bx-trash bx-md btn btn-icon'></i> --}}
                                                            <i class="bx bx-error-alt ms-5"></i>
                                                            @if ($e->is_spam == 'false')
                                                            <span class="align-middle ms-2">spam</span>
                                                            @else
                                                            <span class="align-middle ms-2">unspam</span>
                                                            @endif
                                                        </button>
                                                    </form>
                                                </div>

                                                <div class="dropdown-item">
                                                    <form action="{{ route('email.draft', ['id' => $e->id]) }}"
                                                        method="POST" class="btn btn-icon">
                                                        {{-- <form action="" method="POST"> --}}
                                                        @csrf
                                                        @method('PUT')
                                                        {{-- <input type="hidden" name="id" value="{{ $e->id }}"> --}}
                                                        <button type="submit"
                                                            style="background:transparent; border:none">
                                                            {{-- <i class='bx bx-trash bx-md btn btn-icon'></i> --}}
                                                            <i class="bx bx-pencil ms-5"></i>
                                                            @if ($e->is_draft == 'false')
                                                            <span class="align-middle ms-2">draft</span>
                                                            @else
                                                            <span class="align-middle ms-2">undraft</span>
                                                            @endif
                                                        </button>
                                                    </form>
                                                </div>

                                                <div class="dropdown-item">
                                                    <form action="{{ route('email.trash', ['id' => $e->id]) }}"
                                                        method="POST" class="btn btn-icon">
                                                        {{-- <form action="" method="POST"> --}}
                                                            @csrf
                                                            @method('PUT')
                                                            {{-- <input type="hidden" name="id" value="{{ $e->id }}"> --}}
                                                            <button type="submit"
                                                            style="background:transparent; border:none">
                                                            {{-- <i class='bx bx-trash bx-md btn btn-icon'></i> --}}
                                                            <i class="bx bx-trash ms-5"></i>
                                                            @if ($e->is_trash == 'false')
                                                            <span class="align-middle ms-2">trash</span>
                                                            @else
                                                            <span class="align-middle ms-2">untrash</span>
                                                            @endif
                                                        </button>
                                                    </form>
                                                </div>


                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-icon p-0" type="button" id="dropdownLabelTwo"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-label bx-md"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownLabelTwo">
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="badge badge-dot bg-success me-1"></i>
                                                <span class="align-middle">Workshop</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="badge badge-dot bg-primary me-1"></i>
                                                <span class="align-middle">Company</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="badge badge-dot bg-info me-1"></i>
                                                <span class="align-middle">Important</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="btn btn-icon p-0">
                                        <i class='bx bx-star bx-md'></i>
                                    </span>
                                    <div class="dropdown ms-1">
                                        <button class="btn btn-icon p-0" type="button" id="dropdownMoreOptions"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded bx-md"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMoreOptions">
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="bx bx-envelope me-1"></i>
                                                <span class="align-middle">Mark as unread</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="bx bx-envelope-open me-1"></i>
                                                <span class="align-middle">Mark as read</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="bx bx-star me-1"></i>
                                                <span class="align-middle">Add star</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="bx bx-calendar me-1"></i>
                                                <span class="align-middle">Create Event</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="bx bx-volume-mute me-1"></i>
                                                <span class="align-middle">Mute</span>
                                            </a>
                                            <a class="dropdown-item d-sm-none d-block" href="javascript:void(0)">
                                                <i class="bx bx-printer me-1"></i>
                                                <span class="align-middle">Print</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">


                        <!-- Email View : Content-->
                        <div class="app-email-view-content py-4">

                            <!-- Email View : Last mail-->
                            <div class="card email-card-last mx-sm-6 mx-3 mt-4">
                                <div
                                    class="card-header d-flex justify-content-between align-items-center flex-wrap border-bottom">
                                    <div class="d-flex align-items-center mb-sm-0 mb-3">
                                        <img src="../../assets/img/avatars/{{ $e->sender->img }}"
                                            alt="user-avatar" class="flex-shrink-0 rounded-circle me-4"
                                            height="38" width="38">
                                        <div class="flex-grow-1 ms-1">
                                            <h6 class="m-0 fw-normal">@if ($e->sender_id == Auth::user()->id) Dear @endif{{ $e->sender->name }}</h6>
                                            <small class="text-body">{{ $e->sender->email }}</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 me-4 text-muted">{{ $e->created_at->diffForHumans() }}</p>
                                        <span class="btn btn-icon"><i
                                                class="bx bx-paperclip bx-md cursor-pointer"></i></span>
                                        <span class="btn btn-icon"><i
                                                class="email-list-item-bookmark bx bx-star bx-md cursor-pointer"></i></span>
                                        <div class="dropdown">
                                            <button class="btn btn-icon dropdown-toggle hide-arrow"
                                                id="dropdownEmailTwo" data-bs-toggle="dropdown" aria-expanded="true">
                                                <i class="bx bx-dots-vertical-rounded bx-md"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownEmailTwo">
                                                <a class="dropdown-item scroll-to-reply" href="javascript:void(0)">
                                                    <i class="bx bx-share me-1"></i>
                                                    <span class="align-middle">Reply</span>
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="bx bx-share me-1"></i>
                                                    <span class="align-middle">Forward</span>
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="bx bx-info-circle me-1"></i>
                                                    <span class="align-middle">Report</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-6">
                                    <p class="fw-medium">{{ $e->subject }}</p>
                                    <p>
                                        {{ $e->messages }}
                                    </p>

                                    {{-- <p class="mb-0">Sincerely yours,</p> --}}
                                    {{-- <p class="fw-medium mb-0">Envato Design Team</p>
                                <hr>
                                <p class="text-muted mb-2">Attachments</p>
                                <div class="cursor-pointer">
                                    <i class="bx bx-file"></i>
                                    <span class="align-middle ms-1">report.xlsx</span>
                                </div> --}}
                                </div>
                            </div>
                            @if ($e->sender_id != Auth::user()->id)

                            <!-- Email View : Reply mail-->
                            <div class="email-reply card mt-4 mx-sm-6 mx-3 mb-4">
                                <h6 class="card-header border-0 fw-normal pb-4">Reply to {{ $e->sender->name }}</h6>
                                <div class="card-body pt-0 ps-3">
                                    <div class="d-flex justify-content-start">
                                        <div class="email-reply-toolbar border-0 w-100 ps-0 pb-4">
                                            <span class="ql-formats me-0">
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                                <button class="ql-list" value="ordered"></button>
                                                <button class="ql-list" value="bullet"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="email-reply-editor"></div>
                                    <div class="d-flex justify-content-end align-items-center mt-4">
                                        <div class="cursor-pointer btn btn-text-secondary text-secondary me-4">
                                            <i class="bx bx-paperclip bx-16px text-heading me-2"></i>
                                            <span class="align-middle">Attachments</span>
                                        </div>
                                        <button class="btn btn-primary">
                                            <span class="align-middle">Send</span>
                                            <i class="bx bx-paper-plane bx-sm ms-2 scaleX-n1-rtl"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>


                    </div>
                    @endif
                @endforeach
                <!-- Email View -->
            </div>

            <!-- Compose Email -->
            <div class="app-email-compose modal" id="emailComposeSidebar" tabindex="-1"
                aria-labelledby="emailComposeSidebarLabel" aria-hidden="true">
                <div class="modal-dialog m-0 me-md-6 mb-6 modal-lg">
                    <div class="modal-content p-0">
                        <div class="modal-header py-3 justify-content-between">
                            <h5 class="modal-title text-body fs-5">Compose Mail</h5>
                            <div class="d-flex align-items-center gap-2">
                                <button type="button" class="btn btn-sm btn-icon"><i
                                        class='bx bx-minus'></i></button>
                                <button type="button" class="btn btn-sm btn-icon" data-bs-dismiss="modal"
                                    aria-label="Close"><i class='bx bx-x'></i></button>
                            </div>
                        </div>
                        <div class="modal-body flex-grow-1 pb-sm-0 px-6 py-2">
                            <form class="email-compose-form" action="{{ route('email.store') }}" method="POST">
                                @csrf
                                <div class="email-compose-to d-flex justify-content-between align-items-center">
                                    <label class="fw-medium mb-1 text-muted" for="emailContacts">To:</label>
                                    <div class="select2-primary border-0 shadow-none flex-grow-1 mx-2">
                                        <select class="select2 select-email-contacts form-select" id="emailContacts"
                                            name="receiver_id" multiple="">
                                            @foreach ($users as $u)
                                                <option data-avatar="{{ $u->img }}"
                                                    value="{{ $u->id }}">{{ $u->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="hidden" name="sender_id" value="{{ Auth::user()->id }}">
                                    <div class="email-compose-toggle-wrapper text-end">
                                        <a class="email-compose-toggle-cc text-body" href="javascript:void(0);">Cc
                                            |</a>
                                        <a class="email-compose-toggle-bcc text-body"
                                            href="javascript:void(0);">Bcc</a>
                                    </div>
                                </div>

                                <div class="email-compose-cc d-none">
                                    <hr class="mx-n6 my-0">
                                    <div class="d-flex align-items-center">
                                        <label for="email-cc" class="fw-medium text-muted">Cc:</label>
                                        <input type="text"
                                            class="form-control border-0 shadow-none flex-grow-1 mx-2" id="email-cc"
                                            placeholder="someone@email.com">
                                    </div>
                                </div>
                                <div class="email-compose-bcc d-none">
                                    <hr class="mx-n6 my-0">
                                    <div class="d-flex align-items-center">
                                        <label for="email-bcc" class="fw-medium text-muted">Bcc:</label>
                                        <input type="text"
                                            class="form-control border-0 shadow-none flex-grow-1 mx-2" id="email-bcc"
                                            placeholder="someone@email.com">
                                    </div>
                                </div>
                                <hr class="mx-n6 my-0">
                                <div class="email-compose-subject d-flex align-items-center">
                                    <label for="email-subject" class="fw-medium text-muted">Subject:</label>
                                    <input type="text" class="form-control border-0 shadow-none flex-grow-1 mx-2"
                                        id="email-subject" name="subject">
                                </div>
                                <hr class="mx-n6 my-0">
                                {{-- <div class="email-compose-message">
                                    <div class="d-flex justify-content-end mx-n1">
                                        <div class="email-editor-toolbar border-0 w-100 px-0">
                                            <span class="ql-formats me-0">
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                                <button class="ql-list" value="ordered"></button>
                                                <button class="ql-list" value="bullet"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </span>
                                        </div>
                                    </div>
                                    <hr class="mx-n6 my-0">
                                    <div class="email-editor border-0 mx-n5"></div>
                                </div> --}}
                                <div class="email-compose-subject d-flex align-items-center">
                                    <label for="email-subject" class="fw-medium text-muted">Messages:</label>
                                    <textarea class="form-control border-0 shadow-none flex-grow-1 mx-2" id="email-subject" name="messages"
                                        rows="8"></textarea>
                                </div>
                                <hr class="mx-n6 mt-0 mb-2">
                                <div
                                    class="email-compose-actions d-flex justify-content-between align-items-center my-4">
                                    <div class="d-flex align-items-center">

                                        <button type="submit"
                                            class="btn btn-primary dropdown-toggle email-send-btn">Send <i
                                                class="bx bx-paper-plane bx-sm scaleX-n1-rtl ms-2"></i></button>
                                        {{-- <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Schedule
                                                        send</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Save draft</a>
                                                </li>
                                            </ul> --}}

                                        <label for="attach-file" class="btn btn-sm btn-icon ms-4"><i
                                                class="bx bx-paperclip cursor-pointer"></i></label>
                                        <input type="file" name="file-input" class="d-none" id="attach-file">
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-icon p-0" type="button"
                                                id="dropdownMoreActions" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded "></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMoreActions">
                                                <li><button type="button" class="dropdown-item">Add Label</button>
                                                </li>
                                                <li><button type="button" class="dropdown-item">Plain text
                                                        mode</button></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><button type="button" class="dropdown-item">Print</button></li>
                                                <li><button type="button" class="dropdown-item">Check
                                                        Spelling</button></li>
                                            </ul>
                                        </div>
                                        <button type="reset" class="btn btn-sm btn-icon" data-bs-dismiss="modal"
                                            aria-label="Close"><i class="bx bx-trash"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Compose Email -->
        </div>
    </div>
    <x-slot:js>
        <script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/block-ui/block-ui.js') }}"></script>
        <script src="{{ asset('assets/js/app-email.js') }}"></script>
    </x-slot:js>
</x-app>

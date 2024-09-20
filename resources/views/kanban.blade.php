<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="form-action" content="{{ route('item.store') }}">
    </x-slot:head>
    <x-slot:style>
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/jkanban/jkanban.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/typography.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/app-kanban.css') }}">
    </x-slot:style>
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="app-kanban">

            <!-- Add new board -->
            <div class="row">
                <div class="col-12">
                    <form class="kanban-add-new-board" action="{{ route('board.store') }}" method="POST">
                        @csrf
                        <label class="kanban-add-board-btn" for="kanban-add-board-input">
                            <i class="bx bx-plus"></i>
                            <span class="align-middle">Add new</span>
                        </label>
                        <input type="text" class="form-control w-px-250 kanban-add-board-input mb-4 d-none"
                            placeholder="Add Board Title" id="kanban-add-board-input" required name="title">
                        <div class="mb-4 kanban-add-board-input d-none">
                            <button type="submit" class="btn btn-primary btn-sm me-3">Add</button>
                            <button type="button"
                                class="btn btn-label-secondary btn-sm kanban-add-board-cancel-btn">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Kanban Wrapper -->
            <div class="kanban-wrapper">
                {{-- <div class="kanban-container">
                    @foreach ($boards as $b)
                        <div data-id="{{ $b->id }}" data-order="{{ $loop->iteration }}" class="kanban-board"
                            style="width: 250px; margin-left: 12px; margin-right: 12px;">
                            <header class="kanban-board-header">
                                <div class="kanban-title-board">{{ $b->title }}</div><button
                                    class="kanban-title-button btn btn-default">+ Add New Item</button>
                            </header>
                            <main class="kanban-drag">
                                @foreach ($b->items as $i)
                                    <div class="kanban-item" data-eid="2" data-comments="{{ $b->comments }}"
                                        data-badge-text="{{ $i->badge->name }}" data-badge="primary"
                                        data-due-date="{{ $i->due_date }}" data-attachments="{{ $i->attachments }}"
                                        data-assigned="{{ implode(',',$i->members->map(function ($member) { return $member->account->img;})->toArray(),)}}"
                                        data-members="{{ implode(',',$i->members->map(function ($member) { return $member->account->name;})->toArray(),)}}">
                                        <div class="d-flex justify-content-between flex-wrap align-items-center mb-2">
                                            <div class="item-badges">
                                                <div class="badge bg-label-{{ $i->badge->color }}">{{ $i->badge->name }}</div>
                                            </div>
                                            <div class="dropdown kanban-tasks-item-dropdown"><i
                                                    class="dropdown-toggle bx bx-dots-vertical-rounded"
                                                    id="kanban-tasks-item-dropdown" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"></i>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="kanban-tasks-item-dropdown"><a
                                                        class="dropdown-item" href="javascript:void(0)">Copy task
                                                        link</a><a class="dropdown-item"
                                                        href="javascript:void(0)">Duplicate task</a><a
                                                        class="dropdown-item delete-task"
                                                        href="javascript:void(0)">Delete</a>
                                                </div>
                                            </div>
                                        </div><span class="kanban-text">{{ $i->title }}</span>
                                        <div class="d-flex justify-content-between align-items-center flex-wrap mt-2">
                                            <div class="d-flex"> <span class="d-flex align-items-center me-2"><i
                                                        class="bx bx-paperclip me-1"></i><span
                                                        class="attachments">{{ $i->attachments }}</span></span> <span
                                                    class="d-flex align-items-center ms-2"><i
                                                        class="bx bx-chat me-1"></i><span>
                                                        {{ $i->comments }}</span></span></div>
                                            <div class="avatar-group d-flex align-items-center assigned-avatar">
                                                @foreach ($i->members as $i)
                                                <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" aria-label="{{ $i->account->name }}"
                                                    data-bs-original-title="{{ $i->account->name }}"><img
                                                        src="assets/img/avatars/{{ $i->account->img }}" alt="Avatar"
                                                        class="rounded-circle  pull-up"></div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </main>
                            <footer></footer>
                        </div>
                    @endforeach
                </div> --}}
            </div>

            <!-- Edit Task/Task & Activities -->
            <div class="offcanvas offcanvas-end kanban-update-item-sidebar">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title">Edit Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0">
                    <div class="nav-align-top">
                        <ul class="nav nav-tabs mb-6 rounded-0">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-update">
                                    <i class="bx bx-edit bx-sm me-1_5"></i>
                                    <span class="align-middle">Edit</span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-activity">
                                    <i class="bx bx-bar-chart bx-sm me-1_5"></i>
                                    <span class="align-middle">Activity</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content p-0">
                        <!-- Update item/tasks -->
                        <div class="tab-pane fade show active" id="tab-update" role="tabpanel">
                            {{-- add form --}}
                            <form method="POST" action="">
                                @csrf
                                <div class="mb-8 mt-2">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" id="title" class="form-control"
                                        placeholder="Enter Title" name="name">
                                </div>
                                <div class="mb-8">
                                    <label class="form-label" for="due-date">Due Date</label>
                                    <input type="text" id="due-date" class="form-control"
                                        placeholder="Enter Due Date" name="due_date">
                                </div>
                                <div class="mb-8">
                                    <label class="form-label" for="label">Label</label>
                                    <select class="select2 select2-label form-select" id="label" name="label">
                                        @foreach ($badges as $b)
                                            <option data-color="bg-label-{{ $b->color }}"
                                                value="{{ $b->name }}">{{ $b->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="mb-6">
                                    <label class="form-label">Assigned</label>
                                    <div class="assigned d-flex flex-wrap"></div>
                                </div>
                                <div class="mb-6">
                                    <label class="form-label" for="attachments">Attachments</label>
                                    <div>
                                        <input type="file" class="form-control" id="attachments">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label class="form-label">Comment</label>
                                    <div class="comment-editor border-bottom-0"></div>
                                    <div class="d-flex justify-content-end">
                                        <div class="comment-toolbar">
                                            <span class="ql-formats me-0">
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex flex-wrap">
                                        <button type="submit" class="btn btn-primary me-4"
                                            data-bs-dismiss="offcanvas">
                                            Update
                                        </button>
                                        <button type="button" class="btn btn-label-danger"
                                            data-bs-dismiss="offcanvas">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Activities -->
                        <div class="tab-pane fade text-heading" id="tab-activity" role="tabpanel">
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <span class="avatar-initial bg-label-success rounded-circle">HJ</span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Jordan</span> Left the board.
                                    </p>
                                    <small class="text-muted">Today 11:00 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Dianna</span> mentioned
                                        <span class="text-primary">@bruce</span> in
                                        a comment.
                                    </p>
                                    <small class="text-muted">Today 10:20 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <img src="../../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Martian</span> added moved
                                        Charts & Maps task to the done board.
                                    </p>
                                    <small class="text-muted">Today 10:00 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Barry</span> Commented on App
                                        review task.
                                    </p>
                                    <small class="text-muted">Today 8:32 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <span class="avatar-initial bg-label-dark rounded-circle">BW</span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Bruce</span> was assigned
                                        task of code review.
                                    </p>
                                    <small class="text-muted">Today 8:30 PM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <span class="avatar-initial bg-label-danger rounded-circle">CK</span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Clark</span> assigned task UX
                                        Research to
                                        <span class="text-primary">@martian</span>
                                    </p>
                                    <small class="text-muted">Today 8:00 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Ray</span> Added moved
                                        <span>Forms & Tables</span> task
                                        from in progress to done.
                                    </p>
                                    <small class="text-muted">Today 7:45 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Barry</span> Complete all the
                                        tasks assigned to him.
                                    </p>
                                    <small class="text-muted">Today 7:17 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <span class="avatar-initial bg-label-success rounded-circle">HJ</span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Jordan</span> added task to
                                        update new images.
                                    </p>
                                    <small class="text-muted">Today 7:00 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Dianna</span> moved task
                                        <span>FAQ UX</span> from in
                                        progress to done board.
                                    </p>
                                    <small class="text-muted">Today 7:00 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <span class="avatar-initial bg-label-danger rounded-circle">CK</span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Clark</span> added new board
                                        with name <span>Done</span>.
                                    </p>
                                    <small class="text-muted">Yesterday 3:00 PM</small>
                                </div>
                            </div>
                            <div class="media d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <span class="avatar-initial bg-label-dark rounded-circle">BW</span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Bruce</span> added new task
                                        in progress board.
                                    </p>
                                    <small class="text-muted">Yesterday 12:00 PM</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot:js>
        <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/jkanban/jkanban.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
        <script src="{{ asset('assets/js/app-kanban.js') }}"></script>
    </x-slot:js>
</x-app>

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();

        Email::create($input);

        return back()->with('success', 'your email has been sent');
    }

    public function delete(Request $request)
    {
        $id = $request['id'];
        $email = Email::findOrFail($id);

        // Delete the email
        $email->delete();

        return back();
    }

    public function readed(Request $request)
    {
        $emailId = $request['id'];
        $email = Email::find($emailId);

        $email->update([
            'is_read' => 'true'
        ]);

        return back();
    }
    public function unreaded(Request $request)
    {
        $emailId = $request['id'];
        $email = Email::find($emailId);

        $email->update([
            'is_read' => 'false'
        ]);

        return back();
    }
    public function spam(Request $request)
    {
        $emailId = $request['id'];
        $email = Email::find($emailId);

        $email->update([
            // 'is_spam' => 'true'
            'is_spam' => $email->is_spam == 'true' ? 'false' : 'true'
        ]);

        return back();
    }

    public function trash(Request $request)
    {
        $emailId = $request['id'];
        $email = Email::find($emailId);

        $email->update([
            // 'is_trash' => 'true'
            'is_trash' => $email->is_trash == 'true' ? 'false' : 'true'
        ]);

        return back();
    }

    public function draft(Request $request)
    {
        $emailId = $request['id'];
        $email = Email::find($emailId);

        $email->update([
            'is_draft' => $email->is_draft == 'true' ? 'false' : 'true'
        ]);

        return back();
    }

    public function star(Request $request)
    {
        $emailId = $request['id'];
        $email = Email::find($emailId);

        $email->update([
            'is_stared' => $email->is_stared == 'true' ? 'false' : 'true'
        ]);

        return back();
    }
}

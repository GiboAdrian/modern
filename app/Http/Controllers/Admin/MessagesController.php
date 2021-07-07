<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Message;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = Message::all();
        return view('admin.messages.index', ['messages' => $messages]);
    }

    public function delete(Request $request, $messageId)
    {

        $message = Message::find($messageId);
        $message->delete();

        return redirect()->back();
    }
}

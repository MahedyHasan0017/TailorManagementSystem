<?php

namespace App\Http\Controllers\MessageSending;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendingMessageController extends Controller
{
    public function sending_message_user()
    {
        return view('admin_vendor_employee.sending_message.sending_message');
    }
}
<?php

namespace App\Http\Controllers\MessageSending;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendingMessageListController extends Controller
{
    public function sending_message_list()
    {
        return view('admin_vendor_employee.sending_message.sending_message_list');
    }
}
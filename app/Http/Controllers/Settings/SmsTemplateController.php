<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;

class SmsTemplateController extends Controller
{
    public function sms_template()
    {
        return view('admin_vendor_employee.settings.sms_template');
    }
}

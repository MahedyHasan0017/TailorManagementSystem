<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;

class DressWagesController extends Controller
{
    public function dress_wages()
    {
        return view('admin_vendor_employee.settings.dress_wages');
    }
}
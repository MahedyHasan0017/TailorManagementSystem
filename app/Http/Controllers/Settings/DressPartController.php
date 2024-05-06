<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;

class DressPartController extends Controller
{
    public function dress_part()
    {
        return view('admin_vendor_employee.settings.dress_part');
    }
}
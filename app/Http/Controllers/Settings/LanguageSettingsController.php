<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;

class LanguageSettingsController extends Controller
{
    public function language_setting()
    {
        return view('admin_vendor_employee.settings.language_setting');
    }
}

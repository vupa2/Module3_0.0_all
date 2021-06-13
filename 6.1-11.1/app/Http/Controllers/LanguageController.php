<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function change($language)
    {
        if (!in_array($language, ['en', 'vi'])) {
            abort(400);
        }

        session()->put('language', $language);
        return back();
    }
}

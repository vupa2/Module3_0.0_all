<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JqueryAjaxController extends Controller
{
    public function jqueryIntro()
    {
        return view('jquery-ajax.jquery.intro');
    }

    public function jqueryUI()
    {
        return view('jquery-ajax.jquery.UI');
    }

    public function htmlDOM()
    {
        return view('jquery-ajax.jquery.htmlDOM');
    }

    public function weather()
    {
        return view('jquery-ajax.ajax.weather');
    }

    public function news()
    {
        return view('jquery-ajax.ajax.news');
    }
}

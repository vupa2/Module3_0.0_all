<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculate(Request $request)
    {
        if (empty($request->result)) {
            return view('index');
        }

        $result = eval("return $request->result;");

        return view('index', compact('result'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function questionnaire()
    {
        return view('questionnaire');
    }

    public function questionnairePost(Request $request)
    {
        dd($request->all());
    }

    public function report()
    {
        return view('report');
    }
}

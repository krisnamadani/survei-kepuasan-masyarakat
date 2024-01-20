<?php

namespace App\Http\Controllers;

use App\Respondent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        Respondent::create($request->all());
        Session::put('sent', 1);
        
        return redirect()->route('questionnaire');
    }

    public function report()
    {
        $reports = \App\Report::orderBy('created_at', 'desc')->get();

        return view('report', compact('reports'));
    }
}

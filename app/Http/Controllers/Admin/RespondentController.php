<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RespondentController extends Controller
{
    public function index()
    {
        $respondents = \App\Respondent::all();

        return view('admin.respondent', compact('respondents'));
    }
}

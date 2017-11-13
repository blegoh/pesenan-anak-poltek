<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class AppController extends Controller
{

    /**
     * AppController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        if ($request->has('id')) {
            $question = Question::find($request->id);
        } else {
            $question = Question::first();
        }
        $yes = (is_null($question->if_yes))?"/res?val=".$question->conclusion_yes:"/app?id=".$question->if_yes;
        $no = (is_null($question->if_no))?"/res?val=".$question->conclusion_no:"/app?id=".$question->if_no;
        return view('app.index', compact('question','yes','no'));
    }

    public function result(Request $request)
    {
        return view('app.result');
    }
}

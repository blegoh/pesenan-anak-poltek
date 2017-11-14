<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\Resource;
use App\Models\Question;
use Illuminate\Http\Request;
use Datatables;

class QuestionController extends Controller
{

    use Resource;

    private $model = Question::class;
    private $view = 'admin.question';
    private $route = 'question';

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::all();
        return view('admin.question.create',compact('questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);
        $questions = Question::all();
        return view('admin.question.edit',compact('question','questions'));
    }

}

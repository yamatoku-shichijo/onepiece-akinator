<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question = new Question;
        
        // クエスチョン作成ビューを表示
        return view('quizzes.question' , [
            'question' => $question,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if(isset($choice))
        // save()をいれる
        // $question = new Question;
        // $question->content = $request->content;
        // $question->save();
        $content = $request->content;
        $request->session()->put('content', $content);
        return view('quizzes.choice', ['content' => $content]); 
    }
        // store
        // $content = $request->session()->get('content');
        // $request->session()->forget('content);
        // $question=new Question;
        // $question->content = $content;
        // $question->save();
        // $choice=new Choice;
        // foreach($content as $request->content)
        // $choice->content = $content;
        // $choice->question_id=$question->id;

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

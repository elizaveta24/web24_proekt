<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecturer;
use App\Course;
use App\Lesson;
use App\User;
use Auth;
use App\Review;
use App\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments= Comment :: all();
		$lecturers= Lecturer::all();

		return view('teachers.show',compact ('comments','lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $lecturers= Lecturer::find($id);
        return view('teachers.show',compact ('lecturers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
		'title'=>['required', 'string', 'max:255','min:1'],
		'lecturer'=>['nullable', 'integer', 'max:100'],

		]);
		
		//dd($request->all());
		$comments = new Comment ([
		'title'=>$request->get('title'),
		'lecturer'=>$request->get('lecturer_id'),
		]);
		$comments->user_name=Auth::user()->name;
		$comments->user_id = Auth::user()->id;
		$comments->lecturer_id = $request->lecturer_id;
		
		
		$comments->save();
		//return redirect('/teacher')->with('success','Отзыв успешно добавлен');
		//return redirect()->route('teacherShow', $comments)->with('success','Отзыв успешно добавлен');
		return redirect()->back()->with('success','Отзыв успешно добавлен');
    }

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
        $comments = Comment::find($id);
		return view('comments.edit',compact ('comments'));
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
        $request->validate([
		'title'=>['required', 'string', 'max:255','min:1'],

		]);
		$comments = Comment::find($id);
		$comments ->title = $request->get('title');

		$comments ->save();
		return redirect('/teacher')->with('success','Отзыв успешно отредактирован');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $comments = Comment::find($id);
	  
        $comments->delete();
	  return redirect()->back()->with('success','Отзыв успешно удален');
    }
}

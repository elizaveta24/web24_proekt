<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecturer;
use App\Course;
use App\Lesson;
use App\User;
class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course :: all();
		$lessons = Lesson :: all();

		return view('lessons.index',compact ('courses','lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lessons.create');
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
		'title'=>['required', 'string', 'max:255'],
		'time'=>['required', 'integer', 'max:60','min:30'],
		'level'=>['required', 'string', 'max:255'],

		]);
		$lessons = new Lesson ([
		'title'=>$request->get('title'),
		'time'=>$request->get('time'),
		'level'=>$request->get('level'),

		]);
		$lessons->save();
		return redirect('/lesson')->with('success','Урок успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $lessons = Lesson::find($id);
	   
       return view('lessons.show',compact ('lessons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $lessons = Lesson::find($id);
		return view('lessons.edit',compact ('lessons'));
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
		'title'=>['required', 'string', 'max:255'],
		'time'=>['required', 'integer', 'max:60','min:30'],
		'level'=>['required', 'string', 'max:255'],

		]);
		$lessons = Lesson::find($id);
		$lessons ->title = $request->get('title');
		$lessons ->time = $request->get('time');
		$lessons ->level = $request->get('level');

		$lessons ->save();
		return redirect('/lesson')->with('success','Урок успешно отредактирован');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lessons = Lesson::find($id);
	   $lessons->delete();
	   return redirect('/lesson')->with('success','Урок удален');
    }
}

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
		$lessons = Lesson :: paginate(3);

		return view('lessons.index',compact ('courses','lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
	
    {   $courses = Course :: all();
        return view('lessons.create',compact('courses'));
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
		'course_id'=>['required', 'integer', 'max:100'],
		'info'=>['nullable', 'string', 'max:255'],

		]);
		$lessons = new Lesson ([
		'title'=>$request->get('title'),
		'time'=>$request->get('time'),
		'level'=>$request->get('level'),
		'course_id'=>$request->get('course_id'),
		'info'=>$request->get('info'),

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
    {    $courses = Course :: all();
         $lessons = Lesson::find($id);
		 
		return view('lessons.edit',compact ('lessons','courses'));
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
		'course_id'=>['required', 'integer', 'max:20','min:1'],
		'info'=>['nullable', 'string', 'max:255'],

		]);
		$lessons = Lesson::find($id);
		$lessons ->title = $request->get('title');
		$lessons ->time = $request->get('time');
		$lessons ->level = $request->get('level');
		$lessons ->course_id = $request->get('course_id');
		$lessons ->info = $request->get('info');
	
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
       $lesson = Lesson::find($id);
	   $lesson->delete();
	   return redirect('/lesson')->with('success','Урок удален');
    }
}

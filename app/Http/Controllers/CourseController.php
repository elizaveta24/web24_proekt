<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecturer;
use App\Course;
use App\Lesson;
use App\User;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
		$courses = Course :: paginate(3);

		return view('courses.index',compact ('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
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
		'cost'=>['required', 'integer', 'max:10000','min:1'],
		'level'=>['required', 'string', 'max:255'],
		'lecturer_id'=>['required', 'integer', 'max:20','min:1'],
        'info'=>['nullable', 'string', 'max:255'],
		]);
		$courses = new Course ([
		'title'=>$request->get('title'),
		'cost'=>$request->get('cost'),
		'level'=>$request->get('level'),
		'lecturer_id'=>$request->get('lecturer_id'),
        'info'=>$request->get('info'),
		]);
		$courses->save();
		return redirect('/course')->with('success','Курс успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = Course::find($id);
	   
       return view('courses.show',compact ('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $courses = Course::find($id);
		return view('courses.edit',compact ('courses'));
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
		'cost'=>['required', 'integer', 'max:10000','min:1'],
		'level'=>['required', 'string', 'max:255'],
		'lecturer_id'=>['required', 'integer', 'max:20','min:1'],
		'info'=>['nullable', 'string', 'max:255'],

		]);
		$courses = Course::find($id);
		$courses ->title = $request->get('title');
		$courses ->cost = $request->get('cost');
		$courses ->level = $request->get('level');
		$courses ->lecturer_id = $request->get('lecturer_id');
        $courses ->info = $request->get('info');
		$courses ->save();
		return redirect('/course')->with('success','Курс успешно отредактирован');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
		if (!empty($course->lessons)){
			$course->lessons()->delete();
		}
		$course->delete();
		return redirect('/course')->with('success','Курс удален');
    }
}

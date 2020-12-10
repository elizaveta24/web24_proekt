<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecturer;
use App\Course;
use App\Lesson;
use App\User;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
		$lecturers = Lecturer :: all();
		$courses = Course :: all();

		return view('teachers.index',compact ('courses','lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
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
		'name'=>['required', 'string', 'max:255'],
		'age'=>['required', 'integer', 'max:100','min:0'],
		'education'=>['required', 'string', 'max:255'],
		'practice'=>['required', 'integer', 'max:100','min:0'],
		]);
		$lecturers = new Lecturer ([
		'name'=>$request->get('name'),
		'age'=>$request->get('age'),
		'education'=>$request->get('education'),
		'practice'=>$request->get('practice')
		]);
		$lecturers->save();
		return redirect('/teacher')->with('success','Преподаватель успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
	   $lecturers = Lecturer::find($id);
	   
       return view('teachers.show',compact ('lecturers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lecturers = Lecturer::find($id);
		return view('teachers.edit',compact ('lecturers'));
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
		'name'=>['required', 'string', 'max:255'],
		'age'=>['required', 'integer', 'max:100','min:0'],
		'education'=>['required', 'string', 'max:255'],
		'practice'=>['required', 'integer', 'max:100','min:0'],
		]);
		$lecturers = Lecturer::find($id);
		$lecturers->name = $request->get('name');
		$lecturers->age = $request->get('age');
		$lecturers->education = $request->get('education');
		$lecturers->practice =$request->get('practice');
		$lecturers->save();
		return redirect('/teacher')->with('success','Преподаватель успешно отредактирован');
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $lecturers = Lecturer::find($id);
	   $lecturers->delete();
	   return redirect('/teacher')->with('success','Преподаватель  удален');
    }
}
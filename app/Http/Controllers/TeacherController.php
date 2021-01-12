<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecturer;
use App\Course;
use App\Lesson;
use App\User;
use Auth;
use App\Comment;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
	
    { 
        
		$lecturers = Lecturer :: paginate(2);
		$courses = Course :: all();
		$comments= Comment :: all();

		return view('teachers.index',compact ('courses','lecturers','comments'));
   
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
		'info'=>[ 'nullable','string', 'max:255'],
		]);
		$lecturers = new Lecturer ([
		'name'=>$request->get('name'),
		'age'=>$request->get('age'),
		'education'=>$request->get('education'),
		'practice'=>$request->get('practice'),
		'info'=>$request->get('info')
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
	   
	   $comments= Comment :: paginate(2);
	   
       return view('teachers.show',compact ('lecturers','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		if (Auth::user()->type = 'admin') {
        $lecturers = Lecturer::find($id);
		return view('teachers.edit',compact ('lecturers'));
		}
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
		'info'=>['nullable','string', 'max:255'],
		]);
		$lecturers = Lecturer::find($id);
		$lecturers->name = $request->get('name');
		$lecturers->age = $request->get('age');
		$lecturers->education = $request->get('education');
		$lecturers->practice =$request->get('practice');
		$lecturers->info =$request->get('info');
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
        $lecturer = Lecturer::find($id);
		
		foreach ($lecturer->courses as $course){
			if (!empty($course->lessons)){    //Я проверяю, есть ли у препода уроки, если да, то чищу
				$course->lessons()->delete();
			}
		}
		
		$lecturer->courses()->delete();
		$lecturer->delete();
		return redirect('/teacher')->with('success','Преподаватель  удален');
    }
}

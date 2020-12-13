<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Lecturer;
use App\Course;
use App\Lesson;
use App\User;
use Auth;
use App\course_user;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course :: all();
		$users = Auth::user();
		
		
		
	

		return view('users.index',compact ('users','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
       $users = User::find($id);
		return view('users.edit',compact ('users'));
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
		'email'=>['required', 'string', 'max:255'],
		'age'=>['required', 'integer', 'max:100','min:0'],
		'level'=>['required', 'string', 'max:255'],
		'gender'=>['required', 'string', 'max:255'],

		]);
		$users = User::find($id);
		$users->name = $request->get('name');
		$users->email =$request->get('email');
		$users->age = $request->get('age');
		$users->level = $request->get('level');
		$users->gender =$request->get('gender');
		$users->save();
		return redirect('/user')->with('success','Данные успешно измененны');
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

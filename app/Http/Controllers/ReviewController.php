<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecturer;
use App\Course;
use App\Lesson;
use App\User;
use Auth;
use App\Review;
class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      	$reviews= Review :: paginate(2);

		return view('reviews.index',compact ('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('reviews.create');
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

		]);
		$reviews = new Review ([
		'title'=>$request->get('title'),
		]);
		$reviews->user_name=Auth::user()->name;
		$reviews->save();
		return redirect('/review')->with('success','Отзыв успешно добавлен');
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
         $reviews = Review::find($id);
		return view('reviews.edit',compact ('reviews'));
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
		$reviews = Review::find($id);
		$reviews ->title = $request->get('title');

		$reviews ->save();
		return redirect('/review')->with('success','Отзыв успешно отредактирован');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $reviews = Review::find($id);
	   $reviews->delete();
	   return redirect('/review')->with('success','Отзыв удален');
    }
}

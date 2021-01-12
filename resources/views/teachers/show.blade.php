<!doctype html>
<html lang="ru">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Посмотреть преподавателя</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

@extends('layouts.app')

@section('content')
<div class="container marketing">
 <h5 class="card-title">Информация о преподавателе</h5>
<div class="card col-md-9">
    <img class="card-img-top-1" src="{{$lecturers->picture?? ""}}" alt="Card image cap" >

    <div class="card-body">
	
      <h5 class="card-title">Информация о преподавателе</h5>
      <p class="card-text">Имя:{{$lecturers->name?? ""}}</p>
	  <p class="card-text">Возраст:{{$lecturers->age?? ""}}</p>
	  <p class="card-text">Образование:{{$lecturers->education?? ""}}</p>
	  <p class="card-text">Опыт работы:{{$lecturers->practice?? ""}} </p>
    <p class="card-text">Дополнительная информация:{{$lecturers->info?? ""}} </p>
	<a href="{{ route('teacher.index')   }} " class="btn btn-success">назад</a>
    </div>
	</div>
<br>
		   @If (Auth::user())
		<h2>Написать отзыв</h2>
    <form method="POST" action="{{ route('comment.store') }}" >
     @csrf
      
		  <div class="form-group">
            <label for="comment-title">Ваш отзыв</label>
		
			  <input type="hidden" name="lecturer" value="{{$lecturers->id}}">
			
            <input type="text" name="title" 
                   value="{{ old('title') }}" class="form-control" id="comment-title">
        </div>

        <button type="submit" class="btn btn-success">Добавить отзыв</button>
    </form>
 @endif
<br>

 @foreach ($comments as $comment)
<br>
 <div class="card col-md-9">
	   <div class="album py-5 bg-light" background="https://klike.net/uploads/posts/2020-04/1586763588_29.jpg">
	   <h5 class="card-text">{{$comment->created_at?? ""}}</h5>
 <hr>
	    <h5 class="card-title">Отзыв от:{{$comment->user_name?? ""}}</h5>
      
    <div class="card-body">
      <hr>
      <h5 class="card-text">{{$comment->title?? ""}}</h5>
	
 <hr>
@If (Auth::user())
	 
		
	 		   @If (Auth::user()->type == 'admin'|| Auth::user()->type == 'manager')
			    <td class="table-buttons">
        <a href="{{route('comment.edit',$comment)}} " class="btn btn-success">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
        </a>
		 
			
   
     
@If (Auth::user()->type == 'admin')
			
        <form method="POST" action="{{route('comment.destroy',$comment)}} ">
         @csrf
         @method('DELETE')
            <button type="submit" class="btn btn-danger">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>
            </button>
        </form>
      </td>
	  

	  @endif
	  @endif
	   @endif
    </div>
    </div>
	</div>
  @endforeach
<br>
{{$comments->links()}}	
@endsection


</body>
</html>
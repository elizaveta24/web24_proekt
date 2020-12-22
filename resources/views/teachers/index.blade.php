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
    <title>Преподаватели</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->

    <!-- Favicons -->



    <style>
      .bd-placeholder-img {
		  height: 500px;
          width: 100%;
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	   .div-color {
    background: #DCDCDC; /* Цвет текста */

   }
   .card-img-top-1 {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    width: 50%;
}
.table-buttons {
	text-align:right;
}
.table-buttons form {
	display:contents;
}

 
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
	 <body>
@extends('layouts.app')

@section('content')
<main role="main">
 @if(session()->get('success'))
    <div class="alert alert-success mt-3">
      {{ session()->get('success') }}  
    </div>
@endif
<div class="container marketing">
	<div class="album py-5 bg-light">
   <h1 align="center"> <a name="lesson"></a> Наши Преподаватели </h1>
   </div>
   
   <hr>
   <br>

    <!-- Three columns of text below the carousel -->
    <div class="row">
	
      <div class="col-lg-4">
        <img src="https://cdn-englishdom.gcdn.co/dsd/img/medal-border--green.svg" width="110" height="110" alt="messages" class="img-lesson-in-ed js-lazy-image">
	
        <p>Имеют педагогическое образование и многолетний опыт работы</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="https://cdn-englishdom.gcdn.co/dsd/img/doc--green.svg" width="110" height="110" alt="time" class="img-lesson-in-ed js-lazy-image">
        
        <p>Проходят многоэтапный отбор</p>
      </div><!-- /.col-lg-4 -->

	  <div class="col-lg-4">
      <img src="https://cdn-englishdom.gcdn.co/dsd/img/graph-icon--green.svg" width="110" height="110" alt="ideas" class="img-lesson-in-ed js-lazy-image">
        
        <p>Проходят регулярные тренинги и курсы повышения квалификации</p>
      </div>
    </div>
	@If (Auth::user())
			 		@If (Auth::user()->type == 'admin'|| Auth::user()->type == 'manager')
        <h1 align="center">  Добавить преподавателя</h1> 
	<a href="{{route('teacher.create')}} " class="btn btn-primary">
 Добавить
        </a>
		          @endif
				     @endif
    <hr class="featurette-divider">

 @foreach ($lecturers as $lecturer)
<br>
     
       <div class="card col-md-9">
	   <div class="album py-5 bg-light">
    <img class="card-img-top-1" src="{{$lecturer->picture?? ""}}" alt="Card image cap" >

    <div class="card-body">
	
      <h5 class="card-title">Информация о преподавателе</h5>
	  <p class="card-text">Номер преподавателя:{{$lecturer->id?? ""}}</p>
      <p class="card-text">Имя:{{$lecturer->name?? ""}}</p>
	  <p class="card-text">Возраст:{{$lecturer->age?? ""}}</p>
	  <p class="card-text">Образование:{{$lecturer->education?? ""}}</p>
	  <p class="card-text">Опыт работы:{{$lecturer->practice?? ""}}</p>
	
    </div>
	
	
	@If (Auth::user())
   
	  <td class="table-buttons">

		<a href="{{route('teacher.show',$lecturer)}} " class="btn btn-success">
         <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>
        </a>
		 		@If (Auth::user()->type == 'admin'|| Auth::user()->type == 'manager')
        <a href="{{route('teacher.edit',$lecturer)}} " class="btn btn-success">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
        </a>

		@If (Auth::user()->type == 'admin')
        <form method="POST" action="{{route('teacher.destroy',$lecturer)}} ">
         @csrf
         @method('DELETE')
            <button type="submit" class="btn btn-danger">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>
            </button>
        </form>
      @endif
	  @endif
      @endif
      </td>
  </div>
  </div>

	   @endforeach
	   <br>
  {{$lecturers->links()}}	
	  @endsection

  <!-- FOOTER -->
 
</main>

</div>
</body>
</html>
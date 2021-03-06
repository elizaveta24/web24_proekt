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
    
	 <!-- Bootstrap шаблон... -->


 <div class = "container mt-3">
 @if(session()->get('success'))
    <div class="alert alert-success mt-3">
      {{ session()->get('success') }}  
    </div>
@endif

  <div class="container marketing">
  <div class="album py-5 bg-light">
 
   
	
  <h1 align="center"> <a name="lesson"></a> Отзывы о нас</h1>
  </div>

<br>
<br>
@If (Auth::user())
		   
	      <a href="{{route('review.create')}} " class="btn btn-primary">
      Добавить отзыв
</a>
@endif
<br>

 @foreach ($reviews as $review)
<br>
 <div class="card col-md-9">
	   <div class="album py-5 bg-light" background="https://klike.net/uploads/posts/2020-04/1586763588_29.jpg">
	   <h5 class="card-text">{{$review->created_at?? ""}}</h5>
 <hr>
	    <h5 class="card-title">Отзыв от:{{$review->user_name?? ""}}</h5>
      
    <div class="card-body">
      <hr>
      <h5 class="card-text">{{$review->title?? ""}}</h5>
 <hr>
	@If (Auth::user())
	 
		   @If (Auth::user()->type == 'admin'|| Auth::user()->type == 'manager')
			    <td class="table-buttons">
        <a href="{{route('review.edit',$review)}} " class="btn btn-success">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
        </a>
   
        </a>
		@If (Auth::user()->type == 'admin')
			
        <form method="POST" action="{{route('review.destroy',$review)}} ">
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
{{$reviews->links()}}	
@endsection


</body>
</html>
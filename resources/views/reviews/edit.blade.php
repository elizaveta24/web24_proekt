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
    <title>Редактировать преподавателя </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
  </head>
  <body>
@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-lg-4 mx-auto">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
	<h2>Редактировать отзыв</h2>
    <form method="POST" action="{{route('review.update',$reviews)}} ">
     @csrf
	 @method('PATCH')
        <div class="form-group">
            <label for="review-title">Отзыв</label>
            <input type="text" name="title" 
                   value="{{ $reviews->title}}" class="form-control" id="reviews-title">
        </div>
        <button type="submit" class="btn btn-success">Редактировать отзыв</button>
    </form>
</div>
</div>

@endsection


</body>
</html>
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
    <title>Посмотреть урок</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

@extends('layouts.app')

@section('content')
<div class="container marketing">
 <h5 class="card-title">Информация об уроке</h5>
<div class="card col-md-9">


    <div class="card-body">
	
      <h5 class="card-title">{{$lessons->title?? ""}}</h5>
	  <p class="card-text">Время:{{$lessons->time?? ""}} минут</p>
	  <p class="card-text">Уровень:{{$lessons->level?? ""}}</p>
	  <p class="card-text">Дополнительная информация:{{$lessons->info?? ""}}</p>


 
	<a href="{{ route('lesson.index')   }} " class="btn btn-success">назад</a>
    </div>
	</div>

	</div>
@endsection
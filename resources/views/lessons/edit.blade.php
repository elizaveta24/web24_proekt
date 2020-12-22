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
    <title>Добавить урок</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

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
	<h2>Отредактировать урок</h2>
    <form method="POST" action="{{route('lesson.update',$lessons)}}">
     @csrf
	 @method('PATCH')
        <div class="form-group">
            <label for="lesson-title">Название</label>
            <input type="text" name="title" 
                   value="{{ $lessons->title}}" class="form-control" id="lesson-title">
        </div>
		<div class="form-group">
            <label for="course-time">Время</label>
            <input type="text" name="time" 
                   value="{{ $lessons->time}}" class="form-control" id="lesson-time">
        </div>
       
        <div class="form-group">
            <label for="lesson-level">Уровень</label>
            <input type="text" name="level" 
                   value="{{ $lessons->level}}" class="form-control" id="lesson-level">
        </div>
		  <div class="form-group">
            <label for="lesson-course">Номер курса</label>
            <input type="text" name="course_id" 
                   value="{{$lessons->course_id}}" class="form-control" id="lesson-course">
        </div>
		<div class="form-group">
            <label for="lesson-info">Дополнительная информация</label>
            <input type="text" name="info" 
                   value="{{ $lessons->info}}" class="form-control" id="lesson-info">
        </div>
		

        <button type="submit" class="btn btn-success">Отредактировать урок</button>
    </form>
</div>
</div>
@endsection
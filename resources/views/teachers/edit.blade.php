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
	<h2>Редактировать преподавателя</h2>
    <form method="POST" action="{{route('teacher.update',$lecturers)}} ">
     @csrf
	 @method('PATCH')
        <div class="form-group">
            <label for="teacher-name">Имя</label>
            <input type="text" name="name" 
                   value="{{ $lecturers->name}}" class="form-control" id="teacher-name">
        </div>
		<div class="form-group">
            <label for="teacher-age">Возраст</label>
            <input type="text" name="age" 
                   value="{{ $lecturers->age}}" class="form-control" id="teacher-age">
        </div>
       
        <div class="form-group">
            <label for="teacher-education">Образование</label>
            <input type="text" name="education" 
                   value="{{ $lecturers->education }}" class="form-control" id="teacher-education">
        </div>
		 <div class="form-group">
            <label for="teacher-practice">Опыт работы</label>
            <input type="text" name="practice" 
                   value="{{ $lecturers->practice }}" class="form-control" id="teacher-practice">
        </div>
		<div class="form-group">
            <label for="teacher-info">Дополнительная информация</label>
            <input type="text" name="info" 
                   value="{{ $lecturers->info }}" class="form-control" id="teacher-info">
        </div>
        <button type="submit" class="btn btn-success">Редактировать преподавателя</button>
    </form>
</div>
</div>
@endsection
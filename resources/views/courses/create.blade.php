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
    <title>Добавить курс</title>

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
	<h2>Создание курса</h2>
    <form method="POST" action="{{ route('course.store') }}">
     @csrf
        <div class="form-group">
            <label for="course-title">Название</label>
            <input type="text" name="title" 
                   value="{{ old('title') }}" class="form-control" id="course-title">
        </div>
		<div class="form-group">
            <label for="course-cost">Цена</label>
            <input type="text" name="cost" 
                   value="{{ old('cost') }}" class="form-control" id="course-cost">
        </div>
       
        <div class="form-group">
            <label for="course-level">Уровень</label>
            <input type="text" name="level" 
                   value="{{ old('level') }}" class="form-control" id="course-level">
        </div>

        <button type="submit" class="btn btn-success">Добавить курс</button>
    </form>
</div>
</div>
@endsection
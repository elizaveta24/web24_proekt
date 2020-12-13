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
	<h2>Редактировать профиль</h2>
    <form method="POST" action="{{route('user.update',$users)}} ">
     @csrf
	 @method('PATCH')
        <div class="form-group">
            <label for="user-name">Имя</label>
            <input type="text" name="name" 
                   value="{{ $users->name}}" class="form-control" id="user-name">
        </div>
		 <div class="form-group">
            <label for="user-email">Email</label>
            <input type="text" name="email" 
                   value="{{ $users->email }}" class="form-control" id="user-email">
        </div>
		<div class="form-group">
            <label for="user-age">Возраст</label>
            <input type="text" name="age" 
                   value="{{ $users->age}}" class="form-control" id="user-age">
        </div>
       
        <div class="form-group">
            <label for="user-level">Уровень</label>
            <input type="text" name="level" 
                   value="{{ $users->level }}" class="form-control" id="user-level">
        </div>
		 <div class="form-group">
            <label for="user-gender">Опыт работы</label>
            <input type="text" name="gender" 
                   value="{{ $users->gender }}" class="form-control" id="user-gender">
        </div>
		
        <button type="submit" class="btn btn-success">Редактировать профиль</button>
    </form>
</div>
</div>
@endsection
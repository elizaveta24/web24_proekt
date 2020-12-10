<!doctype html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Курсы </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


 </head>


@extends('layouts.app')
@section('content')


<body>
<br>
<br>
<br>
<br>
<div align="center">
<h2 align="center">Профиль пользователя</h2>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/Man_silhouette.svg/1200px-Man_silhouette.svg.png" alt="Card image cap">
  <div class="card-body">
  @foreach ($users as $user)
    <h5 class="card-title">Данные пользователя</h5>
    <p class="card-text">Имя:{{$user->name?? ""}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Почта:{{$user->email?? ""}}</li>
    <li class="list-group-item">Возраст:{{$user->age?? ""}}</li>
    <li class="list-group-item">Уровень:{{$user->level?? ""}}</li>
	<li class="list-group-item">Пол:{{$user->gender?? ""}}</li>
	@endforeach
</div>
</div>
@endsection
</body>
</html>
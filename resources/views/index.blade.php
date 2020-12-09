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
    <title>Курсы английского языка</title>

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

 
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
	 <body>
@extends('layouts.app')

@section('content')
<main role="main">


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" src="https://palabrus.com/blog/bl-content/uploads/pages/c027632e41773cd94db233b65ad6c2bf/hardest-part-learning-english.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
        <div class="container">
          <div class="carousel-caption text-left">
            
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" src="https://english-club.tv/wp-content/uploads/2020/03/londonCorp-Eng.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
        <div class="container">
          <div class="carousel-caption">
            
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
  <div class="album py-5 bg-light">
 
   
	
  <h1 align="center"> <a name="lesson"></a> Наши уроки </h1>

  </div>

    <!-- Three columns of text below the carousel -->
    <div class="row">
	
      <div class="col-lg-4">
        <img src="https://cdn-englishdom.gcdn.co/dsd/img/page/main/1-on-1.svg" width="115" height="134" alt="messages" class="img-lesson-in-ed js-lazy-image">
		<h2>1 на 1</h2>
        <p>Занятия с преподавателем</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="https://cdn-englishdom.gcdn.co/dsd/img/page/main/time-with-women.svg" width="115" height="134" alt="time" class="img-lesson-in-ed js-lazy-image">
        <h2>50 минут</h2>
        <p>Длительность занятия</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="https://cdn-englishdom.gcdn.co/dsd/img/page/main/calendar-with-man.svg" width="115" height="134" alt="calendar" class="img-lesson-in-ed js-lazy-image">
        <h2>2-3 раза в неделю</h2>
        <p>Рекомендуемая интенсивность</p>
      </div><!-- /.col-lg-4 -->
	  <div class="col-lg-4">
      <img src="https://cdn-englishdom.gcdn.co/dsd/img/page/main/ideas.svg" width="115" height="134" alt="ideas" class="img-lesson-in-ed js-lazy-image">
        <h2>Преподаватель</h2>
        <p>Русскоязычный или носитель языка</p>
      </div>
	  <div class="col-lg-4">
      <img src="https://cdn-englishdom.gcdn.co/dsd/img/page/main/piggy-bank.svg" width="115" height="134" alt="piggy bank" class="img-lesson-in-ed js-lazy-image">
        <h2>Стоимость</h2>
        <p>Оптимальная стоимость уроков</p>
      </div>
	  <div class="col-lg-4">
        <img src="https://cdn-englishdom.gcdn.co/dsd/img/page/main/1-on-1.svg" width="115" height="134" alt="messages" class="img-lesson-in-ed js-lazy-image">
		<h2>Уроки</h2>
        <p>Очень  познавательные и увлекательные</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
	  <hr class="featurette-divider">
	<div class="col-md-12 "  >
	<div class="album py-5 bg-light">
	  <h1> Почему учить английский по Skype эффективно?</h1>
	  </div>
	  </div>
    <hr class="featurette-divider">
    <div class="row featurette div-color" >
	 <div class="col-md-5">
<img src="https://cdn-englishdom.gcdn.co/dsd/img/page/main/laptop-with-man.svg" alt="Индивидуальный график" width="350" height="361" class="img-learn-effectively js-lazy-image">
      </div>
      <div class="col-md-7">
        <h2 class="featurette-heading">Индивидуальная программа <span class="text-muted">Individual program</span></h2>
        <p class="text-learn-effectively">
         <p class="lead">                       Занимайся английским по&nbsp;Скайпу в&nbsp;любом месте и&nbsp;в&nbsp;любое время. Для урока нужен только интернет. Мы&nbsp;подберем идеального преподавателя под твой характер и&nbsp;интересы, составим расписание и&nbsp;интенсивность занятий, а&nbsp;персональный куратор поможет следить за&nbsp;прогрессом, чтобы сделать изучение английского максимально эффективным.</p>
      </div>
    </div>

    <hr class="featurette-divider">

   <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Инновационный подход <span class="text-muted">innovative approach</span></h2>
        <p class="text-learn-effectively">
                                Цифровая платформа полностью решает проблему поиска и&nbsp;покупки учебных материалов. Все необходимое для изучения английского уже есть на&nbsp;нашем сайте. Для закрепления новых знаний после Скайп-уроков и&nbsp;практики разговорной речи, можешь воспользоваться Разговорным Клубом или прокачать свой уровень на&nbsp;Онлайн-тренажере.</p>
      </div>
      <div class="col-md-5">
      <img src="https://cdn-englishdom.gcdn.co/dsd/img/page/main/augmented-reality.svg" alt="Идеальный преподаватель" width="350" height="271" class="img-learn-effectively js-lazy-image">
      </div>
    </div>
     
    

    <hr class="featurette-divider">

    <div class="row featurette div-color"> 
	 <div class="col-md-5">
        <img src="https://cdn-englishdom.gcdn.co/dsd/img/page/main/workspace.svg" alt="Начни говорить" width="325" height="372" class="img-learn-effectively js-lazy-image">
      </div>
      <div class="col-md-7">
        <h2 class="featurette-heading">Идеальная атмосфера <span class="text-muted">Perfect atmosphere</span></h2>
        <p class="text-learn-effectively">
                                Заниматься английским по&nbsp;Скайпу&nbsp;— весело! Наши преподаватели настоящие профессионалы своего дела, интерактивные уроки не&nbsp;дадут тебе заскучать. В&nbsp;отличие от&nbsp;групповых занятий, индивидуальные уроки по&nbsp;Skype помогают быстрее побороть боязнь и&nbsp;стеснение общения на&nbsp;английском языке.</p>
      </div>
    </div>
	<br>
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
    <hr class="featurette-divider">


 @foreach ($lecturers as $lecturer)
<br>
     
       <div class="card col-md-9">
	   <div class="album py-5 bg-light">
    <img class="card-img-top-1" src="{{$lecturer->picture?? ""}}" alt="Card image cap" >

    <div class="card-body">
	
      <h5 class="card-title">Информация о преподавателе</h5>
      <p class="card-text">Имя:{{$lecturer->name?? ""}}</p>
	  <p class="card-text">Возраст:{{$lecturer->age?? ""}}</p>
	  <p class="card-text">Образование:{{$lecturer->education?? ""}}</p>
	  <p class="card-text">Опыт работы:{{$lecturer->practice?? ""}} года</p>
    </div>
  </div>
  </div>

	  @endforeach


    <!-- /END THE FEATURETTES -->

  <!-- /.container -->
<hr>
   <div class="album py-5 bg-light">

      <h1 align="center"> <a name="curs" ></a>Курсы для любого уровня и цели</h1>
	  </div>
<hr>

<div class="album py-5 bg-light">
<div class="row">
	
      <div class="col-lg-4">
        <img src="https://cdn-englishdom.gcdn.co/dsd/img/medal-border--green.svg" width="110" height="110" alt="messages" class="img-lesson-in-ed js-lazy-image">
	
        <p>Приобретешь базовый словарный запас</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="https://cdn-englishdom.gcdn.co/dsd/img/messages.svg" width="110" height="110" alt="time" class="img-lesson-in-ed js-lazy-image">
        
        <p>Преодолеешь языковый барьер</p>
      </div><!-- /.col-lg-4 -->

	  <div class="col-lg-4">
      <img src="https://cdn-englishdom.gcdn.co/dsd/img/doc--green.svg" width="110" height="110" alt="ideas" class="img-lesson-in-ed js-lazy-image">
        
        <p>Приобретешь практические навыки грамматики</p>
      </div>
    </div>

 <table class="table table-striped mt-3">
  <thead>
    <tr>
	
      <th scope="col"></th>
      <th scope="col">Название курса</th>
	   <th scope="col">Цена</th>
	  <th scope="col">Уровень</th>
	  <th scope="col">Преподаватель, который ведет этот курс</th>

    
    </tr>
  </thead>
  <tbody>
  
@foreach ($courses as $course)
    <tr>
	  <th scope="row"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lightning" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z"/>
</svg></th>
      <th scope="row">{{$course->title?? ""}}</th>
      <td class="table-but">{{$course->cost?? ""}}</td>
	  <td class="table-but">{{$course->level?? ""}}</td>
	  <td class="table-but">{{$course->lecturers->name?? ""}}</td>
	  
	 
    </tr>
  @endforeach
  </tbody>
</table>
<h2 align="center"> <a name="curs" ></a>Уроки</h2>
 <table class="table table-striped mt-3">
  <thead>
    <tr>
	

      <th scope="col">Название курса</th>
	  <th scope="col">Название урока</th>
	   <th scope="col">Уровень</th>
	   <th scope="col">Время урока</th>
	  

    
    </tr>
  </thead>
  <tbody>
  
@foreach ($lessons as $lesson)
    <tr>
	  <td class="table-but">{{$lesson->courses->title?? ""}}</td>
      <td class="table-but">{{$lesson->title?? ""}}</td>
	  <td class="table-but">{{$lesson->level?? ""}}</td>
	  <td class="table-but">{{$lesson->time?? ""}} минут</td>
    

	  
	 
    </tr>
  @endforeach
  </tbody>
</table>
</div>
</div>
</div>


@endsection

  <!-- FOOTER -->

</main>

</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

       <title>Hello, world!</title>
    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Профиль</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="registr.php">Регистрация</a></li>
      <li><a class="dropdown-item" href="#">Вход</a></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Кабинет</a>
  </li>
</ul>
    <picture>
  <source srcset="" type="image/svg+xml">
  <img src="https://shwethakrish.com/wp-content/uploads/2020/07/cropped-800px-ESO_-_Milky_Way.jpg" class="img-fluid img-thumbnail" alt="здесь могла быть ваша картинка">
</picture>
  </head>
  <body>
 <div class="container-fluid">
  <div class="row">


<div class="col-3">

<ul class="list-group">  
  <li class="list-group-item"><a class="nav-link" href="#">сентябрь 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">октябрь 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">ноябрь 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">декабрь 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">январь 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">февраль 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">март 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">апрель 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">май 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">июнь 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">июль 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">август 2020</a></li>

</ul>

</div>

    <div class="col">
    <h2>Файв</h2>
<picture><BR>
  <source srcset="" type="image/svg+xml">
  <img src="https://i1.sndcdn.com/artworks-000059188613-lfqot9-large.jpg" class="img-thumbnail" alt="здесь могла быть ваша картинка">
  <p>Everybody get up singing </p>
  <p>1,2,3,4,</p>
<p>Five will make you get down now</p>
<p>Everybody get up singing </p>
  <p>1,2,3,4,</p>
<p>Five will make you get down now</p>
<p></p>
<p>You gots to keep it real</p>
<p>You gots to keep it raw</p>
<p>I’m lyrically blessed so don’t try to ignore</p>
<p>Time for some action</p>
<p>Creeping up your back and</p>
<p>Keep the beat nasty like Janet my reaction</p>
<p>Hard I’m addictive</p>
<p>Better lock your kids in</p>
<p>Coming to your area ya don’t know what you’re missing</p>
<p>Go tell your family</p>
<p>Here comes the enemy</p>
<p>Blowing up the spot tech ramedy</p>
<p></p>
<p>Keep it moving on</p>
<p>Keep it moving on</p>
<p>Keep it move,</p>
<p>Keep it move,</p>
<p>Keep it moving on</p>
<p></p>
<p>I’ll be the resident president,</p>
<p>I’m the 5th element</p>
<p>Jimmy fly Snooka stone cold is how</p>
<p>I’m hittin' em' better get together,</p>
<p>Put your hands In the sky</p>
<p>Stick em up punk,</p>
<p>Hit em low hit em high</p>
<p>Now I’m the bad boy that you invite for dinners</p>
<p>Ain’t got no manners cause I eat with my fingers</p>
<p>Lost boys terrorise the neighborhood</p>
<p>And hounds of the Baskerville will be up no good</p>
<p>So come on come on everybody keep checking us</p>
<p>Coming with the funk, bring it on wickedness</p>
<p></p>
<p>Everybody better recognise,</p>
<p>We got the funky rhymes</p>
<p>Keep it together,</p>
<p>Baby don’t even try to organise</p>
<p>We be the roughnecks</p>
<p>No concept</p>
<p>No business</p>
<p>We here to get down and make em grab your biscuits</p>
<p>So everybody, anybody, somebody</p>
<p>Put your hands together represent like John Gotte</p>
<p>Paragraph after Grammar for Gas</p>
<p>The Party’s Armageddon hit em with the heavy class</p>
<p>I’m bugging,</p>
<p>Hitting with the hooligan bamn</p>
<p>I know you wanna stand up,so baby jump</p>
</h6>
</picture><br>
<h6 style="display: inline-block;">ЭВРИБАДИ ГЕТ АП СИНГИН</h6>
<h6>05.05.бородатого</h6>
<br>
</div>

    </div>
    <?php
  $page_id = 150;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli("localhost", "root", "", "db");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }
?>
  </div>
</div>


  </body>
</html>
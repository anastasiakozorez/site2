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
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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
    <h2>БАУ</h2>
<picture><BR>
  <source srcset="" type="image/svg+xml">
  <img src="https://cs6.pikabu.ru/avatars/739/v739343-1366786558.jpg" class="img-thumbnail" alt="здесь могла быть ваша картинка">
  <p>Создания из Ада</p>
  <p>Проникают в нашу жизнь!</p>
<p>Пушистые котята - </p>
<p>Это слуги САТАНЫ!!!</p>
<p>Купи котёнка! Своему ребёнку!</p>
<p>Купи котёнка! Своему ребёнку!</p>
<p></p>
<p>Когда взойдёт кровавая луна</p>
<p>Мир окунётся в квинтэссенцию зла</p>
<p>Котята превратятся в адских тварей</p>
<p>И всем вам головы поотрывают!!!</p>
<p></p>
<p>Котята это слуги СА-ТА-НЫ!!!</p>
<p>У них уже есть волосатые хвосты!</p>
<p>Потом вырастут огромные рога,</p>
<p>Они засунут вам их в шоколадные глаза!!!</p>
<p></p>
<p>Купи котёнка! Своему ребёнку!</p>
<p>Купи котёнка! Своему ребёнку!</p>
<p></p>
<p>Когда взойдёт кровавая луна</p>
<p>Мир окунётся в квинтэссенцию зла</p>
<p>Котята превратятся в адских тварей</p>
<p>И всем вам головы поотрывают!!!</p>
<p></p>
</h6>
</picture><br>
<h6 style="display: inline-block;">аццкий сотона</h6>
<h6>01.05.бородатого</h6>
<br>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">имя</label>
  <input type="email" class="form-control-lg" id="exampleFormControlInput1">
  <label for="exampleFormControlInput1" class="form-label">Email адрес</label>
  <input type="email" class="form-control-lg" id="exampleFormControlInput1"><br>
  <label for="exampleFormControlTextarea1" class="form-label">Текст комментария</label><br>
  <textarea class="form-control-lg" id="exampleFormControlTextarea1" rows="3" style="width: 70%"></textarea><br>
  <button>ghjgk</button>
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
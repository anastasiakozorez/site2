<?php
    session_start();
?>
<?php
    $db = mysqli_connect('hostname','username','password','databasename');
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Главная</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Профиль</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Регистрация</a></li>
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

<html>
<head>
    <title>Вход</title>
</head>
<body>
<h2>Вход</h2>
<form action="test.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
    <p>
        <label>Ваш логин:<br></label>
        <input name="login" type="text" size="15" maxlength="15">
    </p>
    <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
    <p>
        <label>Ваш пароль:<br></label>
        <input name="password" type="password" size="15" maxlength="15">
    </p>
    <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->
    <p>
        <input type="submit" name="submit" value="Войти">
        <!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->
    </p></form>
</body>
</p></form>
    <br>
  <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 
<a href="reg.php">Зарегистрироваться</a> 
    </p></form>
    <br>
    <?php
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    echo "Вы вошли на сайт, как гость<br>
    <a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
    }
    else
    {
    echo "Вы вошли на сайт, как ".$_SESSION['login']."<br>
    <a  href='kab.html'>Эта ссылка доступна только  зарегистрированным пользователям</a>";
    }
    ?>
    </body>
</html>

</body>
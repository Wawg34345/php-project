<?php
    require_once 'inc/lib.inc.php';
    require_once 'inc/data.php';
    error_reporting(0);
    set_error_handler('throwError');

$title = 'Сайт нашей школы';
$header = "Добро пожаловать, Гость!";
$_GET['id'] = $_GET['id'] ??  'index';
$id = strtolower(strip_tags(trim($_GET['id'])));
switch($id){
    case 'about':
        $title = 'О сайте';
        $header = 'О нашем сайте';
        break;
    case 'contact':
        $title = 'Контакты';
        $header = 'Обратная связь';
        break;
    case 'table':
        $title = 'Таблица умножения';
        $header = 'Таблица умножения';
        break;
    case 'calc':
        $title = 'Он-лайн калькулятор';
        $header = 'Калькулятор';
        break;
}

?>
<!DOCTYPE html>
<html>

<head>
  <title><?php echo $title?></title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
      <!-- Верхняя часть страницы -->
      <?php
        require_once 'inc/top.inc.php';
      ?>
      <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
        <?php
switch($id){
    case 'about':
        include 'about.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    case 'table':
        include 'table.php';
        break;
    case 'calc':
        include 'calc.php';
        break;
    default:
        include 'inc/index.inc.php';
}
?>
  </div>
  <div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
        <?php
            require_once 'inc/menu.inc.php';
        ?>
    <!-- Меню -->
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    <?php
        require_once 'inc/bottom.inc.php'
    ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>
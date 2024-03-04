<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cols = abs((int) $_POST['cols']);
    $rows = abs((int) $_POST['rows']);
}
$cols = isset($cols) ? $cols : 10;
$rows = isset($rows) ? $rows : 10;
?>
<!-- Область основного контента -->
    <form action='<?= $_SERVER['REQUEST_URI']?>' method="post">
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="<?=$cols?>" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="<?=$rows?>" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
        <?php
        require_once 'inc/lib.inc.php';
        drawTable($cols, $rows);
        ?>
    <!-- Таблица -->
    <!-- Область основного контента -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num1 = abs((int) $_POST['num1']);
    $num2 = abs((int) $_POST['num2']);
    $operator = $_POST['operator'];
}

$num1 = $num1 ?? 2;
$num2 = $num2 ?? 2;
$operator = $operator ?? "+";

?>
    <!-- Область основного контента -->
    <form action='<?= $_SERVER['REQUEST_URI']?>' method = 'POST'>
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' value="<?=$num1?>"/>
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' value="<?=$operator?>"/>
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' value="<?=$num2?>"/>
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>
    <?=calculateNumbers($num1, $num2, $operator)?>

    <!-- Область основного контента -->
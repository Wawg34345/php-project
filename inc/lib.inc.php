<?php
//function to draw navbar
function draw_menu($menu, $ver = true){
    if(!is_array($menu)){
        return false;
    }
    if($ver == true){
        echo "<ul>";
        foreach($menu as $link){
            echo "<li>";
            echo "<a href='{$link['href']}'>";
            echo $link['link'];
            echo "</a>";
            echo "</li>";
        }
        echo "</ul>";
        return true;
    }

    else{
        echo "<ul>";
            foreach($menu as $link){
                echo "<li style = 'display:inline'>";
                echo "<a href='{$link['href']}' style = 'padding-left:10px'>";
                echo $link['link'];
                echo "</a>";
                echo "</li>";
            }
        echo "</ul>";
            return true;
    }

}
//

//function to count elements in array
function count_elems($par, $mode = 0){
    if(!is_array($par)){
        return 'Uncaught TypeError: count_elems(): Argument #1 ($value) must be of type Countable|array, ' . gettype($par) . ' given in';
    }
    else{
        $count = 0;
        foreach ($par as $elem){
            if(is_array($elem) and $mode == 1){
                $count += count_elems($elem, 1);
            }
            $count++;

        }
        return $count;
    }
}
//


//function to draw multiplication table
function drawTable($rows, $cols){
    echo '<table border = "1">';
    for($row = 1; $row < $rows; $row++){
        echo '<tr>';
        for($col = 1; $col < $cols; $col++){
            echo '<td>' . $row * $col . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
//

//function to throw errors
function throwError($no, $msg, $file, $line){
    $date = date('d-m-Y H:i:s');
    $str = "[$date] - $msg in $file:$line\n";
    error_log("$str\n" , 3, 'error.log');
    switch($no){
        case E_USER_ERROR:
        case E_USER_WARNING:
        case E_USER_NOTICE:
            echo $msg; break;
        default:
            echo $msg;

    }

}
//

//function for calc.php

function calculateNumbers($num1, $num2, $operator){

}
//

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Урок 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

echo "<div><h2> Задание 1 </h2>";
    function task1($a, $b){
        if ($a * $b == 0) {
            if($a + $b > 0) {
                $r = $a - $b;
            } else {
                $r = $a - $b;
            }
        } else if ($a * $b < 0){
            $r = $a + $b;
        } else if ($a > 0) {
            $r = $a - $b;
        } else {
            $r = $a * $b;
        }
     return $r;
    }
    echo task1(0,10)."<br>";
    echo task1(5,0)."<br>";
    echo task1(-5,7)."<br>";
    echo task1(25,10)."<br></div>";

echo "<div><h2> Задание 2 </h2>";
    $a = rand(0,15);
    switch ($a) {
        case 0:
            echo $a.', ';
            $a++;
        case 1:
            echo $a.', ';
            $a++;
        case 2:
            echo $a.', ';
            $a++;
        case 3:
            echo $a.', ';
            $a++;
        case 4:
            echo $a.', ';
            $a++;
        case 5:
            echo $a.', ';
            $a++;
        case 6:
            echo $a.', ';
            $a++;
        case 7:
            echo $a.', ';
            $a++;
        case 8:
            echo $a.', ';
            $a++;
        case 9:
            echo $a.', ';
            $a++;
        case 10:
            echo $a.', ';
            $a++;
        case 11:
            echo $a.', ';
            $a++;
        case 12:
            echo $a.', ';
            $a++;
        case 13:
            echo $a.', ';
            $a++;
        case 14:
            echo $a.', ';
            $a++;
        case 15:
            echo $a."</div>";
           break;
        default:
            break;
    }

echo "<div><h2> Задание 3 </h2>";
    function plus($a, $b) {
        return $a + $b;
    }
    function minus($a, $b) {
        return $a - $b;
    }
    function div($a, $b) {
        return $a / $b;
    }
    function multiply ($a, $b) {
        return $a * $b;
    }
    echo plus(5,2)."<br>";
    echo minus(5,2)."<br>";
    echo div(5,2)."<br>";
    echo multiply(5,2)."<br></div>";

echo "<div><h2> Задание 4 </h2>";
    function mathOperation($arg1, $arg2, $operation){
        switch($operation){
            case 'сложение':
                return $arg1 + $arg2;
                break;
            case 'вычитание':
                return $arg1 - $arg2;
                break;
            case 'деление':
                return $arg1 / $arg2;
                break;
            case 'умножение':
                return $arg1 * $arg2;
                break;
            default:
                return "Укажите корректное название математической операции";
        }
    }
    echo mathOperation(10,5,"сложение")."<br>";
    echo mathOperation(10,5,"вычитание")."<br>";
    echo mathOperation(10,5,"деление")."<br>";
    echo mathOperation(10,5,"умножение")."<br>";
    echo mathOperation(10,5,"операция")."<br></div>";

echo "<div><h2> Задание 6 </h2>";
    function power($val, $pow)
    {
        if ($val == 0)
            return 0;
        elseif ($pow == 0)
            return 1;
        elseif ($pow < 0)
            return power(1/$val, -$pow);
        else
            return $val *  power($val, $pow-1);
    }
    echo power(5, 3)."<br></div>";
    
?>
<footer class="footer center"><? echo date("Y");?></footer>
</body>
</html>
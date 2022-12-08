<pre>
<h4>Задача 1.</h4>  
<?php
/**Используя рекурсию, реализовать функцию вычисления факториала числа. */

function factorial($num) 
{
    if ($num <0) {
        $a = 'Факториал отрицательного числа не существует';
    } elseif ($num == 0 || $num == 1){
        $a =  1;
    } else {
        $a = $num * factorial($num-1);
    }
    return $a;
}
        echo factorial(5);


// function factorial($num) 
// {
//     if (!is_int($num) && !($num < -1)) {
//         $res = false;
//     } elseif ($num == 0){
//         $res =  1;
//     } else {
//         $res = $num * factorial($num-1);
//     }
//     return $res;
// }
// var_dump (factorial(1));

// function factorial1($num) 
// {
//     if (is_int($num) && ($num > -1)) {
//         $res = $num * factorial1($num-1);
//     } elseif ($num == 0){
//         $res =  1;
//     } else {
//         $res = false;
//     }
//     return $res;
// }
// var_dump (factorial1(0));

// возвращать фолс
// string, boolean, float, int<0 - НЕ РАБОТАЕТ должно возвращать FALSE
// int =0,1 && int>0 
// ?>

<h4>Дополнительная задача.</h4>  

<?
function factorial1($num) {
    $res = false;
    if (is_int($num) && ($num > -1)) {
        $res = $num * factorial1($num-1);
    } if ($num == 0) {
        $res =  1;  
    }
    return $res;
}
var_dump (factorial1(0));
?>

<h4>Задача 2.</h4>  
<?php
/**Дан массив вида, который может иметь неограниченную вложенность. 
 * Требуется реализовать рекурсивную функцию, которая, на основе данного массива 
 * формировала список. 
 * Для формирования списка используются теги «<ul></ul><li></li>». */

    $someArray = [
    'id' => 1,
    'name' => 'item1',
    'items' => [
        [
            'id' => 2,
            'name' => 'item2',
            'items' => [],
        ],
        [
            'id' => 3,
            'name' => 'item3',
            'items' => [],
        ],
        [
            'id' => 4,
            'name' => 'item4',
            'items' => [
                [
                    'id' => 5,
                    'name' => 'item5',
                    'items' => [[],[],null,[]],
                ],
                [
                    'id' => 6,
                    'name' => 'item6',
                    'items' => [],
                ],
            ],
        ],
    ]
];

// function bigMas($someArray) 
// {
//     echo "<ul>[";
//     foreach ($someArray as $val) {
//         echo "<li>";
//         if (is_array($val)) {
//             // echo $key;
//             bigMas($val); 
//         } else {
//             echo ($val);
//         }
//     echo "</li>"; 
//     }
// echo "]</ul>";
// }
// bigMas($someArray);

// квардратные скобки должны быть только в том случае, если является массивом

function less($a, $result = false)
{
    $result .= "<ul>[";
    foreach($a as $value){
        if (is_array($value)) {
            $result .= less($value);
        } else {
            $value = is_null($value) ? 'null' : $value;
            $result .= "<li> $value </li>";
        }
    }
    $result .= "]</ul>";
    return $result;
}
echo less($someArray);

?>


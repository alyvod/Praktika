<pre>
<h4>Дополнительная задача.</h4>
<?php
// Дан массив с числами, необходимо написать функцию, которая:
// а) если число четное, то его нужно *2;
// б) если число >10, то -3 (оно в приоритете четное), 
// в) если число дробное, то нужно +1;
// г) если число отрицательное или другое, то оставить как есть
// проверить нужно каждый элемент массива (из $arr нужно сделать обращение к $elem)

// функция должна отдавать весь массив сразу сделанный (полный массив!)
// в array_map она смотрит каждое значение по отдельности
// а надо с помощью цикла сделать так, чтобы функция бежала по всему массиву СРАЗУ!

$arr = [-3, 1, 2, 16, 3.5];
function work2($arr) {
    foreach($arr as &$elem) {
        switch($elem) {
            case ($elem > 10):
                $elem = $elem - 3;
                break;
            case ($elem % 2 == 0):
                $elem = $elem*2;
                break;
            case (is_float($elem) && $elem > 0):
                $elem = $elem + 1; 
                break;
            default:
                $elem = $elem;
        }  
    }
    return $arr;
}
echo '<br>';
print_r(work2($arr));

?>

<h4>Задача 1.</h4>
<?php
/**1 Сделайте функцию, которая принимает строку на русском языке, а
*возвращает ее транслит.*/

function translit($a) {
    $letters = [
        'а' => 'a',    
        'б' => 'b',    
        'в' => 'v',    
        'г' => 'g',    
        'д' => 'd',
		'е' => 'e',    
        'ё' => 'e',    
        'ж' => 'zh',   
        'з' => 'z',    
        'и' => 'i',
		'й' => 'y',    
        'к' => 'k',    
        'л' => 'l',    
        'м' => 'm',    
        'н' => 'n',
		'о' => 'o',    
        'п' => 'p',    
        'р' => 'r',    
        'с' => 's',    
        'т' => 't',
		'у' => 'u',    
        'ф' => 'f',    
        'х' => 'h',    
        'ц' => 'c',    
        'ч' => 'ch',
		'ш' => 'sh',   
        'щ' => 'sch',  
        'ь' => '',     
        'ы' => 'y',    
        'ъ' => '',
		'э' => 'e',    
        'ю' => 'yu',   
        'я' => 'ya',
		'А' => 'A',    
        'Б' => 'B',    
        'В' => 'V',    
        'Г' => 'G',    
        'Д' => 'D',
		'Е' => 'E',    
        'Ё' => 'E',    
        'Ж' => 'Zh',   
        'З' => 'Z',    
        'И' => 'I',
		'Й' => 'Y',    
        'К' => 'K',    
        'Л' => 'L',    
        'М' => 'M',    
        'Н' => 'N',
		'О' => 'O',    
        'П' => 'P',    
        'Р' => 'R',    
        'С' => 'S',    
        'Т' => 'T',
		'У' => 'U',     
        'Ф' => 'F',    
        'Х' => 'H',    
        'Ц' => 'C',    
        'Ч' => 'Ch',
		'Ш' => 'Sh',   
        'Щ' => 'Sch',  
        'Ь' => '',     
        'Ы' => 'Y',    
        'Ъ' => '',
		'Э' => 'E',    
        'Ю' => 'Yu',   
        'Я' => 'Ya'
    ];
	return strtr($a, $letters) . '<br>';
}
echo translit('язык МИР!!, Щука');

?>


<h4>Задача 2.</h4>
<?php
/**Сделайте функцию, которая возвращает множественное или единственное число существительного. 
 * Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. 
 * Функция первым параметром принимает число, 
 * а следующие 3 параметра — форма для единственного числа, для чисел два, три, четыре и для чисел, больших четырех, 
 * например, func(3, 'яблоко', 'яблока', 'яблок'). */

function letters($num, $word1, $word2, $word3){
    switch($num){
        case 1:
            $a = $num . ' ' . $word1;
            break;
        case 2:
        case 3:
        case 4: 
            $a = $num . ' ' . $word2;
            break;
        default: 
            $a = $num . ' ' . $word3;
            break;
    }
    return $a;
} 
echo letters(4, 'яблоко', 'яблока', 'яблок') . '<br>';

?>

<h4>Задача 3.</h4>
<?php
/**Найдите все счастливые билеты. 
 * Счастливый билет - это билет, в котором сумма первых трех цифр его номера 
 * равна сумме вторых трех цифр его номера. */

$arr = 1; 
function ticket ($arr) { 
    if (strlen($arr) <= 6) { 
        $mas = array_pad(str_split ($arr), -6, 0);
        $one = array_sum([$mas[0],$mas[1],$mas[2]]) ; 
        $two = array_sum([$mas[3],$mas[4],$mas[5]]) ; 
        return (($one == $two) ? 'Билет счастливый' : 'Билет несчастливый') . '<br>'; 
    } else {
    return 'Больше шести символов использовать нельзя!'; 
    } 
} 
echo (ticket($arr));

?>

<h4>Задача 4.</h4>
<?php
/**Дружественные числа - два различных числа, для которых сумма всех 
 * собственных делителей первого числа равна второму числу и наоборот,
 * сумма всех собственных делителей второго числа равна первому числу.
 * Например, 220 и 284 Делители для 220 это 1, 2, 4, 5, 10, 11, 20, 22, 44, 55
 * и 110, сумма делителей равна 284 Делители для 284 это 1, 2, 4, 71 и 142,
 * их сумма равна 220
 * Задача: найдите все пары дружественных чисел в промежутке от 1 до
 *  10000 Для этого сделайте вспомогательную функцию, которая находит
 * все делители числа и возвращает их в виде массива. Также сделайте
 * функцию, которая параметром принимает массив, а возвращает его сумму. */

function delitely ($num)
{
    $arr = [];
    for ($i=1; $i*2 < $num + 1; $i++) {
        if ($num % $i == 0) {
        $arr[] = $i;
        }
    }
return $arr;
}

function sum($arr){
    $array_sum = array_sum ($arr);
    return $array_sum;
}

for ($num=1; $num < 10000; $num++) {
    $a = sum (delitely ($num));
    $b = sum (delitely ($a));
    if ($num == $b && $num != $a){
        echo "Дружественные числом для $num будет число $a" .  '<br>';
    }
}

?>

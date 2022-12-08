<pre>

<?php
echo "<p style= 'background-color: indigo; color: white; '>Задача 1</p>";
/**Задача 1. Дан массив $arr. 
 * С помощью функции count выведите последний элемент данного массива.**/

$arr = [5, 7, 'qwerty', 4.2, '5'=>1];
// var_dump ($arr[count($arr)-1])  . '<br>';

$b = count ($arr);
echo $arr[$b];
?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 2</p>";
/**Задача 2. Дан массив с числами. 
 * Проверьте, что в нем есть элемент со значением 3.**/

$massive = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
var_dump (in_array(3, $massive) ? 'Есть' : 'Нет')  . '<br>'; 

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 3</p>";
/**Задача 3. Дан массив [1, 2, 3, 4, 5]. Найдите сумму элементов данного массива.**/

$massive = [1, 2, 3, 4, 5];
var_dump (array_sum($massive))  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 4</p>";
/**Задача 4. Дан массив $arr.С помощью функций array_sum и count найдите среднее арифметическое элементов (сумма элементов делить на их количество) данного массива.**/

$arr = [1, 2, 3, 4 ,5, 'j'=> 7]; // yes
var_dump (array_sum($arr)) . '<br>';
var_dump (array_sum($arr)/count($arr))  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 5</p>";
/**Задача 5. Создайте массив, заполненный числами от 1 до 100.**/

$massive = range(1,100);
var_dump ($massive)  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 6</p>";
/**Задача 6.Создайте массив, заполненный буквами от 'a' до 'z'. **/

$massive = range('a','z'); //no
var_dump ($massive)  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 7</p>";
/**Задача 7. Найдите сумму чисел от 1 до 100 не используя цикл.**/

$massive = range(1, 100);
var_dump (array_sum($massive))  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 8</p>";
/**Задача 8. Даны два массива: первый с элементами 1, 2, 3, второй с элементами 'a', 'b', 'c'.
* Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'.**/

$arr = [1, 2, 3];
$massive = ['a', 'b', 'c', 4, 'j' => 'ghjkltrgyhujk' ]; // yes
var_dump (array_merge($arr, $massive))  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 9</p>";
/**Задача 9. Дан массив с элементами 1, 2, 3, 4, 5 С помощью функции array_slice создайте 
 * из него массив $result с элементами 2, 3, 4.**/

$massive = [10, 2, 3, 4, 5];
var_dump($result = array_slice($massive, 1, -1))  . '<br>';   

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 10</p>";
/**>Задача 10. Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice преобразуйте массив 
 * в [1, 4, 5].**/

$arr = [1, 2, 3, 4, 5];
array_splice ($arr, 1, 2);
var_dump ($arr)  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 11</p>";
/**Задача 11. Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него 
 * массив [1, 2, 3, 'a', 'b', 'c', 4, 5].**/

$arr = [1, 2, 3, 4, 5];
$massive = ['a', 'b', 'c'];
array_splice ($arr, 3, 0, $massive);
var_dump ($arr)  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 12</p>";
/**Задача 12.Дан массив 'a'=>1, 'b'=>2, 'c'=>3'. Запишите в массив $keys ключи из этого 
 * массива, а в $values – значения.**/

$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = array_keys($arr);
$values = array_values($arr);
var_dump ($arr)  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 13</p>";
/**Задача 13. Даны два массива: ['a', 'b', 'c'] и [1, 2, 3]. Создайте с их помощью массив 'a'=>1,
'b'=>2, 'c'=>3'.**/

$massive = ['a', 'b', 'c'];
$arr = [1, 2, 3];
$mas = array_combine($massive, $arr);
var_dump ($mas)  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 14</p>";
/**Задача 14.Дан массив 'a'=>1, 'b'=>2, 'c'=>3. Поменяйте в нем местами ключи и значения.**/

$massive = ['a'=>1, 'b'=>2, 'c'=>3];
var_dump (array_flip($massive))  . '<br>';

?>


<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 15</p>";
/**Задача 15. Дан массив с элементами 1, 2, 3, 4, 5. 
 * Сделайте из него массив с элементами 5, 4, 3, 2, 1.**/

$massive = [1, 2, 3, 4, 5];
var_dump (array_reverse($massive)) . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 16</p>";
/**Задача 16.Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. 
 * Найдите позицию первого элемента '-'.**/

$massive = ['a', '-', 'b', '-', 'c', '-', 'd'];
var_dump (array_search('-', $massive))  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 17</p>";
/**Задача 17. Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. 
 * Найдите позицию первого элемента '-' и удалите его с помощью функции array_splice.**/

$massive = ['a', '-', 'b', '-', 'c', '-', 'd'];
array_splice($massive, array_search('-', $massive), 1);
var_dump ($massive)  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 18</p>";
/**Задача 18.Дан массив ['a', 'b', 'c', 'd', 'e']. 
 * Поменяйте элемент с ключом 0 на '!', а элемент с ключом 3 - на '!!'.**/

$massive = ['a', 'b', 'c', 'd', 'e'];
$arr = [0 => '!', 3 => '!!'];
$mas = array_replace($massive, $arr);
var_dump ($mas)  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 19</p>";
/**Задача 19. Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'. 
 * Попробуйте на нем различные типы сортировок.**/

$massive = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];

sort($massive); // сортировка массивов в порядке возрастания
print_r($massive) . '<br>'; 

rsort($massive); // сортировка массивов в порядке убывания
print_r($massive) . '<br>'; 

asort($massive); // сортировать ассоциативный массив в порядке возрастания значений
print_r($massive) . '<br>'; 

ksort($massive); // сортировка ассоциативных массивов в порядке возрастания в соответствии с ключом
print_r($massive) . '<br>'; 

arsort($massive); // сортировка ассоциативных массивов в порядке убывания в соответствии со значением
print_r($massive) . '<br>'; 

krsort($massive); // сортировка ассоциативных массивов в порядке убывания в соответствии с ключом
print_r($massive) . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 20</p>";
/**Задача 20. Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. 
 * Выведите на экран случайный ключ из данного массива.**/

$massive = ['a'=>1, 'b'=>2, 'c'=>3];
var_dump (array_rand($massive))  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 21</p>";
/**Задача 21. Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. 
 * Выведите на экран случайный элемент данного массива.**/

$massive = ['a'=>1, 'b'=>2, 'c'=>3];
var_dump ($massive[array_rand($massive)])  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 22</p>";
/**Задача 22. Дан массив $arr. Перемешайте его элементы в случайном порядке.**/

$arr = ['php', 1, 'true', 345];
$mas = shuffle($arr);
var_dump ($arr)  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 23</p>";
/**Задача 23. Заполните массив числами от 1 до 25 с помощью range, 
 * а затем перемешайте его элементы в случайном порядке.**/

$arr = range(1,25);
$mas = shuffle($arr);
var_dump ($arr)  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 24</p>";
/**Задача 24. Сделайте строку длиной 6 символов, состоящую из маленьких английских букв, 
 * расположенных в случайном порядке. Буквы не должны повторяться.**/

$massive = range('a', 'z');
shuffle($massive);
$arr = (array_slice($massive, 1, 6));
var_dump (implode($arr))  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 25</p>";
/**Задача 25. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. 
 * Удалите из него повторяющиеся элементы.**/

$massive = ['a', 'b', 'c', 'b', 'a'];
var_dump (array_unique($massive))  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 26</p>";
/**Задача 26. Дан массив с элементами 1, 2, 3, 4, 5. 
 * Выведите на экран его первый и последний элемент, причем так, 
 * чтобы в исходном массиве они исчезли.**/

$massive = [1, 2, 3, 4, 5];
$arr = array_shift($massive);
$arr1 = array_pop ($massive);
print_r ($arr .' и '. $arr1)  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 27</p>";
/**Задача 27.Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8. 
 * С помощью цикла и функций array_shift и array_pop выведите на экран
 *  его элементы в следующем порядке: 18273645.**/

$massive = [1, 2, 3, 4, 5, 6, 7, 8];
for ($a = array_shift($massive), $b = array_pop($massive); $a !== null; $a = array_shift($massive), $b = array_pop($massive)) {
    print_r ($a . $b);
}
echo '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 28</p>";
/**Задача 28. Дан массив с элементами 'a', 'b', 'c'. 
 * Сделайте из него массив с элементами 'a', 'b', 'c', '-', '-', '-'.**/

$massive = ['a', 'b', 'c'];
var_dump (array_pad($massive, 6, '-'))  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 29</p>";
/**Задача 29. Создайте массив, заполненный целыми числами от 1 до 20 С помощью функции array_chunk 
 * разбейте этот массив на 5 подмассивов ([1, 2, 3, 4]; [5, 6, 7, 8] и т.д.).**/

$massive = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
var_dump (array_chunk($massive, 4))  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 30</p>";
/**Задача 30. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. 
 * Подсчитайте сколько раз встречается каждая из букв.**/

$massive = ['a', 'b', 'c', 'b', 'a'];
var_dump (array_count_values($massive))  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 31</p>";
/**Задача 31. Дан массив с элементами 1, 2, 3, 4, 5. 
 * Создайте новый массив, в котором будут лежать квадратные корни данных элементов.**/

$massive = [1, 2, 3, 4, 5];

// function foo($mas) {
// return $mas**0.5;
// }
// var_dump (array_map('foo', $massive))  . '<br>';

// 1
var_dump(array_map( fn ($b) => $b**0.5, $massive)) . '<br>'; 
// 2
$a = array_map ( function ($b) 
{ return ( $b**0.5 ); 
}, $massive ); 
var_dump($a);
// // 3
var_dump(array_map('sqrt', $massive)) . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 32</p>";
/**Задача 32. Дан массив с элементами '<b>php</b>', '<i>html</i>'. 
 * Создайте новый массив, в котором из элементов будут удалены теги.**/

$massive = ['<b>php</b>', '<i>html</i>'];
var_dump (array_map('strip_tags', $massive))  . '<br>';

?>

<?php
echo "<p style= 'background-color: mediumpurple; color: white; '>Задача 33</p>";
/**+
 * 
 * Задача 33. Дан массив с элементами 1, 2, 3, 4, 5 и массив с элементами 3, 4, 5, 6, 7. 
 * Запишите в новый массив элементы, которые есть и в том, и в другом массиве.**/

$massive = [1, 2, 3, 4, 5];
$arr = [3, 4, 5, 6, 7];
var_dump (array_intersect($massive, $arr))  . '<br>';

?>

<?php
echo "<p style= 'background-color: indigo; color: white; '>Задача 34</p>";
/**Задача 34. Дан массив с элементами 1, 2, 3, 4, 5 и массив с элементами 3, 4, 5, 6, 7. 
 * Запишите в новый массив элементы, которые не присутствуют в обоих массивах одновременно.**/

$massive = [1, 2, 3, 4, 5];
$arr = [3, 4, 5, 6, 7];
$mas = array_diff($massive, $arr);
var_dump ($mas) . '<br>';

?>

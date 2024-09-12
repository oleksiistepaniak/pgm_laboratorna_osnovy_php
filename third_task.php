<?php
// Описую функцію, яка шукає перший негативний елемент в масиві чисел
function findFirstNegativeIndex($array)
{
    // Ітеруюсь по масиві, беру індекс і значення
    foreach ($array as $index => $value) {
        // Якщо значення менше нуля, то повертаю $index
        if ($value < 0)
            return $index;
    }
    // Якщо негативного елементу знайдено не було, то повертаю -1
    return -1;
}

$array = array(1, 2, 3, 4, -5, 10, -6, 11);
$index = findFirstNegativeIndex($array);

echo "Індекс першого негативного елемента в масиві: $index";
?>
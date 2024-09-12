<?php
function findFirstAboveAverageIndex($array)
{
    // беремо довжину масиву
    $n = count($array);
    // якщо довжина дорівнює 0, то такого елемента не може бути
    if ($n == 0)
        return -1;
    // сумуємо елементи масиву і знаходимо середнє арифметичне
    $sum = array_sum($array);
    $average = $sum / $n;
    // ітеруємось по масиву і перевіряємо чи середнє арифметичне менше за поточний елемент, якщо так, то вертаємо індекс
    foreach ($array as $index => $value) {
        if ($value > $average)
            return $index;
    }
    // якщо такого елемента не було знайдено, то повертаємо -1
    return -1;
}

$array1 = [1, 2, 3, 4, 5]; // середнє арифметичне = 3, перше число більше = 4
$array2 = [5, 5, 5, 5, 5]; // середнє арифметичне = 5, немає чисел більших за середнє
$array3 = [10, 20, 30, 40, 50]; // середнє арифметичне = 30, перше число більше = 40

echo "Array 1: First index above average is " . findFirstAboveAverageIndex($array1) . "\n";
echo "Array 2: First index above average is " . findFirstAboveAverageIndex($array2) . "\n";
echo "Array 3: First index above average is " . findFirstAboveAverageIndex($array3) . "\n";
?>



<?php
// описуємо функцію, яка розраховує середнє арифметичне позитивних чисел
function calculateAverageOfPositive($array)
{
    $sum = 0;
    $count = 0;
    // ітеруємось по масиву і сумуємо значення в змінну $sum, збільшуємо $count на одиничку
    foreach ($array as $value) {
        if (0 < $value) {
            $sum += $value;
            $count++;
        }
    }
    // якщо $count більше нуля, тоді розраховуємо середнє арифметичне
    if ($count > 0)
        return $sum / $count;
    // інакше повертаємо null
    return null;
}
// описуємо функцію, яка шукатиме перший елемент, який менший за $average, і повертатиме його $index
function findIndexOfElementLessThanAverage($array, $average)
{
    foreach ($array as $index => $value) {
        if ($value < $average)
            return $index;
    }

    return -1;
}
$array = [1, -2, 3, 4, -5, 6, -7];
$average = calculateAverageOfPositive($array);
if ($average === null)
    echo "Немає позитивних чисел в масиві!";
else {
    $index = findIndexOfElementLessThanAverage($array, $average);
    echo "Індекс елемента в масиві array, менший за середнє арифметичне позитивних чисел " .$index;
}
?>


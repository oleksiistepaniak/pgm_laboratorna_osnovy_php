<?php
// описуємо функцію, яка буде шукати в масиві перше негативне значення і повертатиме індекс
function findFirstNegativeIndex($array)
{
    // ітеруємось, беремо $index і $value
    foreach ($array as $index => $value) {
        // перевіряємо, чи $value менше нуля, якщо так, то повертаємо $index, інакше повертаємо -1
        if ($value < 0) {
            return $index;
        }
    }
    return -1;
}
// описуємо функцію, яка буде опрацьовувати матрицю і виводити в консоль відповідні повідомлення
function processMatrix($matrix)
{
    // ітеруємось по матриці, беремо $rowIndex та $row, шукаємо перший індекс негативного елемента, і виводимо відповідні повідомлення
    foreach ($matrix as $rowIndex => $row) {
        $firstNegativeIndex = findFirstNegativeIndex($row);
        if ($firstNegativeIndex === -1)
            echo "У рядку " . ($rowIndex + 1) . " немає негативних елементів \n";
        else
            echo "У рядку " . ($rowIndex + 1) . " перший негативний елемент за індексом: " . $firstNegativeIndex . "\n";
    }
}

$matrix = [
    [3, 5, -2, 8],
    [7, 8, 9, 10],
    [-1, 4, 6, -7],
    [5, 3, 2, 1]
];

processMatrix($matrix);
?>
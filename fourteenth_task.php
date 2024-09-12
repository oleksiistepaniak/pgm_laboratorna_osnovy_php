<?php
// описуємо функцію, яка повертатиме кількість днів в місяці
function getDaysInMonth($month, $year)
{
    // якщо не валідний місяць, повертаємо відповідну стрічку
    if ($month < 1 || $month > 12)
        return "Не валідний місяць. Введіть число від 1 до 12.";
    // використовуємо вбудовану функцію, яка приймає тип календаря, місяць і рік, і повертає кількість днів
    return cal_days_in_month(CAL_GREGORIAN, $month, $year);
}

$year = 2021;
$months = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14);

foreach ($months as $month) {
    $days = getDaysInMonth($month, $year);
    // якщо $days це стрінга, значить це невалідне значення, інакше виводимо в консоль кількість днів в заданому році й місяці
    if (is_string($days))
        echo $days . "\n";
    else
        echo "Місяць $month у $year році має $days днів.\n";
}
?>
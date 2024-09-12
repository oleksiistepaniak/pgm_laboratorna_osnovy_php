<?php
// описуємо функцію, яка розраховує площу кола
function calculateCircleArea($radius)
{
    return pi() * pow($radius, 2);
}
// описуємо функцію, яка розраховує довжину кола
function calculateCircleCircumference($radius)
{
    return 2 * pi() * $radius;
}
// описуємо функцію, яка розраховує об'єм кола
function calculateSphereVolume($radius)
{
    return 4 / 3 * pi() * pow($radius, 3);
}
// ця функція залежно від значення $k викликає ту чи іншу функцію для розрахунку площі, довжини або об'єму, інакше повертає текст який пояснює що треба передавати
function calculate($radius, $k)
{
    switch ($k) {
        case 1:
            return calculateCircleArea($radius);
        case 2:
            return calculateCircleCircumference($radius);
        case 3:
            return calculateSphereVolume($radius);
        default:
            return "Невірне значення k. Використовуйте 1 для площі кола, 2 для довжини кола або 3 для об'єму кулі.";
    }
}

$radius = 5;

for ($k = 1; $k <= 3; $k++) {
    $result = calculate($radius, $k);
    echo "Результат: " .$result . "\n";
}
?>
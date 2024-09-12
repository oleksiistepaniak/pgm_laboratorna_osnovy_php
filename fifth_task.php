<?php
function isArithmeticSequence($array)
{
    // беремо довжину масиву
    $n = count($array);
    // звіряємо чи довжина менше два - якщо так, то цей масив завжди арифметичний
    if ($n < 2)
        return true;
    // беремо різницю перших двох елементів
    $difference = $array[1] - $array[0];
    // звіряємо решта елементів, якщо їх різниця не збігається - масив не арифметичний
    for ($i = 2; $i < $n; $i++) {
        if ($array[$i] - $array[$i - 1] !== $difference)
            return false;
    }

    return true;
}

$array1 = array(2, 4, 6, 8, 10);
$array2 = array(1, 23, 24, 25);
$array3 = array(10, 10, 10, 10);

echo "Array1 is " . (isArithmeticSequence($array1) ? "arithmetic" : "not arithmetic") . "\n";
echo "Array2 is " . (isArithmeticSequence($array2) ? "arithmetic" : "not arithmetic") . "\n";
echo "Array3 is " . (isArithmeticSequence($array3) ? "arithmetic" : "not arithmetic") . "\n";
?>
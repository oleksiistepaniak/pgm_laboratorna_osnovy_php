<?php
function isMonotonic($array)
{
    // беремо довжину масиву
    $n = count($array);
    // звіряємо, якщо довжина 0 або 1 - то цей масив завжди монотонний
    if ($n < 2)
        return true;
    // Створюємо змінні, які відповідають за монотонно зростальну та спадну
    $isIncreasing = true;
    $isDecreasing = true;

    for ($i = 1; $i < $n; $i++) {
        // Перевіряємо чи поточний елемент більший за минулий
        if ($array[$i] > $array[$i - 1])
            $isDecreasing = false;
        // Перевіряємо чи поточний елемент менший за минулий
        if ($array[$i] < $array[$i - 1])
            $isIncreasing = false;
    }

    return $isIncreasing || $isDecreasing;
}

$array1 = array(1, 2, 3, 4, 5); // монотонно зростаючий
$array2 = array(5, 4, 3, 2, 1); // монотонно спадний
$array3 = array(1, 3, 2, 4, 5); // не є монотонним
echo "Array1 is " . (isMonotonic($array1) ? "monotonic" : "not monotonic") . "\n";
echo "Array2 is " . (isMonotonic($array2) ? "monotonic" : "not monotonic") . "\n";
echo "Array3 is " . (isMonotonic($array3) ? "monotonic" : "not monotonic") . "\n";
?>

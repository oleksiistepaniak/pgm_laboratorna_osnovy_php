<?php
// описуємо функцію, яка приймає масив і підмножину, яку треба перевірити
function containsSubset($array, $subset)
{
    // ітеруємось по підмножині
    foreach ($subset as $character) {
        // використовуємо метод in_array() з логічним запереченням, щоб перевірити, чи елемент множини знаходиться в масиві
        if (!in_array($character, $array))
            return false;
    }
    return true;
}

$array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o');
$subsetToFind = array('b', 'h', 'j');

if (containsSubset($array, $subsetToFind))
    echo "Масив містить всі задані літери!";
else
    echo "Масив не містить всіх заданих літер!";
?>
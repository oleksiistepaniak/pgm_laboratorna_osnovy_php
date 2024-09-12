<?php
// описуємо функцію, яка буде визначати тип символу (якщо апперкейс тоді заголовна, якщо ловеркейс тоді прописна, якщо цифра тоді цифра, інакше невідомий символ
function defineCharacterType($character)
{
    switch ($character) {
        case 'A':
        case 'B':
        case 'C':
        case 'D':
            echo "Заголовна\n";
            break;
        case 'a':
        case 'b':
        case 'c':
        case 'd':
            echo "Прописна\n";
            break;
        case '0':
        case '1':
        case '2':
        case '3':
            echo "Цифра\n";
            break;
        default:
            echo "Невідомий символ\n";
            break;
    }
}

$characters = ['A', 'b', '2', 'x', 'C', 'd', '9'];

foreach ($characters as $char) {
    echo "Символ '$char': ";
    defineCharacterType($char);
}
?>
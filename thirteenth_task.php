<?php
// описуємо функцію для підрахунку кількості кожної з перших чотирьох заголовних латинських букв
function countLetters($text) {
    // перетворюємо рядок у верхній регістр для зручності
    $text = strtoupper($text);

    // масив для підрахунку
    $counts = [
        'A' => 0,
        'B' => 0,
        'C' => 0,
        'D' => 0
    ];

    // перебираємо кожен символ рядка
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (isset($counts[$char])) {
            $counts[$char]++;
        }
    }

    return $counts;
}

// заданий текст мною придуманий
$text = "A quick brown fox jumps over the lazy dog. BCDAB";

// підрахунок букв і вивід результатів
$letterCounts = countLetters($text);
foreach ($letterCounts as $letter => $count) {
    echo "Кількість '$letter': $count\n";
}
?>
<?php
// Створюю шаблон-клас, який описує сутність Матрицю
class Matrix {
    private $rows;
    private $columns;
    private $matrix;

    // В конструкторі ініціалізую рядки та колонки, а також саму матрицю через цикл for
    public function __construct($rows, $columns) {
        $this->rows = $rows;
        $this->columns = $columns;
        $this->matrix = array();

        $value = 1;
        for ($i = 0; $i < $rows; $i++) {
            $this->matrix[$i] = array();
            for ($j = 0; $j < $columns; $j++) {
                $this->matrix[$i][$j] = $value++;
            }
        }
    }

    // Створюю функцію, завдяки якій виводжу всі числа матриці (в одному рядку всі числа з $row, а в новому вже
    // новий $row)
    public function displayMatrix() {
            foreach ($this->matrix as $row) {
                foreach ($row as $cell) {
                    echo $cell . " ";
                }
                echo "\n";
            }
    }
}
// Створюю екземпляр класу Matrix через ключове слово new і передаю в конструктор rows та columns
$matrix = new Matrix(3, 4);
// Викликаю на інстансі класу Matrix метод displayMatrix()
$matrix->displayMatrix();
?>
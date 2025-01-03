<?php

function dump($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

$data = [
    ['Иванов', 'Математика', 5],
    ['Иванов', 'Математика', 4],
    ['Иванов', 'Математика', 5],
    ["Петров", 'Математика', 5],
    ['Сидоров', 'Физика', 4],
    ['Иванов', 'Физика', 4],
    ['Петров', 'ОБЖ', 4],
];

// Множество массивов со студентами и предметами в виде ключей, балл - значение. Массив subjects c предметами
foreach ($data as [$student, $subject, $score]) {

    $subjects[$subject] = "";
    $newData[$student][$subject] = ($newData[$student][$subject] ?? 0) + $score;
}

// Сортировка по ключам
ksort($newData);
ksort($subjects);

dump($newData);
dump($subjects);

// Вывод
echo "<table style='border:1px solid black; text-align:center;'>";
echo "<tr>";
echo "<td></td>";

foreach ($subjects as $subject => $val) {

    echo "<td>$subject</td>";
}

echo "</tr>";


foreach ($newData as $student => $arrSubjects) {

    echo "<tr><td>$student</td>";

    foreach (array_keys($subjects) as $val) {
        echo "<td>";
        echo $arrSubjects[$val] ?? "";
        echo "</td>";
    }

    echo "</tr>";
}

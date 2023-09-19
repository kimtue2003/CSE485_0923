<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
$result = [];

foreach ($array as $dem) {
    if ($dem >= 100 && $dem <= 200 && $dem % 5 == 0) {
        $result[] = $dem;
    }
}

echo "Các số từ 100 đến 200 và chia hết cho 5 là:<br>";
foreach ($result as $dem) {
    echo $dem . "<br>";
}
?>
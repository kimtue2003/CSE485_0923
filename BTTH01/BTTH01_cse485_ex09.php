<?php
function convertToLowercase($array) {
    $result = [];

    foreach ($array as $element) {
        if (is_string($element)) {
            $lowercaseElement = strtolower($element);
            $result[] = $lowercaseElement;
        } else {
            $result[] = $element;
        }
    }

    return $result;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];

$result1 = convertToLowercase($arr1);
$result2 = convertToLowercase($arr2);
$result3 = convertToLowercase($arr3);

echo "Mảng sau khi chuyển ký tự thành chữ thường:<br>";
echo "arr1: ";
print_r($result1);
echo "<br>arr2: ";
print_r($result2);
echo "<br>arr3: ";
print_r($result3);
?>
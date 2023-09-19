<?php
function convertToUppercase($array) {
    $result = [];

    foreach ($array as $element) {
        if (is_string($element)) {
            $uppercaseElement = strtoupper($element);
            $result[] = $uppercaseElement;
        } else {
            $result[] = $element;
        }
    }

    return $result;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'b', 'c', 'd'];
$arr3 = ['a', 0, null, false];

$result1 = convertToUppercase($arr1);
$result2 = convertToUppercase($arr2);
$result3 = convertToUppercase($arr3);

echo "Mảng sau khi chuyển ký tự thành chữ hoa:<br>";
echo "arr1: ";
print_r($result1);
echo "<br>arr2: ";
print_r($result2);
echo "<br>arr3: ";
print_r($result3);
?>
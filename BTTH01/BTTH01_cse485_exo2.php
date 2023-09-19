<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];

$result = "";
$length = count($arrs);

foreach ($arrs as $key => $color) {
    $person = ($key < $length - 1) ? $names[$key] : $names[$length - 1];
    $result .= "Màu $color là màu yêu thích của $person";
    if ($key < $length - 1) {
        $result .= ", ";
    } else {
        $result .= ".";
    }
}

echo $result;
?>
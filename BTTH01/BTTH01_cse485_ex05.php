<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];
//lay gia tri = 3
$value1 = $a['b']['o']['b'];
echo "Giá trị = $value1 với key 'b'<br>";
//lay gia tri = 1
$value2 = $a['a']['c'];
echo "Giá trị = $value2 với key 'c'<br>";
//lay thong tin của key có gia tri la a
$info = $a['a'];
echo "Thông tin của phần tử có key 'a':<br>";
print_r($info);
?>
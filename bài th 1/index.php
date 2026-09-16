<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 1</title>
</head>
<body>

<h2>Bài 1: Các số chẵn từ 1 đến N</h2>

<?php

// Tạo số ngẫu nhiên từ 1 đến 100
$N = rand(1, 100);

echo "N = $N <br>";
echo "Các số chẵn: ";

for ($i = 1; $i <= $N; $i++) {

    // Kiểm tra i có chia hết cho 2 không
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

?>
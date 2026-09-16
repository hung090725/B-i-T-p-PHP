<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Tạo một số ngẫu nhiên N trong khoảng từ -100 đến 100
$N = rand(-100, 100);

// In ra số N vừa tạo
echo "Số N ngẫu nhiên là: <strong>$N</strong> <br><br>";

// Kiểm tra N có phải là số dương không (N > 0)
if ($N > 0) {
    echo "Thỏa điều kiện N là số dương. Bắt đầu thực hiện các yêu cầu:<br><br>";

    // 1. In ra các ước số của N
    echo "- Các ước số của $N là: ";
    // Vòng lặp chạy từ 1 đến N Ước số của một số $N$ là bất kỳ số nào mà $N$ chia hết
    for ($i = 1; $i <= $N; $i++) {
        // Nếu N chia hết cho i (phần dư bằng 0) thì i là ước số
        if ($N % $i == 0) {
            echo "các ước số là:".""."$i";
        }
    }
    echo "<br>";

    // 2. Viết hàm kiểm tra số nguyên tố
    // Hàm nhận vào một biến $so và trả về true (đúng) hoặc false (sai)
    function kiemTraNguyenTo($so) {
        // Các số nhỏ hơn 2 không phải là số nguyên tố
        if ($so < 2) return false;
        
        // Vòng lặp kiểm tra từ 2 đến căn bậc 2 của số đó
        for ($i = 2; $i <= sqrt($so); $i++) {
            // Nếu chia hết cho bất kỳ số nào trong khoảng này thì không phải nguyên tố
            if ($so % $i == 0) return false;
        }
        // Nếu không chia hết cho số nào thì nó là số nguyên tố
        return true;
    }

    // Gọi hàm kiểm tra cho số N
    if (kiemTraNguyenTo($N)) {
        echo "- $N <strong>là</strong> số nguyên tố. <br>";
    } else {
        echo "- $N <strong>không phải</strong> là số nguyên tố. <br>";
    }

    // 3. Tính tổng các số nguyên tố < N
    $tongNguyenTo = 0; // Biến lưu trữ tổng
    // Vòng lặp duyệt các số từ 2 đến N - 1
    for ($i = 2; $i < $N; $i++) {
        // Gọi lại hàm kiểm tra nguyên tố cho số i, nếu đúng thì cộng vào tổng
        if (kiemTraNguyenTo($i)) {
            $tongNguyenTo += $i;
        }
    }
    echo "- Tổng các số nguyên tố nhỏ hơn $N là: <strong>$tongNguyenTo</strong> <br>";

    // 4. Kiểm tra N có là số chính phương
    // Lấy căn bậc 2 của N
    $canBacHai = sqrt($N);
    // Nếu kết quả làm tròn xuống của căn bậc 2 bằng chính nó (nghĩa là nó là số nguyên)
    if (floor($canBacHai) == $canBacHai) {
        echo "- $N <strong>là</strong> số chính phương. <br>";
    } else {
        echo "- $N <strong>không phải</strong> là số chính phương. <br>";
    }

} else {
    // Nếu N <= 0 thì in ra dòng này
    echo "N không phải là số dương (N = $N). Kết thúc.";
}
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Bảng cửu chương</title>
    <style>
        /* Dùng một chút CSS cơ bản để các bảng xếp thành lưới ngang cho dễ nhìn */
        .bang {
            float: left;    /* Xếp các thẻ div nằm ngang cạnh nhau */
            width: 120px;   /* Độ rộng của mỗi bảng */
            margin: 10px;   /* Khoảng cách giữa các bảng */
            border: 1px solid #ccc; /* Đường viền xám mỏng */
            padding: 10px;  /* Khoảng cách chữ bên trong */
        }
    </style>
</head>
<body>

    <h2>Bảng Cửu Chương 1 - 10</h2>

    <?php
    // Vòng lặp thứ nhất (biến $i): Lặp từ 1 đến 10 để tạo ra 10 bảng cửu chương
    for ($i = 1; $i <= 10; $i++) {
        
        // Bắt đầu một khối <div> cho mỗi bảng cửu chương
        echo "<div class='bang'>";
        
        // In tiêu đề của bảng hiện tại (VD: Bảng 1) và thẻ <br> để xuống dòng
        echo "<b>Bảng $i</b><br>";
        
        // Vòng lặp thứ hai (biến $j): Lặp từ 1 đến 10 để tính các phép nhân bên trong mỗi bảng
        for ($j = 1; $j <= 10; $j++) {
            
            // Thực hiện phép nhân giữa số của bảng ($i) và biến chạy ($j)
            $ket_qua = $i * $j;
            
            // In phép tính ra màn hình (VD: "1 x 1 = 1") và thêm thẻ <br> để xuống dòng
            echo "$i x $j = $ket_qua <br>";
            
        } // Kết thúc vòng lặp thứ hai
        
        // Đóng khối <div> của bảng cửu chương hiện tại
        echo "</div>";
        
    } // Kết thúc vòng lặp thứ nhất
    ?>

</body>
</html>

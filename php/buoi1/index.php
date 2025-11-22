<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>

<body>
    <?php 
    // 1. In ra màn hình
        echo "Hello world <br>";
        printf("Hello ae <br>");

        // 2. Biến
        $ten = "Nguyễn Tiến Khởi";
        $tuoi = 20;
        echo $ten;
        echo "<br>";
        echo $ten . " " . $tuoi . " tuổi <br>";

        // 3. Hằng
        define("PI",  "3.14");
        echo PI . "<br>";

        // 4. Phân biệt ' ' và " ": '$ten' -> $ten, "$ten" -> Nguyễn Tiến Khởi

        // 5. Chuỗi
        #5.1. Kiểm tra độ dài của chuổi: strlen()
        echo strlen($ten)."<br>";

        #5.2. Kiểm tra số từ
        echo str_word_count($ten)."<br>";

        #5.3. Tìm kiếm ký tự trong chuỗi
        echo strpos($ten, "N")."<br>";

        #5.4. Thay thế kí tự trong chuỗi
        echo str_replace("Khởi", "Đạt", $ten)."<br>";

        // 6. Toán tử
        $soThuNhat = 10;
        $soThuHai = 5;

        // 7. Câu điều kiện
        $tong = $soThuNhat + $soThuHai;
        if ($tong < 15) {
            echo "Nhỏ hơn 15 nha bro <br>";
        } elseif ($tong === 15) {
            echo "Bằng 15 nha nhóc <br>";
        } else {
            echo "Lớn hơn 15 là bạn <br>";
        }

        // 8. switch case
        $color = "red"
        ;
        switch ($color) {
            case "red": 
                echo "is red <br>";
                break;
            case "blue":
                echo "is blue <br>";
                break;
            default:
                echo "no color";
        }

        // 9. Loop
        for ($i = 0; $i < 10; $i++) {
            echo "Em $ten xin vía A+ CSANM với Kiểm thử ae oiiii! <br>";
        }

        // 10. Array
        $array = ["Khôi", "Khởi", "Khoi"];

        echo count($array);
        echo "<br>";
        echo $array[1] . "<br>";
        print_r($array)."<br>";

        #xóa
        unset($array[0]);
        print_r($array)."<br>";
    ?>
</body>

</html>
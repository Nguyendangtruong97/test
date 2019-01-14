<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <h1>1 . Viết ra 1 chương trình php in ra độ dài của chuỗi bạn nhập vào ?
    Xây dựng 1 form có 1 ô input cho người dùng nhập chuỗi . sau khi họ ấn enter sẽ hiện ra độ dài của chuỗi</h1>
    <?php
    if(isset($_REQUEST['web'])){
        $chuoi = strlen($_REQUEST['web']);
        echo '<br> Độ dài chuỗi là :'.$chuoi;
    }
    ?>
    <form name="Chuoi" method="post" action="">
        <p>
            Nhập ký tự vô nào :
            <input type="text" name="web" value="">
        </p>
        <input type="submit" value="Xem chuỗi">
    </form>


</body>
</html>
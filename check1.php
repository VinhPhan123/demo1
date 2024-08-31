<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["submit"])) {
            $c1 = false;
            $c2 = false;
            if ($_POST["usn"] == "") {
                echo "<span style='color:red;'>Error: Tài khoản không được để trống</span><br>";
            } else {
                $c1 = true;
            }
            if ($_POST["psw"] == "") {
                echo "<span style='color:red;'>Error: Mật khẩu không được để trống</span><br>";
            } else {
                $c2 = true;
            }
            if ($c1 == true && $c2 == true) {
                echo "Tài khoản: " . $_POST["usn"] . "<br>";
                echo "Mật khẩu : " . $_POST["psw"] . "<br>";
            }
        }
    ?>
</body>
</html>
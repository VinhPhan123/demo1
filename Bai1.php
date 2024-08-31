<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        #form {
            background-color: #deebf7;
            height: fit-content;
            width: fit-content;
        }
        form {
            padding: 20px;
        }
        #usn, #psw {
            padding: 10px;
            margin: 10px;
            border: 0px;
            border-radius: 5px;
            background-color: #f8cbad;
        }
        #button {
            color: white;
            background-color: #70ad47;
            border: 0px;
            border-radius: 3px;
            padding: 5px;
            margin: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        #body {
            width: fit-content;
            height: fit-content;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <p>c. Nhấn nút đăng nhập thì sẽ hiển thị dữ liệu liệu tài khoản và mật khẩu người dùng vừa nhập ở trang khác</p>
    <div id="body">
        <div id="form">
            <form action="check1.php" method="post">
                <input type="text" name="usn" id="usn" placeholder="Tài khoản"><br>
                <input type="password" name="psw" id="psw" placeholder="Mật khẩu"><br>
                <input type="submit" name="submit" id="button" value="Đăng nhập">
            </form>
        </div>
    </div>

    <p>b. Nhấn nút đăng nhập thì sẽ hiển thị dữ liệu liệu tài khoản và mật khẩu người dùng vừa nhập tại trang chứa form</p>
    <div id="body">
        <div id="form">
            <form action="" method="post">
                <input type="text" name="usn" id="usn" placeholder="Tài khoản"><br>
                <input type="password" name="psw" id="psw" placeholder="Mật khẩu"><br>
                <input type="submit" name="submit" id="button" value="Đăng nhập">
            </form>
        </div>
    </div>
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
<?php

session_start();
require_once "../dbcontroller.php";
$db = new DB;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Restoran</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">


        <div class="row">
            <div class="col-4 mx-auto mt-4">
                <div class="form-group">
                    <form action="" method="POST">

                        <div class="">
                            <h3>LOGIN RESTORAN</h3>
                        </div>

                        <div class="form-group">
                            <label for="">EMAIL</label>
                            <input class="form-control" type="email" name="email" placeholder="Isi Email" required>
                        </div>

                        <div class="form-group">
                            <label for="">PASSWORD</label>
                            <input class="form-control" type="password" name="password" placeholder="Isi Password" required>
                        </div>

                        <div class="">
                            <input class="btn btn-primary" type="submit" name="login" value="LOGIN">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>

</html>

<?php

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);

    $sql = "SELECT * FROM tbluser WHERE email='$email' AND password='$password'";
    $count = $db->rowCOUNT($sql);

    if ($count == 0) {
        echo "<center><h3>Email atau Password SALAH</h3></center>";
    } else {
        $sql = "SELECT * FROM tbluser WHERE email='$email' AND password='$password'";
        $row = $db->getITEM($sql);

        $_SESSION['user'] = $row['email'];
        $_SESSION['level'] = $row['level'];
        $_SESSION['iduser'] = $row['iduser'];

        header("location: index.php");
    }
}



?>
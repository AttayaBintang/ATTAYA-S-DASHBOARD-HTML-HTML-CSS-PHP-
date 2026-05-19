<?php
//SIMPEL LOGIN METHOD
// session_start();

// $username = $_POST['username'];
// $email = $_POST['gmail'];
// $password = $_POST['password'];

// if ($username == "Bintang" && $email == "bintangattaya1@gmail.com" && $password == "^kusuk^B1K1NG^ME") {
//     $_SESSION['login'] = True;
//     header("Location: dashboard.php");
// }else {
//     echo "Login Gagal";
// }

?>

<?php
//ADVANCED LOGIN METHOD
require_once 'login_web.php'; 

if(isset($_POST['login'])){ //'login' berasal dari submit's "name"
    $email = $_POST['gmail'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user` WHERE `gmail`='$email' AND `password`='$password'";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);

    if($data){
        header('location:dashboard.php?login_msg=login succes!!');
    }else{
        header('location:index.php?login_msg=login failed!!');
    }
}
?>
-
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleIndex.css">
</head>

<body>
    <div class="background">
        <div class="left">
            <div class="logo"><img src="LOGO1.png" alt=""></div>
        </div>
    </div>
    <div class="right">
        <!--FORM LOGIN-->

        <h1>LOGIN</h1>

        <form action="index.php" method="post">
            <label for="gmail">Email:</label><br>
            <input type="email" name="gmail" placeholder="Enter Your Gmail" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" placeholder="Enter Your Password" required><br><br>
            <button type="submit" name="login" value="Login">Login</button>
            <p>Dont Have An Account? <a href="#">Register</a></p>
        </form>
    </div>
</body>

</html>

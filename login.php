<?php
include "includes/header.php";
include "includes/nav.php";

session_start();
    if(isset($_POST['login'])) {
        $user = $_POST['uname'];
        $pass = $_POST['password'];
        
        //connect to db and see username and password matches
        $dbuser = 'admin';
        $dbpass = 'password';
        
        //create a session if user exists
        if($user == $dbuser && $pass == $dbpass) {
            $_SESSION['username'] = $dbuser;
            $_SESSION['password'] = $dbpass;
            header('Location:indexLogin.php');
        } else {
            echo 'invalid login credentials';
        }
    }
?>

<h2>Login form</h2>
<form method="post" action="login.php">
    Username: <input type="text" name="uname" /><br />
    Password: <input type="password" name="password" /><br />
    <input type="submit" name="login" value="Login" />
</form>

<?php
include "includes/footer.php"
?>

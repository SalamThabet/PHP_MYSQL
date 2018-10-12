<?php
/* These are our valid username and passwords */
$user = 'salam2';
$pass = '123';
 session_start();
 $_SESSION['userid'] = $user;
if (isset($_POST['username']) && isset($_POST['password'])) {
    
    if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) {    
        
        if (isset($_POST['rememberme'])) {
            /* Set cookie to last 1 year */
            setcookie('username', $_POST['username'], time()+60*60*24*365);
            setcookie('password', $_POST['password'], time()+60*60*24*365);
        
        } else {
            /* Cookie expires when browser closes */
            setcookie('username', $_POST['username'], false);
            setcookie('password', $_POST['password'], false);
        }
        header('Location: indexlogin.php');
        
    } else {
        echo 'Username/Password Invalid';
    }
    
}
// setcookie('username',NULL);
// setcookie('password',NULL);

// else {
    // echo 'You must supply a username and password.';
// }
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>HELLO</h1>
<?php echo "Welcome".$_SESSION['userid'] ?>
</body>
</html>
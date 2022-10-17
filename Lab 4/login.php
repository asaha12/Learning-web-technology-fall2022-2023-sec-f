<?php
ob_start();
session_start();
//hardcoded password and username
$username="abcd";
$password="1234";
$errorMsg="";
if (isset($_POST['login']) && !empty($_POST['username'])
&& !empty($_POST['password'])) {
if ($_POST['username'] == $username &&
$_POST['password'] == $password) {
//successfull login
$_SESSION['valid'] = true;//validate session
$_SESSION['timeout'] = time();
$_SESSION['username'] = $username;//save username in session
//on successfull login head to next page
header("Location:/index.php");//change this to your desired page
exit;//exit this page
}else {
$errorMsg = 'Wrong username or password';
//display this error message in any html container
}
}
?>
action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF'];?>"
method = "post"

<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form method="" action="next.html" enctype="">
            <fieldset>
                <legend>LOGIN</legend>
                <table>
                    <tr>
                        <td>username</td>
                        <td><input type="text" name="" value="" placeholder="username" /></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td><input type="password" name="" value="" placeholder="password" /></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td>
                         
                            <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me <br></label>
                            <input type="submit" value="Submit" onclick="lsRememberMe()">
                            
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
    </html>
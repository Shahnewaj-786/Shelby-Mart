
<html>
<head>
    <title>Admin Login</title>
</head>

<body>
    <h2>Login As Admin</h2> <hr> <br>
    <form action="" method="post">
    <table>
        <tr>
            <td>
                Username: 
            </td>
            <td>
                <input type="text" name="username" value="<?php
                if(isset($_COOKIE["username"]))
                {
                    echo $_COOKIE["username"];
                }
                ?>">
            </td>
        </tr>

        <tr>
            <td>
                Password: 
            </td>
            <td>
                <input type="password" name="pass" value="<?php
                if(isset($_COOKIE["pass"]))
                {
                    echo $_COOKIE["pass"];
                }
                ?>">
            </td>

            <td>
                <input type="checkbox" name="remember"> Remember Me
            </td>
        </tr>
    </table>
    <br>
    <td>
        <input type="submit" name="Submit" value="Login">
        <a href="../../index.php"><input type="button" value="Back to Home"></a>
    </td>
    </form>
    Don't have an account? <a href="./signup.php">Sign Up</a>
</body>

</html>

<?php

include "../../Control/admin/loginvalid.php";
if(isset($_SESSION['username']))
{
    header('location: ./dash.php');
}

?>

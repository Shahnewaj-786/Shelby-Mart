<html>
<head>
    <title>Employee Registration</title>
</head>
<body>
    <h2>Inpute valid informations</h2> <hr>
    <form action="" method="post" enctype='multipart/form-data'>
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass"></td>
            </tr>

            <tr>
                <td>Date Of Birth:</td>
                <td><input type="date" name="dob" max="2003-03-01"></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                </td>
            </tr>

            <tr>
                <td>Languages: </td>
                <td><input type="checkbox" name="language[]" value="English">English 
                <input type="checkbox" name="language[]" value="Bangla">Bangla
               
                </td>
            </tr>

            <tr>
                <td>NID:</td>
                <td><input type="text" name="nid"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Sign Up"></td>
            </tr>

        </table>

        <br>

        <td>       
        <a href="../../index.php"><input type="button" value="Back to Home"></a>
    </td>
    </form>
</body>
</html>

<?php
include "../../Control/employee/signupvalid.php";
?>

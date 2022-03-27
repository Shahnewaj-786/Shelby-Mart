<?php

session_start();
if(!isset($_SESSION["username"]))
{
    header("location: ./admin/login.php");
}
if(isset($_SESSION['username']))
{
    
}

?>

<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>
        <?php
             echo "Welcome"." ".ucfirst($_SESSION["username"]);
        ?>
    </h1>
    Want to <a href="../../Control/admin/logoutvalid.php">logout?</a> <br> <hr>


<!-----------------------------Admin Set------------------------------------------------------->
    <h3>Admin Data</h3>
    <table border="1">    
             <?php   
             $data = file_get_contents("../../File/admindata.json");  
             $data = json_decode($data, true);
             echo '<tr>'.'<th>'.'Name'.'</th>'.'<th>'.'Email'.'</th>'.'<th>'.'Password'.'</th>'.'<th>'.'Date Of Birth'.'</th>'.'<th>'.'Gender'.'</th>'.'<th>'.'Language'.'</th>'.'<th>'.'NID'.'</th>'.'</tr>';
             foreach($data as $row)  
             {  
                echo '<tr>'.'<td>'.$row["username"].'</td>'.'<td>'.$row["email"].'</td>'.'<td>'.$row["pass"].'</td>'.'<td>'.$row["dob"].'</td>'.'<td>'.$row["gender"].'</td>'.'<td>'.implode(",",$row["language"]).'</td>'.'<td>'.$row["nid"].'</td>'.'</tr>';
             } 
             ?> 
    </table>

    <br>

    <h3>Delete An Admin</h3>

             <form action="" method="post">
                 <table>
                     <tr>
                         <td>Email:</td>
                         <td><input type="text" name="email"></td>
                         <td><input type="submit" name="Submit" value="Delete"></td>
                     </tr>
                 </table>
             </form>

             <br>
             <hr>



<!-----------------------------Buyer Set------------------------------------------------------->

<h3>Buyer Data</h3>
    <table border="1">    
             <?php   
             $data = file_get_contents("../../File/buyerdata.json");  
             $data = json_decode($data, true);
             echo '<tr>'.'<th>'.'Name'.'</th>'.'<th>'.'Email'.'</th>'.'<th>'.'Password'.'</th>'.'<th>'.'Date Of Birth'.'</th>'.'<th>'.'Gender'.'</th>'.'<th>'.'Language'.'</th>'.'<th>'.'NID'.'</th>'.'</tr>';
             foreach($data as $row)  
             {  
                echo '<tr>'.'<td>'.$row["username"].'</td>'.'<td>'.$row["email"].'</td>'.'<td>'.$row["pass"].'</td>'.'<td>'.$row["dob"].'</td>'.'<td>'.$row["gender"].'</td>'.'<td>'.implode(",",$row["language"]).'</td>'.'<td>'.$row["nid"].'</td>'.'</tr>';
             } 
             ?> 
    </table>

    <br>

    <!-----<h3>Delete A Buyer</h3>

             <form action="" method="post">
                 <table>
                     <tr>
                         <td>Email:</td>
                         <td><input type="text" name="email"></td>
                         <td><input type="submit" name="Submit" value="Delete"></td>
                     </tr>
                 </table>
             </form>

             <br>
             <hr>----->



<!-----------------------------Employee Set------------------------------------------------------->

<h3>Employee Data</h3>
    <table border="1">    
             <?php   
             $data = file_get_contents("../../File/employeedata.json");  
             $data = json_decode($data, true);
             echo '<tr>'.'<th>'.'Name'.'</th>'.'<th>'.'Email'.'</th>'.'<th>'.'Password'.'</th>'.'<th>'.'Date Of Birth'.'</th>'.'<th>'.'Gender'.'</th>'.'<th>'.'Language'.'</th>'.'<th>'.'NID'.'</th>'.'</tr>';
             foreach($data as $row)  
             {  
                echo '<tr>'.'<td>'.$row["username"].'</td>'.'<td>'.$row["email"].'</td>'.'<td>'.$row["pass"].'</td>'.'<td>'.$row["dob"].'</td>'.'<td>'.$row["gender"].'</td>'.'<td>'.implode(",",$row["language"]).'</td>'.'<td>'.$row["nid"].'</td>'.'</tr>';
             } 
             ?> 
    </table>

    <br>

    <!------<h3>Delete An Employee</h3>

             <form action="" method="post">
                 <table>
                     <tr>
                         <td>Email:</td>
                         <td><input type="text" name="email"></td>
                         <td><input type="submit" name="Submit" value="Delete"></td>
                     </tr>
                 </table>
             </form>

             <br>
             <hr>----->

<!-----------------------------Seller Set------------------------------------------------------->

<h3>Seller Data</h3>
    <table border="1">    
             <?php   
             $data = file_get_contents("../../File/sellerdata.json");  
             $data = json_decode($data, true);
             echo '<tr>'.'<th>'.'Name'.'</th>'.'<th>'.'Email'.'</th>'.'<th>'.'Password'.'</th>'.'<th>'.'Date Of Birth'.'</th>'.'<th>'.'Gender'.'</th>'.'<th>'.'Language'.'</th>'.'<th>'.'NID'.'</th>'.'</tr>';
             foreach($data as $row)  
             {  
                echo '<tr>'.'<td>'.$row["username"].'</td>'.'<td>'.$row["email"].'</td>'.'<td>'.$row["pass"].'</td>'.'<td>'.$row["dob"].'</td>'.'<td>'.$row["gender"].'</td>'.'<td>'.implode(",",$row["language"]).'</td>'.'<td>'.$row["nid"].'</td>'.'</tr>';
             } 
             ?> 
    </table>

    <br>

    <!------<h3>Delete A Seller</h3>

             <form action="" method="post">
                 <table>
                     <tr>
                         <td>Email:</td>
                         <td><input type="text" name="email"></td>
                         <td><input type="submit" name="Submit" value="Delete"></td>
                     </tr>
                 </table>
             </form>

             <br>
             <hr>------>


<!------------------------------------------------------------------------------------------->
     <br>
     <hr>

    <h3>Change Password for Admin</h3>

             <form action="" method="post">
                 <table>
                     <tr>
                         <td>Email:</td>
                         <td><input type="text" name="email2"></td>
                     </tr>
                     <tr>
                         <td>Password:</td>
                        <td><input type="password" name="pass"></td>
                         <td><input type="submit" name="Submit2" value="Change"></td>
                     </tr>
                 </table>
             </form>

             
</body>
</html>

<?php

include "../../Control/admin/dashvalid.php";

?>
<?php

if(isset($_POST["Submit"]))
{
    if(empty($_POST["username"]))  
      {  
           echo "<h3>Username is empty</h3>";
      }
      else if(empty($_POST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["email"]))  
      {  
           echo "<h3>Please provide your email</h3>";
      }
      else if(empty($_POST["pass"]))  
      {  
           echo "<h3>Password is empty</h3>";
      }
      else if(empty($_POST["dob"]))  
      {  
           echo "<h3>Date Of Birth is empty</h3>";
      }
      else if(empty($_POST["gender"]))  
      {  
           echo "<h3>Gender is empty</h3>";
      }
      
      else if(empty($_POST["language"]))
      {
        echo "<h3>Language is empty</h3>";
      }

      else if(empty($_POST["nid"]))
      {
        echo "<h3>Please provide valid NID number</h3>";
      }

      
      else  
      {  

          $additionalArray = array(
               'username'=> $_POST['username'],
                    'email'=> $_POST['email'],
                    'pass'=> $_POST['pass'],
                    'dob'=> $_POST['dob'],
                    'gender'=> $_POST['gender'],
                    'language'=> $_POST['language'],
                    'nid'=> $_POST['nid']
           );

           $data_results = file_get_contents('../../File/buyerdata.json');
           $tempArray = json_decode($data_results,true);
           
                     
           $tempArray[] = $additionalArray ;
           $jsonData = json_encode($tempArray, JSON_PRETTY_PRINT);
           
           if(file_put_contents('../../File/buyerdata.json', $jsonData))
           {
                echo "<h3>Registration Successful</h3>";
           }
           else
           {
                echo "<h3>Error!!! Registration failed</h3>";
           }
    
     } 

}

?>
<?php

$connection = mysqli_connect("localhost", "root", "","adminpanel");

if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $phoneNo = $_POST['phoneNo'];
        $services = $_POST['services'];
        $dateofsched = $_POST['dateofsched'];
        $timeofsched = $_POST['timeofsched'];


      $query = "INSERT INTO reservation (firstname,lastname,gender,address,phoneNo,services,dateofsched,timeofsched) VALUES ('$firstname','$lastname','$gender','$address','$phoneNo','$services','$dateofsched','$timeofsched')";
      $query_run = mysqli_query($connection, $query);
    
            if($query_run)
                 // echo "saved";
            {
                 $_SESSION['status'] = "Submitted";
                header('Location: contact.php');
    
            }
            else
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                header('Location: contact.php');
    
            }

        }
        


?>
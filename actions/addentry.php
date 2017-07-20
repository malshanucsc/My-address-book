<?php
// if send message button selected
if(isset($_POST['register'])){

?>

<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$tp1=$_POST['tp1'];
$tp2=$_POST['tp2'];
$tp3=$_POST['tp3'];
$tp4=$_POST['tp4'];
$tp5=$_POST['tp5'];

    $sqlinsertentry="INSERT INTO phonebook (fname,lname,address,tp1,tp2,tp3,tp4,tp5) VALUES ('$fname','$lname','$address','$tp1','$tp2','$tp3','$tp4','$tp5')"; 

    include ('db.php'); 

 if (mysqli_query($conn,$sqlinsertentry)=== FALSE) {
  // ; $conn->query($sqladminmessage)
               
                            echo '<script type="text/javascript">',
                'alert("Error occured!. Retry");',
                '</script>';

  
            }else{

                           echo '<script type="text/javascript">',
                'alert("Entry Added");',
                '</script>';

            }


 header("Location: ../index.php");    
}



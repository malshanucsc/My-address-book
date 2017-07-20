<?php
// if send message button selected
if(isset($_POST['deletenumber'])){

?>

<?php


$lname=$_POST['lname'];


$giventp=$_POST['tp1'];


include ('db.php'); 




$sql = "SELECT * FROM phonebook WHERE lname='$lname' ";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                        
                      while($row= $result->fetch_assoc() ) {
                    
                             $tp1 = $row['tp1']; 
                             $tp2 =$row['tp2']; 
                             $tp3 =$row['tp3']; 
                             $tp4 =$row['tp4'];
                             $tp5 =$row['tp5'];

}
}

if ($giventp==$tp1) {
    $tp1="";
}
if ($giventp==$tp2) {
    $tp2="";
}
if ($giventp==$tp3) {
    $tp3="";
}
if ($giventp==$tp4) {
    $tp4="";
}
if ($giventp==$tp5) {
    $tp5="";
}





    $sqladminmessage="UPDATE phonebook SET tp1='$tp1',tp2='$tp2',tp3='$tp3',tp4='$tp4',tp5='$tp5' WHERE  lname='$lname'"; 

    

 if (mysqli_query($conn,$sqladminmessage)=== FALSE) {
  // ; $conn->query($sqladminmessage)
               
                            echo '<script type="text/javascript">',
                'alert("Error occured!. Retry");',
                '</script>';

  
            }else{

                           echo '<script type="text/javascript">',
                'alert("Phone Number Deleted");',
                '</script>';

            }


 header("Location: ../index.php");    
}



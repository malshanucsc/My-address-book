<?php
// if send message button selected
if(isset($_POST['submit'])){

?>

<?php


$lname=$_POST['lname'];


$tp1=$_POST['tp1'];
$tp2=$_POST['tp2'];
$tp3=$_POST['tp3'];
$tp4=$_POST['tp4'];
$tp5=$_POST['tp5'];


include ('db.php'); 




$sql = "SELECT * FROM phonebook WHERE lname='$lname' ";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                        
                      while($row= $result->fetch_assoc() ) {
                    
                             $texist1 = $row['tp1']; 
                             $texist2 =$row['tp2']; 
                             $texist3 =$row['tp3']; 
                             $texist4 =$row['tp4'];
                             $texist5 =$row['tp5'];

}
}

if ($tp1=="") {
    $tp1=$texist1;
}
if ($tp2=="") {
    $tp2=$texist2;
}
if ($tp3=="") {
    $tp3=$texist3;
}
if ($tp4=="") {
    $tp4=$texist4;
}
if ($tp5=="") {
    $tp5=$texist5;
}





    $sqladminmessage="UPDATE phonebook SET tp1='$tp1',tp2='$tp2',tp3='$tp3',tp4='$tp4',tp5='$tp5' WHERE  lname='$lname'"; 

    

 if (mysqli_query($conn,$sqladminmessage)=== FALSE) {
  // ; $conn->query($sqladminmessage)
               
                            echo '<script type="text/javascript">',
                'alert("Error occured!. Retry");',
                '</script>';

  
            }else{

                           echo '<script type="text/javascript">',
                'alert("Phone Numbers Addedd Successfully");',
                '</script>';

            }


 header("Location: ../index.php");    
}



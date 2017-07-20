<?php
// if send message button selected
if(isset($_POST['Deleteentry'])){

?>

<?php


$lname=$_POST['lname'];

    $sqlinsertentry="DELETE FROM phonebook WHERE lname='$lname'"; 

    include ('db.php'); 

 if (mysqli_query($conn,$sqlinsertentry)=== FALSE) {
  // ; $conn->query($sqladminmessage)
               
                            echo '<script type="text/javascript">',
                'alert("Error occured!. Retry");',
                '</script>';

  
            }else{

                           echo '<script type="text/javascript">',
                'alert("Entry Deleted");',
                '</script>';

            }


 header("Location: ../index.php");    
}



<?php
include 'db.php';
   session_start();
//$loca = $_GET['csrc'];

  
  if(isset($_POST["submit"])){
  $email=$_POST["email"];
  $pswd=$_POST["password"];
  $_SESSION['username']=$email;
    $_SESSION['password']=$pswd;

  $sql = "SELECT name FROM user WHERE Password='$pswd' AND Email='$email'";


  $result = mysqli_query($conn,$sql);
    // $count =mysqli_fetch_array($result);
        
        

        if(mysqli_num_rows($result)>0){
           $_SESSION['start'] = time(); // Taking now logged in time.
           header("Location: ../pages/admin/admin.php");
           
  }else{
            echo '<script type="text/javascript">','alert("You are not signed up. Click below to register!");','</script>'; 
			 header("Location: ../pages/Home.php");
        }
        
   }

  ?>

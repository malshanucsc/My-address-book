<?php
session_start();
// if send message button selected
if(isset($_POST['searchentry'])){



$lname=$_POST['lname'];
 $_SESSION['lname'] = $lname;
  $_SESSION['searchresult'] = $lname;
 header("Location: ../index.php");    
}

if(isset($_POST['listentry'])){



$tp1=$_POST['tp1'];
 $_SESSION['tp1'] = $tp1;
  $_SESSION['listresult'] = $tp1;
 header("Location: ../index.php");    
}


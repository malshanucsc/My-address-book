<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/indexpage.css">


		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>My Address Book</title>

		<style type="text/css">
			
		</style>
	</head>
	<body>

	<div id="upbanner" class="col-md-12">
		<!-- <h1 id="topic">
		My address Book			
		</h1> -->
<div id="upmenu">
			<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">My Address Book</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="#" onclick="addEntry()">Add Entry</a></li>
      <li><a href="#" onclick="addTP()" >Add TP</a></li>
      <li><a href="#" onclick="deleteEntry()" >Delete Entry</a></li>
      <li><a href="#" onclick="deleteTP()" >Delete TP</a></li>
      <li><a href="#" onclick="modifyEntry()" >Modify Entry</a></li>
      <li><a href="#" onclick="searchEntry()" >Search Entry</a></li>
      <li><a href="#" onclick="listEntry()" >List Entries</a></li>
    </ul>
  </div>
</nav>
		</div>
	</div>
	
		<div class="container">
		
			<div class="row main">

				<div class="main-login main-center" id="addEntry" style="margin-top: 10%; ">
				<h5>Add a new Entry.</h5>
					<form class="" method="post" action="actions/addentry.php" id=addentryform>
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">First Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" required="required" name="fname" id="name"  placeholder="Enter your First Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="lname" required="required" id="name"  placeholder="Enter your Last Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Address</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="address" id="email" required="required" placeholder="Enter your Address"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 1</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp1" id="username"  placeholder="Enter your Phone Number 1"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 2</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp2" id="username"  placeholder="Enter your Phone Number 2"/>
								</div>
							</div>
						</div>						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 3</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp3" id="username"  placeholder="Enter your Phone Number 3"/>
								</div>
							</div>
						</div>						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 4</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp4" id="username"  placeholder="Enter your Phone Number 4"/>
								</div>
							</div>
						</div>						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 5</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp5" id="username"  placeholder="Enter your Phone Number 5"/>
								</div>
							</div>
						</div>
						<div class="form-group ">
						<input type="Submit" name="register" id="button" class="btn btn-primary btn-lg btn-block login-button" value="Register">
						</div>
						
					</form>
				</div>












<div class="main-login main-center" id="addTP" style="margin-top: 10%; display: none;">
				<h5>Add Phone Numbers.</h5>
					<form class="" method="post" action="actions/addtp.php">
						

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="lname" id="name" required="required"  placeholder="Enter your Last Name"/>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 1</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp1" id="username"  placeholder="Enter your Phone Number 1"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 2</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp2" id="username"  placeholder="Enter your Phone Number 2"/>
								</div>
							</div>
						</div>						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 3</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp3" id="username"  placeholder="Enter your Phone Number 3"/>
								</div>
							</div>
						</div>						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 4</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp4" id="username"  placeholder="Enter your Phone Number 4"/>
								</div>
							</div>
						</div>						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 5</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp5" id="username"  placeholder="Enter your Phone Number 5"/>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<input type="Submit" name="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" value="Submit">
						</div>
						
					</form>
				</div>





<div class="main-login main-center" id="deleteEntry" style="margin-top: 10%; display: none;">
				<h5>Delete Entry.</h5>
					<form class="" method="post" action="actions/deleteentry.php">
						

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" required="required" name="lname" id="name"  placeholder="Enter your Last Name"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="Submit" name="Deleteentry" id="button" class="btn btn-primary btn-lg btn-block login-button" value="Delete">
						</div>
						
					</form>
				</div>





<div class="main-login main-center" id="deleteTP" style="margin-top: 10%; display: none;">
				<h5>Delete Phone Number.</h5>
					<form class="" method="post" action="actions/deletenumber.php">
						
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" required="required" name="lname" id="name"  placeholder="Enter your Last Name"/>
								</div>
							</div>
						</div>

						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" required="required" name="tp1" id="username"  placeholder="Enter Phone Number "/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="Submit" name="deletenumber" id="button" class="btn btn-primary btn-lg btn-block login-button" value="Delete Number">
						</div>
						
					</form>
				</div>





<div class="main-login main-center" id="modifyEntry" style="margin-top: 10%; display: none;">
				<h5>Modify Entry.</h5>
					<form class="" method="post" action="actions/updateentry.php">
						

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" required="required" name="lname" id="name"  placeholder="Enter your Last Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Address</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="address" id="email"  placeholder="Enter your Address"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 1</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp1" id="username"  placeholder="Enter your Phone Number 1"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 2</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp2" id="username"  placeholder="Enter your Phone Number 2"/>
								</div>
							</div>
						</div>						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 3</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp3" id="username"  placeholder="Enter your Phone Number 3"/>
								</div>
							</div>
						</div>						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 4</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp4" id="username"  placeholder="Enter your Phone Number 4"/>
								</div>
							</div>
						</div>						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 5</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tp5" id="username"  placeholder="Enter your Phone Number 5"/>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<input type="Submit" name="updateentry" id="button" class="btn btn-primary btn-lg btn-block login-button" value="Update">
						</div>
						
					</form>
				</div>





<div class="main-login main-center" id="searchEntry" style="margin-top: 10%; display: none;">
				<h5> Search Entry.</h5>
					<form class="" method="post" action="actions/searchentry.php">
						
						

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" required="required" name="lname" id="name"  placeholder="Enter your Last Name"/>
								</div>
							</div>
						</div>

					
						<div class="form-group ">
						<input type="Submit" name="searchentry" id="button" class="btn btn-primary btn-lg btn-block login-button" value="Search Entry">
						</div>
						
					</form>
				</div>

<?php
if (isset($_SESSION['searchresult'])) {
$lname=$_SESSION['lname'];
	include ('actions/db.php'); 


$sql = "SELECT * FROM phonebook WHERE lname='$lname' ";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                        
                      while($row= $result->fetch_assoc() ) {
                    
                     

	?>
	<script type="text/javascript">
		document.getElementById('addEntry').style.display='none';
	</script>
	<div class="main-login main-center" id="searchresult" style="margin-top: 10%; ">
				<h5>Show Results of <?php echo $lname; ?>.</h5>
					<form class="" method="post" action="actions/addentry.php" id=addentryform>
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">First Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" readonly name="fname" id="name" value="<?php echo $row['fname']; ?>" />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input readonly type="text" class="form-control" name="lname"  id="name" value="<?php echo $row['lname']; ?>" />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Address</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" readonly class="form-control" name="address" id="email" value="<?php echo $row['address']; ?>" />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 1</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" readonly class="form-control" name="tp1" id="username"  value="<?php echo $row['tp1']; ?>" />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 2</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" readonly class="form-control" name="tp2" id="username"  value="<?php echo $row['tp2']; ?>"/>
								</div>
							</div>
						</div>						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 3</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" readonly class="form-control" name="tp3" id="username"  value="<?php echo $row['tp3']; ?>"/>
								</div>
							</div>
						</div>						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 4</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" readonly class="form-control" name="tp4" id="username"  value="<?php echo $row['tp4']; ?>"/>
								</div>
							</div>
						</div>						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number 5</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" readonly class="form-control" name="tp5" id="username"  value="<?php echo $row['tp5']; ?>"/>
								</div>
							</div>
						</div>
						
						
					</form>
				</div>

<?php
 }
}else{

	?>

<script type="text/javascript">

		document.getElementById('addEntry').style.display='none';

	       	document.getElementById('searchEntry').style.display='block';

</script>

<?php
}


session_destroy(); 
}

?>



	







<div class="main-login main-center" id="listEntry" style="margin-top: 10%; display: none;">
				<h5>List Entry.</h5>
					<form class="" method="post" action="actions/searchentry.php">
						
										<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Phone Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" required="required" name="tp1" id="username"  placeholder="Enter Phone Number"/>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<input type="Submit" name="listentry" id="button" class="btn btn-primary btn-lg btn-block login-button" value="Search Entry">
						</div>
						
					</form>
				</div>











<?php
if (isset($_SESSION['listresult'])) {
$tp1=$_SESSION['tp1'];
	include ('actions/db.php'); 


$sql = "SELECT * FROM phonebook WHERE tp1='$tp1' OR tp2='$tp1' OR tp3='$tp1' OR tp4='$tp1' OR tp5='$tp1'";

            $result = $conn->query($sql);
?>
<script type="text/javascript">
	document.getElementById('addEntry').style.display='none';
</script>
<div id="listresult">
<?php
            if ($result->num_rows > 0) {

                        ?>

				<h5>Show Results of <?php echo $tp1; ?>.</h5>

<table class="table table-inverse">
  <thead>
    <tr>
 
      <th>First Name</th>
      <th>Last Name</th>
      <th>Address</th>
      <th>TP1</th>
      <th>TP2</th>
      <th>TP3</th>
      <th>TP4</th>
      <th>TP5</th>      
    </tr>
  </thead>
  <tbody>
  <?php
                      while($row= $result->fetch_assoc() ) {
                    
                     

	?>
	
	









    <tr>
     
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['lname']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['tp1']; ?></td>
      <td><?php echo $row['tp2']; ?></td>
      <td><?php echo $row['tp3']; ?></td>
      <td><?php echo $row['tp4']; ?></td>
      <td><?php echo $row['tp5']; ?></td>
    </tr>




				

<?php
 }
?>
   </tbody>
</table>
<?php
}else{

	?>

<script type="text/javascript">

document.getElementById('addEntry').style.display='none';
	       	document.getElementById('listEntry').style.display='block';  
</script>

<?php
}

?>
</div>
<?php
 session_destroy();
}

?>








































			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    

<script src="css/bootstrap/js/bootstrap.min.js"></script>
<script src="javascript/indexpage.js"></script>
	</body>
</html>
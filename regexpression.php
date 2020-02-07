<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
		body{
    background-color: #525252;
}
.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
	</style>
</head>
<body>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<?php 
if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	#$regex ="/^(?=.*[a-z])\S{6,20}$/";
if (!preg_match("/^[a-zA-Z\s]+$/", $firstname)) {
	echo "characters allowed only on firstname";
	
}
elseif (!preg_match("/^[a-zA-Z\s]+$/", $lastname)) {
	echo "characters allowed only on lastname";
	# code...
}
elseif (!preg_match("/^(?=^.{6,20}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$/",$password)) {
	echo " Password complexity must contain 1 lowercase, 1 uppercase 1 digit number, a combination of special
characters, min=6 and max=20, must not contain spaces. or textfiled must only contain characters only";
		
}
else{
	echo "congratulations ";
}
}
?>


<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<center><h3 class="panel-title">sign up  <small>now!</small></h3></center>
			 			</div>
			 			<div class="panel-body">
			    		
			    		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			    			<div class="row" >
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="firstname" id="firstname" class="form-control input-sm" placeholder="First Name" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="lastname" id="lastname" class="form-control input-sm" placeholder="Last Name" required>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder=" Email Address" required="">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input style="margin-left: 90px;" type="password" name="password" class="form-control input-sm" placeholder="Password" required>
			    					</div>
			    				</div>
			    				
			    				</div>
			    			</div>
			    			
			    			<input type="submit" value="submit" name="submit" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

</body>
</html>
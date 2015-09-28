<?php 
require('classes/db.php');
require('layout/header.php');
require('includes/style.php');
	if(isset($_SESSION['signup'])){
		echo "User Created";
		$_SESSION['signup']=null;
	}
	if(isset($_SESSION['user'])&&isset($_SESSION['id'])){
	header('Location:user.php');
}

?>

<form role="form" method="post" action="php_func/isuser.php" autocomplete="off">

<h2>&nbsp;&nbsp;&nbsp;Please Sign In</h2>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	If Not a member? <a href='index.php'>SignUp</a> Here</p>
	<hr>

	
	
 <br/>
 <div class="box">
 <br/>
<div class="form-group">
 <label class="control-label col-sm-2" for="username">Username:</label>
   <div class="col-sm-8">
	<input id="username" type="text"  class="form-control" name="user" placeholder="username" required>
   </div>
</div>

<br/><br/>

<div class="form-group">
 <label class="control-label col-sm-2" for="password">password:</label>
    <div class="col-sm-8">
	 <input id="password1" type="password" class="form-control" name="pass1" placeholder="password" required>
	</div>
</div>

<br/>
<div id="warning">
<?php
 if(isset($_SESSION['warning']))
 	{	
 		echo "Please Enter the Right Credentials"." ( ".$_SESSION['warning']." )";
 		$_SESSION['warning']==null;
 		session_destroy();

 	}
?>
<div>

<br/><br/>

<center><input type="submit" value="SignIn" id ="submit"></center>


</form>
<br/>
</div>




<?php 
	require('layout/footer.php')
?>
<?php
require('classes/db.php');
$db=new Database();
$db->connect();
if(isset($_SESSION['user'])&&isset($_SESSION['id'])){
	header('Location:user.php');
}
?>

<?php 
	require('layout/header.php');
	require('includes/style.php');
?>

<form id="form_style" style="border:solid 2px grey;border-radius:10px;" role="form" class="form-horizontal" method="post" action="php_func/back_validation.php" autocomplete="off" id="form">

	<h2>&nbsp;&nbsp;&nbsp;&nbsp;Please Sign Up</h2>
	<br/>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Already a member? <a href='login.php'>Login</a></p>
	
	<!--<div class="line"></div>-->
	<hr>
	
	<br/>
	<div class="form-group">
	    <label class="control-label col-sm-2" for="username">Username:</label>
	         <div class="col-sm-8">
	             <input id="username" type="text" class="form-control" name="user" placeholder="username">
	         </div>
			  <div class="col-sm-2">
			    <div id="status"></div>
			 </div>
			 
	</div>
	
	<br/>
	
    <div class="form-group">
	   <label class="control-label col-sm-2" for="email">Email:</label>
	       <div class="col-sm-8">
	           <input id="email" type="email" class="form-control" name="email" placeholder="email">
	       </div>
		   <div class="col-sm-2">
		     <div id="e_status"></div>
		   </div>
	 </div>
    
	 
	
	<br/>
	
	 <div class="form-group">
	      <label class="control-label col-sm-2" for="password">Password:</label>
	         <div class="col-sm-8">
	           <input id="pass1" type="password" class="form-control" name="pass1" placeholder="password">
	         </div>
			 <div class="col-sm-2">
			   <div id="pass1_status"></div>
			 </div>
	</div>
	
	<br/>
	
	<div class="form-group">
	    <label class="control-label col-sm-2" for="confirmpassword">Confirm password:</label>
	         <div class="col-sm-8">
		        <input id="pass2" type="password" class="form-control" name="pass2" placeholder="confirm password">
		       </div>
			  <div class="col-sm-2">
			    <div id="pass2_status"></div>
			  </div>
	</div>
	
	<br/>
	
	<div class="form-group">
	     <label class="control-label col-sm-2" for="email">First name:</label>
	          <div class="col-sm-8"> 
	             <input id="first" type="text" class="form-control" name="first" placeholder="firstname">
	          </div>
			  <div class="col-sm-2">
			    <div id="first_status"></div>
			   </div>
	</div>
	
	<br/>
	
	<div class="form-group">
	     <label class="control-label col-sm-2" for="email">Last name:</label>
             <div class="col-sm-8">
	            <input id="last" type="text" class="form-control" name="last" placeholder="lastname">
	         </div>
			 <div class="col-sm-2">
			  <div id="last_status"></div>
			 </div>
	</div>
	
	<br/>
	
	<div class="form-group">
	  <label class="control-label col-sm-2" for="email">Register number:</label>
	    <div class="col-sm-8">
	       <input id="regno" type="text" class="form-control" name="regno" placeholder="Register Number">
	    </div>
		<div class="col-sm-2">
		   <div id="regno_status"></div>
		</div>
	</div>
	
	<br/>
	
	<div class="form-group">
	  <label class="control-label col-sm-2" for="email">Contact:</label>
	       <div class="col-sm-8">
		     <input id="contact" type="tel" class="form-control" name="contact" placeholder="contact">
	       </div>
		   <div class="col-sm-2">
		     <div id="contact_status"></div>
		  </div>
	</div>
	
	<br/>
	
	<div class="form-group">
	    <label class="control-label col-sm-2" for="email">Domain:</label>
	       <div class="col-sm-8">
	          <input id="domain" type="text" class="form-control" name="domain" placeholder="Domain">
		   </div>
		   <div class="col-sm-2">
		    <div id="domain_status"></div>
		</div>
	</div>
	
	<br/>

<center><input type="submit" value="SignUp" id ="submit"><center>
<br/>
<div id="mainerror"></div>
</form>

<script src="js/front_ver.js"  type="text/javascript"></script>
<script src="js/valid.js"  type="text/javascript"></script>


<?php 
	require('layout/footer.php')
?>
<html>
	<head>
	</head>
	<style>
		.container{
			height:900px; 
			width:400px; 
			align:center;
			background-color:white; 
			border: 2px solid white; 
			border-radius:100px;
			margin-left:auto;
			margin-right:auto;
			margin-top:50px;
			position: relative;
			display:block;	
		}
		.inner-container{
			background-color:white;
			height:150px;
			width:275px;
			margin-left:auto;
			margin-right:auto;
			margin-top:35px;
			padding-top:20px;
		}
		.credentials{
			width:100%;
			padding-top:10px;
			border-radius:10px;
			padding-bottom:10px;
		}
		.signin
		{
			color:black;
			margin-left:auto;
			margin-right:auto;
			text-align:center;
		}
	</style>
	<body style="background-color:#04C5F9">
		<div class="container">
			<div class="signin">
				<img src="https://image3.mouthshut.com/images/imagesp/925609709s.jpg" alt="Aress Picture" style="height:90px;width:200px;">
			</div>
			<div class="inner-container">
				<input type="text" name="firstname" placeholder="First Name" class="credentials">
				<input type="text" name="lastname" placeholder="Last Name" class="credentials" style="margin-top:5%;">
				<input type="number" name="phonenumber" placeholder="Phone Number" class="credentials" style="margin-top:5%;">
				<input type="number" name="mobilenumber" placeholder="Mobile Number" class="credentials" style="margin-top:5%;">
				<input type="textarea" name="address" placeholder="Address" class="credentials" style="margin-top:5%;">				
				<input type="number" name="zipcode" placeholder="Zip Code" class="credentials" style="margin-top:5%;">
				<input type="text" name="state" placeholder="State" class="credentials" style="margin-top:5%;">
				<input type="text" name="country" placeholder="Country" class="credentials" style="margin-top:5%;">
				<input type="text" name="verificationcode" placeholder="Verification Code" class="credentials" style="margin-top:5%;">
				<input type="text" name="emailid" placeholder="Email Id" class="credentials" style="margin-top:5%;">
				<input type="password" name="password" placeholder="Password" class="credentials" style=" margin-top:5%;">
				<input type="repassword" name="repassword" placeholder="Re-enter Password" class="credentials" style=" margin-top:5%;">
				<form action="signin.php">
					<button type="submit" name="submit" class="credentials" action="index.php" style="margin-top:5%; text-align:center; background-color:#04C5F9; color:white;"> Sign Up </button>				
				</form>
			</div>
		</div>
	</body>
</html>

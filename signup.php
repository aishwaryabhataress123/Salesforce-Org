<html>
<head>
</head>
<style>
	.container{
		height:950px; 
		width:400px; 
		align:center;
		background-color:white; 
		border: 2px solid white; 
		border-radius:40px;
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
	<?php
	$firstname = $lastname = $phonenumber = $mobilenumber = $street = $city = $zipcode = $state = $country = $verification = $emailid = $password = $repassword = "";
	?>
		<div class="container">
		<div class="signin">
			<img src="https://image3.mouthshut.com/images/imagesp/925609709s.jpg" alt="Aress Picture" style="height:90px;width:200px;">
		</div>
		<div class="inner-container">
		<form action="index.php" method="post">
			<input type="text" name="firstname" placeholder="First Name" class="credentials" value="<?php echo $firstname;?>">
			<input type="text" name="lastname" placeholder="Last Name" class="credentials" style="margin-top:5%;" value="<?php echo $lastname;?>">
			<input type="number" name="phonenumber" placeholder="Phone Number" class="credentials" style="margin-top:5%;" value="<?php echo $phonenumber;?>">
			<input type="number" name="mobilenumber" placeholder="Mobile Number" class="credentials" style="margin-top:5%;" value="<?php echo $mobilenumber;?>">
			<input type="text" name="street" placeholder="Street" class="credentials" style="margin-top:5%;" value="<?php echo $street;?>">
			<input type="text" name="city" placeholder="City" class="credentials" style="margin-top:5%;" value="<?php echo $city;?>">
			<input type="number" name="zipcode" placeholder="Zip Code" class="credentials" style="margin-top:5%;" value="<?php echo $zipcode;?>">
			<input type="text" name="state" placeholder="State" class="credentials" style="margin-top:5%;" value="<?php echo $state;?>">
			<input type="text" name="country" placeholder="Country" class="credentials" style="margin-top:5%;" value="<?php echo $country;?>">
			<input type="text" name="verificationcode" placeholder="Verification Code" class="credentials" style="margin-top:5%;" value="<?php echo $verificationcode;?>">
			<input type="text" name="emailid" placeholder="Email Id" class="credentials" style="margin-top:5%;" value="<?php echo $emailid;?>">
			<input type="password" name="password" placeholder="Password" class="credentials" style=" margin-top:5%;" value="<?php echo $password;?>">
			<input type="password" name="repassword" placeholder="Re-enter Password" class="credentials" style=" margin-top:5%;" value="<?php echo $repassword;?>">
			
			<button type="submit" name="submit" class="credentials" action="signin.php" style="margin-top:5%; text-align:center; background-color:#04C5F9; color:white;"> Sign Up </button>				
		</form>
		</div>
	</div>
</body>
</html>
<?php
	$db = pg_connect("host=ec2-54-235-177-183.compute-1.amazonaws.com port=5432 dbname=de5l5oldo4t2ha user=vjvypqloydobyn password=2cb5b9b74f14a101c888f22d21ef0c7b648d913a28041ed12286b5cfc03962d6");
	if (!$db) {
  		echo "An error occurred.\n";
  		exit;	
	}
	$query = "INSERT INTO salesforce.user(FirstName, LastName, Alias, CommunityNickname, phone, mobilephone, street, city, postalcode, state, country, email, TimeZoneSidKey, LocaleSidKey,EmailEncodingKey, ProfileId, LanguageLocaleKey, Username, password__c) VALUES('$_POST[firstname]','$_POST[lastname]','asdf','qqwer','$_POST[phonenumber]', '$_POST[mobilenumber]', '$_POST[street]', '$_POST[city]', '$_POST[zipcode]', '$_POST[state]', '$_POST[country]', '$_POST[emailid]', '(GMT-07:00) Pacific Daylight Time (America/Los_Angeles)', 'English(United States)', 'General US and Western Europe', 'Service cloud', 'English', '$_POST[emailid]', '$_POST[password]');";
	$result= pg_query($query);
?>

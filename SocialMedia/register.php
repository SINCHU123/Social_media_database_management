<?php
$servername='localhost';
$username='root';
$password='';
$dbname='socialmedia';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
die('Could not Connect MySql:' .mysql_error());
}
if(isset($_POST['user_id']))
{
	echo "connected to db";
		
$username=$_POST['uname'];
$userID=$_POST['user_id'];
$Bio=$_POST['bio'];
$emailid=$_POST['email'];
echo basename($_FILES['pro']['name']);
$td=basename($_FILES['pro']['name']);
move_uploaded_file($_FILES["pro"]["tmp_name"],$td);
	
		 $sql = "INSERT INTO user(`username`, `user_ID`, `bio`,email,profile_photo) VALUES ('$username','$userID','$Bio','$emailid','$td')";
        	
			
	     
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Data Registered successfully');
				window.location.href='loginpage.html';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Registration failed');
				window.location.href='register.html';
				</script>";			
		}
		echo "<br><br><a href='login.html'><button>back</button></a>";
	
}
else{
	die("cant acess directly");
}
?> 
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
		
$user_id=$_POST['user_id'];
$td=basename($_FILES['post_id']['name']);
move_uploaded_file($_FILES["post_id"]["tmp_name"],"posts/".$td);
$location=$_POST['location'];
$caption=$_POST['caption'];
	
		 $sql = "INSERT INTO `post`(`user_id`, `post_id`, `location`,caption) VALUES ('$user_id','$td','$location','$caption')";
        	

		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('New post added successfully');
				window.location.href='miniinstahome.php?ousr=$user_id';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Account Creation failed');
				window.location.href='createaccount.php';
				</script>";			
		}
	
}
else{
	die("cant access directly");
}
?>
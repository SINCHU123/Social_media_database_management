<?php
session_start();
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
	
$result = mysqli_query($conn,"SELECT * FROM user WHERE user_ID='" . $_POST["user_id"] . "'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {

$ousr=$row['user_ID'];
$_SESSION[$ousr] = $ousr;




				echo "<script>
				alert('Lgoin successfull');
				window.location.href='miniinstahome.php?ousr=$ousr';
				</script>";

} else {
					echo "<script>
				alert('Login failed');
				window.location.href='loginpage.php';
				</script>";	

}
}
else{
	die("cant access directly");
}	

?>
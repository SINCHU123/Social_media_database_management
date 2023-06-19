<?php
session_start();
if(!isset($_REQUEST['ousr'])){
    die('cant acess this file directly') ;
}
$ousr=$_REQUEST['ousr'];

if(!isset($_SESSION[$ousr])){
    die('this user is not authenticated') ;
}
$servername='localhost';
$username='root';
$password='';
$dbname='socialmedia';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
die('Could not Connect MySql:' .mysql_error());
} 
$result = mysqli_query($conn,"SELECT * FROM user WHERE user_ID='" .$ousr. "'");
$row  = mysqli_fetch_array($result);
if(isset($_POST['uname'])){
    $username=$_POST['uname'];
    $userid=$_POST['user_id'];
    $bio=$_POST['bio'];
    $email=$_POST['email'];
    $td=basename($_FILES['pro']['name']);
    move_uploaded_file($_FILES["pro"]["tmp_name"],$td); 

        $conn->query("UPDATE `user` SET `username` = '$username', `user_ID` = '$userid', `bio` = '$bio', `email` = '$email' WHERE `user`.`user_ID` = '$ousr' "); 
        echo "<script>
				alert('profile updated');
				window.location.href='viewpost.php?ousr=$userid';
				</script>";
        }
?>
<html>
<center>
<table border=1>
<h3>SOCIAL MEDIA DATABASE</h3>
<HR SIZE="3"  COLOR="BLUE"><br>
<h4>update your profile</h4>
<form action="updateprofile.php?ousr=<?php echo $ousr?>" method='post' enctype="multipart/form-data">
<tr><td>Username</td><td><input type="text" name='uname' value=<?php echo $row['username']; ?> required></input></td></tr>
<tr><td>userID</td><td><input type="text" name='user_id' value=<?php echo $row['user_ID'] ;?> required></input></td></tr>
<tr><td>Bio</td><td><input type="text" name='bio' value=<?php echo $row['bio']; ?> required></input></td></tr>
<td>Email</td><td><input type="email" name='email' value=<?php echo $row['email']; ?> required></input></td></tr>
<tr><td>profilePhoto</td><td><input type="file" name="pro"></input></td></tr>
<tr><td></td><td><input type="submit" value=update></input></td>   </tr>

</form>
</table>
<br><br><a href='viewpost.php?ousr=<?php echo $ousr?>'><button>back</button></a>
</html>

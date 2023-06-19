<html>
<?php
session_start();
if(!isset($_REQUEST['ousr'])){
    die('cant acess this file directly') ;
}
$ousr=$_REQUEST['ousr'];
if(!isset($_SESSION[$ousr])){
    die('this user is not authenticated');
}
?>
<center>
<head>
<title>
MiniInsta Home
</title>

</head>
<img src='Instagram-Lite.jpg' style="width: 50px;height: 30px; edge: 20px; border-radius:50% 10%/10% 40%; solid #535;">
<h2>WELCOME TO INSTA-LITE HOME PAGE</h2><HR SIZE="3"  COLOR="purpal">
<body style="background-image:url('bgimage.jpg'); background-size:1300px 800px ;" >
   

<?php


$conn = new mysqli('localhost', 'root', '', 'socialmedia');
if(!$conn){
    die("database Not connected");
}

$result = mysqli_query($conn,"SELECT * FROM user WHERE user_ID='" .$ousr. "'");
$row  = mysqli_fetch_array($result);

$profilephpto=$row['profile_photo'];
?>

<br>
<h3><?php echo $row['user_ID']; ?></h3>
<img src="<?php echo $profilephpto ?>" style="width: 80px; height: 90;"></img><br>
<?php echo $row['username']; ?>
<br><br>
<table border=1 >

<tr><th>Mini Insta</th><tr>

<tr><td><a href=<?php echo "viewpost.php?ousr=".$ousr;?>>View Profile</a></td></tr>
<tr><td><a href=<?php echo "follower.php?ousr=".$ousr;?>>View Follower</a></td></tr>
<tr><td><a href=<?php echo "following.php?ousr=".$ousr;?>>View Following</a></td></tr>
<tr><td><a href=<?php echo "post.php?ousr=".$ousr;?>>Add Post</a></td></tr>
<tr><td><a href=<?php echo "users.php?ousr=".$ousr;?>>All users</a></td></tr>
</table>



</body>
<br>Click here to <a href="logout.php" title="Logout">Logout</a>
</center>
</html>
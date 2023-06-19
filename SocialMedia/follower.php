<?php
session_start();
if(!isset($_REQUEST['ousr'])){
    die('cant acess this file directly') ;
}
$ousr=$_REQUEST['ousr'];
if(!isset($_SESSION[$ousr])){
    die('this user is not authenticated') ;
}
?>
<html>
    <center>
        <h1>followers</H1>
        <HR SIZE="3"  COLOR="BLUE"><br>
<?php

$servername='localhost';
$username='root';
$password='';
$dbname='socialmedia';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
die('Could not Connect MySql:' .mysql_error());
}

	
$result = mysqli_query($conn,"SELECT * FROM user_follow WHERE following_user='".$ousr."'");

?>
<table border=1>

<tr><th>user_name</th><th>user_id</th><tr>
<?php
while ($row  = mysqli_fetch_array($result)) {
    $data="unfollow.php?vusr=".$row['user_ID']."&page=follower&ousr=".$ousr;  
echo "<tr><td>".$row['user_ID']."</td><td><a href='$data'>remove</a></td></tr>";
}
?>
</table>
<+
</center>

</html>

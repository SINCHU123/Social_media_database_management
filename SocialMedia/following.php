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
        <h1>following</H1>
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

	
$result = mysqli_query($conn,"SELECT * FROM user_follow WHERE user_ID='".$ousr."'");

?>
<table border=1>

<tr><th>user_name</th><th>user_id</th><tr>
<?php
while ($row  = mysqli_fetch_array($result)) {
    $data="unfollow.php?vusr=".$row['following_user']."&page=following&ousr=".$ousr;  
echo "<tr><td>".$row['following_user']."</td><td><a href='$data'>unfollow</a></td></tr>";
}
?>
</table>
<br><br><a href='miniinstahome.php?ousr=<?php echo $ousr?>'><button>back</button></a>
</center>
</html>

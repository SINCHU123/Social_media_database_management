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
        <h2>INSTALIGHT USERS</H2>
        <HR SIZE="3"  COLOR="green"><br>
<?php

$servername='localhost';
$username='root';
$password='';
$dbname='socialmedia';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
die('Could not Connect MySql:' .mysql_error());
}

	
$result = mysqli_query($conn,"SELECT * FROM user");

?>
<input type="search" 
<table border=1>

<tr><th>user_name</th><th>user_id</th><th></th><tr>
<?php
while ($row  = mysqli_fetch_array($result)) {
    if($ousr==$row['user_ID']){
        continue;
    }
    $data="view.php?vusr=".$row['user_ID']."&ousr=".$ousr;  
echo "<tr><td>".$row['username']."</td><td>".$row['user_ID']."</td><td><a href='$data'>View Profile</a></td></tr>";
}
?>
</table>
<br><br><a href='miniinstahome.php?ousr=<?php echo $ousr?>'><button>back</button></a>
</center>

</html>

<html>
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
<center>
<table border=1>
<h3>SOCIAL MEDIA DATABASE</h3>
<HR SIZE="2"  COLOR="green"><br>
<h4>POST YOUR PHOTOS OR VIDEOS</h4>
<form action='addpost.php' method='post' enctype="multipart/form-data">
<tr><td>user_id</td><td><input type="text" name='user_id' value="<?php echo $ousr ?> " readonly></input></td></tr>
<tr><td>post_id</td><td><input type="file" name='post_id' required></input></td></tr>
<tr><td>location</td><td><input type="text" name='location' ></input></td></tr>
<td>caption</td><td><input type="text" name='caption' required></input></td></tr>
<tr><td></td><td><input type="submit"></input></td>   </tr>


</form>
</table>
<br><br><a href='miniinstahome.php?ousr=<?php echo $ousr?>'><button>back</button></a>
</html>
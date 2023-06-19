<?php
session_start();
if(!isset($_REQUEST['ousr'])){
    die('cant acess this file directly') ;
}
if(!isset($_REQUEST['vusr'])){
    die('cant acess this file directly') ;
}
$ousr=$_REQUEST['ousr'];
$vusr=$_REQUEST['vusr'];
if(!isset($_SESSION[$ousr])){
    die('this user is not authenticated') ;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname='socialmedia';
    $conn = new mysqli($servername, $username, $password, $dbname);
    if(!$conn){
    die('Could not Connect MySql:' .mysql_error());
    }


        if($_REQUEST['page']=='following'){
        $conn->query("DELETE FROM user_follow WHERE `user_ID` ='$ousr' AND `following_user` = '$vusr'"); 
        echo "<script>
				alert('unfollowed');
				window.location.href='following.php?ousr=$ousr';
				</script>";
        }
        else{
            $conn->query("DELETE FROM user_follow WHERE `user_ID` ='$vusr' AND `following_user` = '$ousr'"); 
            echo "<script>
				alert('unfollowed');
				window.location.href='follower.php?ousr=$ousr';
				</script>";
        }
        


    ?>
</body>
</html>
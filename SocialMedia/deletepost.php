<?php
session_start();
if(!isset($_REQUEST['ousr'])){
    die('cant acess this file directly') ;
}
if(!isset($_REQUEST['pid'])){
    die('cant acess this file directly') ;
}
$ousr=$_REQUEST['ousr'];
$pid=$_REQUEST['pid'];
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

        $conn->query("DELETE FROM post WHERE `user_id` ='$ousr' AND `post_id` = '$pid'"); 
        echo "<script>
				alert('post deleted');
				window.location.href='viewpost.php?ousr=$ousr';
				</script>";

    ?>
</body>
</html> 
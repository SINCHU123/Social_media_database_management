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
    if(isset($_REQUEST['photo_id'])){
        $pid=$_REQUEST['photo_id'];
        
        
        $conn->query("INSERT INTO likes(user_id,cuser_id,photo_id) VALUES ('$vusr','$ousr','$pid')"); 
        $conn->query("UPDATE `post` SET  `likes` = `likes`+1 WHERE `user_id` = '$vusr' AND `post_id` = '$pid'"); 
        echo "<script>
				alert('liked');
				window.location.href='view.php?vusr=$vusr&ousr=$ousr';
				</script>";
        
    }

    ?>
</body>
</html>
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
    

        if($_REQUEST['response']=='accepted'){
            $conn->query("INSERT INTO user_follow(user_ID,following_user) VALUES ('$vusr','$ousr')");
            $conn->query("UPDATE `request` SET `replay` = 'accepted' WHERE `user_id` = '$vusr' AND `touser_id` = '$ousr'"); 
        echo "<script>
				alert('request accepted');
				window.location.href='viewpost.php?ousr=$ousr';
				</script>";
        }
        else{
            $conn->query("UPDATE `request` SET `replay` = 'rejected' WHERE `user_id` = '$vusr' AND `touser_id` = '$ousr'");  
            echo "<script>
				alert('request rejected');
				window.location.href='viewpost.php?ousr=$ousr';
				</script>";
        }
        
    

    ?>
</body>
</html>
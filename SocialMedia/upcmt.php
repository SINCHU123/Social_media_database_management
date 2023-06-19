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
    if(isset($_POST['add'])){
        $pid1=$_POST['pid'];
        $cm=$_POST['cmt'];
        
        $conn->query("INSERT INTO comments(user_id,photo_id,cuser_id,comment) VALUES ('$vusr','$pid1','$ousr','$cm')"); 
        echo "<script>
				alert('comment added');
				window.location.href='view.php?vusr=$vusr&ousr=$ousr';
				</script>";
        
    }

    ?>
</body>
</html>
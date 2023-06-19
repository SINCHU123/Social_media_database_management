<?php
session_start();
$vusr=$_REQUEST['up'];
$ousr=$_SESSION['user_id'];
?>

<html>
    <center>
<head>
<script>
function follow(){
    <?php
            $req="view.php?up=".$vusr."&follow=true";
           
        ?>
    alert('Do you want to follow');
        window.location.href=<?php echo $req ?>;
  
}
</script>
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

if($_REQUEST['follow']=="true"){
    try{
    $conn->query("INSERT INTO user_follow(user_ID,following_user) VALUES ('$ousr','$vusr')"); 

}
catch(Exception){

}
}


$result = mysqli_query($conn,"SELECT * FROM user WHERE user_ID='$vusr'");
$row  = mysqli_fetch_array($result);
echo $_SESSION['user_id']."is viewing ".$row['user_ID'];
$result1 = mysqli_query($conn,"SELECT * FROM user_follow WHERE user_ID='$ousr' and following_user='$vusr'");
$row1  = mysqli_fetch_array($result1);
echo "<br>";
if($row1){
    echo "following";
}
else{
    echo "not following";
    echo '<button onclick="follow()">follow</button>';
}

?>

</body>

<!-- <table border=1>

<tr><th>user_name</th><th>user_id</th><th></th><tr>

</table> -->
</center>
</html>

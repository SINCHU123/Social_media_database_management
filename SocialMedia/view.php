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
    <center>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view page</title>
    <script>
        function fun(pid){
            document.getElementById(pid).style.display='table-row';
        }
    </script>

</head>
<body>
    <h2>SOCIAL MEDIA DATABASE</H2>
    <hr size='2' color='green'><br>

    <?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname='socialmedia';
    $conn = new mysqli($servername, $username, $password, $dbname);
    if(!$conn){
    die('Could not Connect MySql:' .mysql_error());
    }
    

    $result = mysqli_query($conn,"SELECT * FROM user WHERE user_ID='$vusr'");
    $row  = mysqli_fetch_array($result);
    echo $ousr."  is viewing  ".$row['user_ID'];
    $result1 = mysqli_query($conn,"SELECT * FROM user_follow WHERE user_ID='$ousr' and following_user='$vusr'");
    $row1  = mysqli_fetch_array($result1);
    echo "<br>";
?>

<table border=1>
    <?php
if($row1){
    echo "<br>following</br><br>";
    
    $result2=$conn->query("SELECT * FROM post WHERE user_id='" . $vusr . "'"); 
    if(mysqli_num_rows($result2)>0){
        $count=0;
    while ($row2  = mysqli_fetch_array($result2)) {

        $pid=$row2['post_id'];
        $ph="posts/".$row2['post_id'];
        echo "<tr><td><center><img src='$ph' style='width:200px; height:auto; '></center></td></tr>";
        echo "<tr><td><center>location:".$row2['location']."</center></td></tr>";
        echo "<tr><td><center>caption:".$row2['caption']."</center></td></tr>";
        $result3=$conn->query("SELECT * FROM likes WHERE cuser_id='" . $ousr . "' and user_id='".$vusr. "' and photo_id='".$pid."'");
        if (mysqli_num_rows($result3) > 0) {
            echo "<tr><td><center>liked &#129505;</center></td></tr>";
        }
        else{
            $ah="like.php?vusr=".$vusr."&photo_id=".$pid."&ousr=".$ousr;
            echo "<tr><td><center><a href='$ah' >like</a></center></td></tr>";
        }

        echo '<tr><td><center><a href="#" onclick=fun("'.$count.'") >view comments</a></center></td></tr>';
        $result4=$conn->query("SELECT * FROM comments WHERE cuser_id='" . $ousr . "' and user_id='".$vusr."'");


        echo "<tr id='$count' style='display:none'><td>";
        
        while ($row4  = mysqli_fetch_array($result4)) {
            if($pid==$row4['photo_id']){
            echo "<center>".$row4['comment']." -at ".$row4['time']."</center>";
        }
        }
        echo "</td></tr>";
      
        echo "<tr><td><center><form action='upcmt.php?vusr=$vusr&ousr=$ousr' method='post'><input type='text' name='cmt' placeholder='add comments..' required>
        <input type='text' name='pid' value='$pid' style='display:none' >
        <input type='submit' name='add' value='add'>
        </form></td></tr>";
        echo "<tr><td><br></td></tr>";   
        $count=$count+1; 
    }
    }
    else{
        echo "NO POST AVAILABLE";
    }

}
else{
    $result5 = mysqli_query($conn,"SELECT * FROM request WHERE user_id='$ousr' and touser_id='$vusr'");
    if(mysqli_num_rows($result5)>0){
        echo "<br>requested</br><br>";
    }
    else{
    echo "<br>not following</br><br>";
    $qes="request.php?vusr=".$vusr."&ousr=".$ousr;
    echo "<br>";
    echo "<a href='$qes'>follow<a>";
    }
}

    
    ?>
    </table>
    <br><br><a href='users.php?ousr=<?php echo $ousr?>'><button>back</button></a>
</body>
</center>

</html>
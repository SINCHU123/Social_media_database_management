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
<!DOCTYPE html>
<html lang="en">
    <center>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        function fun(pid){
            document.getElementById(pid).style.display='table-row';
        }
        function alt(ousr,pid){
            if(confirm("do you want to delete?"))
                window.location.href='deletepost.php?ousr='+ousr+'&pid='+pid;
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
        ?>
        <hr>
        
    <h2>requests</h2>
    <table border=1>
        <?php
            $result1 = mysqli_query($conn,"SELECT * FROM request WHERE touser_id='".$ousr."'");
            if(mysqli_num_rows($result1)>0){
                while ($row1  = mysqli_fetch_array($result1)) {
                    if($row1['replay']=='rejected'){
                        continue;
                    }
                    elseif($row1['replay']=='accepted'){
                        continue;
                    }
                    else{
                        $data="requestresp.php?vusr=".$row1['user_id']."&response=accepted&ousr=".$ousr; 
                        $data1="requestresp.php?vusr=".$row1['user_id']."&response=rejected&ousr=".$ousr;  
                        echo "<tr><td>".$row1['user_id']."</td><td><a href='$data'>accept</a></td><td><a href='$data1'>rejected</a></td></tr>";
                    }
                }
            }
            else{
                echo "no requests";
            }
            $result = mysqli_query($conn,"SELECT * FROM user WHERE user_ID='" .$ousr. "'");
            $row  = mysqli_fetch_array($result);

            $profilephpto=$row['profile_photo'];
        ?>
    </table>
    <hr>
    <h3><?php echo $row['user_ID']; ?></h3>
    <img src="<?php echo $profilephpto ?>" style="width: 80px; height: 80px; border-radius: 50%;"></img><br>
    <?php echo $row['username']; ?><br>
    <?php echo $row['bio'];?><br><br>
    <table border=1>
    <tr><td><a href=<?php echo "updateprofile.php?ousr=".$ousr;?>>Edit Profile</a></td></tr>
        </table>




    <h2> YOUR POST </h2>
   
    <table border=1>  
        
    <?php
        $result=$conn->query("SELECT * FROM post WHERE user_id='" . $ousr . "'");
        if(mysqli_num_rows($result)>0){
            $count=0;
        while ($row  = mysqli_fetch_array($result)) {
            $pid=$row['post_id'];
            $ph="posts/".$row['post_id'];
            echo "<tr><td><img src='$ph' style='width:200px; height:auto; '></td></tr>";
            echo "<tr><td><center>location:".$row['location']."</center></td></tr>";
            echo "<tr><td><center>caption:".$row['caption']."</center></td></tr>";
            echo "<tr><td><center>&#129505;:".$row['likes']."</center></td></tr>";
            
            echo '<tr><td><center><a href="#" onclick=fun("'.$count.'") >view comments</a></center></td></tr>';
            $result4=$conn->query("SELECT * FROM comments WHERE user_id='" .$ousr. "'");
            
            echo "<tr id='$count' style='display:none'><td>";
        
            while ($row4  = mysqli_fetch_array($result4)) {
                if($pid==$row4['photo_id']){
                echo "<center>".$row4['cuser_id']." - ".$row4['comment']."</center>";
            }
            }
            echo "</td></tr>";
            
            echo '<tr><td><center><a href="#" onclick=alt("'.$ousr.'","'.$pid.'") >Delete</a></center></td></tr>';
            echo "<tr><td><br></td></tr>"; 
            $count=$count+1;    
        }
    }
    else{
        echo "NO POST AVAILABLE";
    }
     ?>
     
    </table>
    <br><br><a href='miniinstahome.php?ousr=<?php echo $ousr?>'><button>back</button></a>
</body>
    </center>
</html>
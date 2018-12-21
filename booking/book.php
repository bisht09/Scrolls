<?php
session_start();
include('connection.php');


$event=$_POST['event'];
$description=$_POST['description'];
$info=$_POST['info'];
$type=$_POST['type'];
$date=$_POST['date'];
$itime=$_POST['itime'];
$etime=$_POST['etime'];
$place=$_POST['place'];
$id = $_SESSION['user_id'] ;

//echo $itime;
$query="Select * from events where
(
(time > '$itime' and time < '$etime') 
or
(end_time > '$itime' and end_time < '$etime')
or 
(time < '$itime' and end_time > '$etime')

)
and 
date='$date'
";

$result = mysqli_query($link , $query) ;
    $count = mysqli_num_rows($result) ;
    if($count){
   $row = mysqli_fetch_assoc($result) ;
        if($row)
        {     header("location: error.php");
              echo "Error: DATA cannot be inserted";
              exit();    
        }
        
    
   }
    else{
        echo "ERROR: Unable to run the fetch query" ;
      }

$sql1 = "SELECT auth from office_bearers WHERE user='$id'" ;
$res = mysqli_query($link , $sql1) ;
if(!$res){
    echo "<h1>The User is not registered</h1>" ;
    exit() ;
}
$row = mysqli_fetch_assoc($res) ;
$at = $row['auth'] ;

$sql = "INSERT INTO  events (event_name, description,info, event_type,date,time,end_time,venue,user,club_name) VALUES ('$event', '$description','$info' , '$type','$date','$itime','$etime','$place','$id','$at') " ;
 $result = mysqli_query($link,$sql) ;
    if(!$result){
        echo "<div>ERROR: Unable to run the insert query.</div>" ;
    }else {
        header("location: index.php") ;
    }
?>

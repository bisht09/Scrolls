<?php   
    session_start() ;
    if(!isset($_SESSION['user_id'])){
        header("location: index.php") ;
    }

    include "connection.php" ;

    //process the variables
    $id = $_POST['eventid'] ;
    $name = $_POST['event'] ;
    $desc = $_POST['description'] ;
    $info = $_POST['info'] ;
    $clubtype = $_POST['type'] ;
    $date = $_POST['date'] ;
    $itime = $_POST['itime'] ;
    $stime = $_POST['etime'] ;
    $venue = $_POST['place'] ;

    //prepare the query
    $sql = "UPDATE events SET event_name='$name', description='$desc', info='$info', event_type='$clubtype', date='$date', time='$itime', end_time='$stime', venue='$venue' WHERE event_id='$id'" ;
    $result = mysqli_query($link, $sql) ;
    if(!$result){
        echo "<h1>The query failed</h1>" ;
        exit() ;
    }else{
        header("location: loggedin.php") ;
    }
?>
<?php
    session_start() ;
    if(!isset($_SESSION['user_id'])){
        header("location: index.php") ;
    }

    include "connection.php" ;

    $id = $_POST['eventid'] ;
    $sql = "SELECT user FROM events WHERE event_id='$id'" ;
    $result = mysqli_query($link, $sql) ;
    $row = mysqli_fetch_assoc($result) ;
    if($row['user']!=$_SESSION['user_id']){
        echo "<h1>The event corresponding to the entered event id is not booked by you!!!!</h1>" ;
        exit() ;
    }

    $sql = "DELETE FROM events WHERE event_id='$id'" ;
    $result = mysqli_query($link , $sql) ;
    if(!$result){
        echo "<h1>Unable to run the query.</h1>" ;
        exit() ;
    }else{
        header("location: loggedin.php") ;
    }
?>
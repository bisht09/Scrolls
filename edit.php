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
    $sql = "SELECT * FROM events WHERE event_id='$id'";
    $result = mysqli_query($link , $sql) ;
    $row = mysqli_fetch_assoc($result) ;
    $eventid = $row['event_id'] ;
    $eventname = $row['event_name'] ;
    $desc = $row['description'] ;
    $info = $row['info'] ;
    $eventtype = $row['event_type'] ;
    $date = $row['date'] ;
    $stime = $row['time'] ;
    $club = $row['club_name'] ;
    $etime = $row['end_time'] ;
    $venue = $row['venue'] ;
?>

<html>

    
    <head>
<!--        <link rel="stylesheet" href="eventsCSS.css">-->
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--    <link href="csss/bootstrap.min.css" rel="stylesheet">-->
        
    <style>
            h1 {
                color: purple ;
            }
            .contactForm{
                border: 1px solid #7c73f6;
                margin-top: 50px;
                border-radius: 15px;
            }    
    </style>
        
    </head>
    
<body>    
    
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10 contactForm">
            <h1>Edit Details:</h1>
            <form action="Processedit.php" method="post">
        
    <div class="form-group">
        <label  for="eventid">Event ID:</label>
        <?php echo "<input type='text' class='form-control' id='eventid' name='eventid' value='$eventid'>" ; ?>
    </div>      
                
    <div class="form-group">
    <label  for="Event">Event :</label>
     <?php echo "<input type='text' class='form-control' id='event' name='event' value='$eventname' required>" ; ?>
    </div>
  <div class="form-group">
    <label for="description"> Description: </label>
    <?php echo "<input type='text' class='form-control' id='description' name='description' value='$desc' required>" ; ?>
  </div>
  <div class="form-group">
    <label for="info"> Info: </label>
    <?php echo "<input type='text' class='form-control' id='info' name='info' value='$info' required>" ; ?>
  </div>   
   <div class="form-group">
    <label for="type"> Event Type: </label>
    <?php echo "<input type='text' class='form-control' id='type' name='type' value='$eventtype' required>" ; ?>
  </div>    
  <div class="form-group">
    <label for="date"> DATE: </label>
    <?php echo "<input type='date' class='form-control' id='date' name='date' value='$date' required>" ; ?>
  </div>
  <div class="form-group">
    <label for="itime"> Start Time: </label>
    <?php echo "<input type='time' class='form-control'  id='itime' name='itime' value='$stime' required>" ; ?>
  </div>         
     <div class="form-group">
    <label for="etime"> End Time: </label>
    <?php echo "<input type='time' class='form-control'  id='etime' name='etime' value='$etime' required>" ; ?>
<!--    <input type="time" class="form-control"  id="etime" name ="etime">-->
  </div> 
  <div class="form-group">
    <label for="place"> Place Code: </label>
    <?php echo "<select class='form-control' id='place'
           name ='place' value='$venue' required>" ; ?>
     
       <optgroup label="Class rooms"> 
         <option value='CR101'>CR101</option>
        <option value='CR102'>CR102</option>
        <option value='CR201'>CR201</option>
        <option value='CR202'>CR202</option>
        <option value='CR104'>CR104</option>
        <option value ='CR106'>CR106</option>
        <option value='CR107'>CR107</option>
        <option value='CR206'>CR206</option>
        <option value='CR207'>CR207</option>
    <optgroup label="Lecture Halls">
        <option value='L101'>L101</option>
        <option value='L102'>L102</option>
        <option value='L201'>L201</option>
        <option value ='L202'>L202</option>
        <option value='L104'>L104</option>
        <option value ='L106'>L106</option>
        <option value='L107'>L107</option>
        <option value='L206'>L206</option>
        <option value='L207'>L207</option>
    <optgroup label="Labs"> 
         <option value='Lower C.C'>Lower C.C</option>
        <option value='Upper C.C'>Upper C.C</option>
        <option value='Manufacturing lab'>Manufacturing Lab</option>
        <option value ='Physics Lab'>Physics Lab</option>
        <option value ='Design Studio'>Design Studio</option>
        <option value ='Electronics Lab'>Electronics Lab</option>
        <option value='Library'>Library</option> 
        
        
      <?php echo "</select>" ; ?>
  </div>
                <input type="submit" name="submit" class="btn btn-success btn-lg" value="Save Changes">
            </form>
        </div>
    </div>
</div>
    
<!--
    <form class="form-horizontal" action="book.php" name="other" method="post">
  
  <div class="form-group">
    <label  for="Event">Event :</label>
    <input type="text" class="form-control" id="event" name="event">
    </div>
  <div class="form-group">
    <label for="description"> Description: </label>
    <input type="text" class="form-control" id="description" name="description">
  </div>
  <div class="form-group">
    <label for="info"> Info: </label>
    <input type="text" class="form-control" id="info" name="info">
  </div>   
   <div class="form-group">
    <label for="type"> Event Type: </label>
    <input type="text" class="form-control" id="type" name="type">
  </div>    
  <div class="form-group">
    <label for="date"> DATE: </label>
    <input type="date" class="form-control" id="date" name="date">
  </div>
  <div class="form-group">
    <label for="itime"> Start Time: </label>
    <input type="time" class="form-control"  id="itime" name="itime">
  </div>         
     <div class="form-group">
    <label for="etime"> End Time: </label>
    <input type="time" class="form-control"  id="etime" name ="etime">
  </div> 
  <div class="form-group">
    <label for="placeother"> Place Code: </label>
    <select class="form-control" id="place"
           name ="place">
     
       <optgroup label="Class rooms"> 
         <option value='CR101'>CR101</option>
        <option value='CR102'>CR102</option>
        <option value='CR201'>CR201</option>
        <option value='CR202'>CR202</option>
        <option value='CR104'>CR104</option>
        <option value ='CR106'>CR106</option>
        <option value='CR107'>CR107</option>
        <option value='CR206'>CR206</option>
        <option value='CR207'>CR207</option>  
        
        
      </select>
  </div>     
    
        
  <div class="modal-footer">
          <button type="submit" class="btn btn-default" >Submit</button>
     
           
       
        </div>
     </form>
-->
    
</body>    
</html>
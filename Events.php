

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
        @charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
} 
        
        a:link, a:hover, a:active, a:visited{
            all : unset ;
        } 
        
        .navbar-inverse{
            background:transparent ;
            border:none ;
/*            margin-bottom:100px;*/
        }
        
        .con{
            margin-top: 50px;
        }
    </style>    
    </head>
    
<body>
    
    <nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">SCROLLS</a>
                    <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbarCollapse">
<!--
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Back</a></li>
                    </ul>
-->
<!--
                    <form class="navbar-form navbar-left" role="search">
                        <div class="input-group">
                            <span class="input-group-btn"><button type="submit" class="btn btn-info">Go</button></span>
                            <label for="search" class="sr-only">Search</label>
                            <input type="text" id="search" class="form-control" placeholder="Search">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </form>
-->
                    
                    <form class="navbar-form navbar-right">
                        <a href="index.php"><input class="btn btn-success" type="button" value="Go Back"></a>
                    </form>
                </div>
            </div>
        </nav>
    
<div class="con">
    
    <h1><span class="yellow">EVENTS</span></h1>
    
<?php   
    
    include "connection.php" ;
echo "<table class='container'>" ;
echo "<thead>" ;
echo "<tr>" ;
    echo "<th><h1>Event</h1></th>" ;
    echo "<th><h1>Description</h1></th>" ;
    echo "<th><h1>Date</h1></th>" ;
    echo "<th><h1>Associated Authority</h1></th>" ;
    echo "<th><h1>Start Time</h1></th>" ;
    echo "<th><h1>End Time</h1></th>" ;
    echo "<th><h1>Venue</h1></th>" ;
echo "</tr>" ;
echo "</thead>" ;
echo "<tbody>" ;
    //Preparing for query
    $sql = "SELECT * FROM events" ;
    $result = mysqli_query($link , $sql) ;
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>" ;
        echo "<div class='modal' id='loginModal" . $row['event_id'] . "' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>" ;
            echo "<div class='modal-dialog'>" ;
                echo "<div class='modal-content'>" ;
                    echo "<div class='modal-header'>" ;
                    echo "<button class='close' data-dismiss='modal'>" ;
                        echo "&times;" ;
                    echo " </button>" ;
                    echo "<h4 id='myModalLabel'>" ;
                    echo "What is it all about:" ; 
                  echo "</h4>" ;
              echo "</div>" ;
                echo "<div class='modal-body'>" ;
                echo "<h4>" ;
                    echo $row['info'] ;
                echo "</h4>" ;
              echo "</div>" ;
              echo "<div class='modal-footer'>" ;
                echo "<button type='button' class='btn btn-default' data-dismiss='modal'>" ;
                echo "Cancel" ;
                echo "</button>" ;
              echo "</div>" ;
          echo "</div>" ;
      echo "</div>" ;
      echo "</div>" ;
            echo "<td><a href='#loginModal" .$row['event_id'] . "' data-toggle='modal'>". $row['event_name'] ."</a></td>" ;
            echo "<td><a href='#loginModal" .$row['event_id'] . "' data-toggle='modal'>". $row['description'] ."</a></td>" ;
            echo "<td><a href='#loginModal" .$row['event_id'] . "' data-toggle='modal'>". $row['date'] ."</a></td>" ;
            echo "<td><a href='#loginModal" .$row['event_id'] . "' data-toggle='modal'>". $row['club_name'] ."</a></td>" ;
            echo "<td><a href='#loginModal" .$row['event_id'] . "' data-toggle='modal'>". $row['time'] ."</a></td>" ;
            echo "<td><a href='#loginModal" .$row['event_id'] . "' data-toggle='modal'>". $row['end_time'] ."</a></td>" ;
            echo "<td><a href='#loginModal" .$row['event_id'] . "' data-toggle='modal'>". $row['venue'] ."</a></td>" ;
        echo "</tr>" ;
    }
echo "</tbody>" ;
echo "</table>" ;
?>
    
    </div>
    </body>    
</html>
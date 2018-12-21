<?php
    session_start() ;
    if(!isset($_SESSION['user_id'])){
        header("location: index.php") ;
    }

    include "connection.php" ;
?>

<html>
<head>

<!-- Meta -->
<meta charset="utf-8">
<title>SCROLLS</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,user-scalable=no" />

<!-- Styles -->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="mainPage.css">
    <style>
        .navbar-inverse{
            background-color:transparent ;
            border:none ;
        }
        
        #footer{
            margin-bottom: 0px;
        }
    </style>

</head>
<body>
<!--
<nav id="drawer">
  <ul id="menuLinks">
  	<h3 id="closeButton"><li><i class="fa fa-times-circle-o"></i> Close <i class="fa fa-times-circle-o"></i></li></h3>
        <li class="fancyHover">
        	<h3><a title="Our Site Home" data-hover="Home">Home</a></h3></li>
			<li class="cssHover gotsMenus fancyHover">
				<h3><a href="https://codepen.io/" data-hover="Events">Events <span><i class="fa fa-chevron-down"></i></span></a></h3>
				<ul class="subMenu">
					<li><a>Some Contest</a></li> 
					<li><a>Another Contest</a></li> 
					<li><a>Misc. Events</a></li> 
					<li><a>Dance</a></li> 
					<li><a>Concert</a></li>  
					<li><a>An event with a fairly long title</a></li> 
				</ul>
			</li>
			<li class="cssHover gotsMenus fancyHover">
				<h3><a href="https://codepen.io/" data-hover="Rooms">Rooms <span><i class="fa fa-chevron-down"></i></span></a></h3>
				<ul class="subMenu">
					<li><a>Art Gallery</a></li> 
					<li><a>Market Room</a></li> 
					<li><a>Some other room</a></li>  
					<li><a>Film Screening</a></li> 
					<li><a>Gaming</a></li> 
					<li><a>Our Shop</a></li> 
				</ul>			
			</li> 
			<li class="fancyHover">
				<h3> <a href="https://codepen.io/" data-hover="Special Guests">Special Guests</a> </h3>	</li>
			<li class="cssHover gotsMenus fancyHover">
				<h3><a href="https://codepen.io/" data-hover="Information">Information <span><i class="fa fa-chevron-down"></i></span></a></h3>
				<ul class="subMenu">
					<li><a href="#parents">Parents Info</a></li> 
					<li><a href="#policies">Our Policies</a></li>  
					<li><a href="#location">Maps / Location</a></li> 
					<li><a href="#hotel">Need a Hotel?</a></li> 
				</ul>
			</li>
			<li class="cssHover gotsMenus fancyHover">
				<h3><a href="https://codepen.io/" data-hover="History">History <span><i class="fa fa-chevron-down"></i></span></a></h3>
				<ul class="subMenu">
					<li><a>Previous Festivals</a></li> 
					<li><a>Meet the Staff</a></li> 
					<li><a>Artwork</a></li> 
				</ul>
			</li>
			<li class="cssHover gotsMenus fancyHover">
				<h3><a href="https://codepen.io/" data-hover="Contact Us">Contact Us <span><i class="fa fa-chevron-down"></i></span></a></h3>
				<ul class="subMenu">
					<li><a>Contact the Staff</a></li> 
					<li><a>Volunteer</a></li> 
					<li><a>Submit an Idea</a></li> 
					<li><a>Advertise Our Event</a></li> 
				</ul>
			</li> 
			<li class="fancyHover"><h3><a  data-hover="Registration" href="register.html">Registration</a></h3></li>	
   		</ul>
   </nav>
-->
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
                    <ul class="nav navbar-nav">
                        <li><a href="booking/index.php">Book Slot</a></li>
                        <li><a href="#editModal" data-toggle="modal">Edit</a></li>
                        <li><a href="#deleteModal" data-toggle="modal">Delete</a></li>
<!--                        <li><a href="#">Department <span class="caret"></span></a></li>-->
                    </ul>
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
                        <a href="index.php?logout=1"><input class="btn btn-success" type="button" value="Logout"></a>
                    </form>
                </div>
            </div>
        </nav>
    
    

      <form action = "edit.php" method="post" id="doctorloginform">
        <div class="modal" id="editModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                    Enter Event id: 
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--Login message from PHP file-->
                  <div id="editmessage"></div>
                  

                  <div class="form-group">
                      <label for="eventid" class="sr-only">Event id:</label>
                      <input class="form-control" type="number" name="eventid" id="eventid" placeholder="Event id">
                  </div>
              </div>
              <div class="modal-footer">
                  <input class="btn green" name="login" type="submit" value="Edit">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
              </div>
          </div>
      </div>
      </div>
      </form>
    
<!--    delete modal-->
    <form action = "delete.php" method="post" id="deleteform">
        <div class="modal" id="deleteModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                    Enter Event id: 
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--Login message from PHP file-->
                  <div id="editmessage"></div>
                  

                  <div class="form-group">
                      <label for="eventid" class="sr-only">Event id:</label>
                      <input class="form-control" type="number" name="eventid" id="eventid" placeholder="Event id">
                  </div>
              </div>
              <div class="modal-footer">
                  <input class="btn green" name="login" type="submit" value="Delete">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
              </div>
          </div>
      </div>
      </div>
      </form>
    
    
	  <header id="menuHeader">
 <a class="toggle-nav" ><div id="nav-icon">
  <span></span>
  <span></span>
  <span></span>
</div></a> </header>
<!-- End Menu -->
<div id="site-canvas">

<header class="pageHeader"><div><h1>Welcome, <?php echo $_SESSION['username']?></h1></div></header>
<div id="page-content">
	   <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-condensed">
                <?php
                        $id = $_SESSION['user_id'] ;
                        $d = date("d") ;
                        $m = date("m") ;
                        $y = date("Y") ;
//                        echo $today ;
                        $sql = "SELECT * FROM events WHERE user = $id AND (DAY(date) >= $d OR MONTH(date) >= $m OR YEAR(date) >= $y) " ;
//                        $sql1 = "SELECT EXTRACT(DAY, 'date') FROM events WHERE user = $id" ;
//                        $result1 = mysqli_query($link , $sql1) ;
//                        $val = mysqli_fetch_assoc($result1) ;
//                        var_dump($val) ;
                        $result = mysqli_query($link , $sql) ;
                        $count = mysqli_num_rows($result) ;
                        if($count==0){
                            echo "<h3 style=>No Slots Booked</h3>" ;
                        }else{
                             echo "<tr>" ;
                                echo"<th>Event ID</th>" ;
                                echo"<th>Event Name</th>" ;
                                echo "<th>Description</th>" ;
                                echo "<th>Information</th>" ;
                                echo "<th>Date</th>" ;
                                echo "<th>Start Time</th>" ;
                                echo "<th>End time</th>" ;
                                echo "<th>Venue</th>" ;
                            echo "</tr>" ;
                            while($row=mysqli_fetch_assoc($result)){
                                echo "<tr>" ;
                                    echo "<td>" . $row['event_id'] . "</td>" ;
                                    echo "<td>" . $row['event_name'] . "</td>" ;
                                    echo "<td>" . $row['description'] . "</td>" ;
                                    echo "<td>" . $row['info'] . "</td>" ;
                                    echo "<td>" . $row['date'] . "</td>" ;
                                    echo "<td>" . $row['time'] . "</td>" ;
                                    echo "<td>" . $row['end_time'] . "</td>" ;
                                    echo "<td>" . $row['venue'] . "</td>" ;
                                echo "</tr>" ;
                            }
                        }
                ?>
            </table>
        </div>

</div> <!-- #page-content -->    
</div>
    
<div id="footer" style="text-align:center">
    <footer>
	<!-- Footer Icons -->
	<h3>Copyright&copy; Scrolls@2017</h3>
	
</footer>
    </div>
    
    <script src="mainPage.js"></script>
</body>
<html>  
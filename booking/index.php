<?php
    session_start() ;
    if(!isset($_SESSION['user_id'])){
        header ("location: /scrollsFinal/index.php") ;
    }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Booking</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Scrolls</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/scrollsFinal/loggedin.php">Back
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/scrollsFinal/index.php?logout=1">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">A Warm Welcome!</h1>
        <p class="lead"> Welcome to the booking Portal. Book your place so as to avoid any choas.</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal"> BOOKED</button>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="images/audi.jpg" alt="auditorium">
            <div class="card-body">
              <h4 class="card-title">Lecture Halls</h4>
              <p class="card-text">Lecture Halls has the capacity of accomodating 300 students.</p>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal1"> BOOKING </button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="images/classroom.jpg" alt="classroom">
            <div class="card-body">
              <h4 class="card-title">Class Rooms</h4>
              <p class="card-text">Class Rooms has the capacity of accomodating 100 students.</p>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2"> BOOKING </button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="images/lab.jpg" alt="corelabs">
            <div class="card-body">
              <h4 class="card-title"> Core labs </h4>
              <p class="card-text">We have many core labs inclulding Computer , manufacturing , Physics e.t.c </p>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal3"> BOOKING </button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="images/basketball.jpg" alt="other">
            <div class="card-body">
              <h4 class="card-title">Other Places</h4>
              <p class="card-text">Other Places include grounds and hall rooms. </p>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal4"> BOOKING </button>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Scrolls @ 2017 </p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    
<div class="container">
 <div class="modal fade" id="Modal1" role="dialog">
    <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title"> Fill the details Carefully</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          
  <div class="container">  
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
 
        
        
      </select>
  </div>     
  <div class="modal-footer">
          <button type="submit" class="btn btn-default" >Submit</button>
     
           
       
        </div>
     </form>
      
      </div>
      
    </div>
</div>
</div>
</div>
      
      
      
      
      
      
      
      
      
      <div class="container">
 <div class="modal fade" id="Modal2" role="dialog">
    <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title"> Fill the details Carefully</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          
  <div class="container">  
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
      
      </div>
      
    </div>
</div>
</div>
</div>
      
      
      
     <div class="container">
 <div class="modal fade" id="Modal3" role="dialog">
    <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title"> Fill the details Carefully</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          
  <div class="container">  
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
     
       <optgroup label="Labs"> 
         <option value='Lower C.C'>Lower C.C</option>
        <option value='Upper C.C'>Upper C.C</option>
        <option value='Manufacturing lab'>Manufacturing Lab</option>
        <option value ='Physics Lab'>Physics Lab</option>
        <option value ='Design Studio'>Design Studio</option>
        <option value ='Electronics Lab'>Electronics Lab</option>
        <option value='Library'>Library</option> 
        
        
      </select>
  </div>
        
  <div class="modal-footer">
          <button type="submit" class="btn btn-default" >Submit</button>
     
           
       
        </div>
     </form>
      
      </div>
      
    </div>
</div>
</div>
</div>
    
    
    
    
    
    <div class="container">
 <div class="modal fade" id="Modal4" role="dialog">
    <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title"> Fill the details Carefully</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          
  <div class="container">  
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
     
       <optgroup label="Other Places"> 
         <option value='Music Room'>Music Room Hall-3</option>
        <option value='Dance Room'>Dance Room Hall-3</option>
        <option value='T.T room Hall-3'>T.T room Hall-3</option>
        <option value ='T.T room Hall -4'>T.T room Hall-3</option>
        <option value ='Basket-Ball Court'>Basket-Ball Court</option>
        <option value ='Football ground'>Football ground</option>
        <option value='Gym hall 1'>Gym Hall-1</option> 
        <option value='Gym Hall 3'>Gym Hall-3</option>
        <option value ='Volleyball court'>Volleyball court</option>
        <option value ='Badminton Court'>Badminton Court Hall-4</option>
        <option value ='OAT'>OAT</option>
       </select>
  </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
  <div class="modal-footer">
          <button type="submit" class="btn btn-default" >Submit</button>
     
           
       
        </div>
     </form>
      
      </div>
      
    </div>
</div>
</div>
</div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    <div class="container">
 <div class="modal fade" id="Modal" role="dialog">
    <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"> Fill the details Carefully</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
            
         
        </div>
          
  <div class="container">  
<form class="form-horizontal" action="events.php" name="other" method="post">
  
  <div class="form-group">
    <label  for="date">Enter the date to check bookings :</label>
    <input type="date" class="form-control" id="date" name="date" >
    </div>
    <div class="modal-footer">
          <button type="submit" class="btn btn-default" >Submit</button>
      </div>
     </form>  
         </div> 
        </div>
     </div>
        </div>
      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
  </body>

</html>

<?php
    session_start() ;
//    if(!isset($_SESSION['user_id'])){
//        header("location: index.php") ;
//    }

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
    
    <div class="alert alert-danger">
        <h1>This timing slot is not available.</h1>
        <button class="btn btn-lg bg-primary" id="bttn" onclick="func()">Go back</button>
    </div>
    
    <script>
        function func(){
            window.history.back() ;
        }
    </script>
    
</body>    
</html>
<html>
    <head>
        <link href="csss/bootstrap.min.css" rel="stylesheet">
        <style>
            .box{
                text-align: center ;
            }
            .image{
                height: 550px ;
                width: 550px;
                background: url("error.png") no-repeat center center;
/*                margin-top: 50px ;*/
                background-size: contain ;
                margin-left: 250px;
            }
        </style>
    </head>
    <body>
        <div class="container box">
            <div class="image">
            </div>
        <div>
            <?php
    session_start() ;
    include "connection.php" ;

    //creating error messages
    $missingUsername = "<p><strong>Please enter your username!!</strong></p>" ;
    $missingPassword = "<p><strong>Please enter your password!!</strong></p>" ;

    //check user inputs
    $errors = "" ;
    $username = "" ;
    $password = "" ;
    if(empty($_POST["username"])){
        $errors .= $missingUsername ;
    }else{
        $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING) ;
    }
    if (empty($_POST["password"])) {
        $errors .= $missingPassword ;
    }else{
        $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING) ;
    }

    //If there are any errors
    if($errors){
        $resultmessage = "<div class='alert alert-danger'>" . $errors . "</div>" ;
        echo $resultmessage ;
    }else{
        //prepare variables for query
        $username = mysqli_real_escape_string($link , $username) ;
        $password = mysqli_real_escape_string($link , $password) ;
        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'" ;
        $result = mysqli_query($link , $sql) ;
        
        $count = mysqli_num_rows($result) ;
        if ($count !== 1){
            $resultmessage = "<div class='alert alert-danger'><strong>Wrong Username or Password</strong></div>" ;
            echo $resultmessage ;
        }else{
            $row = mysqli_fetch_assoc($result) ;
            $_SESSION['user_id'] = $row['user_id'] ;
            $_SESSION['username'] = $row['username'] ;
            $_SESSION['email'] = $row['email'] ;
//            echo "success" ;
            header("location: loggedin.php") ;
        }
    }
?>
        </div>
        
        </div>
    </body>
</html>

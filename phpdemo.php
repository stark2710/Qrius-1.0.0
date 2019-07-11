<html>
    <head>
        <!--bootstrap css-->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="socialMedia.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <!-- <script>
        function disable(){
            document.getElementById("StartButton").disabled = true;
        }
    </script> -->
    
    </head>
    <body style="background-color: black;" >
        <?php
            $conn = new mysqli("localhost","root","","quiz");
            if($conn->connect_error) die($conn->connect_error);
            $query = "Select * from dashboard";
            $result = $conn->query($query);
            $rows = $result->num_rows; 
        ?>
        <div class="container border-bottom">
            <div class="row">
                <div class="col-6">
               <span class="border-right border-white">
                <button type="button" class="btn btn-success m-3 " data-toggle="modal" data-target="#LoginPage">Login</button>
    </span>
                <button type="button" class="btn btn-info m-3 " data-toggle="modal" data-target="#SigninPage">Signup</button>
                </div>
            <div class="col-3 mt-4" style="margin-left:200px;">
            <div  class="socialbtns">
                            <ul>
                                <li><a href="#" class="fa fa-lg fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-lg fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-lg fa-google-plus"></a></li>
                                <li><a href="#" class="fa fa-lg fa-instagram"></a></li>
                                <li><a href="#" class="fa fa-lg fa-youtube"></a></li>
                            </ul>
                     </div>
            </div>
            </div>
           
            
        
        <div class="modal fade" id="SigninPage">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <img class="mt-4" src="signup.png" alt="unavilable">
                        <!-- <h4 class="modal-tittle align-self-center mr-2 pr-2 border-right border-dark">
                    
                        </h4> -->
                        <div class="modal-body mt-5">
                        <fieldset class="form-group">
                        <form action="phpdemo.php" method="post">

                            <label class="form-contol-label">UserId</label>
                            <input class="form-control" type="text" name="userName">
                            <label class="form-contol-label">Age</label> 
                            <input class="form-control" type="text" name="userAge">
                            <label class="form-contol-label">Password</label> 
                            <input class="form-control" type="password" name="userPass">
                            <input type="hidden" name="scr">
                            <div class="modal-footer">
                               <input class="btn btn-warning" type="submit" value="Register" onclick="return foo()" />
                            </div>
                        </form> 
    </fieldset>  
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="LoginPage">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <img class="mt-4" src="userLogin.png" alt="unavilable">
                        <!-- <h4 class="modal-tittle align-self-center mr-2 pr-2 border-right border-dark">
                    
                        </h4> -->
                        <div class="modal-body mt-5">
                        <fieldset class="form-group">
                        <form action="validation.php" method="post">

                            <label class="form-contol-label">UserId</label>
                            <input class="form-control" type="text" name="loginId">
                            <label class="form-contol-label">Password</label> 
                            <input class="form-control" type="password" name="loginPass">
                            <input type="hidden" name="scr">
                            <div class="modal-footer">
                               <input class="btn btn-warning" type="submit" value="Login" onclick="return foo()" />
                            </div>
                        </form> 
    </fieldset>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div class="modal fade" id="LeaderboardPage">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        SCOREBOARD
                        <table class="table table-dark table-bordered" width=80% >
                            <tr>
                                <th>Name</th>
                                <?php
                                    for($i = 0; $i <= $rows; $i++){
                                    
                                         $row = $result->fetch_array(MYSQLI_ASSOC); ?>
                                         <td><?php echo $row['name'] ?></td></tr>
                                        <?php

                                    }
                                        ?>
                                        <th>Beginner</th>
                                        <?php
                                    for($i = 0; $i <= $rows; $i++){
                                         $result -> data_seek($i);
                                         $row = $result->fetch_array(MYSQLI_ASSOC); ?>
                                         <td><?php echo $row['score'] ?></td></tr>
                                        <?php

                                    }
                                        ?>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div> -->
        </div>
       
        
        
        <div class="container text-center mt-2">
            <img src="download.png" alt="unavilable" width=650px height=550px>
        </div>
        <div class="container fixed-bottom">
            <div class=" row justify-content-center">
                <!-- <button type="button" class="btn col-2 ml-4 text-white font-weight-bold border-right foot" href="#" data-toggle="modal" data-target="#LeaderboardPage">Leaderboard</button> -->
                <button type="button" class="btn col-2 ml-4 text-white font-weight-bold foot" data-container="body" data-toggle="popover" data-placement="top" data-trigger="hover" data-title="QRIUS" data-content="Our mission is to help you test and improve your knowledge. We provide a platform to explore and experiment with your curiosity. All the geeks who enjoy quizes and brain activities , this the place for them.">About us</button>
                
            </div>
        
        </div>
        <script src="jquery-3.3.1.slim.js"></script>
        <script src="popper.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <script>
        $(function () {
        $('[data-toggle="popover"]').popover()
        })
    </script>

    <?php
    $conn = new mysqli("localhost","root","","quiz");
    if($conn->connect_error) die($conn->connect_error);
    if(isset($_POST['userName'])&&isset($_POST['userAge'])&&isset($_POST['userPass'])){
       
       $query = "Insert into dashboard(name,age,userId,password) values(\"".$_POST['userName']."\",".$_POST['userAge'].",null,\"".$_POST['userPass']."\")";
       $result = $conn->query($query);
    }
    
    ?>
    </body>
    
</html>
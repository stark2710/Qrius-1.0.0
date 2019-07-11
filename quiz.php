<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
     <!--bootstrap css-->
     <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="socialMedia.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body style="background-color: black;" onload="putName()">
        <?php
            $conn = new mysqli("localhost","root","","quiz");
            if($conn->connect_error) die($conn->connect_error);
            $query = "select * from dashboard where name= '".$_SESSION['name']."'";
            $result = $conn->query($query);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $esscore = $row['score'];
            $mdscore = $row['mscore'];
            $hdscore = $row['hscore'];
            $exscore = $row['escore'];
        ?>

        <header class="clearfix">
            <div class="container border-bottom border-white">
            <!-- <div class="container-fluid "> -->
            <div class="row d-flex">
                <div class="col-2">
                    <img src="download3.png" width=200px height=100px alt="sad" style="margin-left: -25px;">
                </div>
                <div class="col-2 mt-5" style="margin-top: -25px;">
                
                        <button type="button" class="btn btn-black text-white font-weight-bold border-right pb-3 mr-1" 
                         data-toggle="popover"
                         data-container="body"
                         data-trigger = "hover"
                          data-placement="bottom" 
                          data-title="Report Card"
                          data-content="Beginner: <?php echo $esscore?> | Medium: <?php echo $mdscore?>| Hard: <?php echo $hdscore?>| Expert: <?php echo $exscore?>"><?php echo $_SESSION['name']?></button>
                
                        <label class="text-white font-weight-bold display-5 siz-25"><?php echo $_SESSION['userId'] ?></label>
                </div>
                <div class="col-3 mt-5 justify-content-end" style="margin-left:450px;">
                <form class="form" method="post" action="logout.php">
                    <button class="btn btn-warning" type="submit">Logout</button>
                </form>
                </div>
            </div>
            </div>

            <div>
                <input type="hidden" id="nameData" name="nameData" value>
            </div>
            <!-- </div> -->
        </header>
        <div class="container">
            <div class="row d-flex mt-3">
                <iframe  class="col-3  border-right border-white" src="heading.php" height="500" frameborder="0"></iframe>
                <iframe  class="col-9  " src="display.php" width="500" height="500" frameborder="0" name="displayboard" scrolling="no"></iframe>
            </div>
        </div>
        <script>
            function putName(){
                localStorage.setItem('username','<?php echo $_SESSION['name'] ?>');

            }
        </script>
        
        

        <script src="jquery-3.3.1.slim.js"></script>
        <script src="popper.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <script>
        $(function () {
        $('[data-toggle="popover"]').popover()
        })
    </script>

</body>
</html>
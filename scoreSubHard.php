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
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Felipa" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="path-to-fontawesome/font-awesome.css">
    
    <style>
    .glow {
		font-size: 50px;
		color: #fff;
		text-align: center;
		-webkit-animation: glow 1s ease-in-out infinite alternate;
		-moz-animation: glow 1s ease-in-out infinite alternate;
		animation: glow 1s ease-in-out infinite alternate;
    }
	@-webkit-keyframes glow {
		from {
			text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 20px #e60073, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073;
	}

		to {
			text-shadow: 0 0 10px #fff, 0 0 20px #ff4da6, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6;
		}
	}
    </style>
</head>
<body class="bg-info">
    <div class="container">
    <span class = "glow" style="font-size: 70px; font-family: 'Dancing Script', cursive; position: relative;
">Congratulations!</span>
    </div>

    <?php
         $conn = new mysqli("localhost","root","","quiz");
         if($conn->connect_error) die($conn->connect_error);
         if(isset($_POST['score'])){
        ?>
           <div class="text-center display-4 mt-5"><span class="badge badge-danger"><?php echo($_POST['unameN']);?> your Hard Level score is <?php echo($_POST['score']);?></span></div>
           <!-- <h1> <?php echo($_POST['unameN']);?></h1> -->
           <?php
           $quer = "update dashboard set hscore = ".$_POST['score']." where name ='".$_POST['unameN']."'";
          $result = $conn->query($quer);
         }
        ?>


        <script src="jquery-3.3.1.slim.js"></script>
        <script src="popper.min.js"></script>
        <script src="bootstrap.min.js"></script>
    
</body>
</html>    
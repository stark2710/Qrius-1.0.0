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
<body style="background-color: black;" >
<?php
         $conn = new mysqli("localhost","root","","quiz");
         if($conn->connect_error) die($conn->connect_error);
         if(isset($_POST['userName'])&&isset($_POST['userAge'])){
            
            $query = "Insert into dashboard(id,name,age) values(null,\"".$_POST['userName']."\",".$_POST['userAge'].")";
            $result = $conn->query($query);
         }
         
        //  $query = "Select * from dashboard";
        //  $result = $conn->query($query);
        //  $rows = $result->num_rows; ?>
         <!-- <div class="container">
            <table class="table table-dark table-bordered">    -->
         <?php      
        // for($i = 0; $i <= $rows; $i++){
          //  $result -> data_seek($i);
           // $row = $result->fetch_array(MYSQLI_ASSOC); ?>
            
                <!-- <tr>
                <td>
                <?php //echo $row['name'];?></td>
                <td class="pr-2"><?php //echo $row['age'];?></td>
                <td><?php// echo $row['score'];?></td>
                <table>
            </div>     -->
         <?php //}
          //    $result->close();
       //       $conn->close();
            //   if(processing == success) {
            //     header("Location: quiz.html");
            //     exit();
            //   }

        ?>
        
        

        <script src="jquery-3.3.1.slim.js"></script>
        <script src="popper.min.js"></script>
        <script src="bootstrap.min.js"></script>
        

</body>
</html>
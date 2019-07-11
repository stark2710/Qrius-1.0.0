<script>
            localStorage.setItem("username","<?php echo($_POST['userName']) ?>");
            
        </script>
<?php 

session_start();
header('location:phpdemo.php');

$con = mysqli_connect('localhost', 'root');

// if($con)
// 	echo "connection successful";
// else 
// 	echo "no connection";

mysqli_select_db($con,'quiz');

$usename = $_POST['loginId'];
$pass = $_POST['loginPass'];

$q = "select * from dashboard where name='$usename' && password='$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1) {
	$_SESSION['name'] = $usename;
	$row = mysqli_fetch_array($result);
	$userI = $row['userId'];
	$usersco = $row['score'];
	$usermsco = $row['mscore'];
	// $q = "select userId from dashboard where name='$usename' && password='$pass' ";
	// $result = mysqli_query($con, $q);
	$_SESSION['userId'] = $userI;
	$_SESSION['score'] = $usersco;
	$_SESSION['mscore'] = $usermsco;
	header('location: quiz.php');
}
else {
	alert("You Are Not registered! signup");
	header('location: phpdemo.php');
}
	
?>

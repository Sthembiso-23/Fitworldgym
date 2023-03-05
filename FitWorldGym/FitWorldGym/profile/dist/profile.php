<?php
include '../../Admin/db_connect.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
$res=mysqli_query($conn,"SELECT * FROM trainers WHERE id =".$id);

$trainer=mysqli_fetch_array($res,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>FitWorldGym | Profile Card</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.8/css/all.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<input id="slider" class="customSlider" type="checkbox">
<label for="slider"></label>

<div class="wrapper">
	<div class="top-icons">
		<i class="fas fa-long-arrow-alt-left"></i>
		<i class="fas fa-ellipsis-v"></i>
		<i class="far fa-heart"></i>
	</div>
	
	<div class="profile">
		<img src="../../Admin/assets/trainers/<?php echo $trainer['image']; ?>" class="thumbnail">
		<div class="check"><i class="fas fa-check"></i></div>
		<h3 class="name"><?php echo $trainer['name'];   ?></h3><br>
		<p class="title"><?php echo $trainer['contact'];   ?></p>
		<p class="title"><?php echo $trainer['email'];   ?></p>
		
		<p class="description"><?php echo $trainer['description'];   ?></p>
		
	</div>
	<h4 style="text-align:center;"> Achievements </h4>
	<div class="social-icons">
		<p style="text-align:center;"><?php echo $trainer['achievement'];   ?></P> 
		
	</div><br>
	<h4 style="text-align:center;"> Speciality </h4> 
	<div class="social-icons">
		<p style="text-align:center;"><?php echo $trainer['speciality'];   ?></P>
		
	</div><br>
	<h4 style="text-align:center;"> Classes: Monday - Friday </h4>
	<div class="social-icons">
		
		<p style="text-align:center;"><?php echo $trainer['class'];   ?></P>
	</div>
	
	
</div>


<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.js'></script>
</body>
</html>
<?php
    }
?>
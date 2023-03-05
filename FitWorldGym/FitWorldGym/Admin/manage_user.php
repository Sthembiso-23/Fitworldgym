<?php 
include('db_connect.php');
session_start();
/*if(isset($_GET['userID'])){
$user = $conn->query("SELECT * FROM user where userID =".$_GET['userID']);
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
}*/
?>
<div class="container-fluid">
	<div id="msg"></div>
	
	<form action="manage-user.php" id="new_user">	
		
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="fname" id="name" class="form-control"  required>
		</div>
		<div class="form-group">
			<label for="name">Surname</label>
			<input type="text" name="lname" id="surname" class="form-control"  required>
		</div>
		<div class="form-group">
			<label for="username">Email</label>
			<input type="text" name="email" id="username" class="form-control"  required  autocomplete="off">
		</div>
		<div class="form-group">
			<label for="name">Mobile No.</label>
			<input type="text" name="cellphone" id="cellphone" class="form-control"  required>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control" value="" autocomplete="off">
			
		</div>
		
		
		

	</form>
</div>
<script>
	/*
	$('#manage-user').submit(function(e){
		e.preventDefault();
		start_load()
		$.ajax({
			url:'ajax.php?action=save_user',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp ==1){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)
				}else{
					$('#msg').html('<div class="alert alert-danger">Username already exist</div>')
					end_load()
				}
			}
		})
	})
*/
</script>

<?php
include "../config.php";

//if (isset($_POST['add'])) {
	# code...
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$cellphone = $_POST['cellphone'];
	$password = $_POST['password'];
	$pswd=md5($password);
    
     $role = 'Admin';
	$date = date('Y-m-d');
	$sql = "select * from user  where email = '$email' ";
    $results = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($results);
	if($count>0){?>
		<script>
		window.alert('This email is already existing, try another one');
		window.location.href="index.php?page=users";
		</script>
		<?php
	
	}else{
$query = "INSERT INTO `user`(`firstname`, `lastname`, `email`, `cellphone`, `role`, `date_registered`, `password`) VALUES ('$fname', '$lname', '$email', '$cellphone', '$role',  '$date', '$pswd')";

$result = $conn->query($query);

if ($result) { ?>
	<script>
	    swal({
          title: "Register Success!",
          text: "You successfully added new admin.",
          type: "success",
         // timer: 6000,
          showConfirmButton: true
        }, function(){
              window.location.href = "../admin-login.php";
        });
        
    
	</script>
	<?php
}else{
	?>
	<script>
	    swal({
          title: "Register Failed!",
          text: "Your request was not successful, try again.",
          type: "warning",
         // timer: 6000,
          showConfirmButton: true
        }, function(){
              window.location.href = "../login.html";
        });
        
    
	</script>
	<?php
}
}

  
  
  ?>
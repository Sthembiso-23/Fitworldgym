<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
	$member =  $conn->query("SELECT r.*,p.plan,pp.package,concat(m.lastname,', ',m.firstname) as name,m.userID from registration_info r inner join user m on m.userID = r.member_id inner join plans p on p.planID = r.plan_id inner join packages pp on pp.id = r.package_id where r.status = 1 order AND r.id = ".$_GET['id']." order by r.id asc");
	while($row=$member->fetch_assoc()):
								
	
?>

?>
<div class="container-fluid"> 
	<p>Member ID: <b><?php echo $row['member_id'] ?></b></p>
	<p>Name: <b><?php echo ucwords($name) ?></b></p>
	<p>Plan: </i> <b><?php echo $plan.' month/s' ?></b></p>
	<p>Package: </i> <b><?php echo $package ?></b></p>
	<p>Trainer: </i> <b><?php echo !empty($trainer_arr) ?  $trainer_arr['name'] : '' ?></b></p>
	<hr class="divider">
	<p>Plan Membership Fee: </i> <b><?php echo number_format($pamount,2).' (One-time amount only)' ?></b></p>
	<p>Package Amount: </i> <b><?php echo number_format($ppamount,2) ?></b></p>
	<p>Trainer Fee: </i> <b><?php echo number_format($tf) ?></b></p>
	<p>Monthly Payable: </i> <b><?php echo number_format(($ppamount + $tf),2) ?></b></p>
</div>
<div class="modal-footer display">
	<div class="row">
		<div class="col-md-12">
			<button class="btn float-right btn-secondary" type="button" data-dismiss="modal">Close</button>
			<button class="btn float-right btn-primary mr-2" type="button" id="payment">Payment</button>
			<?php if(strtotime(date('Y-m-d')) > strtotime($end_date)): ?>
			<button class="btn float-right btn-primary mr-2" type="button" id="renew">Renew</button>
			<?php endif; ?>
			<button class="btn float-right btn-primary mr-2" type="button" id="end">End Plan</button>
		</div>
	</div>
</div>
<style>
	p{
		margin:unset;
	}
	#uni_modal .modal-footer{
		display: none;
	}
	#uni_modal .modal-footer.display {
		display: block;
	}
</style>
<script>
	$('#payment').click(function(){
		uni_modal('Payments','payment.php?rid=<?php echo $id ?>','large')
	})
	$('#renew').click(function(){
		start_load()
		$.ajax({
			url:'ajax.php?action=renew_membership',
			method:'POST',
			data:{rid:'<?php echo $id ?>'},
			success:function(resp){
				if(resp > 0){
					alert_toast('Membership Successfully renewed','success')
					end_load()
					uni_modal("<i class='fa fa-address-card'></i> Member Plan Details","view_pdetails.php?id="+resp,'')
				}
			}
		})
	})
	$('#end').click(function(){
		start_load()
		$.ajax({
			url:'ajax.php?action=end_membership',
			method:'POST',
			data:{rid:'<?php echo $id ?>'},
			success:function(resp){
				if(resp == 1){
					alert_toast('Membership Successfully Closed','success')
					setTimeout(function(){
						location.reload()
					},750)
				}
			}
		})
	})
</script>

<?php
}
?>
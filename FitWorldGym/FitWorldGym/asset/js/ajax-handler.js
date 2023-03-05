
function getSubjects(val) {
	$.ajax({
		type: "POST",
		url: "./ajax/get-subjects.php",
		data:'planID='+val,
		beforeSend: function() {
			$("#subject-list").addClass("loader");
		},
		success: function(data){
			$("#subject-list").html(data);
			$("#subject-list").removeClass("loader");
		}
	});
}
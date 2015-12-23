
<form method="GET" action='<?PHP echo $_SERVER['PHP_SELF'];?>'>
	<input type="text" id="user_data" name="user_data">
	<button type="button" id="sendBtn">Send</button>
</form>
<div class="content">
<?php foreach($data as $user_data){ ?>

 <h3> <?php echo $user_data['user_data']; ?> </h3>
 
<?php } ?>

</div>
<script src="../assets/js/jquery.js"></script>
<script type="text/javascript">

	$("#sendBtn").click(function () {
		user_data = $("#user_data").val();
		$.ajax({
		  url:'index.php',
		  type:'GET',
		  data:{user_data:user_data},
		  success:function(){
			data = "<h3>" + user_data + "</h3>";
			$(".content").append(data);
		  }
		});
	});
</script>


<?php if (isset($data['bill'])) {?>
	<div class = "container">
		<div class = "jumbotron">
			<h2 style = "text-align:center;">Name of the Bill: <?php echo $data['bill'][1];?></h2>
			<h4>Date: <?php echo $data['bill'][3];?></h4>
		</div>	
	</div>
	<div class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<h2 style = "text-align: center;">Description</h2>
				<?php echo $data['bill'][2];?>
			</div>
		</div>
	</div>
	<hr>
<?} ?>

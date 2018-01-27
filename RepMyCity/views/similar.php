<?php if (isset($data['similar'])) {?>
	<div class = "row">
		<?php foreach ($data['similar'] as $bill) {?>
			<div class = "panel panel-default">
				<div class = "panel-heading">
					<a href = "#"><h3><?php echo $bill[1];?></h3></a>
				</div>
				<div class = "panel-body">
					<p>Description: <?php echo $bill[2];?></p>
				</div>
			</div>
		<?} ?>
	</div>
<?} ?>
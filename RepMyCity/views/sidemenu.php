<div class = "col-md-9">
	<h2 style = "text-align: center;">List of Most Recent Bills</h2>
	<?php if (isset($data['bill'])){ foreach ($data['bill'] as $bill) { ?>
		<div class = "panel panel-default">
			<div class = "panel-heading">
				<a href = "bill.php?id=<?php echo $bill[0];?>"><h3><?php echo $bill[1];?></h3></a>
			</div>
			<div class = "panel-body">
				<p><?php echo $bill[2];?></p>
			</div>
		</div>
     <?php } }?>
</div>
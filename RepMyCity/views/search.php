<?php if(isset($data['results'])){?>
	<h2 style = "text-align: center; padding-top: 30px;">Tags to Search: <small><?php echo $_GET['tag'];?></small></h2>
	<?php if (sizeof($data['results']) >= 1){?>
		<?php foreach ($data['results'] as $data) {?>
			<div class = "col-md-4">
				<div class = "panel panel-default">
					<div class = "panel-heading">
						<a href = "bill.php?id=<?php echo $data[0];?>"><h3><?php echo $data[1];?></h3></a>
					</div>
					<div class = "panel-body">
						<p>Description: <?php echo $data[2];?></p>
					</div>
				</div>
			</div>
		<?php }?>
	<?php } else {?>
		<h2>There are no results. Please try a different search tag.</h2>
	<?php }?>
<?} ?>
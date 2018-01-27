<?php if (isset($data['votes'])) {?>
	<div class = "container">
		<h2 style = "text-align: center;">Votes Casted</h2>
		<div class = "table-responsive">
			<table class = "table">
				<tr>
					<td>Name</td>
					<td>Position</td>
					<td>Vote</td>
				</tr>
				<?php foreach ($data['votes'] as $vote) {?>
					<?php if ($vote[2] == 'Yes') {?>
						<tr class = "success">
					<?} elseif ($vote[2] == 'No') {?>
						<tr class = "danger">
					<?} elseif ($vote[2] == 'Did Not Vote') {?>
						<tr class = "warning">
					<? } else {?>
						<tr>
					<?} ?> 
						<td><?php echo $vote[0];?></td>
						<td><?php echo $vote[1];?></td>
						<td><?php echo $vote[2];?></td>
					</tr>
				<? }?>
			</table>
		</div>
	</div>
	<hr>
<? }?>
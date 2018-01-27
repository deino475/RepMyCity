<?php if (isset($data['tags'])) {?>
	<div class = "container">
		<h2 style = "text-align: center;">Tags</h2>
		<ul class = "nav nav-pills">
			<?php foreach ($data['tags'] as $tag) {?>
				<li role = "presentation" class = "active"><a href = "search.php?tag=<?php echo $tag;?>"><?php echo $tag;?></a></li>
			<?php }?>
		</ul>
	</div>
	<hr>
<?php }?>
<div class = "col-md-3 col-sm-12">
	<ul class = "list-group">
		<li class = "list-group-item"><a href = "#" data-toggle="modal" data-target="#addRep">Add Representative</a></li>
		<li class = "list-group-item"><a href = "#" data-toggle="modal" data-target="#addBill">Add Bill</a></li>
		<li class = "list-group-item"><a href = "#" data-toggle="modal" data-target="#addVote">Add Votes</a></li>
	</ul>
</div>

<div class="modal fade" id="addRep" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Representative</h4>
      </div>
      <div class="modal-body">
      	<form action = "" method = "POST">
      		<div class = "row">
      			<div class = "col-md-6">
      				<h3>Name of the Representative</h3>
      			</div>
      			<div class = "col-md-6">
      				<input type = "text" name = "repname" class = "form-control">
      			</div>
      		</div>
      		<br>
      		<div class = "row">
      			<div class = "col-md-6">
      				<h3>Position</h3>
      			</div>
      			<div class = "col-md-6">
      				<select name = "position" class = "form-control">
      					<option value = "District A">District A</option>
      					<option value = "District B">District B</option>
      					<option value = "District C">District C</option>
      					<option value = "District D">District D</option>
      					<option value = "District E">District E</option>
      					<option value = "District F">District F</option>
      					<option value = "District G">District G</option>
      					<option value = "District H">District H</option>
      					<option value = "District I">District I</option>
      					<option value = "District J">District J</option>
      					<option value = "District K">District K</option>
      					<option value = "At-Large 1">At-Large 1</option>
      					<option value = "At-Large 2">At-Large 2</option>
      					<option value = "At-Large 3">At-Large 3</option>
      					<option value = "At-Large 4">At-Large 4</option>
      					<option value = "At-Large 5">At-Large 5</option>
      				</select>
      			</div>
      		</div>
      		<div class = "row">
      			<div class = "col-md-6 col-md-offset-3">
      				<button class = "btn btn-primary" name = "addRepButton">Add Representative</button>
      			</div>
      		</div>
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addBill" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Bill</h4>
      </div>
      <div class="modal-body">
       	<form action = "" method = "POST" id = "billform">
      		<div class = "row">
      			<div class = "col-md-6">
      				<h3>Name of the Bill</h3>
      			</div>
      			<div class = "col-md-6">
      				<input type = "text" id = "bill_name" name = "name" class = "form-control">
      			</div>
      		</div>
      		<br>
      		<div class = "row">
      			<div class = "col-md-6">
      				<h3>Description of the Bill</h3>
      			</div>
      			<div class = "col-md-6">
      				<textarea form = "billform" class = "form-control" id = "billdesc" name = "bill_desc"></textarea>
      			</div>
      		</div>
      		<br>
      		<div class = "row">
      			<div class = "col-md-6">
      				<h3>Date of the Bill</h3>
      			</div>
      			<div class = "col-md-6">
      				<input type = "date" name = "mydate" class = "form-control" value="<?php print(date('Y-m-d'));?>">
      			</div>
      		</div>
      		<br>
      		<div class = "row">
      			<div class = "col-md-6">
      				<h3>Tags (Separate each one by comma)</h3>
      			</div>
      			<div class = "col-md-6">
      				<textarea form = "billform" class = "form-control" name = "billtags"></textarea>
      			</div>
      		</div>
      		<br>
      		<div class = "row">
      			<div class = "col-md-6 col-md-offset-3">
      				<button class = "btn btn-primary" name = "addBillButton">Add Bill</button>
      			</div>
      		</div>
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addVote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Vote</h4>
      </div>
      <div class="modal-body">
        <form action = "" method = "POST">
      		<div class = "row">
      			<div class = "col-md-6">
      				<h3>Representative</h3>
      			</div>
      			<div class = "col-md-6">
      				<select class = "form-control" name = "repid">
      					<?php if (isset($data['rep'])){ foreach ($data['rep'] as $rep) { ?>
      						<option value = "<?php echo $rep[0];?>"><?php echo $rep[1];?> - <?php echo $rep[2];?></option>
      					<?php } }?>
      				</select>
      			</div>
      		</div>
      		<br>
      		<div class = "row">
      			<div class = "col-md-6">
      				<h3>Bill</h3>
      			</div>
      			<div class = "col-md-6">
      				<select class = "form-control" name = "billid">
      					<?php if (isset($data['bill'])){ foreach ($data['bill'] as $bill) { ?>
      						<option value = "<?php echo $bill[0];?>"><?php echo $bill[1];?></option>
      					<?php } }?>
      				</select>
      			</div>
      		</div>
      		<br>
      		<div class = "row">
      			<div class = "col-md-6">
      				<h3>Vote</h3>
      			</div>
      			<div class = "col-md-6">
      				<select class = "form-control" name = "result">
      					<option value = "Yes">Yes</option>
      					<option value = "No">No</option>
      					<option value = "Did Not Vote">Did Not Vote</option>
      				</select>
      			</div>
      		</div>
      		<br>
      		<div class = "row">
      			<div class = "col-md-6 col-md-offset-3">
      				<button class = "btn btn-primary" name = "addVoteButton">Add Vote</button>
      			</div>
      		</div>
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
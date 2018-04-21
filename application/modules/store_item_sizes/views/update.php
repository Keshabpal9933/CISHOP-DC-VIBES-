<h2><?php echo $headline; ?></h2>
<?= validation_errors("<p style='size: red;'>","</p>") ?>

<?php 
if(isset($flash)){
	echo $flash; 
}
?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Existing size Options</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
		<?php 
		$form_location = base_url()."store_item_sizes/submit/".$update_id;
		?>
			<form class="form-horizontal" method="post" action="<?php echo $form_location; ?>">
			  <fieldset>
				<div class="control-group">
				  <label class="control-label" for="New Option">New Option </label>
				  <div class="controls">
					<input type="text" class="span6" name="size">
				  </div>
				</div>
				<div class="form-actions">
				  <button type="submit" name="submit" value="Submit" class="btn btn-primary">Save changes</button>
				  <button type="submit" class="btn" name="submit" value="Finished">Finished</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->

<?php 
	if ( $num_rows > 0 ) { ?>

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Item Inventory</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable ">
			  <thead>
				  <tr>
					  <th>Count</th>
					  <th>size</th>
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
			  <?php 
			  $count = 0;
			  foreach ($query->result() as $row) {
			  		$count++;
			  		$delete_url = base_url()."store_item_sizes/delete/".$row->id;
			  	?>
				<tr>
					<td><?php echo $count; ?></td>
					<td class="center"><?php echo $row->size; ?></td>
					
					<td class="center">
						<a class="btn btn-danger" href="<?php echo $delete_url; ?>">
							<i class="halflings-icon white trash"></i> Remove Option 
						</a>
						
					</td>
				</tr><?php
			  } ?>
				
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->
<?php } ?>
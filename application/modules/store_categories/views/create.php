<h2><?php echo $headline; ?></h2>
<?= validation_errors("<p style='color: red;'>","</p>") ?>

<?php 
if(isset($flash)){
	echo $flash; 
}

?>

<div class="row-fluid sortable">
<div class="box span12">
	<div class="box-header" data-original-title>
		<h2><i class="halflings-icon white edit"></i><span class="break"></span>Category Details</h2>
		<div class="box-icon">
			<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
		</div>
	</div>
	<div class="box-content">
	<?php 
	$form_location = base_url()."store_categories/create/".$update_id;
	?>
		<form class="form-horizontal" method="post" action="<?php echo $form_location; ?>">
		  <fieldset>
		  <?php 
		  if ($num_dropdown_options > 1) { ?>
			 <div class="control-group">
				<label class="control-label" for="selectError3">Parent Category</label>
				<div class="controls">
				  <?php 
				  $additional_dd_code = 'id="selectError3"';
				  echo form_dropdown('parent_cat_id',$options, $parent_cat_id, $additional_dd_code);
				  ?>
				</div>
			  </div>
			  <?php   } else { echo form_hidden('parent_cat_id', 0); } ?>
			<div class="control-group">
			  <label class="control-label" for="Category Title">Category Title </label>
			  <div class="controls">
				<input type="text" class="span6" name="cat_title" value="<?php echo $cat_title; ?>">
			  </div>
			</div>
			<div class="form-actions">
			  <button type="submit" name="submit" value="Submit" class="btn btn-primary">Save changes</button>
			  <button type="submit" class="btn" name="submit" value="Cancel">Cancel</button>
			</div>
		  </fieldset>
		</form>   

	</div>

</div><!--/span-->

</div><!--/row-->


<div class="row">
	<div class="col-sm-12">
		<section class="panel">
			<header class="panel-heading">
				<h2>Insert New Privilege</h2>
				<a href="<?php echo $base_url;?>auth_admin/manage_privileges">Manage Privileges</a>

				<?php if (! empty($message)) { ?>
					<div id="message">
						<?php echo $message; ?>
					</div>
				<?php } ?>
			</header>
			<div class="panel-body">
				<?php echo form_open(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));	?>
					<div class="form-group">
						<label for="privilege" class="col-lg-2 col-sm-2 control-label">Privilege Name:</label>
						<div class="col-lg-10">
							<input type="text" id="privilege" name="insert_privilege_name" value="<?php echo set_value('insert_privilege_name');?>" class="form-control"  title="The name of the privilege.">
							<p class="help-block">Example block-level help text here.</p>
						</div>
					</div>
					<div class="form-group">
						<label for="description" class="col-lg-2 col-sm-2 control-label">Privilege Description:</label>
						<div class="col-lg-10">
							<textarea id="description"  title="A short description of the purpose of the privilege." name="insert_privilege_description" class="form-control" rows="3">
								<?php echo set_value('insert_privilege_description');?>
							</textarea>

						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button type="submit" name="insert_privilege" id="submit" value="Submit" class="btn btn-danger">insert privilege</button>
						</div>
					</div>
					<?php echo form_close();?>
			</div>
		</section>
	</div>
</div>

	<!-- Main Content -->


	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
				<header class="panel-heading">
					<h2>Insert New User Group</h2>
					<a href="<?php echo $base_url;?>auth_admin/manage_user_groups">Manage User Groups</a>

					<?php if (! empty($message)) { ?>
						<div id="message">
							<?php echo $message; ?>
						</div>
					<?php } ?>
				</header>
				<div class="panel-body">
					<?php echo form_open(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));	?>
						<div class="form-group">
							<label for="group" class="col-lg-2 col-sm-2 control-label">Group Name:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="group" name="insert_group_name" value="<?php echo set_value('insert_group_name');?>" class="tooltip_trigger"
									   title="The name of the user group.">
							</div>
						</div>
						<div class="form-group">
							<label for="description" class="col-lg-2 col-sm-2 control-label">Group Description:</label>
							<div class="col-lg-10">
								<textarea id="description" title="A short description of the purpose of the user group." name="insert_group_description" class="form-control" rows="3">
									<?php echo set_value('insert_group_description');?>
								</textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-offset-2 col-lg-10">
								<div class="checkbox">
									<label>
										<input id="admin" name="insert_group_admin" value="1" <?php echo set_checkbox('insert_group_admin',1);?> type="checkbox"> Is Admin Group:
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-offset-2 col-lg-10">
								<button type="submit" name="insert_user_group" id="submit" value="Submit" class="btn btn-danger">New Group</button>
							</div>
						</div>
						<?php echo form_close();?>
				</div>
			</section>
		</div>
	</div>

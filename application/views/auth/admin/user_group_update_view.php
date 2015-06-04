<div class="row">
	<div class="col-sm-12">
		<section class="panel">
			<header class="panel-heading">
				<h2>Update User Group</h2>
				<a href="<?php echo $base_url;?>auth_admin/manage_user_groups">Manage User Groups</a>

				<?php if (! empty($message)) { ?>
					<div id="message">
						<?php echo $message; ?>
					</div>
				<?php } ?>
			</header>
			<div class="panel-body">
				<?php echo form_open(current_url(), array('class' => 'form-horizontal', 'id' => 'form'));	?>
				<div class="form-group">
					<label for="group" class="col-lg-2 col-sm-2 control-label">Group Name:</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="group" name="update_group_name" value="<?php echo set_value('update_group_name', $group[$this->flexi_auth->db_column('user_group', 'name')]);?>"
							   title="The name of the user group." />
					</div>
				</div>
				<div class="form-group">
					<label for="Group_Description" class="col-lg-2 col-sm-2 control-label">Group Description:</label>
					<div class="col-lg-10">
						<textarea id="description" name="update_group_description" class="form-control" rows="3"
								  title="A short description of the purpose of the user group."><?php echo set_value('update_group_description', $group[$this->flexi_auth->db_column('user_group', 'description')]);?></textarea>


					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<div class="checkbox">
							<label>
								<?php $ugrp_admin = ($group[$this->flexi_auth->db_column('user_group', 'admin')] == 1) ;?>
								<input type="checkbox" id="admin" name="update_group_admin" value="1" <?php echo set_checkbox('update_group_admin', 1, $ugrp_admin);?>> Is Admin Group
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<button type="submit" name="update_user_group" id="update_user_group" value="update_user_group" class="btn btn-danger">Update Group</button>
					</div>
				</div>
				<?php echo form_close();?>
			</div>
		</section>
	</div>

</div>

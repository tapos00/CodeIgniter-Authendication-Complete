<div class="row">
	<div class="col-sm-12">
		<section class="panel">
			<header class="panel-heading">
				<h2>Update Privilege</h2>
				<a href="<?php echo $base_url;?>auth_admin/manage_privileges">Manage Privileges</a>

				<?php if (! empty($message)) { ?>
					<div id="message">
						<?php echo $message; ?>
					</div>
				<?php } ?>
			</header>
			<div class="panel-body">
				<?php echo form_open(current_url(), array('class' => 'form-horizontal', 'id' => 'form'));	?>
				<div class="form-group">
					<label for="current_password" class="col-lg-2 col-sm-2 control-label">Privilege Name:</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="privilege" name="update_privilege_name" value="<?php echo set_value('update_privilege_name', $privilege[$this->flexi_auth->db_column('user_privileges', 'name')]);?>" />
					</div>
				</div>
				<div class="form-group">
					<label for="new_password" class="col-lg-2 col-sm-2 control-label">Privilege Description:</label>
					<div class="col-lg-10">
						<textarea id="description" name="update_privilege_description" class="form-control" rows="3"
								  title="A short description of the purpose of the privilege."><?php echo set_value('update_privilege_description', $privilege[$this->flexi_auth->db_column('user_privileges', 'description')]);?></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<button type="submit" name="update_privilege" id="submit" value="Submit" class="btn btn-danger">Update Privilege</button>
					</div>
				</div>
				</form>
			</div>
		</section>
	</div>

</div>

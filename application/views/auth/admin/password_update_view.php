
<div class="row">
	<div class="col-sm-12">
		<section class="panel">
			<header class="panel-heading">
				<h2>Update Password</h2>
				<a href="<?php echo $base_url;?>auth_public/update_account">Update Account Details</a>

				<?php if (! empty($message)) { ?>
					<div id="message">
						<?php echo $message; ?>
					</div>
				<?php } ?>
			</header>
			<div class="panel-body">
				<?php echo form_open(current_url(), array('class' => 'form-horizontal', 'id' => 'form'));	?>
				<div class="form-group">
					<label for="current_password" class="col-lg-2 col-sm-2 control-label">Current Password:</label>
					<div class="col-lg-10">
						<input type="password" class="form-control" id="current_password" name="current_password" value="<?php echo set_value('current_password');?>"/>
					</div>
				</div>
				<div class="form-group">
					<label for="new_password" class="col-lg-2 col-sm-2 control-label">New Password:</label>
					<div class="col-lg-10">
						<input type="password" class="form-control" id="new_password" name="new_password" value="<?php echo set_value('new_password');?>"/>

					</div>
				</div>
				<div class="form-group">
					<label for="current_password" class="col-lg-2 col-sm-2 control-label">Confirm New Password:</label>
					<div class="col-lg-10">
						<input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" value="<?php echo set_value('confirm_new_password');?>"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<button type="submit" name="change_password" id="submit" value="Submit" class="btn btn-danger">Update Password</button>
					</div>
				</div>
				</form>
			</div>
		</section>
	</div>

</div>

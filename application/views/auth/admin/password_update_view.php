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
			<?php echo form_open(current_url());	?>
			<div class="w100 frame">
				<ul>
					<li>
						<small>
							<strong>For this demo, the following validation settings have been defined:</strong><br/>
							Password length must be more than <?php echo $this->flexi_auth->min_password_length(); ?> characters in length.<br/>
							Only alpha-numeric, dashes, underscores, periods and comma characters are allowed.
						</small>
					</li>
					<li class="info_req">
						<label for="current_password">Current Password:</label>
						<input type="password" id="current_password" name="current_password" value="<?php echo set_value('current_password');?>"/>
					</li>
					<li class="info_req">
						<label for="new_password">New Password:</label>
						<input type="password" id="new_password" name="new_password" value="<?php echo set_value('new_password');?>"/>
					</li>
					<li class="info_req">
						<label for="confirm_new_password">Confirm New Password:</label>
						<input type="password" id="confirm_new_password" name="confirm_new_password" value="<?php echo set_value('confirm_new_password');?>"/>
					</li>
					<li>
						<label for="submit">Update Password:</label>
						<input type="submit" name="change_password" id="submit" value="Submit" class="link_button large"/>
					</li>
				</ul>
			</div>
			<?php echo form_close();?>
		</section>
	</div>

</div>

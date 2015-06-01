<div class="row">
	<div class="col-sm-12">
		<section class="panel">
			<header class="panel-heading">
				<h2>Update Account Details</h2>
				<a href="<?php echo $base_url;?>auth_public/change_password">Change Password</a>

				<?php if (! empty($message)) { ?>
					<div id="message">
						<?php echo $message; ?>
					</div>
				<?php } ?>
			</header>
			<?php echo form_open(current_url());	?>
			<fieldset>
				<legend>Personal Details</legend>
				<ul>
					<li class="info_req">
						<label for="first_name">First Name:</label>
						<input type="text" id="first_name" name="update_first_name" value="<?php echo set_value('update_first_name',$user['upro_first_name']);?>"/>
					</li>
					<li class="info_req">
						<label for="last_name">Last Name:</label>
						<input type="text" id="last_name" name="update_last_name" value="<?php echo set_value('update_last_name',$user['upro_last_name']);?>"/>
					</li>
				</ul>
			</fieldset>

			<fieldset>
				<legend>Contact Details</legend>
				<ul>
					<li class="info_req">
						<label for="phone_number">Phone Number:</label>
						<input type="text" id="phone_number" name="update_phone_number" value="<?php echo set_value('update_phone_number',$user['upro_phone']);?>"/>
					</li>
					<li>
						<?php $newsletter = ($user['upro_newsletter'] == 1) ;?>
						<label for="newsletter">Subscribe to Newsletter:</label>
						<input type="checkbox" id="newsletter" name="update_newsletter" value="1" <?php echo set_checkbox('update_newsletter',1,$newsletter); ?>/>
					</li>
				</ul>
			</fieldset>

			<fieldset>
				<legend>Login Details</legend>
				<ul>
					<li class="info_req">
						<label>Email Address:</label>
						<input type="text" id="email" name="update_email" value="<?php echo set_value('update_email',$user[$this->flexi_auth->db_column('user_acc', 'email')]);?>" class="tooltip_trigger"
							   title="Set an email address that can be used to login with."
							/>
						<p class="note">
							Note: This method simply updates the users email address, if you want to verify the user has spelt their new email address correctly, you can send them a verification email to their new email address.<br/>
							<a href="<?php echo $base_url;?>auth_public/update_email">Click here to see an example of updating a users email via email verification</a>.
						</p>
					</li>
					<li>
						<hr/>
						<label for="username">Username:</label>
						<input type="text" id="username" name="update_username" value="<?php echo set_value('update_username',$user[$this->flexi_auth->db_column('user_acc', 'username')]);?>" class="tooltip_trigger"
							   title="Set a username that can be used to login with."
							/>
					</li>
					<li>
						<label>Password:</label>
						<a href="<?php echo $base_url;?>auth_public/change_password">Click here to change your password</a>
					</li>
				</ul>
			</fieldset>

			<fieldset>
				<legend>Update Account</legend>
				<ul>
					<li>
						<h6>Important Note</h6>
						<small>The data saved via this demo is available for anyone else using the demo to see, therefore, it is recommended you do not include any personal details. All data that is saved via this demo, is completely wiped every few hours.</small>
					</li>
					<li>
						<hr/>
						<label for="submit">Update Account:</label>
						<input type="submit" name="update_account" id="submit" value="Submit" class="link_button large"/>
					</li>
				</ul>
			</fieldset>
			<?php echo form_close();?>
		</section>
	</div>
</div>

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
			<?php echo form_open(current_url());	?>
			<fieldset>
				<legend>Privilege Details</legend>
				<ul>
					<li class="info_req">
						<label for="privilege">Privilege Name:</label>
						<input type="text" id="privilege" name="insert_privilege_name" value="<?php echo set_value('insert_privilege_name');?>" class="tooltip_trigger"
							   title="The name of the privilege."/>
					</li>
					<li>
						<label for="description">Privilege Description:</label>
								<textarea id="description" name="insert_privilege_description" class="width_400 tooltip_trigger"
										  title="A short description of the purpose of the privilege."><?php echo set_value('insert_privilege_description');?></textarea>
					</li>
				</ul>
			</fieldset>

			<fieldset>
				<legend>Insert New Privilege</legend>
				<ul>
					<li>
						<label for="submit">Insert Privilege:</label>
						<input type="submit" name="insert_privilege" id="submit" value="Submit" class="link_button large"/>
					</li>
				</ul>
			</fieldset>
			<?php echo form_close();?>
		</section>
	</div>
</div>

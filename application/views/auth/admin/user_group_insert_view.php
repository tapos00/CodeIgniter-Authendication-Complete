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
				<?php echo form_open(current_url());	?>
				<fieldset>
					<legend>Group Details</legend>
					<ul>
						<li class="info_req">
							<label for="group">Group Name:</label>
							<input type="text" id="group" name="insert_group_name" value="<?php echo set_value('insert_group_name');?>" class="tooltip_trigger"
								   title="The name of the user group."/>
						</li>
						<li>
							<label for="description">Group Description:</label>
								<textarea id="description" name="insert_group_description" class="width_400 tooltip_trigger"
										  title="A short description of the purpose of the user group."><?php echo set_value('insert_group_description');?></textarea>
						</li>
						<li>
							<label for="admin">Is Admin Group:</label>
							<input type="checkbox" id="admin" name="insert_group_admin" value="1" <?php echo set_checkbox('insert_group_admin',1);?> class="tooltip_trigger"
								   title="If checked, the user group is set as an 'Admin' group."/>
						</li>
					</ul>
				</fieldset>

				<fieldset>
					<legend>Insert New Group</legend>
					<ul>
						<li>
							<label for="submit">Insert Group:</label>
							<input type="submit" name="insert_user_group" id="submit" value="Submit" class="link_button large"/>
						</li>
					</ul>
				</fieldset>
				<?php echo form_close();?>
			</section>
		</div>
	</div>

<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<h2>Manage User Groups</h2>
				<a href="<?php echo $base_url;?>auth_admin/insert_user_group">Insert New User Group</a>

				<?php if (! empty($message)) { ?>
					<div id="message">
						<?php echo $message; ?>
					</div>
				<?php } ?>
			</header>
			<?php echo form_open(current_url());	?>
			<table class="table">
				<thead>
				<tr>
					<th class="spacer_150 tooltip_trigger"
						title="The user group name.">
						Group Name
					</th>
					<th class="tooltip_trigger"
						title="A short description of the purpose of the user group.">
						Description
					</th>
					<th class="spacer_100 align_ctr tooltip_trigger"
						title="Indicates whether the group is considered an 'Admin' group.<br/> Note: Privileges can still be set seperately.">
						Is Admin Group
					</th>
					<th class="spacer_100 align_ctr tooltip_trigger"
						title="Manage the access privileges of user groups.">
						User Group Privileges
					</th>
					<th class="spacer_100 align_ctr tooltip_trigger"
						title="If checked, the row will be deleted upon the form being updated.">
						Delete
					</th>
				</tr>

				</thead>
				<tbody>
				<?php foreach ($user_groups as $group) { ?>
					<tr>
						<td>
							<a href="<?php echo $base_url;?>auth_admin/update_user_group/<?php echo $group[$this->flexi_auth->db_column('user_group', 'id')];?>">
								<?php echo $group[$this->flexi_auth->db_column('user_group', 'name')];?>
							</a>
						</td>
						<td><?php echo $group[$this->flexi_auth->db_column('user_group', 'description')];?></td>
						<td class="align_ctr"><?php echo ($group[$this->flexi_auth->db_column('user_group', 'admin')] == 1) ? "Yes" : "No";?></td>
						<td class="align_ctr">
							<a href="<?php echo $base_url.'auth_admin/update_group_privileges/'.$group[$this->flexi_auth->db_column('user_group', 'id')];?>">Manage</a>
						</td>
						<td class="align_ctr">
							<?php if ($this->flexi_auth->is_privileged('Delete User Groups')) { ?>
								<input type="checkbox" name="delete_group[<?php echo $group[$this->flexi_auth->db_column('user_group', 'id')];?>]" value="1"/>
							<?php } else { ?>
								<input type="checkbox" disabled="disabled"/>
								<small>Not Privileged</small>
								<input type="hidden" name="delete_group[<?php echo $group[$this->flexi_auth->db_column('user_group', 'id')];?>]" value="0"/>
							<?php } ?>
						</td>
					</tr>
				<?php } ?>

				</tbody>
				<tfoot>
				<td colspan="5">
					<?php $disable = (! $this->flexi_auth->is_privileged('Update User Groups') && ! $this->flexi_auth->is_privileged('Delete User Groups')) ? 'disabled="disabled"' : NULL;?>
					<input type="submit" name="submit" value="Delete Checked User Groups" class="link_button large" <?php echo $disable; ?>/>
				</td>
				</tfoot>
			</table>
			<?php echo form_close();?>
		</section>
	</div>
</div>

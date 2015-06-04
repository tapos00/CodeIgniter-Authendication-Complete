<div class="row">
	<div class="col-sm-12">
		<section class="panel">
			<header class="panel-heading">
				<h2>Update User Privileges of '<?php echo $user['upro_first_name'].' '.$user['upro_last_name']; ?>', Member of Group '<?php echo $user['ugrp_name']; ?>'</h2>
				<a href="<?php echo $base_url;?>auth_admin/manage_user_accounts">Manage User Accounts</a> |
				<a href="<?php echo $base_url;?>auth_admin/update_user_account/<?php echo $user['upro_uacc_fk']; ?>">Update Users Account</a>

				<?php if (! empty($message)) { ?>
					<div id="message">
						<?php echo $message; ?>
					</div>
				<?php } ?>
			</header>
			<div class="panel-body">
				<?php echo form_open(current_url());	?>
				<table class="table">
					<thead>
					<tr>
						<th class="tooltip_trigger"
							title="The name of the privilege."/>
						Privilege Name
						</th>
						<th class="tooltip_trigger"
							title="A short description of the purpose of the privilege."/>
						Description
						</th>
						<th class="spacer_150 align_ctr tooltip_trigger"
							title="If checked, the user will be granted the privilege, regardless of whether their user group has the privilege."/>
						User Has Individual Privilege
						</th>
						<th class="spacer_150 align_ctr tooltip_trigger"
							title="Indicates whether the privilege has been assigned to the user via the privileges defined for their user group."/>
						Has Privilege From User Group
						</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($privileges as $privilege) { ?>
						<tr>
							<td>
								<input type="hidden" name="update[<?php echo $privilege[$this->flexi_auth->db_column('user_privileges', 'id')]; ?>][id]" value="<?php echo $privilege[$this->flexi_auth->db_column('user_privileges', 'id')]; ?>"/>
								<?php echo $privilege[$this->flexi_auth->db_column('user_privileges', 'name')];?>
							</td>
							<td><?php echo $privilege[$this->flexi_auth->db_column('user_privileges', 'description')];?></td>
							<td class="align_ctr">
								<?php
								// Define form input values.
								$current_status = (in_array($privilege[$this->flexi_auth->db_column('user_privileges', 'id')], $user_privileges)) ? 1 : 0;
								$new_status = (in_array($privilege[$this->flexi_auth->db_column('user_privileges', 'id')], $user_privileges)) ? 'checked="checked"' : NULL;
								?>
								<input type="hidden" name="update[<?php echo $privilege[$this->flexi_auth->db_column('user_privileges', 'id')];?>][current_status]" value="<?php echo $current_status ?>"/>
								<input type="hidden" name="update[<?php echo $privilege[$this->flexi_auth->db_column('user_privileges', 'id')];?>][new_status]" value="0"/>
								<input type="checkbox" name="update[<?php echo $privilege[$this->flexi_auth->db_column('user_privileges', 'id')];?>][new_status]" value="1" <?php echo $new_status ?>/>
							</td>
							<td class="align_ctr">
								<?php echo (in_array($privilege[$this->flexi_auth->db_column('user_privileges', 'id')], $group_privileges) ? 'Yes' : 'No'); ?>
							</td>
						</tr>
					<?php } ?>
					</tbody>
					<tfoot>
					<tr>
						<td colspan="4">
							<input type="submit" name="update_user_privilege" value="Update User Privileges" class="link_button large"/>
						</td>
					</tr>
					</tfoot>
				</table>
				<?php echo form_close();?>
			</div>
		</section>
	</div>

</div>

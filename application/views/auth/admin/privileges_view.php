<div class="row">
	<div class="col-sm-12">
		<section class="panel">
			<header class="panel-heading">
				<h2>Manage Privileges</h2>
				<a href="<?php echo $base_url;?>auth_admin/insert_privilege">Insert New Privilege</a>

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
					<th class="spacer_200 tooltip_trigger"
						title="The name of the privilege.">
						Privilege Name
					</th>
					<th class="tooltip_trigger"
						title="A short description of the purpose of the privilege.">
						Description
					</th>
					<th class="spacer_100 align_ctr tooltip_trigger"
						title="If checked, the row will be deleted upon the form being updated.">
						Delete
					</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($privileges as $privilege) { ?>
					<tr>
						<td>
							<a href="<?php echo $base_url;?>auth_admin/update_privilege/<?php echo $privilege[$this->flexi_auth->db_column('user_privileges', 'id')];?>">
								<?php echo $privilege[$this->flexi_auth->db_column('user_privileges', 'name')];?>
							</a>
						</td>
						<td><?php echo $privilege[$this->flexi_auth->db_column('user_privileges', 'description')];?></td>
						<td class="align_ctr">
							<?php if ($this->flexi_auth->is_privileged('Delete Users')) { ?>
								<input type="checkbox" name="delete_privilege[<?php echo $privilege[$this->flexi_auth->db_column('user_privileges', 'id')];?>]" value="1"/>
							<?php } else { ?>
								<input type="checkbox" disabled="disabled"/>
								<small>Not Privileged</small>
								<input type="hidden" name="delete_privilege[<?php echo $privilege[$this->flexi_auth->db_column('user_privileges', 'id')];?>]" value="0"/>
							<?php } ?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
				<tfoot>
				<td colspan="3">
					<?php $disable = (! $this->flexi_auth->is_privileged('Update Privileges') && ! $this->flexi_auth->is_privileged('Delete Privileges')) ? 'disabled="disabled"' : NULL;?>
					<input type="submit" name="submit" value="Delete Checked Privileges" class="link_button large" <?php echo $disable; ?>/>
				</td>
				</tfoot>
			</table>

			<?php echo form_close();?>
		</section>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">

				<h2>Update Account of <?php echo $user['upro_first_name'].' '.$user['upro_last_name']; ?></h2>
				<a href="<?php echo $base_url;?>auth_admin/manage_user_accounts">Manage User Accounts</a>

				<?php if (! empty($message)) { ?>
					<div id="message">
						<?php echo $message; ?>
					</div>
				<?php } ?>
			</header>
			<div class="panel-body">
				<?php
				$attributes = array('class' => 'form-horizontal', 'id' => 'create_profile', 'role' => 'form');
				echo form_open_multipart(current_url(), $attributes);
				?>
				<section class="panel">
					<div class="bio-graph-heading">
						Create User for Your Clinic / Hospital
					</div>
					<div class="panel-body bio-graph-info">
						<h1> Profile Info</h1>
						<div class="form-group">
							<label  for="fname" class="col-lg-2 control-label">First Name</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="fname" value="<?php echo set_value('update_first_name',$user['upro_first_name']);?>" id="fname">
							</div>
						</div>
						<div class="form-group">
							<label  class="col-lg-2 control-label" for="lname">Last Name</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="lname" value="<?php echo set_value('lname',$user['upro_last_name']); ?>" id="lname" placeholder=" ">
							</div>
						</div>

						<div class="form-group">
							<label  class="col-lg-2 control-label" for="birthday">Birthday</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="birthday" value="<?php echo set_value('birthday',$user['date_of_birth']); ?>" id="birthday" placeholder=" ">
							</div>
						</div>
						<div class="form-group">
							<label  class="col-lg-2 control-label" for="gender">Gender</label>
							<div class="col-lg-6">
								<label class="checkbox-inline">
									<input type="radio" id="gender" <?php if($user['gender']=="male") echo ' checked' ?>  name="gender" value="male"> Male
								</label>
								<label class="checkbox-inline">
									<input type="radio" id="inlineCheckbox2" name="gender" <?php if($user['gender']=="female") echo ' checked' ?> value="female"> Female
								</label>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2" for="blood">Blood Group</label>
							<div class="col-lg-6">
								<select class ="form-control" name="blood" id="blood">
									<option <?php if($user['blood_group']=="") echo ' selected' ?> value="">--Select One--</option>
									<option <?php if($user['blood_group']=="A+") echo ' selected' ?> value="A+">A+</option>
									<option <?php if($user['blood_group']=="O+") echo ' selected' ?> value="O+">O+</option>
									<option <?php if($user['blood_group']=="B+") echo ' selected' ?> value="B+">B+</option>
									<option <?php if($user['blood_group']=="AB+") echo ' selected' ?> value="AB+">AB+</option>
									<option <?php if($user['blood_group']=="A-") echo ' selected' ?> value="A-">A-</option>
									<option <?php if($user['blood_group']=="O-") echo ' selected' ?> value="O-">O-</option>
									<option <?php if($user['blood_group']=="B-") echo ' selected' ?> value="B-">B-</option>
									<option <?php if($user['blood_group']=="AB-") echo ' selected' ?> value="AB-">AB-</option>

								</select>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-lg-2 control-label" for="occupation">Occupation</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="occupation" value="<?php echo set_value('occupation',$user['occupation']); ?>" id="occupation" placeholder=" ">
							</div>
						</div>

						<div class="form-group">
							<label  class="col-lg-2 control-label" for="mobile">Mobile</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="mobile" value="<?php echo set_value('mobile',$user['upro_phone']); ?>" id="mobile" placeholder=" ">
							</div>
						</div>
						<div class="form-group">
							<label  class="col-lg-2 control-label" for="present_address">Present Address</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="present_address" value="<?php echo set_value('present_address',$user['present_address']); ?>" id="present_address" placeholder=" ">
							</div>
						</div>
						<div class="form-group">
							<label  class="col-lg-2 control-label" for="permanent_address">Permanent Address</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="permanent_address" value="<?php echo set_value('permanent_address',$user['permanent_address']); ?>" id="permanent_address" placeholder=" ">
							</div>
						</div>
					</div>
				</section>
				<section>
					<div class="panel panel-primary">
						<div class="panel-heading"> Login Info</div>
						<div class="panel-body">
							<div class="form-group">
								<label  class="col-lg-2 control-label" for="email">Email</label>
								<div class="col-lg-6">
									<input type="text" class="form-control" name="email" id="email" value="<?php echo set_value('email',$user['uacc_email']); ?>" placeholder=" ">
								</div>
							</div>
							<div class="form-group">
								<label  class="col-lg-2 control-label" for="userName">User Name</label>
								<div class="col-lg-6">
									<input type="text" class="form-control" name="userName" id="userName" value="<?php echo set_value('userName',$user['uacc_username']); ?>" placeholder=" ">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-lg-2" for="inputSuccess">User Type</label>
								<div class="col-lg-6">
									<select class ="form-control" name="type" id="type">
										<?php
										foreach ($this->flexi_auth->get_groups()->result_array() as $a_type) {
											if($user['upro_uacc_fk']==$a_type['ugrp_id']) {
												$a = ' selected';
											}
												echo "<option ".$a."  value='" . $a_type['ugrp_id'] . "'>" . $a_type['ugrp_name'] . "</option>";
										}
										?>
									</select>
								</div>
							</div>
							<div id="priceInfo" style="display: none;">
								<div class="form-group">
									<label class="control-label col-lg-2" for="visit">Dcotor Visit</label>
									<div class="col-lg-6">
										<input type="text" class="form-control"  name="visit" id="visit" placeholder="enter doctors visit ">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-lg-2" for="vtime">Visit Time</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" name="vtime" value="15" id="vtime" placeholder=" ">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section>
					<div class="panel panel-primary">
						<div class="panel-heading">Set Image</div>
						<div class="panel-body">
							<div class="form-group">
								<label  class="col-lg-2 control-label">Upload Picture</label>
								<div class="col-lg-6">
									<input type="file" class="file-pos" id="exampleInputFile" name="userfile" id="image_avater">
								</div>
							</div>
						</div>
					</div>
				</section>
				<section>
					<div class="panel panel-primary">
						<div class="panel-body">
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<input type="submit" name="update_users_account" value="Save" class="btn btn-info">

								</div>
							</div>
						</div>
					</div>
				</section>
				</form>
			</div>
		</section>

	</div>


</div>
<style>
	label.error{
		color: red;
		font-weight: bold;
	}
</style>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
<script>
	$(document).ready(function() {
		$("#create_profile").validate({
			rules: {
				fname: "required",
				lname: "required",
				birthday: "required",
				occupation: "required",
				gender: "required",
				blood: "required",
				email: {
					required: true,
					email: true
				},
				mobile: "required",
				present_address: "required",
				permanent_address: "required",
				userName: "required",
				type: "required",
				login: {
					required: true,
					minlength: 5
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				}

			},
			messages: {
				fname: "Please enter your first name",
				lname: "Please enter your last name",
				birthday: "Please enter your birthday",
				occupation: "Please enter your occupation",
				email: "Please enter a valid email address",
				mobile: "Please enter your mobile number",
				paddress: "Please enter your present address",
				peraddress: "Please enter your permanent address",
				login: {
					required: "Please provide a current password",
					minlength: "Your password must be at least 5 characters long"
				},
				password: {
					required: "Please provide a new password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				}
			}
		});
		$('#birthday').datetimepicker({
			viewMode: 'years',
			format: 'YYYY-MM-DD'
		});

	});
</script>

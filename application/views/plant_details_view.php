<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "include/head.php";?>
</head>

<body>
<?php include "include/header.php";?>
<section id="mainbody">
<div class="container">
<div class="row">
	<?php
	if(isset($edit_data)){
		$txtPlant=$edit_data[0]['factory_name'];
		$txtPlantLocation=$edit_data[0]['location'];
		$txtPlantAddress=$edit_data[0]['full_address'];
		$txtPincode=$edit_data[0]['pin'];
		$txtPhoneNumber=$edit_data[0]['phone_number'];
		$txtEmail=$edit_data[0]['email_address'];
		$txtPanNo=$edit_data[0]['pan_no'];
		$txtGSTIN=$edit_data[0]['gstin'];
		$txtSupervison=$edit_data[0]['contact_person'];
		$txtSupervisorPhone=$edit_data[0]['mobile_number'];
		$txtUsername=$edit_data[0]['username'];
		$txtPassword=$edit_data[0]['pass_org'];
		$txtWorkingHours=$edit_data[0]['working_hours'];
		$txtOverTime=$edit_data[0]['overtime_hr'];
		$txtOverTimeAmount=$edit_data[0]['overtime_amount'];

	}
	else{
		$txtPlant='';
		$txtPlantLocation='';
		$txtPlantAddress='';
		$txtPincode='';
		$txtPhoneNumber='';
		$txtEmail='';
		$txtPanNo='';
		$txtGSTIN='';
		$txtSupervison='';
		$txtSupervisorPhone='';
		$txtUsername='';
		$txtPassword='';
		$txtWorkingHours='';
		$txtOverTime='';
		$txtOverTimeAmount='';
	}

	?>
<?php if ($this->session->flashdata('success_log')): ?>
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>success!</strong> <?php echo $this->session->flashdata('success_log'); ?>
	</div>
<?php elseif($this->session->flashdata('error_log')): ?>
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Error!</strong> <?php echo $this->session->flashdata('error_log'); ?>
	</div>
<?php endif ?>
<div class="col-md-12 well" style="padding-bottom:25px;">
	<h4 style="font-family: 'Oswald', sans-serif;">Plant Details</h4>
	<?php echo  form_open(); ?>
	<h6 class="form-signin-heading" style="color:#0080C0;"><i class="fa fa-user-plus"></i> Create And Manage Plant Details</h6>

		<label>Plant Name</label>
		<input type="text" name="txtPlant" value="<?php echo $txtPlant ?>" required value="" class="form-control" id="txtPlant" placeholder="Enter Plant Name">

		<label>Plant Location</label>
		<input type="text" name="txtPlantLocation" value="<?php echo $txtPlantLocation ?>" required value="" class="form-control" id="txtPlantLocation" placeholder="Enter Plant Location">

		<label>Plant Address</label>
		<textarea name="txtPlantAddress" required rows="8" class="form-control" placeholder="Enter Address" ><?php echo $txtPlantAddress ?></textarea>

		<label>Plant Pin-Code</label>
		<input type="number" value="<?php echo $txtPincode ?>" name="txtPincode" value="" required class="form-control" id="txtPincode" placeholder="Pin">

		<label>Plant Phone</label>
		<input type="number" value="<?php echo $txtPhoneNumber ?>" name="txtPhoneNumber" required value="" class="form-control" id="txtPhoneNumber" placeholder="Phone Number">

		<label>Plant Email</label>
		<input type="email" value="<?php echo $txtEmail ?>" name="txtEmail" value=""  class="form-control" id="txtEmail" placeholder="Plant Email Address">

		<label>Plant PAN</label>
		<input type="text" value="<?php echo $txtPanNo ?>" name="txtPanNo" value=""  class="form-control" id="txtPanNo" placeholder="Plant PAN Number">

		<label>Working Hours</label>
		<input type="number" value="<?php echo $txtWorkingHours ?>" name="txtWorkingHours" value=""  class="form-control" id="txtWorkingHours" placeholder="Working Hours">

		<label>Overtime Hours</label>
		<input type="number" value="<?php echo $txtOverTime ?>" name="txtOverTime" value=""  class="form-control" id="txtOverTime" placeholder="Working Hours">

		<label>Overtime Amount</label>
		<input type="number" value="<?php echo $txtOverTimeAmount ?>" name="txtOverTimeAmount" value=""  class="form-control" id="txtOverTimeAmount" placeholder="Working Hours">

		<label>Plant GSTIN</label>
		<input type="text" value="<?php echo $txtGSTIN ?>" name="txtGSTIN" value=""  class="form-control" id="txtGSTIN" placeholder="Plant GSTIN ">

		<label>Contact Person / Supervisor</label>
		<input type="text" value="<?php echo $txtSupervison ?>"  name="txtSupervison" value="" required  class="form-control" id="txtSupervison" placeholder="Enter Contact Person Name / Supervisor Name">

		<label>Contact-Person/Supervisor Phone Number</label>
		<input type="number" value="<?php echo $txtSupervisorPhone ?>" name="txtSupervisorPhone" required value="" class="form-control" id="txtSupervisorPhone" placeholder="Enter Contact Person Name / Supervisor Phone Number">

		<label>Username</label>
		<input type="text" value="<?php echo $txtUsername ?>" name="txtUsername" value="" required class="form-control" <?php if(isset($edit_data)): ?> disabled <?php endif; ?> id="txtUsername" placeholder="Enter Username For Plant Login">

		<label>Password</label>
		<input type="password" value="<?php echo $txtPassword ?>" name="txtPassword" value="" required class="form-control" id="txtPassword" placeholder="Enter Password For Plant Login">

		<br />

		<?php if (!isset($edit_data)): ?>
			<button class="btn btn-lg btn-success btn-block" type="submit" name="btnSubmit" value="submit">Create Plant</button>
		<?php else: ?>
			<?php echo form_hidden('txtEditId', $edit_id); ?>
			<button class="btn btn-lg btn-success btn-block" type="submit" name="btnSubmit" value="submit">Update Plant</button>
		<?php endif; ?>


		<?php echo form_close(); ?>
		<?php if (isset($factory_data)): ?>
			<div class="row">
				<h5 class="text-center alert alert-warning"><strong>LIST OF ALL PLANT</strong></h5>
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Sl#</th>
									<th>Plant Name</th>
									<th>Plant Usernamr</th>
									<th>Plant Password</th>
									<th>Plant Phone</th>
									<th>Email Address</th>
									<th>Contact Preson</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $count=0; ?>
								<?php foreach ($factory_data as $list): ?>
									<tr>
										<td><?php echo ++$count; ?></td>
										<td><?php echo $list->factory_name ?></td>
										<td><?php echo $list->username ?></td>										
										<td><?php echo $list->pass_org ?></td>										
										<td><?php echo $list->phone_number ?> </td>
										<td><?php echo $list->email_address ?> </td>
										<td><?php echo $list->contact_person ?> </td>
										<td>
											<a href="<?php echo base_url() ?>Edit/Plant/<?php echo $list->factory_id ?>"  class='btn btn-info btn-xs' onclick="return confirm('Are you edit ?')">Edit / View</a>
											<a href="<?php echo base_url() ?>index.php/Delete/Plant/<?php echo $list->factory_id ?>"  class='btn btn-danger btn-xs' onclick="return confirm('Are you edit ?')">Delete</a> <br>
											<?php if ($list->status): ?>
												<a href="<?php echo base_url() ?>Edit/change_plant_status/0/<?php echo $list->factory_id ?>"  class='btn btn-primary btn-xs' onclick="return confirm('Are you Deactive ?')">Deactive</a>
											<?php else: ?>
												<a href="<?php echo base_url() ?>Edit/change_plant_status/1/<?php echo $list->factory_id ?>"  class='btn btn-primary btn-xs' onclick="return confirm('Are you Active ?')">Active</a>
											<?php endif; ?>

										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		<?php endif ?>
	</div>

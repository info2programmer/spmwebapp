
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include "include/head.php";?>
</head>

<body>
	<?php include "include/header.php";?>
	<section id="mainbody">
		<div class="container">
			<?php echo form_open(current_url()); ?>
			<div class="row">
				<div class="col-md-12 well" style="padding-bottom:25px;">
					<div class="col-sm-5">
						<label>From-Date</label>
						<input type="date" name="txtFromDate" required class="form-control"> <br/>
					</div>
					<div class="col-sm-2 text-center">
						<label>To</label>
					</div>
					<div class="col-sm-5">
						<label>To-Date</label>
						<input type="date" name="txtToDate" required class="form-control"> <br/>
					</div>
					<p align="center"><button type="submit" name="btnSubmit" class="btn btn-default" value="search">Search</button></p>
					
				</div>
			</div>
			<?php echo  form_close(); ?>
			<?php if(isset($search_result)): ?>
			<div class="row">
				<h5 class="text-center alert alert-warning"><strong>LIST OF MATCHED FACTORY FROM <?php echo $txtFromDate  ?> TO <?php echo $txtToDate?></strong></h5>
				<div class="col-md-12">
					<div class="table-responsive">
						<table width="1254" class="table table-bordered">
							<thead>
								<tr>
									<th width="43">Sl#</th>
									<th width="415">Company Location</th>
									<th width="500">Company Name</th>
									<th width="166">Number Of Worker</th>
									<th width="131">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $count=0; ?>
								<?php foreach ($search_result as $list): ?>
									<tr>
										<td><?php echo ++$count; ?></td>
										<td><?php echo $list->factory_location ?></td>
										<td><?php echo $list->factory_name ?></td>
										<td><?php echo $list->emp_id ?> </td>
										<td>
											<form method="post" target="_blank" enctype="multipart/form-data" action="<?php echo base_url() ?>View/attendance.html">
												<input type="hidden" name="txtFromDate" value="<?php echo $txtFromDate ?>" />
                                                <input type="hidden" name="txtToDate" value="<?php echo $txtToDate ?>">
                                                <input type="hidden" name="txtLocation" value="<?php echo $list->factory_location ?>">
                                                <input type="hidden" name="txtFactoryName" value="<?php echo $list->factory_name ?>">
                                                <button type="submit" class="btn btn-xs btn-primary" name="btnDetails" value="showdetails" onclick="return confirm('are you sure?');">Show Details</button>
											</form>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div> 
		<?php endif; ?>
		</div>
	</section>
</body>
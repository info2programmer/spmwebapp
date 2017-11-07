<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include "include/head.php";?>
	<meta http-equiv="refresh" content="2; URL=<?php echo current_url() ?>">
</head>

<body>
	<?php include "include/header.php";?>
	<section id="mainbody">
		<div class="container">
			<div class="row">
		<?php if (isset($worker_list)): ?>
			<div class="row">
				<h5 class="text-center alert alert-warning"><strong>LIST OF ASSIGNED USERS</strong></h5>
				<div class="col-md-12">
					<div class="table-responsive">
						<table width="1254" class="table table-bordered">
							<thead>
								<tr>
									<th width="43">Sl#</th>
									<th width="347">Name of the Workers (Alphabetical Order)</th>
									<th width="166">Mobile Number</th>
									<th width="568">Category</th>
									<th width="131">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $count=0; ?>
								<?php foreach ($worker_list as $list): ?>
									<tr>
										<td><?php echo ++$count; ?></td>
										<td><?php echo $list->fname." ".$list->lname ?></td>
										<td><?php echo $list->mob_no ?></td>
										<td><?php echo $list->category ?> </td>
										<td>
											<a href="<?php echo base_url() ?>Update/Releaseworker/<?php echo $list->record_id ?>/<?php echo $list->employee_id ?>" target='_blank' class='btn btn-info btn-xs' onclick="return confirm('Are you release this worker ?');">Release</a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div> 

<?php endif ?>
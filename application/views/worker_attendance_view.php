<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include "include/head.php";?>

</head>

<body>
	<?php include "include/header.php";?>
	<section id="mainbody">
		<div class="container">
			<?php if ($this->session->flashdata('success_log')): ?>
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>success!</strong> <?php echo $this->session->flashdata('success_log'); ?>.
				</div>
			<?php endif ?>
			<div class="row">
				<?php echo  form_open('Add/Attendance'); ?>
				<div class="table-responsive">
					<table class="table table-hover table-bordered">
						<tr>
							<th>Employee Name</th>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>5</th>
							<th>6</th>
							<th>7</th>
							<th>8</th>
							<th>9</th>
							<th>10</th>
							<th>11</th>
							<th>12</th>
							<th>13</th>
							<th>14</th>
							<th>15</th>
							<th>16</th>
							<th>17</th>
							<th>18</th>
							<th>19</th>
							<th>20</th>
							<th>21</th>
							<th>22</th>
							<th>23</th>
							<th>24</th>
							<th>25</th>
							<th>26</th>
							<th>27</th>
							<th>28</th>
							<th>29</th>
							<th>30</th>
							<th>31</th>
						</tr>
							<?php foreach ($worker_list as $key ): ?>
								<tr>
								<td><?php echo $key->fname." ".$key->lname ?></td>

								<td >
									<?php if(date('d')==1): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
									<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?>
								</td>

								<td><?php if(date('d')==2): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==3): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==4): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==5): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==6): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==7): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==8): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==9): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==10): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==11): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==12): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<!-- <input type="checkbox" name="empovertime[]"  title="Over Time"  value="<?php //echo $key->employee_id; ?>"> -->
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==13): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
									<input type="checkbox" name="empovertime[]"  title="Over Time"  value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==14): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==15): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">
	
									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==16): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==17): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==18): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==19): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==20): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==21): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==22): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==23): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==24): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==25): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==26): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==27): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==28): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==29): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==30): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>

								<td><?php if(date('d')==31): ?><input type="checkbox" name="empfullday[]"  title="Full Day"  value="<?php echo $key->employee_id; ?>"><input name="emphalfday[]"  title="Half Day" type="checkbox" value="<?php echo $key->employee_id; ?>">
								<input name="empovertime[]"  title="OverTime" type="checkbox" value="<?php echo $key->employee_id; ?>">

									<?php else: ?><input disabled type="checkbox"  title="Full Day"  value=""><input disabled  title="Half Day" type="checkbox" value=""><input disabled  title="Over Time" type="checkbox" value=""><?php endif; ?></td>
							</tr>
							<?php endforeach; ?>
					</table>
				</div>
				<?php if ($do_attandance): ?>
					<p align="right"><button type="submit" name="btnSubmit" value="Submit" class="btn btn-success btn-lg">Submit</button></p>
				<?php else: ?>
					<p align="right"><button type="button" name="btnSubmit" disabled onclick="alert('Attendance had already given');" value="Submit" class="btn btn-success btn-lg">Submit</button></p>
				<?php endif ?>

				<?php echo form_close() ?>
			</div>
		</div>
	</section>
</body>

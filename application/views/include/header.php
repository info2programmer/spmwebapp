<section id="topbar">
<div class="container">
	<div class="row">
    	<div class="col-md-9">
        <h2 style="font-family: 'Oswald', sans-serif;" class="spacing">SPM GROUP INDIA</h2>
        <h4 style="font-family: 'Oswald', sans-serif;" class="spacing">PROPAYROLL - Payroll Management Software</h4>
        </div>
        
        <div class="col-md-3" style="padding-top:15px;">
        <h4 style="font-family: 'Oswald', sans-serif; text-align:right;" class="spacing">Version Beta 1.0</h4>
        <h4 style="font-family: 'Oswald', sans-serif; text-align:right;" class="spacing"><i class="fa fa-user"></i> Welcome Admin</h4>
        </div>
	</div>
</div>
</section> <!---Topbar -->

<section id="logobar">
<div class="container">
	<div class="row">
    	<div class="col-md-12">
        <nav class="navbar navbar-findcond ">
		<div class="navbar-header ">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav navbar-left">
                <?php if (!$this->session->userdata('type')): ?>
                   <li class="active navlitxt"><a href="<?php echo base_url(); ?>Index/accountsettings" class="dropdown-toggle" role="button">Account Settings</a></li>  
                    
                    <!-- <li class="navlitxt"><a href="<?php// echo base_url() ?>Index/factorysetting" class="dropdown-toggle" role="button">Factory Settings</a></li> -->
                    <li class="navlitxt"><a href="<?php echo base_url() ?>Index/Plant" class="dropdown-toggle" role="button">Plant Details</a></li>
                    
                    <li class="navlitxt"><a href="<?php echo base_url();?>Index/Employee" class="dropdown-toggle" role="button">Add Employee</a></li>   

                     <li class="navlitxt"><a href="<?php echo base_url();?>Index/workers_assign" class="dropdown-toggle" role="button">Worker Assign</a></li>  

                      <li class="navlitxt"><a href="<?php echo base_url();?>Index/transfer_worker" class="dropdown-toggle" role="button">Transfer Worker</a></li>

                       <li class="navlitxt"><a href="<?php echo base_url();?>Index/previous_attendance" class="dropdown-toggle" role="button">Previous Attendance</a></li>

                        <li class="navlitxt"><a href="<?php echo base_url();?>Index/salary_report.html" class="dropdown-toggle" role="button">Reports</a></li>

                    <!-- <li class="navlitxt"><a href="leavemanagement.php" class="dropdown-toggle" role="button">Attendance</a></li> -->
                   <!--  <li class="navlitxt"><a href="salary.php" class="dropdown-toggle" role="button">Salary</a></li> -->
                    <!-- <li class="navlitxt"><a href="accountsandreports.php" class="dropdown-toggle" role="button">Accounts & Reports</a></li> -->
                    <li class="navlitxt"><a href="<?php echo base_url();?>Index/logout" class="dropdown-toggle" role="button">Log Out</a></li>
                <?php elseif($this->session->userdata('type')=='supervisor'): ?>
                    <li class="navlitxt"><a href="<?php echo base_url();?>Index/emp_attendance.html" class="dropdown-toggle" role="button">Employee Attendance</a></li>
                    <li class="navlitxt"><a href="<?php echo base_url();?>Index/EmployeeRelease.html" class="dropdown-toggle" role="button">Employee Release</a></li>
                    <li class="navlitxt"><a href="<?php echo base_url();?>Index/logout" class="dropdown-toggle" role="button">Log Out</a></li>
                <?php elseif($this->session->userdata('type')=='account-user'): ?>
                    <li class="navlitxt"><a href="<?php echo base_url();?>Index/employee_attendance_sheet.html" class="dropdown-toggle" role="button">Employee Attendance Sheet</a></li>
                    <li class="navlitxt"><a href="<?php echo base_url();?>Index/EmployeeRelease.html" class="dropdown-toggle" role="button">Employee Salary Sheet</a></li>
                    <li class="navlitxt"><a href="<?php echo base_url();?>Index/logout" class="dropdown-toggle" role="button">Log Out</a></li>
                <?php endif ?>
               
			</ul>
			
            </div>
            </nav>
        
        </div>
        
        
	</div>
</div>
</section> <!-- Menubar -->
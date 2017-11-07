<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROPAYROLL - Payroll Management Software - SPM Group</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Pavanam" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/npm.js"></script>

<!---For Navbar -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!---For Navbar -->

</head>

<body>
<div class="container">
	<div class="row">
    	<div class="col-md-4"></div>
		
        <div class="col-md-4 well" style="margin-top:100px;">
                    <h4 style="font-family: 'Oswald', sans-serif;">SPM GROUP</h4>
                    <?php if(isset($_REQUEST['nomatch'])) { ?><h3 style="color:#FF0000;">Wrong Username / Password</h3><?php } ?>
                   <form class="form-horizontal" action="<?php echo base_url();?>index.php/Index/login" method="post" enctype="multipart/form-data">
                   <input type="hidden" name="mode" value="login">
                <h6 class="form-signin-heading" style="color:#339933;"><i class="fa fa-lock"></i> Secured Admin Login</h6>
               
                <label class="sr-only">Username</label>
                <input type="text" name="txt_username" id="inputUsername" class="form-control" placeholder="Username" required autofocus><br />
                
                <label  class="sr-only">Password</label>
                <input type="password" name="txt_password" id="inputPassword" class="form-control" placeholder="Password" required><br />
                
                    
               
                <button class="btn btn-lg btn-success btn-block" type="submit">Log In</button>
              </form> 
		</div>

		<div class="col-md-4"></div>
	</div>
</div>
</body>
</html>



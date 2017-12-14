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
      

      <h3 class="alert alert-info">Account Settings</h3>
      <div class="col-md-12 well" style="padding-bottom:25px;">
        <h4 style="font-family: 'Oswald', sans-serif;">Change Your Password</h4>
        <?php
        $form_attribute=array(
          'class' => 'form-signin'
        );

        ?>
        <?php echo form_open('Edit/updateadminpassword',$form_attribute); ?>
        <h6 class="form-signin-heading" style="color:red;"><i class="fa fa-info-circle"></i> Leave blank if you do not want to change your password</h6>

        <label for="txtUsername">Username</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user-secret" aria-hidden="true"></i></span>
        <input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Username" required autofocus readonly="readonly" value="<?php echo $this->session->userdata('user'); ?>" >
        </div>
        <br />

        <!-- -->

        <label for="txtPassword">Password</label>
         <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
        <input type="password" name="txtPassword" id="txtPassword" class="form-control" placeholder="Password" required>
        </div>
        <br />


        <button class="btn btn-lg btn-success btn-block" type="submit">Update Password</button>
        <?php echo form_close(); ?>
      </div>


    </div>
    <!------------------------------------------ separator -------------------------------------->
    <div class="row">
        <h3 class="alert alert-info">Account User Management</h3>
        <div class="col-md-12 well" style="padding-bottom:25px;">
          <h4 style="font-family: 'Oswald', sans-serif;">Create User</h4>
          <h6 class="form-signin-heading" style="color:red;"><i class="fa fa-info-circle"></i> Create user who will access Acount Section    </h6>
          <form method="post" accept-charset="utf-8"  action="<?php echo  base_url() ?>Add/CreateAccount" class="form-signin">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa fa-user-o" aria-hidden="true"></i></span>
            <input type="text" name="txtFullname" id="txtFullname" class="form-control" placeholder="Fullname" required >
          </div>
          <br/>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user-secret" aria-hidden="true"></i></span>
            <input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Username" required >
          </div>
          <br/>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
            <input type="password" name="txtPassword" id="txtPassword" class="form-control" placeholder="Password" required >
          </div>
          <br/>
          <button type="submit" name="btnSubmit" class="btn btn-lg btn-success btn-block" value="submit">Create Account</button>
          </form>
          <br/>
          <table class="table table-bordered">
            <tr>
              <th>User-Full Name</th>
              <th>Username</th>
              <th>Password</th>
              <th>Last Login</th>
              <th>Action</th>
            </tr>
              <?php foreach($acount_list as $item): ?>
                <tr>
                <td><?php echo $item->fullname ?></td>
                <td><?php echo $item->username ?></td>
                <td><?php echo $item->pass_org ?></td>
                <td><?php echo $item->last_login ?></td>
                <td><a href="<?php echo base_url() ?>Update/ChangeAccountStatus/<?php echo $item->id ?>/<?php echo ($item->status==1)?'0':'1'; ?>"><i class="fa fa-exclamation-circle"></i></i><?php echo ($item->status==1)?'Deactive':'Active'; ?></a></td>
                </tr>
              <?php endforeach; ?>
          </table>
        </div>
    </div>
</div>


</div>
</section> <!---Dashboardbody -->

<?php include "include/footer.php";?>

</body>
<script>
 function getfactory(value) {
   // alert(value);  
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ddlFactoryName").innerHTML  = this.responseText;
      document.getElementById("ddlFactoryNameWorker").innerHTML  = this.responseText;
           // alert(this.responseText);
         }
       };
       var url="<?php echo base_url();?>Index/getfactorybylocation/"+value;
       xmlhttp.open("GET", url, true);
       xmlhttp.send();
     }

     // function getfactorydatabysupervisor(value) {
     //   // body...
     // }
   </script>
   </html>






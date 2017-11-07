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

      <?php 
      if(isset($edit_factory_list)){
        foreach ($edit_factory_list as $list ) {
          $txtName=$list->emp_id_auto;
          $txtMobileNumber=$list->mobile_number;
          $ddlFactoryLocation=$list->factory_location;
          $ddlFactoryName=$list->factory_name;
          $txtPassword=$list->org_password;
          $record_id=$list->record_id;
          $txtFromDate=$list->from_date;
          $txtTodate=$list->to_date;
        }
      }
      else{
        $txtName='';
        $txtMobileNumber='';
        $ddlFactoryLocation='';
        $ddlFactoryName='';
        $txtPassword='';
        $txtFromDate='';
        $txtTodate='';
      }

      ?>

      <div class="col-md-12 well" style="padding-bottom:25px;">
        <h4 style="font-family: 'Oswald', sans-serif;">Assign Users(Supervisor)</h4>
        <?php if (!isset($edit_factory_list)): ?>
          <?php echo  form_open('Add/insertsupervisorcredential'); ?>
        <?php else: ?>
          <?php $url='Edit/Supervisor/'.$record_id ?>
          <?php echo  form_open($url); ?>
          <?php echo form_hidden('update_id', $record_id); ?>
          <?php echo form_hidden('mode', 'post'); ?>
        <?php endif ?>
        
        <h6 class="form-signin-heading" style="color:#0080C0;"><i class="fa fa-user-plus"></i> Assign user to a particular factory region</h6>

        <label>Name of the Supervisor</label>

        <select name="txtName" required class="form-control" id="txtName">
          <option value="" selected="selected" hidden >Select Supervisor</option>
          <?php if ($supervisorlist): ?>
            <?php foreach ($supervisorlist as $list): ?>
              <option <?php if($list->emp_id_auto==$txtName): ?> selected="selected" <?php endif; ?> value="<?php echo $list->emp_id_auto; ?>"><?php echo $list->fname." ".$list->lname ?></option>
            <?php endforeach ?>
          <?php endif ?>
        </select> <br/>


        <label>Mobile Number</label>
        <input type="text" name="txtMobileNumber" id="txtMobileNumber" class="form-control" placeholder="Mobile Number" value="<?php echo $txtMobileNumber; ?>" required><br />

        <label>Select Factory Location</label><span class="pull-right">Not in List ? <a href="<?php echo base_url() ?>Index/factorysetting">ADD NOW</a></span>

        <select class="form-control" name="ddlFactoryLocation" required id="ddlFactoryLocation" onchange="getfactory(this.value)">
          <option value="" selected="selected" hidden>Select Location</option>
          <?php foreach($factory_locations as $item): ?>
            <option <?php if ($ddlFactoryLocation==$item->location): ?> selected="selected" <?php endif ?> value="<?php echo $item->location ?>"><?php echo $item->location ?></option>
          <?php endforeach; ?>
        </select>

        <br />

        <label>Select Factory Name</label>
        <select class="form-control" name="ddlFactoryName" id="ddlFactoryName" required>
          <option value="" selected="selected" hidden>Select Factory</option>
          <?php if ($ddlFactoryName!=""): ?>
            <option value="<?php echo $ddlFactoryName ?>" selected><?php echo $ddlFactoryName ?></option>
          <?php endif; ?>
        </select>

        <br />

        <label>From Date</label>
        <input type="date" name="txtFromDate" id="txtFromDate" class="form-control" required autofocus value="<?php echo $txtFromDate ?>"><br />

        <label>To Date</label>
        <input type="date" name="txtTodate" id="txtTodate" class="form-control" required autofocus value="<?php echo $txtTodate ?>"><br />

        <label>Enter Password</label>
        <?php if ($txtPassword != ""): ?>
          <input type="text" name="txtPassword" id="txtPassword" required class="form-control" placeholder="Enter Password" value="<?php echo $txtPassword; ?>">
        <?php else: ?>
          <input type="password" name="txtPassword" id="txtPassword" required class="form-control" placeholder="Enter Password">
        <?php endif ?>

        <br/>
        <?php if (isset($edit_factory_list)): ?>
          <button class="btn btn-lg btn-success btn-block" type="submit">Edit This Supervisor</button>
        <?php else: ?>
          <button class="btn btn-lg btn-success btn-block" type="submit">Assign This Supervisor</button>
        <?php endif ?>

        <?php echo form_close(); ?>
        

        <div class="row">
          <h5 class="text-center alert alert-warning"><strong>LIST OF ASSIGNED USERS</strong></h5>
          <div class="col-md-12">
           <div class="table-responsive">
            <table width="1254" class="table table-bordered">
              <thead>
                <tr>
                  <th width="31">Sl#</th>
                  <th width="265">Name of the Supervisor</th>
                  <th width="181">Mobile Number</th>
                  <th width="211">Factory Location</th>
                  <th width="315">Factory Name</th>
                  <th width="223">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $count=0; ?>
                <?php foreach ($factory_list as $list ): ?>
                  <tr>
                    <td><?php echo ++$count; ?></td>
                    <td><?php echo $list->fname." ".$list->lname ?></td>
                    <td><?php echo $list->mobile_number ?></td>
                    <td><?php echo $list->factory_location ?></td>
                    <td><?php echo $list->factory_name ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>Edit/Supervisor/<?php echo $list->record_id ?>" class="btn btn-primary btn-xs">Edit</a>
                      <?php if ($list->status): ?>
                       <a href="<?php echo base_url() ?>Edit/switchsuperisor/<?php echo $list->record_id ?>/0"  class="btn btn-success btn-xs" title="Click here to Deactivate this User">Active</a>
                     <?php else: ?>
                      <a href="<?php echo base_url() ?>Edit/switchsuperisor/<?php echo $list->record_id ?>/1"  class="btn btn-danger btn-xs" title="Click here to Deactivate this User">Deactive</a>
                    <?php endif ?>


                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div> 
  </div>


</div>


<!-- separator -->
<div class="row">

  <div class="col-md-12 well" style="padding-bottom:25px;">
    <h4 style="font-family: 'Oswald', sans-serif;">Assign Employee (Worker)</h4>

    <!--  <form class="form-signin"> -->
      <?php echo form_open('Add/Assignemployee',$form_attribute) ?>
      <h6 class="form-signin-heading" style="color:#0080C0;"><i class="fa fa-user-plus"></i> Assign employee (worker) to a particular user and factory region</h6>

      <label>Select Supervisor</label>
      <select class="form-control" autofocus name="ddlSupervisor" id="ddlSupervisor" required>
        <option selected="selected" hidden value="">Click Here</option>
        <?php foreach ($factory_list as $list ): ?>
          <option value="<?php echo $list->record_id ?>"><?php echo $list->fname." ".$list->lname ?></option>
        <?php endforeach; ?>
      </select><br />

      <label>Select Factory Location</label><span class="pull-right">Not in List ? <a href="<?php echo base_url() ?>Index/factorysetting">ADD NOW</a></span>
      <select class="form-control" onchange="getfactory(this.value)" required name="ddlFactoryLocation" id="ddlFactoryLocation">
        <option value="" selected hidden>Select Factory Location</option>
        <?php foreach($factory_locations as $item): ?>
          <option <?php if ($ddlFactoryLocation==$item->location): ?> selected="selected" <?php endif ?> value="<?php echo $item->location ?>"><?php echo $item->location ?></option>
        <?php endforeach; ?>
      </select>
      <br />

      <label>Select Factory Name</label>
      <select class="form-control" id="ddlFactoryNameWorker" name="ddlFactoryNameWorker">
       <option value="" selected="selected" hidden>Select Factory</option>
     </select>
     <br />

     <label>From Date</label>
     <input type="date" name="txtFromDate" id="txtFromDate" class="form-control" required autofocus><br />

     <label>To Date</label>
     <input type="date" name="txtTodate" id="txtTodate" class="form-control" required autofocus><br />
     <label>Basic Salary</label>
     <div class="input-group">
       <!--   -->
       <span class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></span>
       <input type="number" placeholder="Enter Basic Salary" name="txtBasicSalary" id="txtBasicSalary" class="form-control" required autofocus />
       <span class="input-group-addon">.00</i></span>
     </div>
     <br/>

     <label>CA</label>
     <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></span>
      <input type="number" name="txtCA" id="txtCA" class="form-control" required autofocus placeholder="Enter Conveyance Allowance" />
      <span class="input-group-addon">.00</i></span>
    </div><br/>

    <label>H.R.A</label>
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></span>
      <input type="number" name="txtHRA" id="txtHRA" class="form-control" required autofocus placeholder="Enter House Rent Allowance" />
      <span class="input-group-addon">.00</i></span>
    </div><br/>

    <label>D.L.A</label>
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></span>
      <input type="number" name="txtDLA" id="txtDLA" class="form-control" required autofocus placeholder="Enter Dearness Allowance" />
      <span class="input-group-addon">.00</i></span>
    </div>
    <br/>


    <label class="alert alert-info">Select and Check the Employees (Workers) to be assigned</label>
    <div class="row">
     <div class="col-md-12">
       <div class="table-responsive">
        <table width="1279" class="table table-bordered">
          <thead>
            <tr>
              <th width="43">Sl#</th>
              <th width="347">Name of the Workers (Alphabetical Order)</th>
              <th width="166">Mobile Number</th>
              <th width="568">Category</th>
              <th width="131">Checked</th>
            </tr>
          </thead>
          <tbody>
            <?php $count=0; ?>
            <?php foreach ($employeelist as $list): ?>
              <tr>
                <td><?php echo ++$count; ?></td>
                <td><?php echo $list->fname." ".$list->lname ?></td>
                <td><?php echo $list->mob_no ?></td>
                <td><?php echo $list->category ?> </td>
                <td><input name="emp[]" type="checkbox" value="<?php echo $list->emp_id_auto ?>" /></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <button class="btn btn-lg btn-success btn-block" type="submit">Assign All Selected Employees (Workers)</button>
  <?php echo form_close() ?>


  <!-- List starts from here -->


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






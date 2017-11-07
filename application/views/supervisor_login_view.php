<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <?php include "include/head.php";?>
  <style>
  label[generated] {
   margin-top: -17px;
   margin-bottom: -20px;
   clear:both
 }
 #emp_data [class *= 'col-'] {padding-bottom: 22px}
</style>

</head>
<?php if (!empty($edit)): ?>
  <?php
    $ddlSuparvisor=$edit[0]['supervisor_id'];
    $txtUsername=$edit[0]['user_name'];
    $txtArea=$edit[0]['area'];

   ?>
 <?php else: ?>

  <?php
    $ddlSuparvisor='';
    $txtUsername='';
    $txtPassword='';
    $txtArea='';

   ?>
  
<?php endif ?>

<body>
  <?php include "include/header.php";?>
  <section id="mainbody">
    <div class="container">
      <?php if($this->session->flashdata('success_log')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Success!</strong> <?php echo $this->session->flashdata('success_log'); ?>
        </div>
      <?php elseif ($this->session->flashdata('error_log')) : ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Warning!</strong> <?php echo $this->session->flashdata('error_log'); ?>
        </div>
      <?php endif; ?>
      <div class="row">
        <div class="col-xs-12">
          <h3 class="alert alert-info">Create Supervisor Authentication</h3>
          <?php if (empty($edit)): ?>
            <?php echo form_open('Add/insertsupervisorcredential'); ?>
          <?php else: ?>
            <?php echo form_open('Edit/editsuperisor/'.$editid); ?>
            <?php echo form_hidden('mode', 'edit'); ?>
            <input type="hidden" name="record_id" value="<?php echo $edit[0]['record_id'] ?>">
          <?php endif ?>
          <div class="form-group">
            <label for="ddlSuparvisor">Select Supervisor</label>
            <select class="form-control" name="ddlSuparvisor" onchange="getsuparvisorarea(this.value)" required id="ddlSuparvisor">
              <option  hidden value="">Select Supervisor</option>
              <?php if ($supervisorlist): ?>
                <?php foreach ($supervisorlist as $list): ?>
                  <option <?php if($list->emp_id_auto==$ddlSuparvisor): ?> selected="selected" <?php endif; ?> value="<?php echo $list->emp_id_auto; ?>"><?php echo $list->fname." ".$list->lname ?></option>
                <?php endforeach ?>
              <?php endif ?>
            </select>
          </div>
          <div class="form-group">
            <label for="txtArea">Area</label>
            <input type="text" class="form-control" readonly="readonly" required id="txtArea" name="txtArea" placeholder="Area"  value="<?php echo $txtArea ?>">
          </div>
          <div class="form-group">
            <label for="txtUsername">Username</label>
            <input type="text" class="form-control" required id="txtUsername" name="txtUsername" placeholder="Username" <?php if(!empty($edit)): ?> disabled="disabled" <?php endif;?> value="<?php echo $txtUsername ?>">
          </div>
          <div class="form-group">
            <label for="txtPassword">Password</label>
            <input type="password" class="form-control" <?php if(empty($edit)): ?> required <?php endif; ?>  id="txtPassword" name="txtPassword" placeholder="Password" >
          </div>
          <button type="submit" class="btn btn-success btn-lg"><?php if(!empty($edit)): ?>Update<?php else: ?>Submit<?php endif; ?></button>
          <?php echo  form_close(); ?>
        </div>
      </div>
      <div class="row">
        <h5 class="text-center alert alert-success"><strong>LIST OF SUPARVISOR</strong></h5>
        <div class="col-md-12">
         <div class="table-responsive">
          <table width="1281" class="table table-bordered">
            <thead>
              <tr>
                <th width="27">Sl#</th>
                <th width="243">SUPARVISOR NAME</th>
                <th width="295">AREA</th>
                <th width="205">USERNAME</th>
                <th width="192">ACTION</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($datas): ?>
                <?php $count=0; ?>
                <?php foreach ($datas as $key ): ?>
                <tr>
                  <td><?php echo ++$count; ?></td>
                  <td><?php echo $key->fname." ".$key->lname ?></td>
                  <td><?php echo $key->area ?></td>
                  <td><?php echo $key->user_name ?></td>
                  <td>
                    <a class="btn btn-info btn-xs" href="<?php echo base_url() ?>Edit/editsuperisor/<?php echo $key->record_id; ?>" onclick="return confirm('Are You Want To Sure To Edit ?')" >Edit</a>
                    <?php if ($key->status): ?>
                      <a class="btn btn-success btn-xs" href="<?php echo base_url() ?>Edit/switchsuperisor/<?php echo $key->record_id; ?>/0" onclick="return confirm('Are You Want To De-Active This Supervisor ?')">Deactive</a>
                    <?php else: ?>
                      <a class="btn btn-danger btn-xs" href="<?php echo base_url() ?>Edit/switchsuperisor/<?php echo $key->record_id; ?>/1" onclick="return confirm('Are You Want To Active This Supervisor ?')">Active</a>
                    <?php endif ?>
                  </td>
                </tr>
                <?php endforeach ?>
                <?php else: ?>
                  <td colspan="5" align="center">No Record Found</td>
              <?php endif ?>
            </tbody>
          </div>
        </div>
      </div>
    </div>

  </section>
  <script type="text/javascript">
    function getsuparvisorarea(value) {
   // alert(value);  
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtArea").value = this.responseText;
          // alert(this.responseText);
        }
      };
      var url="<?php echo base_url();?>Index/getsupervisorarea/"+value;
      xmlhttp.open("GET", url, true);
      xmlhttp.send();
    }
  </script>
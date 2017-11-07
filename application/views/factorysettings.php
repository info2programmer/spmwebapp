<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "include/head.php";?>
</head>

<body>
    <?php include "include/header.php";?>

    <?php
    if(!empty($edit))
    {
       
        $txtLocation=$edit[0]['location'];
        $txtName=$edit[0]['factory_name'];
        $txtFactoryId=$edit[0]['factory_id'];
        $txtAddress=$edit[0]['full_address'];
        $txtPin=$edit[0]['pin'];
        $txtPhone=$edit[0]['phone_number'];
        $txtEmail=$edit[0]['email_address'];
        $txtContactPerson=$edit[0]['contact_person'];
        $txtCMobile=$edit[0]['mobile_number'];
       
    }
    else{
        $txtLocation='';
        $txtName='';
        $txtFactoryId='';
        $txtAddress='';
        $txtPin='';
        $txtPhone='';
        $txtEmail='';
        $txtContactPerson='';
        $txtCMobile='';
    }
     ?>

    <section id="mainbody">
        <div class="container">
            <?php if($this->session->flashdata('success_log')): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>success!</strong> <?php echo $this->session->flashdata('success_log'); ?>
              </div>
            <?php endif; ?>
          <div class="row">
              <h3 class="alert alert-info">Factory Settings</h3>
              <h5 class="text-center alert alert-warning"><strong>ADD FACTORY</strong></h5>
              <?php $form_att=array('class' => 'form-grop' ); ?>
              <?php if (!empty($edit)): ?>
                  <?php echo form_open('Edit/factory/'.$editid,$form_att) ?>
              <?php else: ?>
                <?php echo form_open('Add/Factory',$form_att) ?>
              <?php endif ?>
              
              <?php if (!empty($edit)): ?>
                  <?php echo form_hidden('mode', 'post'); ?>
                  <?php echo form_hidden('update_id',$txtFactoryId); ?>
              <?php endif ?>
              <div class="col-md-2 text-right" style="padding-top:5px;">Location of the Factory</div><div class="col-md-2">
                <input name="txtLocation" value="<?php echo $txtLocation; ?>" required type="text" class="form-control" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Name of the Factory</div><div class="col-md-2">
                <input name="txtName" value="<?php echo $txtName; ?>" required type="text" class="form-control" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Factory ID (autogen)</div><div class="col-md-2">
                <?php if (!empty($edit)): ?>
                    <input name="txtFactoryId" type="text" class="form-control" value="SPM/FAC/<?php echo $empDtlcnt[0]['empcnt'] ?>" readonly="readonly" />
                <?php else: ?>
                    <input name="txtFactoryId" type="text" class="form-control" value="SPM/FAC/<?php echo $empDtlcnt[0]['empcnt']+1 ?>" readonly="readonly" />
                <?php endif ?>
                
            </div>
            <br /><br />
            <div class="col-md-2 text-right" style="padding-top:5px;">Full Address</div><div class="col-md-2">
                <input name="txtAddress" type="text" class="form-control" value="<?php echo $txtAddress ?>" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Pincode</div><div class="col-md-2">
                <input name="txtPin" type="number" value="<?php echo $txtPin ?>"  class="form-control" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Phone Number</div><div class="col-md-2">
                <input name="txtPhone" type="number" value="<?php echo $txtPhone ?>" class="form-control"/>
            </div>
            <br /><br />
            <div class="col-md-2 text-right" style="padding-top:5px;">Email Address</div><div class="col-md-2">
                <input name="txtEmail" value="<?php echo $txtEmail ?>" type="email" class="form-control" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Contact Person</div><div class="col-md-2">
                <input name="txtContactPerson" value="<?php echo $txtContactPerson ?>" type="text" class="form-control" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Mobile Number</div><div class="col-md-2">
                <input name="txtCMobile"  value="<?php echo $txtCMobile ?>" type="number" class="form-control"/>
            </div>
            <br /><br /><br />

            <div class="col-md-12 text-right">
                <?php if (!empty($edit)): ?>
                <button class="btn btn-success">Update Factory</button>
            <?php else: ?>
                <button class="btn btn-success">Add Factory</button>
            <?php endif ?>
            </div>
            <?php echo  form_close(); ?>
        </div>

        <!-------------------------------------------------- List starts from here ---------------------------------------------------->

        <div class="row">
          <h5 class="text-center alert alert-warning"><strong>LIST OF FACTORIES</strong></h5>
          <div class="col-md-12">
           <div class="table-responsive">
            <table width="1281" class="table table-bordered">
                <thead>
                  <tr>
                    <th width="27">Sl#</th>
                    <th width="148">Factory Location</th>
                    <th width="220">Factory Name</th>
                    <th width="295">Full Address</th>
                    <th width="205">Contact Person</th>
                    <th width="192">Mobile Number</th>
                    <th width="162">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $count=0; ?>
                <?php foreach ($empDtl AS $empldtl): ?>
                    <tr>
                        <td><?php echo ++$count ?></td>
                        <td><?php echo $empldtl['location'] ?></td>
                        <td><?php echo $empldtl['factory_name'] ?></td>
                        <td><?php echo $empldtl['full_address']." , ".$empldtl['pin']." , ".$empldtl['phone_number']. " , ".$empldtl['email_address'] ?></td>
                        <td><?php echo $empldtl['contact_person'] ?></td>
                        <td><?php echo $empldtl['mobile_number'] ?></td>
                        <td>
                            <?php if ($empldtl['status']): ?>
                                <a href="<?php echo base_url(); ?>Edit/changefactorystatus/<?php echo $empldtl['factory_id'] ?>/0" class="btn btn-danger btn-xs">Deactive</a> 
                            <?php else: ?>
                                <a href="<?php echo base_url(); ?>Edit/changefactorystatus/<?php echo $empldtl['factory_id'] ?>/1" class="btn btn-success btn-xs">Active</a> 
                            <?php endif ?>


                            <a onclick="return confirm('Are You Sure?');" href="<?php echo base_url(); ?>Edit/factory/<?php echo $empldtl['factory_id'] ?>" class="btn btn-primary btn-xs">Edit</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
</div>

</div>
</section> <!--Dashboardbody -->

<?php include "include/footer.php";?>

</body>
</html>






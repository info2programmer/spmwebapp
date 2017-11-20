
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


      <h3 class="alert alert-info">Worker Attendance</h3>
      <div class="col-md-12 well" style="padding-bottom:25px;">
        <h4 style="font-family: 'Oswald', sans-serif;">Search Workers Plantwise</h4>
        <?php
        $form_attribute=array(
          'class' => 'form-signin'
        );

        ?>
        <?php echo form_open('Index/previous_attendance',$form_attribute); ?>
        <h6 class="form-signin-heading" style="color:red;"><i class="fa fa-info-circle"></i> Assign worker to plant</h6>

        <label for="ddlPlant">Select Plant</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-industry" aria-hidden="true"></i></span>
          <select name="ddlPlant" required id="ddlPlant" class="form-control">
            <option value="" hidden>Select Plant</option>
            <?php foreach ($plant_list as $list): ?>
              <option value="<?php echo $list->factory_id ?>-<?php echo $list->factory_name ?>"><?php echo $list->factory_name ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <br />
        
        <label for="txtDate">From Date</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-industry" aria-hidden="true"></i></span>
          <input type="date" name="txtDate" class="form-control" id="txtDate" />
        </div>
        <br />
  
        <label for="txtToDate">To Date</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-industry" aria-hidden="true"></i></span>
          <input type="date" name="txtToDate" class="form-control" id="txtToDate" />
        </div>
        <br />


        <button class="btn btn-lg btn-success btn-block" name="btnSubmit" value="search" type="submit">Search Workers</button>
        <?php echo form_close(); ?>
      </div>


    </div>

    <!------------------------------------------ separator -------------------------------------->
    <?php if (isset($listing_data)): ?>
      <div class="row">
        <h3 class="alert alert-info"> Worker For <?php echo $plant_name ?></h3>
        <form method="post" action="<?php echo base_url() ?>Add/previous_attendance">
          <input type="hidden" value="<?php echo $plant_id ?>" name="txtPlantId" />
         
            <label style="float: left;">Attendance Date : </label>
            <input type="date" name="txtDateAttendance" required class="col-sm-4 form-control" style="float: left; width:20%" />
           <button type="submit" name="btnSubmit" value="unassign" style="float: right;margin-bottom:8px; margin-right: 10px" class="btn btn-info"><i class="fa fa-check"></i> Submit</button>
         <br/>
         <div class="col-md-12">
           <div class="table-responsive">
            <table width="1281" class="table table-bordered">
              <thead>
                <tr>
                  <th>Sl#</th>
                  <th>Employee ID</th>
                  <th>Employee Name</th>
                  <th>Address</th>
                  <th>Mobile Number 1</th>
                  <th>Mobile Number 2</th>
                  <th>Action <br/>
                    <p align="center"><input type="checkbox" onclick="checkAll(this)" /></p>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; foreach($listing_data AS $list){?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $list->emp_id;?></td>
                  <td><?php echo $list->fname.' '.$list->lname;?></td>
                  <td>
                    <strong>Vill</strong> - <?php echo $list->pre_vill;?>
                    <strong>P.S</strong> - <?php echo $list->pre_ps;?>
                    <strong>Pin</strong> - <?php echo $list->pre_pin;?>
                    <strong>Dis</strong> - <?php echo $list->pre_dis;?>
                  </td>
                  <td><?php echo $list->mob_no;?></td>
                  <td><?php echo $list->phn_no;?></td>
                  <td align="center">
                    <input type="checkbox" name="emp_id[]"  value="<?php echo $list->emp_id_auto ?>" >
                  </td>
                </tr>
                <?php $i++;} ?>
              </tbody>
            </table>
          </div>
        </div>
      </form>
    </div>
  <?php endif; ?>

</section> <!---Dashboardbody -->

<?php include "include/footer.php";?>

</body>
<script>
        // function getfactory(value) {
        //  // alert(value);  
        //  var xmlhttp = new XMLHttpRequest();
        //  xmlhttp.onreadystatechange = function() {
        //   if (this.readyState == 4 && this.status == 200) {
        //     document.getElementById("ddlFactoryName").innerHTML  = this.responseText;
        //     document.getElementById("ddlFactoryNameWorker").innerHTML  = this.responseText;
        //          // alert(this.responseText);
        //        }
        //      };
        //      var url="<?php //echo base_url();?>Index/getfactorybylocation/"+value;
        //      xmlhttp.open("GET", url, true);
        //      xmlhttp.send();
        //    }

        function checkAll(ele) {
         if($(ele).is(':checked')){
          $(ele).closest('table').find('input[type=checkbox]').prop('checked',true);
        } else {
          $(ele).closest('table').find('input[type=checkbox]').prop('checked',false);
        }
      }

   // function getfactorydatabysupervisor(value) {
   //   // body...
   // }
 </script>
 </html>






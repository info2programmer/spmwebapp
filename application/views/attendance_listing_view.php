
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php include "include/head.php";?>
  <script type="text/javascript">
       var tableToExcel = (function () {
           var uri = 'data:application/vnd.ms-excel;base64,'
   , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
   , base64 = function (s) { return window.btoa(unescape(encodeURIComponent(s))) }
   , format = function (s, c) { return s.replace(/{(\w+)}/g, function (m, p) { return c[p]; }) }
           return function (table, name) {
               if (!table.nodeType) table = document.getElementById(table)
               var ctx = { worksheet: name || 'Worksheet', table: table.innerHTML }
               window.location.href = uri + base64(format(template, ctx))
           }
       })()
   </script>
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
        <?php echo form_open('Index/attendance_report',$form_attribute); ?>
        <h6 class="form-signin-heading" style="color:red;"><i class="fa fa-info-circle"></i> Assign worker to plant</h6>

        <label for="ddlPlant">Select Plant</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-industry" aria-hidden="true"></i></span>
          <select name="ddlPlant" required id="ddlPlant" class="form-control">
            <option value="" hidden>----Select Plant----</option>
            <?php foreach ($plant_list as $list): ?>
              <option value="<?php echo $list->factory_id ?>-<?php echo $list->factory_name ?>"><?php echo $list->factory_name ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <br />
        
        <label for="txtDate">Select Month</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
          <input type="month" name="txtMonth" class="form-control" id="txtMonth" />
        </div>
        <br />

        <button class="btn btn-lg btn-success btn-block" name="btnSubmit" value="search" type="submit">Search Workers</button>
        <?php echo form_close(); ?>
      </div>


    </div>

    <!------------------------------------------ separator -------------------------------------->
    <?php if (isset($attendance_list)): ?>
      <div class="row">
        <h3 class="alert alert-info">Attendance Report For <?php echo $plant_name ?> Plant For <?php echo $month_year; ?></h3>
        
        <button type="submit" name="btnSubmit" value="unassign" style="float: right;margin-bottom:8px; margin-right: 10px" onclick="tableToExcel('exportTable', 'W3C Example Table');" class="btn btn-danger"><i class="fa fa-file-excel-o"></i> Download  Excel</button>
        <br/>
        <div class="col-md-12">
         <div class="table-responsive" id="content">
          <table width="100%" id="exportTable" class="table table-bordered">
            <thead>
              <tr>
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Full Day</th>
                <th>Half Day</th>
                <th>Overtime</th>
                <th>Total Days(Half+Full)</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($attendance_list as $item): ?>
                <tr>
                  <td>SPM/EMP/<?php echo $item->employee_id ?></td>
                  <td><?php echo $item->fname." ".$item->lname ?></td>
                  <td><?php echo $item->full_day ?></td>
                  <td><?php echo $item->half_day ?></td>
                  <td><?php echo $item->over_timer ?></td>
                  <td><?php echo $item->total_days ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
        <div id="editor"></div>
      </div>
    </div>
  <?php endif ?>

</section> <!---Dashboardbody -->

<?php include "include/footer.php";?>

</body>
 </html>






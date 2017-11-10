<?php error_reporting(0);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php include "include/head.php";?>
  <style type="text/css">
  <!--
  .style1 {font-size: 24px}
  -->
</style>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    $('#myTable').DataTable();
  });
</script>
</head>

<body>
  <?php include "include/header.php";?>

  <section id="mainbody">
    <div class="container">
     <div class="row">
      <h3 class="alert alert-info" style="margin-top:-0px;">Individual Employee Bio Data</h3>
      <div class="col-md-12">
        <div id='DivIdToPrint' class="page">
         <table width="1284" class="table table-bordered">

          <tbody>
            <tr>
              <td width="182" align="center" valign="middle"><img src="<?php echo base_url();?>employee/<?php echo $data[0]['image'];?>" height="160" width="140" /></td>
              <td colspan="2" align="left" valign="middle"><span class="style1">Name : <?php echo $data[0]['fname'].' '.$data[0]['lname'];?></span><br />
                <strong>Registration ID</strong> : <?php echo $data[0]['reg_id'];?><br />
                <strong>Employee ID</strong> : <?php echo $data[0]['emp_id'];?><br />
                <strong>Mobile Number</strong> : <?php echo $data[0]['mob_no'];?><br />
                <strong>Phone Number</strong> : <?php echo $data[0]['phn_no'];?><br />
                <strong>Date of Joining</strong> : <?php echo $data[0]['join_date'];?></td>
                <td colspan="3" align="right" valign="middle"><button class="btn btn-primary btn-lg print" onclick='printDiv();'><i class="fa fa-print"></i> Print</button></td>
              </tr>
              <tr>
                <td><strong>Present Address</strong></td>
                <td colspan="2">
                 <strong>Vill</strong> - <?php echo $data[0]['pre_vill'];?>
                 <strong>P.S</strong> - <?php echo $data[0]['pre_ps'];?>
                 <strong>Pin</strong> - <?php echo $data[0]['pre_pin'];?>
                 <strong>Dis</strong> - <?php echo $data[0]['pre_dis'];?>
               </td>
               <td width="214"><strong>Parmanent Address</strong></td>
               <td colspan="2">
                 <strong>Vill</strong> - <?php echo $data[0]['par_vill'];?>
                 <strong>P.S</strong> - <?php echo $data[0]['par_ps'];?>
                 <strong>Pin</strong> - <?php echo $data[0]['par_pin'];?>
                 <strong>Dis</strong> - <?php echo $data[0]['par_dis'];?>
               </td>
             </tr>

             <tr>
              <td><strong> Contractor Name  :</strong> <?php echo $data[0]['contractor_name']; ?><br/></td>
              <td><strong>Plant Name</strong> : <?php echo $data[0]['plant_name'];?></td>
              <td><strong>Reg.no.</strong> : <?php echo $data[0]['regno'];?><br /></td>
              <td><strong>Email</strong> : <?php echo $data[0]['email'];?><br /></td>
              <td><strong>Age</strong> : <?php echo $data[0]['age'];?><br /></td>
              <td> <strong>Religion</strong> : <?php echo $data[0]['religion'];?> </td>
            </tr>

            <tr>
              <td><strong>Father's Name</strong></td>
              <td width="202"><?php echo $data[0]['father_name'];?></td>
              <td width="205"><strong>Date of Birth</strong></td>
              <td><?php echo $data[0]['dob'];?></td>
              <td width="227"><strong>Blood Group</strong></td>
              <td width="226"><?php echo $data[0]['bld_grp'];?></td>
            </tr>
            <tr>
             <td><strong>Mother's Name</strong></td>
             <td width="202" colspan="5"><?php echo $data[0]['mother_name'];?></td>

           </tr>
           <tr>
            <td><strong>Home Number 1</strong></td>
            <td><?php echo $data[0]['rltv_phn'];?></td>
            <td><strong>Home Number 2</strong></td>
            <td><?php echo $data[0]['frnd_phn'];?></td>
            <td><strong>EPF number</strong></td>
            <td><?php echo $data[0]['epf_no'];?></td>
          </tr>
          <tr>
            <td><strong>Aadhar Card Number</strong></td>
            <td><?php echo $data[0]['adhar_no'];?></td>
            <td><strong>Voter ID Card Number</strong></td>
            <td><?php echo $data[0]['voter_id'];?></td>
            <td><strong>Pan Card Number</strong></td>
            <td><?php echo $data[0]['pan_card'];?></td>
          </tr>

          <tr>
            <td><strong>Maritial Status</strong></td>
            <td><?php echo $data[0]['maritial_status'];?></td>
            <td><strong>Spouse details </strong></td>
            <td><?php echo $data[0]['spouse_details'];?></td>
            <td><strong>No of children</strong></td>
            <td><?php echo $data[0]['no_of_children'];?></td>
          </tr>
          <tr>
            <td><strong>Education Qualification</strong></td>
            <td><?php echo $data[0]['edu_qualification'];?></td>
            <td><strong>Language can speak</strong></td>
            <td><?php echo $data[0]['language'];?></td>
            <td><strong>Convicted</strong></td>
            <td><?php echo $data[0]['convicted'];?></td>
          </tr>

          <tr>
           <td><strong>Convicted Details</strong></td>
           <td colspan="6"><?php echo $data[0]['convicted_details'];?></td>
         </tr>

         <tr>
          <td><strong>Driving Licence</strong></td>
          <td><?php echo $data[0]['dl'];?></td>
          <td><strong>Passport No</strong></td>
          <td><?php echo $data[0]['pasport'];?></td>
          <td><strong>Others</strong></td>
          <td><?php echo $data[0]['other_details'];?></td>
        </tr>

        <tr>
          <td><strong>Identification mark</strong></td>
          <td><?php echo $data[0]['identification_mark'];?></td>
          <td><strong>Other Disease</strong></td>
          <td><?php echo $data[0]['other_disease'];?></td>
          <td><strong>Medical fitness certificate </strong></td>
          <td><?php echo $data[0]['medical_certificate'];?></td>
        </tr>

        <tr>
          <td><strong>Emergency Contact Person</strong></td>
          <td><?php echo $data[0]['emargency_contact_person'];?></td>
          <td><strong>Contact Number</strong></td>
          <td><?php echo $data[0]['emargency_contact_no'];?></td>
          <td><strong>Address </strong></td>
          <td><?php echo $data[0]['emargency_contact_address'];?></td>
        </tr>


        <tr>
          <td><strong>Reference</strong></td>
          <td colspan="3"><?php echo $data[0]['refrnce'];?></td>
          <td><strong>UAN Number</strong></td>
          <td><?php echo $data[0]['uan_no'];?></td>
        </tr>
        <tr>
          <td><strong>Bank Name</strong></td>
          <td><?php echo $data[0]['bank'];?></td>
          <td><strong>Branch Name</strong></td>
          <td><?php echo $data[0]['branch'];?></td>
          <td><strong>Account Name</strong></td>
          <td><?php echo $data[0]['acc_name'];?></td>
        </tr>
        <tr>
          <td><strong>Account Number</strong></td>
          <td><?php echo $data[0]['acc_no'];?></td>
          <td><strong>IFSC Code</strong></td>
          <td><?php echo $data[0]['ifc_cose'];?></td>
          <td><strong>MICR Code</strong></td>
          <td><?php echo $data[0]['micr_code'];?></td>
        </tr>
        <tr>
          <td><strong>Date of Joining</strong></td>
          <td><?php echo $data[0]['join_date'];?></td>
          <td><strong>Basic Salary (INR)</strong></td>
          <td><?php echo $data[0]['base_sal'];?></td>
          <td><strong>EPF (INR)</strong></td>
          <td><?php echo $data[0]['emp_epf'];?></td>
        </tr>
        <tr>
          <td><strong>ESI (INR)</strong></td>
          <td><?php echo $data[0]['emp_esi'];?></td>
          <td><strong>House Rent (INR)</strong></td>
          <td><?php echo $data[0]['house_rent'];?></td>
          <td><strong>Total Salary (INR)</strong></td>
          <td><?php echo $data[0]['tot_sal'];?></td>
        </tr>
      <!-- <tr>
        <td><strong>Increment Date</strong></td>
        <td><?php //echo $data[0]['increment_date'];?></td>
        <td><strong>Increment Rate (%)</strong></td>
        <td><?php //echo $data[0]['inc_rate'];?></td>
        <td><strong>Next Increment Date</strong></td>
        <td><?php //echo $data[0]['nxt_inc'];?></td>
      </tr> -->
      <tr>
        <td><strong>Area</strong></td>
        <td><?php echo $data[0]['area'];?></td>
        <td><strong>Category</strong></td>
        <td><?php echo $data[0]['category'];?></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>

  <style>
@page {
  size: A4;
}
@media print {
  html, body {
    width: 210mm;
    height: 297mm;
  }

  .myTable{
      display: none !important;
    }
  /* ... the rest of the rules ... */
}
</style>
  <h3 class="alert alert-info myTable" style="margin-top:-0px;">Incriment History , Shoe Given History , Uniform Given History.</h3>
  <table id="myTable" class="myTable table table-bordered">
    <tr>
      <th>Sl.</th>
      <th>Date</th>
      <th>Worker Name</th>
      <th>Details</th>
    </tr>
    <?php $counter=0; ?>
    <?php foreach($short_list as $list): ?>
      <tr>
        <td><?php echo ++$counter ?></td>
        <td><?php echo $list->date ?></td>
        <td> <?php echo $data[0]['fname'].' '.$data[0]['lname'];?></td>
        <td><?php echo $list->reason ?></td>
      </tr>
    <?php endforeach; ?>
    <tr></tr>
    
  </table>
</div>
</div>
</div>





</div>
</section> 

<?php include "include/footer.php";?>

<script>
function printDiv() 
{
$('.print').css('display','none');
  var divToPrint=document.getElementById('DivIdToPrint');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()"><h1 align=\'center\'>Employee Details</h1>'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);
  window.location ='<?php echo current_url();?>';

}
</script>
</body>
</html>
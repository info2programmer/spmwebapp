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
   <script type="text/javascript"> $(document).ready(function() {
    $(window).keyup(function(e){
      if(e.keyCode == 44){
        $("body").hide();
      }

    }); }); 
  </script>
  <script>
    function copyToClipboard() {
  // Create a "hidden" input
  var aux = document.createElement("input");
  // Assign it the value of the specified element
  aux.setAttribute("value", "Você não pode mais dar printscreen. Isto faz parte da nova medida de segurança do sistema.");
  // Append it to the body
  document.body.appendChild(aux);
  // Highlight its content
  aux.select();
  // Copy the highlighted text
  document.execCommand("copy");
  // Remove it from the body
  document.body.removeChild(aux);
  alert("Print screen desabilitado.");
}

$(window).keyup(function(e){
  if(e.keyCode == 44){
    copyToClipboard();
  }
}); 
  </script>
</head>

<body>
    <?php include "include/header.php";?>

    <?php if (!empty($edit)): ?>
        <?php 
        $ddlSelectPlant=$edit[0]['plant_name'];
        $emp_id=$edit[0]['emp_id'];
        $fname=$edit[0]['fname'];
        $lname=$edit[0]['lname'];
        $txtRegno=$edit[0]['regno'];
        $img=$edit[0]['image'];
        $txtFatherName=$edit[0]['father_name'];
        $txtMobileNo=$edit[0]['mob_no'];
        $txtPhoneNo=$edit[0]['phn_no'];
        $txtEmail=$edit[0]['email'];
        $dob=$edit[0]['dob'];
        $txtAge=$edit[0]['age'];
        $txtReligion=$edit[0]['religion'];
        $ddlMaritialStatus=$edit[0]['maritial_status'];
        $txtSpouse=$edit[0]['spouse_details'];
        $txtchildren=$edit[0]['no_of_children'];
        $txtEducationQualification=$edit[0]['edu_qualification'];
        $txtLanguageCanSpeak=$edit[0]['language'];
        $ddlConvicted=$edit[0]['convicted'];
        $txtConvictedDetails=$edit[0]['convicted_details'];
        $txtPermanentVill=$edit[0]['par_vill'];
        $txtParmanentPS=$edit[0]['par_ps'];
        $txtParmanentPin=$edit[0]['par_pin'];
        $txtParmanentDis=$edit[0]['par_dis'];
        $txtPresentVill=$edit[0]['pre_vill'];
        $txtPresentPS=$edit[0]['pre_ps'];
        $txtPresentDis=$edit[0]['pre_dis'];
        $txtPresentPin=$edit[0]['pre_pin'];
        $adhar_no=$edit[0]['adhar_no'];
        $voter_id=$edit[0]['voter_id'];
        $pan_card=$edit[0]['pan_card'];
        $txtDL=$edit[0]['dl'];
        $txtPassport=$edit[0]['pasport'];
        $txtOther=$edit[0]['other_details'];
        $epf_no=$edit[0]['epf_no'];
        $uan_no=$edit[0]['uan_no'];
        $refrnce=$edit[0]['refrnce'];
        $bld_grp=$edit[0]['bld_grp'];
        $txtIdenificationMark=$edit[0]['identification_mark'];
        $ddlMedicalFitnessCertificate=$edit[0]['medical_certificate'];
        $txtOtherDisease=$edit[0]['other_disease'];
        $txtFatherName=$edit[0]['father_name'];
        $txtMotherName=$edit[0]['mother_name'];
        $txtParentContactNumber=$edit[0]['rltv_phn'];
        $rltv_phn=$edit[0]['rltv_phn'];
        $frnd_phn=$edit[0]['frnd_phn'];
        $txtParentsAddress=$edit[0]['par_vill'];
        $bank=$edit[0]['bank'];
        $branch=$edit[0]['branch'];
        $acc_name=$edit[0]['acc_name'];
        $acc_no=$edit[0]['acc_no'];
        $ifc_cose=$edit[0]['ifc_cose'];
        $micr_code=$edit[0]['micr_code'];
        $join_date=$edit[0]['join_date'];
        $base_sal=$edit[0]['base_sal'];
        $emp_epf=$edit[0]['emp_epf'];
        $emp_esi=$edit[0]['emp_esi'];
        $house_rent=$edit[0]['house_rent'];
        $tot_sal=$edit[0]['tot_sal'];
        $increment_date=$edit[0]['increment_date'];
        $inc_rate=$edit[0]['inc_rate'];
        $nxt_inc=$edit[0]['nxt_inc'];
        $txtArea=$edit[0]['area'];
        $ddlCategory=$edit[0]['category'];
        $txtEmargencyContactPerson=$edit[0]['emargency_contact_person'];
        $txtEmerygencyRelationship=$edit[0]['emargency_contact_relation'];
        $txtEmargencyContactNumber=$edit[0]['emargency_contact_no'];
        $txtEmergencyAddrss=$edit[0]['emargency_contact_address'];
        ?>
    <?php else: ?>
        <?php 
        $ddlSelectPlant='';
        $emp_id='';
        $fname='';
        $lname='';
        $txtRegno='';
        $img='';
        $txtFatherName='';
        $txtMobileNo='';
        $txtPhoneNo='';
        $txtEmail='';
        $dob='';
        $txtAge='';
        $txtReligion='';
        $ddlMaritialStatus='';
        $txtSpouse='';
        $txtchildren='';
        $txtEducationQualification='';
        $txtLanguageCanSpeak='';
        $ddlConvicted='';
        $txtConvictedDetails='';
        $txtPermanentVill='';
        $txtParmanentPS='';
        $txtParmanentPin='';
        $txtParmanentDis='';
        $txtPresentVill='';
        $txtPresentPS='';
        $txtPresentDis='';
        $txtPresentPin='';
        $adhar_no='';
        $voter_id='';
        $pan_card='';
        $txtDL='';
        $txtPassport='';
        $txtOther='';
        $epf_no='';
        $uan_no='';
        $refrnce='';
        $bld_grp='';
        $txtIdenificationMark='';
        $ddlMedicalFitnessCertificate='';
        $txtOtherDisease='';
        $txtFatherName='';
        $txtMotherName='';
        $txtParentContactNumber='';
        $rltv_phn='';
        $frnd_phn='';
        $txtParentsAddress='';
        $bank='';
        $branch='';
        $acc_name='';
        $acc_no='';
        $ifc_cose='';
        $micr_code='';
        $join_date='';
        $base_sal='';
        $emp_epf='';
        $emp_esi='';
        $house_rent='';
        $tot_sal='';
        $increment_date='';
        $inc_rate='';
        $nxt_inc='';
        $txtArea='';
        $ddlCategory='';
        $txtEmargencyContactPerson='';
        $txtEmerygencyRelationship='';
        $txtEmargencyContactNumber='';
        $txtEmergencyAddrss='';
        ?>
    <?php endif ?>

    <section id="mainbody">
        <div class="container">
           <div class="row">
            <div class="col-xs-12">
              <h3 class="alert alert-info">Employee Management</h3>
              <h5 class="alert alert-warning"><strong>Personal Details<span class="pull-right">STEP - I</span></strong></h5>
              <?php if (!empty($edit)): ?>
                <form class="form-grop" id="emp_data" name="emp_data" action="<?php echo base_url();?>edit/Employee/<?php echo $edit[0]['emp_id_auto'] ?> " enctype="multipart/form-data" method="post">
                    <input type="hidden"  name="mode" value="edit">
                    <input type="hidden" name="oldimage" value="<?php echo $img; ?>">
                    <input type="hidden" name="record_id_for_update" value="<?php echo $edit[0]['emp_id_auto'] ?>">
                <?php else: ?>
                    <form class="form-grop" id="emp_data" name="emp_data" action="<?php echo base_url();?>add/Employee" enctype="multipart/form-data" method="post">
                    <?php endif ?>

                    <div class="row">
                       <div class="col-md-2 text-right" style="padding-top:5px;">Plant Name</div><div class="col-md-4">
                        <select class="form-control" name="ddlSelectPlant" required id="ddlSelectPlant">
                          <option value="" hidden selected>Click Here</option>
                        <?php foreach($plant_details as $list): ?>
                          <option <?php if($list->factory_id == $ddlSelectPlant): ?> selected <?php endif; ?> value="<?php echo $list->factory_id ?>"><?php echo $list->factory_name ?></option>
                        <?php endforeach; ?>
                        </select>

                   </div>
                   <div class="col-md-2 text-right" style="padding-top:5px;">Reg.no (autogen)</div><div class="col-md-4">
                   <?php if (!empty($edit)): ?>
                      <input name="emp_id" id="emp_id" type="text" class="form-control" readonly="readonly" value="SPM/EMP/<?php echo $empDtlcnt[0]['empcnt'];?>" />
                  <?php else: ?>
                    <input name="emp_id" id="emp_id" type="text" class="form-control" readonly="readonly" value="SPM/EMP/<?php echo $empDtlcnt[0]['empcnt']+1;?>" />
                <?php endif ?>
            </div>

        </div>
        <div class="row">
        	<div class="col-md-2 text-right" style="padding-top:5px;">First Name</div><div class="col-md-2"><input name="fname" id="fname" type="text" value="<?php echo $fname; ?>" class="form-control" /></div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Last Name</div><div class="col-md-2"><input name="lname" value="<?php echo $lname; ?>" id="lname" type="text" class="form-control" /></div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Employee ID </div><div class="col-md-2"><input name="txtRegno" id="txtRegno" value="<?php echo $emp_id ?>" type="text" class="form-control" /></div>
        </div>
        
        <?php if (!empty($edit)): ?>
            <div class="row">
                <div class="col-md-2 text-right" style="padding-top:5px;">Old Image</div>
                <div class="col-md-2"><img src="<?php echo base_url(); ?>employee/<?php echo $img; ?>"></div>
            </div>
        <?php endif ?>
        <div class="row">
          <div class="col-md-2 text-right" style="padding-top:5px;">Photo</div><div class="col-md-2"><input name="photo" id="photo" type="file" class="form-control" /></textarea></div>
          <!--<div class="col-md-2 text-right" style="padding-top:5px;">Father's Name</div><div class="col-md-2"><input name="father_name" id="father_name" type="text" class="form-control" /></div>-->
          <div class="col-md-2 text-right" style="padding-top:5px;">Mobile 1</div><div class="col-md-2"><input name="mob_no" value="<?php echo $txtMobileNo ?>" id="mob_no" type="text" class="form-control" maxlength="10"/></div>
          <div class="col-md-2 text-right" style="padding-top:5px;">Mobile 2</div><div class="col-md-2"><input name="phn_no" id="phn_no" type="text" value="<?php echo  $txtPhoneNo  ?>" class="form-control" maxlength="10"/></div>
      </div>
      <!-- <div class="row">
       <div class="col-md-2 text-right" style="padding-top:5px;">Email</div><div class="col-md-10"><input name="txtEmail" id="txtEmail" value="<?php  //echo $txtEmail ?>" type="text" class="form-control"/></div>
   </div> -->
   <div class="row">
      <div class="col-md-2 text-right" style="padding-top:5px;">Email</div><div class="col-md-2"><input name="txtEmail" id="txtEmail" value="<?php  echo $txtEmail ?>" type="text" class="form-control"/></div>
       <div class="col-md-2 text-right" style="padding-top:5px;">Date of Birth</div><div class="col-md-2"><input name="dob"  value="<?php echo $dob; ?>" type="date" class="form-control"/></div>

      <!--  <div class="col-md-2 text-right" style="padding-top:5px;">Age</div><div class="col-md-2"><input name="txtAge" id="txtAge" type="text" class="form-control" value="<?php //echo $txtAge ?>" /></div> -->
       <div class="col-md-2 text-right" style="padding-top:5px;">Religion</div><div class="col-md-2"><input name="txtReligion" id="txtReligion" type="text" class="form-control" value="<?php echo $txtReligion ?>"/></div>
   </div>

   <div class="row">
       <div class="col-md-2 text-right" style="padding-top:5px;">Maritial Status</div><div class="col-md-2">
       <select name="ddlMaritialStatus" class="form-control">
           <option value="" selected="selected" hidden>Select Option</option>
           <option <?php if($ddlMaritialStatus=="married") { ?>  selected="selected" <?php  } ?> value="married">Married</option>
           <option <?php if($ddlMaritialStatus=="unmarried") {?>  selected="selected" <?php  } ?> value="unmarried">Un-Married</option>
       </select>
   </div>
   <div class="col-md-2 text-right" style="padding-top:5px;">Spouse details .</div><div class="col-md-2"><input name="txtSpouse" id="txtSpouse" value="<?php echo $txtSpouse; ?>" type="text" class="form-control"/></div>
   <div class="col-md-2 text-right" style="padding-top:5px;">No of children</div><div class="col-md-2"><input name="txtchildren" id="txtchildren" value="<?php echo $txtchildren; ?>" type="text" class="form-control"/></div>

</div>

<div class="row">
   <div class="col-md-2 text-right" style="padding-top:5px;">Education Qualification</div><div class="col-md-2"><input name="txtEducationQualification" id="txtEducationQualification" type="text" class="form-control" value="<?php echo $txtEducationQualification; ?>" /></div>
   <div class="col-md-2 text-right" style="padding-top:5px;"> Language can speak</div><div class="col-md-2"><input name="txtLanguageCanSpeak" id="txtLanguageCanSpeak" type="text" class="form-control" value="<?php echo $txtLanguageCanSpeak ?>" /></div><div class="col-md-2 text-right" style="padding-top:5px;">Convicted</div>
   <div class="col-md-2">
       <select class="form-control" name="ddlConvicted">
           <option value="" selected="selected" hidden>Select Convicted</option>
           <option <?php if($ddlConvicted=='No'): ?> selected="selected" <?php endif; ?>  value="No">No</option>
           <option <?php if($ddlConvicted=='Yes'): ?> selected="selected" <?php endif; ?> value="Yes">Yes</option>
       </select>
   </div>
</div>

<div class="row">
   <div class="col-md-2 text-right" style="padding-top:5px;">Convicted Details</div><div class="col-md-10">
   <textarea class="form-control"  name="txtConvictedDetails"><?php echo $txtConvictedDetails ?></textarea>
</div>
</div>
<br /><br/> <br/>
<h5 class="alert alert-warning"><strong>Pamanent Address<span class="pull-right">STEP - II</span></strong></h5>
<div class="row">

    <div class="col-md-2 text-right" style="padding-top:5px;">Vill/Town</div><div class="col-md-10"><input name="txtPermanentVill" id="txtPermanentVill" value="<?php echo $txtPermanentVill ?>" type="text" class="form-control" /></div>

</div>
<div class="row">
  <div class="col-md-2 text-right" style="padding-top:5px;">Police Station</div><div class="col-md-2"><input name="txtParmanentPS" id="txtParmanentPS" value="<?php echo $txtParmanentPS ?>" type="text" class="form-control" /></div>
  <div class="col-md-2 text-right" style="padding-top:5px;">Pincode</div><div class="col-md-2"><input name="txtParmanentPin" id="txtParmanentPin" value="<?php echo $txtParmanentPin ?>" type="text" class="form-control" maxlength="6"/></div>
  <div class="col-md-2 text-right" style="padding-top:5px;">District</div><div class="col-md-2"><input name="txtParmanentDis" id="txtParmanentDis" value="<?php echo $txtParmanentDis ?>" type="text" class="form-control" /></div>
</div>
<br /><br/> <br/>
<h5 class="alert alert-warning"><strong>Present Address<span class="pull-right">STEP - III</span></strong></h5>
<div class="row">

    <div class="col-md-2 text-right" style="padding-top:5px;">Vill/Town</div><div class="col-md-10"><input name="txtPresentVill" id="txtPresentVill" value="<?php echo $txtPresentVill; ?>" type="text" class="form-control" /></div>

</div>
<div class="row">
  <div class="col-md-2 text-right" style="padding-top:5px;">Police Station</div><div class="col-md-2"><input name="txtPresentPS" id="txtPresentPS"  value="<?php echo $txtPresentPS; ?>" type="text" class="form-control" /></div>
  <div class="col-md-2 text-right" style="padding-top:5px;">Pincode</div><div class="col-md-2"><input name="txtPresentPin" id="txtPresentPin" value="<?php echo $txtPresentPin; ?>" type="text" class="form-control" maxlength="6"/></div>
  <div class="col-md-2 text-right" style="padding-top:5px;">District</div><div class="col-md-2"><input name="txtPresentDis" id="txtPresentDis" value="<?php echo $txtPresentDis; ?>" type="text" class="form-control" /></div>
</div>

<br/><br/><br/>
<h5 class="alert alert-warning"><strong>Other Details<span class="pull-right">STEP - IV</span></strong></h5>



<div class="row">
   <div class="col-md-2 text-right" style="padding-top:5px;">Aadhar Card</div><div class="col-md-2"><input name="adhar_no" id="adhar_no" value="<?php echo $adhar_no; ?>"  type="text" class="form-control"/></div>
   <div class="col-md-2 text-right" style="padding-top:5px;">Voter ID Card</div><div class="col-md-2"><input name="voter_id" id="voter_id" value="<?php echo $voter_id; ?>"  type="text" class="form-control"/></div>
   <div class="col-md-2 text-right" style="padding-top:5px;">Pan Card</div><div class="col-md-2"><input name="pan_card" id="pan_card" value="<?php echo $pan_card; ?>"  type="text" class="form-control"/></div>
</div>

<div class="row">
   <div class="col-md-2 text-right" style="padding-top:5px;">Driving Licence</div><div class="col-md-2"><input name="txtDL" id="txtDL" value="<?php echo $txtDL; ?>" type="text" class="form-control"/></div>
   <div class="col-md-2 text-right" style="padding-top:5px;">Passport No.</div><div class="col-md-2"><input name="txtPassport" id="txtPassport" value="<?php echo $txtPassport; ?>" type="text" class="form-control"/></div>
   <div class="col-md-2 text-right" style="padding-top:5px;">Others</div><div class="col-md-2"><input name="txtOther" id="txtOther" type="text" value="<?php echo $txtOther; ?>" class="form-control"/></div>
</div>



<div class="row">
    <div class="col-md-2 text-right" style="padding-top:5px;">EPF Number</div><div class="col-md-4"><input name="epf_no" id="epf_no" type="text" value="<?php echo $epf_no; ?>" class="form-control"/></div>
    <div class="col-md-2 text-right" style="padding-top:5px;">UAN Number</div><div class="col-md-4"><input name="uan_no" id="uan_no" value="<?php echo $uan_no; ?>" type="text" class="form-control"/></div>

</div>

<div class="row">
    <div class="col-md-2 text-right" style="padding-top:5px;">Reference</div><div class="col-md-10">
      <textarea name="refrnce" id="refrnce" type="text" class="form-control" /><?php echo $refrnce; ?></textarea>
    </div>
</div>



<br /><br /><br />
         <!-- separator -->
         <h5 class="alert alert-warning"><strong>Medical Details<span class="pull-right">STEP - V</span></strong></h5>
         <div class="row">
         	<div class="col-md-2 text-right" style="padding-top:5px;">Blood Group</div><div class="col-md-2">
            <input name="bld_grp" value="<?php echo $bld_grp; ?>" id="bld_grp" type="text" class="form-control"/>
            </div>
         	 <div class="col-md-2 text-right" style="padding-top:5px;">Identification mark</div><div class="col-md-2">
             <input name="txtIdenificationMark" value="<?php echo $txtIdenificationMark; ?>" id="txtIdenificationMark" type="text" class="form-control" />
             </div>
             <div class="col-md-2 text-right" style="padding-top:5px;">Medical fitness certificate Yes/No</div><div class="col-md-2">
             	<select class="form-control" name="ddlMedicalFitnessCertificate">
                	<option value="" selected="selected" hidden>Select </option>
                	<option <?php if ($ddlMedicalFitnessCertificate=="no"): ?> selected="selected" <?php endif ?> value="No">No</option>
                    <option <?php if ($ddlMedicalFitnessCertificate=="Yes"): ?> selected="selected" <?php endif ?> value="Yes">Yes</option>
                </select>
             </div>
         </div>
         
         <div class="row">
         	<div class="col-md-2 text-right" style="padding-top:5px;">Other Disease</div><div class="col-md-10"><textarea name="txtOtherDisease" id="txtOtherDisease"  class="form-control" /><?php echo $txtOtherDisease; ?></textarea></div>
         </div>
         
         <br /><br /><br />
         <!-- separator -->
         <h5 class="alert alert-warning"><strong>Family Details<span class="pull-right">STEP - VI</span></strong></h5>
        <div class="row">
            <div class="col-md-2 text-right" style="padding-top:5px;">Father Name</div><div class="col-md-2"><input name="txtFatherName" id="txtFatherName" value="<?php echo $txtFatherName ?>" type="text" class="form-control" /></div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Mother Name</div><div class="col-md-2"><input name="txtMotherName" value="<?php echo $txtMotherName; ?>" id="txtMotherName" type="text" class="form-control" /></div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Contact Number</div><div class="col-md-2"><input name="txtParentContactNumber" value="<?php echo $txtParentContactNumber ?>" id="txtParentContactNumber" type="text" class="form-control" /></div>
        </div>
        
        <div class="row">
        	 <div class="col-md-2 text-right" style="padding-top:5px;">Home Number 1 </div><div class="col-md-4"><input name="rltv_phn" value="<?php echo $rltv_phn; ?>" id="rltv_phn" type="text" class="form-control" maxlength="10"/></div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Home Number 2 </div><div class="col-md-4"><input name="frnd_phn" id="frnd_phn" value="<?php echo $frnd_phn; ?>" type="text" class="form-control" maxlength="10"/></div>
        </div>
        
        <div class="row">
        	 <div class="col-md-2 text-right" style="padding-top:5px;">Address </div><div class="col-md-10"><textarea class="form-control" name="txtParentsAddress"><?php echo $txtParentsAddress ?></textarea></div>
        </div>
        <br/><br/><br/>
        <!--- separator -->
        <h5 class="alert alert-warning"><strong>Emergency Contact<span class="pull-right">STEP - VII</span></strong></h5>
        <div class="row">
            <div class="col-md-2 text-right" style="padding-top:5px;">Emergency Contact Person</div><div class="col-md-2">
            <input name="txtEmargencyContactPerson" value="<?php echo $txtEmargencyContactPerson; ?>" id="txtEmargencyContactPerson" type="text" class="form-control" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Relationship</div><div class="col-md-2">
            <input name="txtEmerygencyRelationship" value="<?php echo $txtEmerygencyRelationship ?>" id="txtRelationship" type="text" class="form-control" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Contact Number</div><div class="col-md-2">
            <input name="txtEmargencyContactNumber"  value="<?php echo $txtEmargencyContactNumber ?>" id="acc_name" type="text" class="form-control" />
            </div>
        </div>
        <div class="row">
        	<div class="col-md-2 text-right" style="padding-top:5px;">Address</div><div class="col-md-10">
            <textarea class="form-control" name="txtEmergencyAddrss"><?php echo $txtEmergencyAddrss; ?></textarea>
            </div>
        </div>
        <br/><br/> <br  />
        <!-- separator -->
        <h5 class="alert alert-warning"><strong>Bank Details<span class="pull-right">STEP - VIII</span></strong></h5>
        <div class="row">
            <div class="col-md-2 text-right" style="padding-top:5px;">Bank Name</div><div class="col-md-2">
            <input name="bank" value="<?php echo $bank; ?>" id="bank" type="text" class="form-control" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Branch Name</div><div class="col-md-2">
            <input name="branch" id="branch" value="<?php echo $branch; ?>" type="text" class="form-control" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Account Name</div><div class="col-md-2">
            <input name="acc_name" id="acc_name" name="<?php echo $acc_name; ?>" type="text" class="form-control" />
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-2 text-right" style="padding-top:5px;">Account Number</div><div class="col-md-2" style="padding-top:5px;">
            <input name="acc_no" value="<?php echo $acc_no ?>" id="acc_no" type="text" class="form-control" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">IFSC Code</div>
            <div class="col-md-2" style="padding-top:5px;">
            <input name="ifc_cose" id="ifc_cose" value="<?php echo $ifc_cose; ?>" type="text" class="form-control" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">MICR Code</div>
            <div class="col-md-2" style="padding-top:5px;">
            <input name="micr_code" id="micr_code" class="form-control" type="text" value="<?php echo $micr_code; ?>" class="micr_code" />
            </div>
        </div>
        
        <br /><br /><br />
        <!--- separator -->
        <h5 class="alert alert-warning"><strong>Employment Details<span class="pull-right">STEP - IX</span></strong></h5>
        <div class="row">
            <div class="col-md-2 text-right" style="padding-top:5px;">Date of Joining</div><div class="col-md-2" style="padding-top:5px;">
            <input name="join_date" id="join_date" value="<?php echo $join_date; ?>" type="date" class="form-control" value="<?php echo $join_date; ?>" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Salary/Day</div><div class="col-md-2" style="padding-top:5px;">
            <input name="base_sal" id="base_sal" value="<?php echo $base_sal; ?>" value="<?php echo $base_sal; ?>" type="text" class="form-control" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">EPF</div><div class="col-md-2" style="padding-top:5px;"><input name="emp_epf" id="emp_epf" value="<?php echo $emp_epf; ?>" value="<?php echo $emp_epf; ?>" type="text" class="form-control" /></div>
        </div>
        
        <div class="row">
            <div class="col-md-2 text-right" style="padding-top:5px;">ESI</div><div class="col-md-2" style="padding-top:5px;">
            <input name="emp_esi" value="<?php echo $emp_esi; ?>" id="emp_esi" type="text" class="form-control" value="<?php echo $emp_esi; ?>" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">House Rent</div><div class="col-md-2" style="padding-top:5px;">
            <input name="house_rent" value="<?php echo $house_rent; ?>" id="house_rent" type="text" class="form-control" value="<?php echo $house_rent; ?>" />
            </div>
            <div class="col-md-2 text-right" style="padding-top:5px;">Increment Date</div><div class="col-md-2">
            <input name="increment_date" id="increment_date" value="" type="date" class="form-control" />
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-md-2 text-right" style="padding-top:5px;">Uniform Date</div><div class="col-md-2">
            <input name="txtUniformDate" id="txtUniformDate" value="" type="date" class="form-control" /></div>

            <div class="col-md-2 text-right" style="padding-top:5px;">Shoe Date</div><div class="col-md-2">
            <input name="txtShoeDate" id="txtShoeDate" value="" type="date" class="form-control" /></div>

            <div class="col-md-2 text-right" style="padding-top:5px;">Category</div><div class="col-md-2" style="padding-top:5px;">
            <select name="ddlCategory" required id="ddlCategory" class="form-control">
            <option  value="" hidden>Click Here</option>
            <option <?php if($ddlCategory=="SKILLED"): ?> selected="selected" <?php endif; ?> value="SKILLED">SKILLED</option>
            <option <?php if($ddlCategory=="SEMISKILLED"): ?> selected="selected" <?php endif; ?> value="SEMISKILLED">SEMISKILLED</option>
            <option <?php if($ddlCategory=="UNSKILLED"): ?> selected="selected" <?php endif; ?> value="UNSKILLED">UNSKILLED</option>
             <option <?php if($ddlCategory=="SUPERVISOR"): ?> selected="selected" <?php endif; ?> value="SUPERVISOR">SUPERVISOR</option>
            </select>
            </div>
            <div class="col-md-4 text-right" style="padding-top:5px;"><button type="submit" class="btn btn-success btn-lg">Add Employee</button></div>
        </div>
        
       <!-- <div class="row">
        <div class="col-md-12 text-right"><button type="submit" class="btn btn-success">Add Employee</button></div>
    </div> -->



</form>
</div>
</div>

<!-------------------------------------------------- List starts from here ---------------------------------------------------->

<div class="row">
  <h5 class="text-center alert alert-success"><strong>LIST OF EMPLOYEES</strong></h5>
  <div class="col-md-12">
   <div class="table-responsive">
    <table width="1281" class="table table-bordered">
        <thead>
          <tr>
            <th width="27">Sl#</th>
            <th width="125">Employee ID</th>
            <th width="243">Employee Name</th>
            <th width="295">Address</th>
            <th width="205">Mobile Number 1</th>
            <th width="192">Mobile Number 2</th>
            <th width="192">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($empDtl AS $empldtl){?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $empldtl['emp_id'];?></td>
            <td><?php echo $empldtl['fname'].' '.$empldtl['lname'];?></td>
            <td>
                <strong>Vill</strong> - <?php echo $empldtl['pre_vill'];?>
                <strong>P.S</strong> - <?php echo $empldtl['pre_ps'];?>
                <strong>Pin</strong> - <?php echo $empldtl['pre_pin'];?>
                <strong>Dis</strong> - <?php echo $empldtl['pre_dis'];?>
            </td>
            <td><?php echo $empldtl['mob_no'];?></td>
            <td><?php echo $empldtl['phn_no'];?></td>
            <td><a href="<?php echo base_url();?>view/employee/<?php echo $empldtl['emp_id_auto'];?>" target="_blank"><button class="btn btn-warning btn-xs">Details</button></a>
             <a target="_blank" href="<?php echo base_url() ?>edit/Employee/<?php echo $empldtl['emp_id_auto'];?>">   
             <button class="btn btn-primary btn-xs">Edit</button>
             </a>
              <a href="<?php echo base_url();?>delete/deleteemployee/<?php echo $empldtl['emp_id_auto'];?>" onclick="return confirm('Are You Want To Delete ?');" target="_blank"><button class="btn btn-danger btn-xs">Delete</button></a></td>
        </tr>
        <?php $i++;} ?>

    </tbody>
</table>
</div>
</div>
</div>

</div>
</section> <!---Dashboardbody -->
<div id="user_message3"></div>
<?php include "include/footer.php";?>
<script type="text/javascript" src="http://pontikis.github.com/jui_alert/v2.0.0/jquery.jui_alert.min.js"></script>
<script type="text/javascript" src="http://pontikis.github.com/jui_alert/v2.0.0/i18n/en.js"></script>
<style>
.container1 {
  width: 40%;
  margin: 20px;
}
 
.container2 {
  width: 50%;
  margin: 20px;
}
 
.container3 {
  width: 60%;
  margin: 20px;
}
 
.message2 {
  font-size: 13px;
  font-family: Arial, sans-serif;
  letter-spacing: 1px;
}
</style>
<script>
function savedataf(){
var action = $("#emp_data").attr('action');
    $.ajax({
        url  : action,
        type : 'POST',
        data : $('#emp_data').serialize(),
        success : function(data) {
		console.log(data);
		if(data == 'Done'){
		alert('successfully added');
		$("#user_message3").jui_alert({
    containerClass: "container3 ui-widget",
    message: "Data Saved Successfully.",
    timeout: 3000,
    messageAreaClass: "jui_alert_message_area ui-state-error ui-corner-all",
    messageIconClass: "jui_alert_icon ui-icon ui-icon-alert"
  });
		}
           // window.location.replace(action);
        }
    });

	}	
</script>
</body>
</html>






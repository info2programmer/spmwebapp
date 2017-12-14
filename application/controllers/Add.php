<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('base_model');
		$this->load->helper('date');
		date_default_timezone_set('Asia/Kolkata');
		// echo date_default_timezone_get();
		
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function Employee()
	{
		if ( isset($_SESSION['user'])) {
			$fname = $this->input->post('fname');
			$lname = $this->input->post('lname');
			$emp_id = $this->input->post('emp_id');
			$father_name = $this->input->post('txtFatherName');
			$mob_no = $this->input->post('mob_no');
			$phn_no = $this->input->post('phn_no');

			$bld_grp = $this->input->post('bld_grp');
			$rltv_phn = $this->input->post('rltv_phn');
			$frnd_phn = $this->input->post('frnd_phn');
			$adhar_no = $this->input->post('adhar_no');
			$voter_id = $this->input->post('voter_id');
			$pan_card = $this->input->post('pan_card');
			$epf_no = $this->input->post('epf_no');
			$uan_no = $this->input->post('uan_no');
			$dob = $this->input->post('dob');
			$refrnce = $this->input->post('refrnce');
			$bank = $this->input->post('bank');
			$branch = $this->input->post('branch');
			$acc_name = $this->input->post('acc_name');
			$acc_no = $this->input->post('acc_no');
			$ifc_cose = $this->input->post('ifc_cose');
			$micr_code = $this->input->post('micr_code');
			$join_date = $this->input->post('join_date');
			$base_sal = $this->input->post('base_sal');
			$emp_epf = $this->input->post('emp_epf');
			$emp_esi = $this->input->post('emp_esi');
			$house_rent = $this->input->post('house_rent');
			$tot_sal = $this->input->post('tot_sal');
			$increment_date = $this->input->post('increment_date');
			$inc_rate = $this->input->post('inc_rate');
			$nxt_inc = $this->input->post('nxt_inc');
			if(!empty($_FILES["photo"]["name"]))
			{
				$imges = $_FILES["photo"]["name"];
				$exp = explode('.',$imges);
				$image = $exp[0].time().'.'.$exp[1];
				$temp = $_FILES["photo"]["tmp_name"];
				// Image Upload Here
				$this->base_model->news_file_upload($image,$temp);
			}
			else{
				$image="N/A";
			}
			
			$txtArea=$this->input->post('txtArea');
			$ddlCategory=$this->input->post('ddlCategory');
			$txtcontractor=$this->input->post('txtcontractor');
			$ddlSelectPlant=$this->input->post('ddlSelectPlant');
			$txtRegno=$this->input->post('txtRegno');
			$txtEmail=$this->input->post('txtEmail');
			$txtAge=$this->input->post('txtAge');
			$txtReligion=$this->input->post('txtReligion');
			$ddlMaritialStatus=$this->input->post('ddlMaritialStatus');
			$txtSpouse=$this->input->post('txtSpouse');
			$txtchildren=$this->input->post('txtchildren');
			$txtEducationQualification=$this->input->post('txtEducationQualification');
			$txtLanguageCanSpeak=$this->input->post('txtLanguageCanSpeak');
			$ddlConvicted=$this->input->post('ddlConvicted');
			$txtConvictedDetails=$this->input->post('txtConvictedDetails');
			$txtDL=$this->input->post('txtDL');
			$txtPassport=$this->input->post('txtPassport');
			$txtOther=$this->input->post('txtOther');
			$txtIdenificationMark=$this->input->post('txtIdenificationMark');
			$txtOtherDisease=$this->input->post('txtOtherDisease');
			$ddlMedicalFitnessCertificate=$this->input->post('ddlMedicalFitnessCertificate');
			$txtEmargencyContactPerson=$this->input->post('txtEmargencyContactPerson');
			$txtEmerygencyRelationship=$this->input->post('txtEmerygencyRelationship');
			$txtEmargencyContactNumber=$this->input->post('txtEmargencyContactNumber');
			$txtEmergencyAddrss=$this->input->post('txtEmergencyAddrss');

			$txtPermanentVill=$this->input->post('txtPermanentVill');
			$txtParmanentPS=$this->input->post('txtParmanentPS');
			$txtParmanentPin=$this->input->post('txtParmanentPin');
			$txtParmanentDis=$this->input->post('txtParmanentDis');
			$txtPresentVill=$this->input->post('txtPresentVill');
			$txtPresentPS=$this->input->post('txtPresentPS');
			$txtPresentDis=$this->input->post('txtPresentDis');
			$txtPresentPin=$this->input->post('txtPresentPin');
			$txtMothername=$this->input->post('txtMotherName');

			$txtUniformDate=$this->input->post('txtUniformDate');
			$txtShoeDate=$this->input->post('txtShoeDate');
			$txtprepaid_card=$this->input->post('txtprepaid_card');

			$fields = array(
				'fname' => $fname,
				'lname' => $lname,
				'emp_id' => $txtRegno,
				'image' => $image,
				'father_name' => $father_name,
				'mob_no' => $mob_no,
				'phn_no' => $phn_no,
				'bld_grp' => $bld_grp,
				'rltv_phn' => $rltv_phn,
				'frnd_phn' => $frnd_phn,
				'adhar_no' => $adhar_no,
				'voter_id' => $voter_id,
				'pan_card' => $pan_card,
				'epf_no' => $epf_no,
				'uan_no' => $uan_no,
				'dob' => $dob,
				'refrnce' => $refrnce,
				'bank' => $bank,
				'branch' => $branch,
				'acc_name' => $acc_name,
				'acc_no' => $acc_no,
				'ifc_cose' => $ifc_cose,
				'micr_code' => $micr_code,
				'join_date' => $join_date,
				'base_sal' => $base_sal,
				'emp_epf' => $emp_epf,
				'emp_esi' => $emp_esi,
				'house_rent' => $house_rent,
				'inc_rate' => $inc_rate,
				'area' => $txtArea,
				'category' => $ddlCategory,
				'contractor_name' => $txtcontractor,
				'plant_name' => $ddlSelectPlant,
				'regno' => $emp_id,
				'email' => $txtEmail,
				'age' => $txtAge,
				'religion' => $txtReligion,
				'maritial_status' => $ddlMaritialStatus,
				'spouse_details' => $txtSpouse,
				'no_of_children' => $txtchildren,
				'edu_qualification' => $txtEducationQualification,
				'language' => $txtLanguageCanSpeak,
				'convicted' => $ddlConvicted,
				'convicted_details' => $txtConvictedDetails,
				'dl' => $txtDL,
				'pasport' =>  $txtPassport,
				'other_details' => $txtOther,
				'identification_mark' => $txtIdenificationMark,
				'other_disease' => $txtOtherDisease,
				'medical_certificate' => $ddlMedicalFitnessCertificate,
				'emargency_contact_person' => $txtEmargencyContactPerson,
				'emargency_contact_relation' => $txtEmerygencyRelationship,
				'emargency_contact_no' => $txtEmargencyContactNumber ,
				'emargency_contact_address' => $txtEmergencyAddrss,
				'par_vill' => $txtPermanentVill,
				'par_ps' =>  $txtParmanentPS,
				'par_pin' => $txtParmanentPin,
				'par_dis' =>  $txtParmanentDis,
				'pre_vill' => $txtPresentVill,
				'pre_ps' =>  $txtPresentPS,
				'pre_pin' => $txtPresentPin,
				'pre_dis' =>  $txtPresentDis,
				'mother_name' => $txtMothername,
				'prepaid_card'=> $txtprepaid_card
			);
			$service = $this->base_model->form_post('employee',$fields);
			if($increment_date!=""){
				$this->base_model->log_uniform($increment_date,'Incriment Done',(int)str_replace('SPM/EMP/','',$emp_id));
			}
			if($txtUniformDate!=""){
				$this->base_model->log_uniform($txtUniformDate,'Uniform Payment Done',(int)str_replace('SPM/EMP/','',$emp_id));
			}
			if($txtShoeDate!=""){
				$this->base_model->log_uniform($txtShoeDate,'Shoe Payment Done',(int)str_replace('SPM/EMP/','',$emp_id));
			}
			
			if($service)
			{
				$this->session->set_flashdata('success_log', 'Employee Add Successfully');				
				redirect(base_url().'Index/Employee');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function Service()
	{
		if ( isset($_SESSION['user'])) {
			$service = $this->input->post('txt_service');
			$note = $this->input->post('txt_notes');
			$num = $this->db->query("SELECT MAX(service_id) AS mid FROM td_service")->result_array();
			if($note == '') {
				$nts = 'N/A';
			} else {
				$nts = $this->input->post('txt_notes');
			}
			$uni = substr($service,0,4).'/BELL/'.$num[0]['mid'];
			$fields = array(
				'service_name' => $service,
				'note' => $nts,
				'uni_code' => $uni
			);
			$service = $this->base_model->form_post('td_service',$fields);
			if($service)
			{
				redirect(base_url().'index.php/Index/serviceadd');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function LandLord()
	{
		if ( isset($_SESSION['user'])) {


			$space_owner = $this->input->post('txt_space_lord');
			$space_price = $this->input->post('txt_space_price');
			$space_rent_starts = $this->input->post('txt_space_rental_start');
			$space_rent_ends = $this->input->post('txt_space_rental_end');
			$space_tax = $this->input->post('txt_space_tax');
			$space_electricity = $this->input->post('txt_space_elec');
			$space_misc = $this->input->post('txt_space_misc');
			$space_size = $this->input->post('txt_space_size');
			$space_address = $this->input->post('txt_space_add');
			$tax_size = $this->input->post('txt_tax_size');
			$space_location = $this->input->post('txt_space_loc');
			$space_remarks = $this->input->post('txt_misc_remarks');
			$spc_acq_for = $this->input->post('txt_acq_for');
			$fields = array(

				'sp_lord' => $space_owner,
				'acq_for' => $spc_acq_for,
				'sp_price' => $space_price,
				'sp_start' => $space_rent_starts,
				'sp_ends' => $space_rent_ends,
				'sp_tax' => $space_tax,
				'sp_elec' => $space_electricity,
				'sp_misc' => $space_misc,
				'sp_size' => $space_size,
				'sp_address' => $space_address,
				'loc' => $space_location,
				'tax_size' => $tax_size,
				'sp_remarks' => $space_remarks
			);
			$service1 = $this->base_model->form_post('td_landlord',$fields);
			$cid = $this->db->insert_id();

			if($service1)
			{
				redirect(base_url().'index.php/Index/Landlord');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function Trading()
	{
		if ( isset($_SESSION['user'])) {


			$space_owner = $this->input->post('txt_space_lord');
			$space_price = $this->input->post('txt_space_price');
			$space_rent_starts = $this->input->post('txt_space_rental_start');
			$space_rent_ends = $this->input->post('txt_space_rental_end');
			$space_tax = $this->input->post('txt_space_tax');
			$space_electricity = $this->input->post('txt_space_elec');
			$space_misc = $this->input->post('txt_space_misc');
			$space_size = $this->input->post('txt_space_size');
			$space_address = $this->input->post('txt_space_add');
			$space_remarks = $this->input->post('txt_misc_remarks');

			$fields = array(

				'sp_lord' => $space_owner,
				'sp_price' => $space_price,
				'sp_start' => $space_rent_starts,
				'sp_ends' => $space_rent_ends,
				'sp_tax' => $space_tax,
				'sp_elec' => $space_electricity,
				'sp_misc' => $space_misc,
				'sp_size' => $space_size,
				'sp_address' => $space_address,
				'sp_remarks' => $space_remarks
			);
			$service1 = $this->base_model->form_post('td_trading',$fields);
			$cid = $this->db->insert_id();

			if($service1)
			{
				redirect(base_url().'index.php/Index/Trading');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function OrderDetails()
	{
		if ( isset($_SESSION['user'])) {

			$Main_media = $this->input->post('txt_media');
			$Main_media_type = $this->input->post('txt_media_type');
		//print_r($this->input->post('txt_media_area'));
			$Main_media_area = implode($this->input->post('txt_media_area'),',');
			$Main_media_client = $this->input->post('txt_media_client');
			$bank_id = $this->input->post('txt_bank');
			$szMain = $this->input->post('txt_media_size');
			$nameArray = explode(",", $szMain);
			foreach($nameArray as $value)
			{
				$trimSZ[] = trim($value);
			}
			$Main_media_sz = implode($trimSZ,',');
			$stringSz = rtrim($Main_media_sz, ',');

			$Main_media_size2 = explode(',',$stringSz);
			$cntSZ = count($Main_media_size2)-1;

		//print_r($Main_media_size2);die;exit;
		//$Main_media_size1 = implode(array_map('trim',$Main_media_size2),"','");
		//if($Main_media_size1 == '') {
//		$Main_media_size = 'NA';
//		} else {
//		$Main_media_size = $Main_media_size1;
//		}
		//echo "SELECT * FROM td_size WHERE size IN('".$Main_media_size1."')";
			for($i=0;$i<=$cntSZ;$i++){
			//echo "SELECT * FROM td_size WHERE size ='".$Main_media_size2[$i]."'";
				$srchSz=str_replace(' ','',$Main_media_size2[$i]);
				$sizeId = $this->db->query("SELECT * FROM td_size WHERE size LIKE '%".$srchSz."%'")->result_array();
				$szids[]=$sizeId[0]['size_id'];
			}
			$Main_media_size = implode($szids,',');

			$Main_media_bill = $this->input->post('txt_media_bill');
			$Main_media_title1 = $this->input->post('txt_media_title');
			if($Main_media_title1 == '') {
				$Main_media_title= 'NA';
			}
			else {
				$Main_media_title= $Main_media_title1;
			}
			$Main_media_typeP = $this->input->post('package');
			if($Main_media_typeP == 1) {
				$Main_space_chrge= $this->input->post('txt_space_monthly');
				$Main_space_amt= $this->input->post('txt_chrge_amt');
			}
			else {
				$Main_space_chrge= 'NA';
				$Main_space_amt= 'NA';
			}		
			$Main_media_price = $this->input->post('txt_price');
			$Main_media_price_mounting = $this->input->post('txt_price_mounting');
			$Main_media_price_mnthly = $this->input->post('txt_price_monthly');
			$Main_media_quantity = $this->input->post('txt_quantity');
			$Main_media_total = $this->input->post('txt_total');
			$Main_media_rent_f = $this->input->post('txt_rental_from');
			$Main_media_rent_t = $this->input->post('txt_rental_to');
			$Main_media_bill_no = $this->input->post('txt_new_bill');
			$expBill = explode('/',$Main_media_bill_no);
			$bilnCount = count($expBill)-1;
			$Main_media_bill_date = $this->input->post('txt_bill_date');
			$exp = explode('/',$Main_media_bill_date);
			$bill_month = $exp[0];
			$bill_date = $exp[1];
			$bill_year = $exp[2];
			$Main_media_tax_id = $this->input->post('txt_tax_id');
			$taxplode = explode(',',$Main_media_tax_id);
			$cnt = count($taxplode);
			$Main_media_tax_1 = $this->input->post('per_1');
			$Main_media_tax_2 = $this->input->post('per_2');
			$Main_media_tax_3 = $this->input->post('per_3');
			$Main_media_tax_4 = $this->input->post('per_4');
			$Main_media_tax_5 = $this->input->post('per_5');
			$Main_media_tax_6 = $this->input->post('per_6');
			if(!empty($Main_media_tax_1)) {
				$Main_media_tax1 = $Main_media_tax_1;
			} else {
				$Main_media_tax1 =0;	
			}
			if(!empty($Main_media_tax_2)) {
				$Main_media_tax2 = $Main_media_tax_2;
			} else {
				$Main_media_tax2 =0;	
			}
			if(!empty($Main_media_tax_3)) {
				$Main_media_tax3 = $Main_media_tax_3;
			} else {
				$Main_media_tax3 =0;	
			}
			if(!empty($Main_media_tax_4)) {
				$Main_media_tax4 = $Main_media_tax_4;
			} else {
				$Main_media_tax4 =0;	
			}
			if(!empty($Main_media_tax_5)) {
				$Main_media_tax5 = $Main_media_tax_5;
			} else {
				$Main_media_tax5 =0;	
			}
			if(!empty($Main_media_tax_6)) {
				$Main_media_tax6 = $Main_media_tax_6;
			} else {
				$Main_media_tax6 =0;	
			}

			$Main_media_othr_chrg = $this->input->post('txt_other_amt');
			if($Main_media_othr_chrg != '') {
				$media_other_charge = $Main_media_othr_chrg;
			} else {
				$media_other_charge = '0';
			}
			$Main_media_chrgable_amt = round($this->input->post('txt_chrg_amt'));
			$Order_note = $this->input->post('txt_note');
			$space_owner = $this->input->post('txt_land_lord_dtl');
			$trade_owner = $this->input->post('txt_trade_dtlt');
			$space_price = 'NA';
			$space_rent_starts = 'NA';
			$space_rent_ends = 'NA';
			$space_tax = 'NA';
			$space_electricity = 'NA';
			$space_misc = 'NA';
			$space_size = 'NA';
			$space_address = 'NA';
			$space_remarks = 'NA';
			$po_no = $this->input->post('txt_po_no');
			$fields = array(
				'main_media' => $Main_media,
				'media_type' => $Main_media_type,
				'area' => $Main_media_area,
				'client' => $Main_media_client,
				'size' => $Main_media_size,
				'bill_type' => $Main_media_bill,
				'bank' => $bank_id,
				'main_media_title' => $Main_media_title,
				'main_price_unit' => $Main_media_price,
				'main_price_unit_mounting' => $Main_media_price_mounting,
				'main_price_unit_mnthly' => $Main_media_price_mnthly,
				'quantity' => $Main_media_quantity,
				'unit_total' => $Main_media_total,
				'rent_f' => $Main_media_rent_f,
				'rent_t' => $Main_media_rent_t,
				'bill_m' => $bill_month,
				'bill_d' => $bill_date,
				'bill_y' => $bill_year,
				'tax_id' => $Main_media_tax_id,
				'tax1' => $Main_media_tax1,
				'tax2' => $Main_media_tax2,
				'tax3' => $Main_media_tax3,
				'tax4' => $Main_media_tax4,
				'tax5' => $Main_media_tax5,
				'tax6' => $Main_media_tax6,
				'other_charge' => $media_other_charge,
				'bill_no' => $expBill[$bilnCount],
				'invoice_no' => $Main_media_bill_no,
				'chrge_amt' => $Main_media_chrgable_amt,
				'billing_date' => $Main_media_bill_date,
				'sp_lord' => $space_owner,
				'trade_lord' => $trade_owner,
				'sp_price' => $space_price,
				'sp_start' => $space_rent_starts,
				'sp_ends' => $space_rent_ends,
				'sp_tax' => $space_tax,
				'sp_elec' => $space_electricity,
				'sp_misc' => $space_misc,
				'sp_size' => $space_size,
				'sp_address' => $space_address,
				'note' => $Order_note,
				'po_no' => $po_no,
				'sp_remarks' => $space_remarks,
				'package_type' => $Main_media_typeP,
				'space_chrge' => $Main_space_chrge,
				'space_amt' => $Main_space_amt
			);
			$service1 = $this->base_model->form_post('td_order',$fields);
			$cid = $this->db->insert_id();
		//$num = $this->db->query("SELECT MAX(order_id) AS oid FROM td_order WHERE bill_m=".$bill_month." AND bill_y=".$bill_year)->result_array();
		//$mno = $num[0]['oid']+1;
		//$inv_no = 'B/SYNS/'.$Main_media_bill.'/'.$cid;
//		$fields1 = array(
//			'invoice_no' => $inv_no
//		);
//		$service = $this->base_model->order_update('td_order',$fields1,$cid);
			if($service1)
			{
				redirect(base_url().'index.php/Index/OrderSuccess/'.$cid);
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function PrintOrderDetails()
	{
		if ( isset($_SESSION['user'])) {

			$Main_media = $this->input->post('txt_media');
			$Main_media_type = $this->input->post('txt_media_type');
			$Main_media_area = implode($this->input->post('txt_media_area'),',');
			$Main_media_client = $this->input->post('txt_media_client');
			$bank_id = $this->input->post('txt_bank');
			$Main_media_sides = $this->input->post('txt_media_side');
			$szMain = $this->input->post('txt_media_size');
			$nameArray = explode(",", $szMain);
			foreach($nameArray as $value)
			{
				$trimSZ[] = trim($value);
			}
			$Main_media_sz = implode($trimSZ,',');
			$stringSz = rtrim($Main_media_sz, ',');

			$Main_media_size2 = explode(',',$stringSz);
			$cntSZ = count($Main_media_size2)-1;
			for($i=0;$i<=$cntSZ;$i++){
			//echo "SELECT * FROM td_size WHERE size ='".$Main_media_size2[$i]."'";
				$srchSz=str_replace(' ','',$Main_media_size2[$i]);
				$sizeId = $this->db->query("SELECT * FROM td_size WHERE size LIKE '%".$srchSz."%'")->result_array();
				$szids[]=$sizeId[0]['size_id'];
			}
			$Main_media_size = implode($szids,',');
			$Main_media_bill = $this->input->post('txt_media_bill');
			$Main_media_title1 = $this->input->post('txt_media_title');
			if($Main_media_title1 == '') {
				$Main_media_title= 'NA';
			}
			else {
				$Main_media_title= $Main_media_title1;
			}	
			$Main_media_typeP = $this->input->post('package');
			if($Main_media_typeP == 1) {
				$Main_space_chrge= $this->input->post('txt_sqr_fit');
				$Main_space_amt= $this->input->post('txt_chrge_amt');
			}
			else {
				$Main_space_chrge= 'NA';
				$Main_space_amt= 'NA';
			}
			$Main_media_price = $this->input->post('txt_price');
			$Main_media_quantity = $this->input->post('txt_quantity');
			$Main_media_total = $this->input->post('txt_total');
			$Main_media_rent_f = 'NA';
			$Main_media_rent_t = 'NA';
			$Main_media_bill_no = $this->input->post('txt_new_bill');
			$expBill = explode('/',$Main_media_bill_no);
			$bilnCount = count($expBill)-1;
			$Main_media_bill_date = $this->input->post('txt_bill_date');
			$exp = explode('/',$Main_media_bill_date);
			$bill_month = $exp[0];
			$bill_date = $exp[1];
			$bill_year = $exp[2];
			$Main_media_tax_id = $this->input->post('txt_tax_id');
			$taxplode = explode(',',$Main_media_tax_id);
			$cnt = count($taxplode);
			$Main_media_tax_1 = $this->input->post('per_1');
			$Main_media_tax_2 = $this->input->post('per_2');
			$Main_media_tax_3 = $this->input->post('per_3');
			$Main_media_tax_4 = $this->input->post('per_4');
			$Main_media_tax_5 = $this->input->post('per_5');
			$Main_media_tax_6 = $this->input->post('per_6');
			if(!empty($Main_media_tax_1)) {
				$Main_media_tax1 = $Main_media_tax_1;
			} else {
				$Main_media_tax1 =0;	
			}
			if(!empty($Main_media_tax_2)) {
				$Main_media_tax2 = $Main_media_tax_2;
			} else {
				$Main_media_tax2 =0;	
			}
			if(!empty($Main_media_tax_3)) {
				$Main_media_tax3 = $Main_media_tax_3;
			} else {
				$Main_media_tax3 =0;	
			}
			if(!empty($Main_media_tax_4)) {
				$Main_media_tax4 = $Main_media_tax_4;
			} else {
				$Main_media_tax4 =0;	
			}
			if(!empty($Main_media_tax_5)) {
				$Main_media_tax5 = $Main_media_tax_5;
			} else {
				$Main_media_tax5 =0;	
			}
			if(!empty($Main_media_tax_6)) {
				$Main_media_tax6 = $Main_media_tax_6;
			} else {
				$Main_media_tax6 =0;	
			}

			$Main_media_othr_chrg = $this->input->post('txt_other_amt');
			if($Main_media_othr_chrg != '') {
				$media_other_charge = $Main_media_othr_chrg;
			} else {
				$media_other_charge = '0';
			}
			$Main_media_chrgable_amt = round($this->input->post('txt_chrg_amt'));
			$Order_note = $this->input->post('txt_note');
			$po_no = $this->input->post('txt_po_no');
			$space_owner = 'NA';
			$space_price = 'NA';
			$space_rent_starts = 'NA';
			$space_rent_ends = 'NA';
			$space_tax = 'NA';
			$space_electricity = 'NA';
			$space_misc ='NA';
			$space_size = 'NA';
			$space_address = 'NA';
			$fields = array(
				'main_media' => $Main_media,
				'media_type' => $Main_media_type,
				'area' => $Main_media_area,
				'client' => $Main_media_client,
				'size' => $Main_media_size,
				'bill_type' => $Main_media_bill,
				'bank' => $bank_id,
				'main_media_title' => $Main_media_title,
				'main_price_unit' => $Main_media_price,
				'quantity' => $Main_media_quantity,
				'unit_total' => $Main_media_total,
				'rent_f' => $Main_media_rent_f,
				'rent_t' => $Main_media_rent_t,
				'bill_m' => $bill_month,
				'bill_d' => $bill_date,
				'bill_y' => $bill_year,
				'tax_id' => $Main_media_tax_id,
				'tax1' => $Main_media_tax1,
				'tax2' => $Main_media_tax2,
				'tax3' => $Main_media_tax3,
				'tax4' => $Main_media_tax4,
				'tax5' => $Main_media_tax5,
				'tax6' => $Main_media_tax6,
				'other_charge' => $media_other_charge,
				'bill_no' => $expBill[$bilnCount],
				'invoice_no' => $Main_media_bill_no,
				'chrge_amt' => $Main_media_chrgable_amt,
				'billing_date' => $Main_media_bill_date,
				'sp_lord' => $space_owner,
				'sp_price' => $space_price,
				'sp_start' => $space_rent_starts,
				'sp_ends' => $space_rent_ends,
				'sp_tax' => $space_tax,
				'sp_elec' => $space_electricity,
				'sp_misc' => $space_misc,
				'sp_size' => $space_size,
				'sp_address' => $space_address,
				'note' => $Order_note,
				'po_no' => $po_no,
				'print_sides' => $Main_media_sides,
				'package_type' => $Main_media_typeP,
				'tot_sqr_fit_P' => $Main_space_chrge,
				'tot_amt_p' => $Main_space_amt
			);
			$service1 = $this->base_model->form_post('td_order',$fields);
			$cid = $this->db->insert_id();
		//$num = $this->db->query("SELECT MAX(order_id) AS oid FROM td_order WHERE bill_m=".$bill_month." AND bill_y=".$bill_year)->result_array();
		//$mno = $num[0]['oid']+1;
		//$inv_no = 'B/SYNS/'.$Main_media_bill.'/'.$cid;
//		$fields1 = array(
//			'invoice_no' => $inv_no
//		);
//		$service = $this->base_model->order_update('td_order',$fields1,$cid);
			if($service1)
			{
				redirect(base_url().'index.php/Index/OrderSuccess/'.$cid);
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function MediaNumber()
	{
		if ( isset($_SESSION['user'])) {
			$main_H = $this->input->post('txt_media');
			$main_H_booked = $this->input->post('txt_main_booked_no');
			$main_H_vac = $this->input->post('txt_main_vac_no');
			if($this->input->post('txt_display_media_1') != '') {
				$display1 = $this->input->post('txt_display_media_1');
				$display1_booked = $this->input->post('txt_display_booked_media_no_1');
				$display1_vacant = $this->input->post('txt_display_vacant_media_no_1');
			} else {
				$display1 = 'NA';
				$display1_booked = 'NA';
				$display1_vacant = 'NA';
			}
			if($this->input->post('txt_display_media_2')!= '') {
				$display2 = $this->input->post('txt_display_media_2');
				$display2_booked = $this->input->post('txt_display_booked_media_no_2');
				$display2_vacant = $this->input->post('txt_display_vacant_media_no_2');
			} else {
				$display2 = 'NA';
				$display2_booked = 'NA';
				$display2_vacant = 'NA';
			}
			if($this->input->post('txt_display_media_3')!= '') {
				$display3 = $this->input->post('txt_display_media_3');
				$display3_booked = $this->input->post('txt_display_booked_media_no_3');
				$display3_vacant = $this->input->post('txt_display_vacant_media_no_3');
			} else {
				$display3 = 'NA';
				$display3_booked = 'NA';
				$display3_vacant = 'NA';
			}
			if($this->input->post('txt_display_media_4')!= '') {
				$display4 = $this->input->post('txt_display_media_4');
				$display4_booked = $this->input->post('txt_display_booked_media_no_4');
				$display4_vacant = $this->input->post('txt_display_vacant_media_no_4');
			} else {
				$display4 = 'NA';
				$display4_booked = 'NA';
				$display4_vacant = 'NA';
			}
			if($this->input->post('txt_display_media_5')!= '') {
				$display5 = $this->input->post('txt_display_media_5');
				$display5_booked = $this->input->post('txt_display_booked_media_no_5');
				$display5_vacant = $this->input->post('txt_display_vacant_media_no_5');
			} else {
				$display5 = 'NA';
				$display5_booked = 'NA';
				$display5_vacant = 'NA';
			}
			if($this->input->post('txt_display_media_6')!= '') {
				$display6 = $this->input->post('txt_display_media_6');
				$display6_booked = $this->input->post('txt_display_booked_media_no_6');
				$display6_vacant = $this->input->post('txt_display_vacant_media_no_6');
			} else {
				$display6 = 'NA';
				$display6_booked = 'NA';
				$display6_vacant = 'NA';
			}
			$area = $this->input->post('txt_media_area');

			$fields = array(
				'main_media' => $main_H,
				'main_media_booked' => $main_H_booked,
				'main_media_vac' => $main_H_vac,
				'display1' => $display1,
				'display1_booked' => $display1_booked,
				'display1_vacant' => $display1_vacant,
				'display2' => $display2,
				'display2_booked' => $display2_booked,
				'display2_vacant' => $display2_vacant,
				'display3' => $display3,
				'display3_booked' => $display3_booked,
				'display3_vacant' => $display3_vacant,
				'display4' => $display4,
				'display4_booked' => $display4_booked,
				'display4_vacant' => $display4_vacant,
				'display5' => $display5,
				'display5_booked' => $display5_booked,
				'display5_vacant' => $display5_vacant,
				'display6' => $display6,
				'display6_booked' => $display6_booked,
				'display6_vacant' => $display6_vacant,
				'area' => $area
			);
			$service = $this->base_model->form_post('td_media_number',$fields);
			if($service)
			{
				redirect(base_url().'index.php/Index/MediaCount');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function ServiceCharge()
	{
		if ( isset($_SESSION['user'])) {
			$service = $this->input->post('txt_service');
			$percent = $this->input->post('txt_percent');
			$fields = array(
				'charge_name' => $service,
				'percent' => $percent
			);
			$service = $this->base_model->form_post('td_service_charge',$fields);
			if($service)
			{
				redirect(base_url().'index.php/Index/Taxes');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function GiveAccess($admn_id)
	{
		if ( isset($_SESSION['user'])) {
			$admin_id = $admn_id;
		//$service = implode(',',$this->input->post('add'));
			$service_typ = $this->input->post('access_type');
		//$expAdding = explode(',',$service);
		//$expAdd = count(explode(',',$service));
		//$limit = $expAdd-1;
			$serviceDel=  $this->db->query('delete from td_admin_access where adm_id = '.$admin_id.' AND acc_type="'.$service_typ.'"');
			if($service_typ == 'add') {
				$fields = array(
					'adm_id' => $admin_id,
					'acc1' => $this->input->post('a1'),
					'acc2' => $this->input->post('a2'),
					'acc3' => $this->input->post('a3'),
					'acc4' => $this->input->post('a4'),
					'acc5' => $this->input->post('a5'),
					'acc6' => $this->input->post('a6'),
					'acc7' => $this->input->post('a7'),
					'acc8' => $this->input->post('a8'),
					'acc9' => $this->input->post('a9'),
					'acc10' => $this->input->post('a10'),
					'acc11' => $this->input->post('a11'),
					'acc12' => $this->input->post('a12'),
					'acc13' => $this->input->post('a13'),
					'acc14' => $this->input->post('a14'),
					'acc15' => $this->input->post('a15'),
					'acc16' => $this->input->post('a16'),
					'acc17' => $this->input->post('a17'),
					'acc_type' => $service_typ
				);
			} elseif($service_typ == 'view') {
				$fields = array(
					'adm_id' => $admin_id,
					'acc1' => $this->input->post('b1'),
					'acc2' => $this->input->post('b2'),
					'acc3' => $this->input->post('b3'),
					'acc4' => $this->input->post('b4'),
					'acc5' => $this->input->post('b5'),
					'acc6' => $this->input->post('b6'),
					'acc7' => $this->input->post('b7'),
					'acc8' => $this->input->post('b8'),
					'acc9' => $this->input->post('b9'),
					'acc10' => $this->input->post('b10'),
					'acc11' => $this->input->post('b11'),
					'acc16' => $this->input->post('b16'),
					'acc15' => $this->input->post('b15'),
					'acc14' => $this->input->post('b14'),
					'acc13' => $this->input->post('b13'),
					'acc17' => $this->input->post('b17'),
					'acc_type' => $service_typ
				);
			}
			$service = $this->base_model->form_post('td_admin_access',$fields);


			if($service)
			{
				redirect(base_url().'index.php/View/Users');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function NewUser()
	{
		if ( isset($_SESSION['user'])) {
			$user = $this->input->post('txt_user');
			$pass = $this->input->post('txt_pass');
			$sflPss1 = substr($pass,0,3);
			$sflPss2 = substr($pass,-3);
			$str = $sflPss2.$pass.$sflPss1;
			$AuthKey = $this->db->query("SELECT * FROM td_pass_key")->result_array();
			$SaltKey = $AuthKey[0]['pass_key'];
			$saltedPW =  $pass . $SaltKey;
			$hashedPW = hash('sha256', $saltedPW);
			$fields = array(
				'user' => $user,
				'pass' => $hashedPW,
				'login_allow' => 1,
				'sub_admin' => 1,
				'attempt_count' => 0,
				'pass_original' => $pass
			);

			$service = $this->base_model->form_post('td_admin',$fields);
			$lid = $this->db->insert_id();
			$fields1 = array(
				'adm_id' => $lid,
				'acc1' => 0,
				'acc2' => 0,
				'acc3' => 0,
				'acc4' => 0,
				'acc5' => 0,
				'acc6' => 0,
				'acc7' => 0,
				'acc8' => 0,
				'acc9' => 0,
				'acc10' => 0,
				'acc11' => 0,
				'acc12' => 0,
				'acc13' => 0,
				'acc14' => 0,
				'acc15' => 0,
				'acc16' => 0,
				'acc_type' => 'add'
			);
			$fields2 = array(
				'adm_id' => $lid,
				'acc1' => 0,
				'acc2' => 0,
				'acc3' => 0,
				'acc4' => 0,
				'acc5' => 0,
				'acc6' => 0,
				'acc7' => 0,
				'acc8' => 0,
				'acc9' => 0,
				'acc10' => 0,
				'acc11' => 0,
				'acc12' => 0,
				'acc13' => 0,
				'acc14' => 0,
				'acc15' => 0,
				'acc16' => 0,
				'acc_type' => 'view'
			);
			$service1 = $this->base_model->form_post('td_admin_access',$fields1);
			$service2 = $this->base_model->form_post('td_admin_access',$fields2);
			if($service)
			{
				redirect(base_url().'index.php/Index/NewUser');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	
	public function Area()
	{
		if ( isset($_SESSION['user'])) {
			$service = $this->input->post('txt_area');
			$landm = $this->input->post('txt_landmark');
			$add = $this->input->post('txt_address');
			$client = $this->input->post('txt_client');
			$agg_per = $this->input->post('txt_ag_per');
			$rent_amt = $this->input->post('txt_rent_amt');
			$rmarks = $this->input->post('txt_remarks');
			$num1 = $this->db->query("SELECT MAX(area_id) AS aid FROM td_area")->result_array();
			if($num1[0]['aid'] == '') {$num=1;} else {$num = $num1[0]['aid']+1;}
			$uni = substr($service,0,4).'/'.substr($landm,0,4).'/BELL/'.$num;
			$fields = array(
				'area_name' => $service,
				'landmark' => $landm,
				'address' => $add,
				'uni_code' => $uni,
				'c_name' => $client,
				'ag_p' => $agg_per,
				'rent_amt' => $rent_amt,
				'rmrks' => $rmarks
			);
			$service = $this->base_model->form_post('td_area',$fields);
			if($service)
			{
				redirect(base_url().'index.php/Index/Area');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function Bank()
	{
		if ( isset($_SESSION['user'])) {
			$service = $this->input->post('txt_area');
			$client = $this->input->post('txt_client');
			$agg_per = $this->input->post('txt_ag_per');
			$rent_amt = $this->input->post('txt_rent_amt');
			$rmarks = $this->input->post('txt_remarks');
			$num1 = $this->db->query("SELECT MAX(area_id) AS aid FROM td_bank")->result_array();
			if($num1[0]['aid'] == '') {$num=1;} else {$num = $num1[0]['aid']+1;}
			$uni = substr($service,0,4).'/'.substr($client,0,4).'/BELL/'.$num;
			$fields = array(
				'area_name' => $service,
				'uni_code' => $uni,
				'c_name' => $client,
				'ag_p' => $agg_per,
				'rent_amt' => $rent_amt,
				'rmrks' => $rmarks
			);
			$service = $this->base_model->form_post('td_bank',$fields);
			if($service)
			{
				redirect(base_url().'index.php/Index/Bank');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function SignalInstal()
	{
		if ( isset($_SESSION['user'])) {
			$area = $this->input->post('txt_media_area');
			$od_no = $this->input->post('txt_od_no');
			$od_frm = $this->input->post('txt_od_frm');
			$client = $this->input->post('txt_media_client');
			$Order_upto = $this->input->post('txt_space_rental_start');
			$pole = $this->input->post('txt_pole');
			$arm = $this->input->post('txt_arm');
			$bld_mat = $this->input->post('txt_build_material');
			$paints = $this->input->post('txt_paint');
			$aspects = $this->input->post('txt_aspects');
			$led = $this->input->post('txt_led');
			$met_box = $this->input->post('txt_meter_box');
			$ctrl_box = $this->input->post('txt_ctrl_box');
			$cble = $this->input->post('txt_cable');
			$cpu = $this->input->post('txt_cpu');
			$psply = $this->input->post('txt_p_sply');
			$moduler = $this->input->post('txt_moduler');
			$modem = $this->input->post('txt_modem');
			$antena = $this->input->post('txt_antena');
			$jb = $this->input->post('txt_jb_box');
			$connector = $this->input->post('txt_connector');
			$wiring_wire = $this->input->post('txt_p_wire');
			$op_box = $this->input->post('txt_op_box');
			$dp = $this->input->post('txt_dp_switch');
			$push_switch = $this->input->post('txt_psh_swtch');
			$transform = $this->input->post('txt_transformer');
			$rlay_pan = $this->input->post('txt_rlay_panel');
			$fuse_conect = $this->input->post('txt_fuse_conect');
			$fuse = $this->input->post('txt_fuse');
			$tie = $this->input->post('txt_tie');
			$terminal = $this->input->post('txt_terminal');
			$earthin = $this->input->post('txt_erth_rode');
			$fst_note = $this->input->post('1st_note');
			$se_note = $this->input->post('2nd_note');
			$th_note = $this->input->post('3rd_note');
			$fields = array(
				'area' => $area,
				'od_num' => $od_no,
				'od_from' => $od_frm,
				'client' => $client,
				'duration' => $Order_upto,
				'pole' => $pole,
				'arm' => $arm,
				'bld_mat' => $bld_mat,
				'paints' => $paints,
				'aspects' => $aspects,
				'led' => $led,
				'met_box' => $met_box,
				'ctrl_box' => $ctrl_box,
				'cble' => $cble,
				'cpu' => $cpu,
				'psply' => $psply,
				'moduler' => $moduler,
				'modem' => $modem,
				'antena' => $antena,
				'jb' => $jb,
				'connector' => $connector,
				'wiring_wire' => $wiring_wire,
				'op_box' => $op_box,
				'dp' => $dp,
				'push_switch' => $push_switch,
				'transform' => $transform,
				'rlay_pan' => $rlay_pan,
				'fuse_conect' => $fuse_conect,
				'fuse' => $fuse,
				'tie' => $tie,
				'terminal' => $terminal,
				'earthin' => $earthin,
				'first_note' => $fst_note,
				'second_note' => $se_note,
				'third_note' => $th_note
			);
			$service = $this->base_model->form_post('td_signal',$fields);
			if($service)
			{
				redirect(base_url().'index.php/Index/signalInstal');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function HordingInstal()
	{
		if ( isset($_SESSION['user'])) {
			$area = $this->input->post('txt_media_area');
			$od_no = $this->input->post('txt_od_no');
			$od_frm = $this->input->post('txt_od_frm');
			$client = $this->input->post('txt_media_client');
			$Order_upto = $this->input->post('txt_space_rental_start');
			$joist = $this->input->post('txt_joist');
			$channel = $this->input->post('txt_channel');
			$angel = $this->input->post('txt_angel');
			$nut = $this->input->post('txt_nut_bolt');
			$cement = $this->input->post('txt_cement');
			$sand = $this->input->post('txt_sand');
			$stone = $this->input->post('txt_stn_chps');
			$brick = $this->input->post('txt_brick');
			$sheet = $this->input->post('txt_sheet');
			$wood = $this->input->post('txt_wood');
			$nail = $this->input->post('txt_nail');
			$labour = $this->input->post('txt_labour');
			$lamp = $this->input->post('txt_lamp');
			$chok = $this->input->post('txt_choke');
			$ignator = $this->input->post('txt_ignator');
			$condensor = $this->input->post('txt_condensor');
			$holder = $this->input->post('txt_holder');
			$fst_note = $this->input->post('1st_note');
			$se_note = $this->input->post('2nd_note');
			$th_note = $this->input->post('3rd_note');
			$f_note = $this->input->post('4th_note');
			$fields = array(
				'area' => $area,
				'od_num' => $od_no,
				'od_from' => $od_frm,
				'client' => $client,
				'duration' => $Order_upto,
				'joist' => $joist,
				'channel' => $channel,
				'angel' => $angel,
				'nut' => $nut,
				'cement' => $cement,
				'sand' => $sand,
				'stone' => $stone,
				'brick' => $brick,
				'sheet' => $sheet,
				'wood' => $wood,
				'nail' => $nail,
				'labour' => $labour,
				'lamp' => $lamp,
				'chok' => $chok,
				'ignator' => $ignator,
				'condensor' => $condensor,
				'holder' => $holder,
				'first_note' => $fst_note,
				'second_note' => $se_note,
				'third_note' => $th_note,
				'frth_note' => $f_note
			);
			$service = $this->base_model->form_post('td_hording_instal',$fields);
			if($service)
			{
				redirect(base_url().'index.php/Index/HordingInstal');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function PoleKiosk()
	{
		if ( isset($_SESSION['user'])) {
			$area = $this->input->post('txt_media_area');
			$od_no = $this->input->post('txt_od_no');
			$od_frm = $this->input->post('txt_od_frm');
			$client = $this->input->post('txt_media_client');
			$Order_upto = $this->input->post('txt_space_rental_start');
			$pole = $this->input->post('txt_pole');
			$kiosk = $this->input->post('txt_kiosk_type');
			$bld_mat = $this->input->post('txt_bldng_mat');
			$f_note = $this->input->post('4th_note');
			$fields = array(
				'area' => $area,
				'od_num' => $od_no,
				'od_from' => $od_frm,
				'client' => $client,
				'duration' => $Order_upto,
				'pole' => $pole,
				'kiosk' => $kiosk,
				'material' => $bld_mat,
				'frth_note' => $f_note
			);
			$service = $this->base_model->form_post('td_pole_kiosk',$fields);
			if($service)
			{
				redirect(base_url().'index.php/Index/PoleKiosk');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function Size()
	{
		if ( isset($_SESSION['user'])) {
			$service = $this->input->post('txt_size');
			$note = $this->input->post('txt_notes');
			if($note == '') {
				$nts = 'N/A';
			} else {
				$nts = $this->input->post('txt_notes');
			}

			$fields = array(
				'size' => $service,
				'note' => $nts
			);
			$service = $this->base_model->form_post('td_size',$fields);
			if($service)
			{
				redirect(base_url().'index.php/Index/MediaSizes');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function Client()
	{
		if ( isset($_SESSION['user'])) {
			$name = $this->input->post('txt_client');
			$phn1 = $this->input->post('txt_phn');
			$email1 = $this->input->post('txt_email');
			$add1 = $this->input->post('txt_address');
			$cmpny1 = $this->input->post('txt_company');
			$cl_nick = $this->input->post('txt_nick_name');
			$cl_vat = $this->input->post('txt_vat_no');
			$cl_pan = $this->input->post('txt_pan_no');
			$cl_st = $this->input->post('txt_st_no');
			if($phn1 == '') {
				$phn = 'N/A';
			} else {
				$phn = $this->input->post('txt_phn');
			}
			if($email1 == '') {
				$email = 'N/A';
			} else {
				$email = $this->input->post('txt_email');
			}
			if($add1 == '') {
				$add = 'N/A';
			} else {
				$add = $this->input->post('txt_address');
			}
			if($cmpny1 == '') {
				$cmpny = 'N/A';
			} else {
				$cmpny = $this->input->post('txt_company');
			}
			$fields = array(
				'client_name' => $name,
				'client_ph' => $phn,
				'client_email' => $email,
				'client_address' => $add,
				'client_company' => $cmpny,
				'client_nick' => $cl_nick,
				'client_vat' => $cl_vat,
				'client_pan' => $cl_pan,
				'client_st' => $cl_st
			);
			$service = $this->base_model->form_post('td_client',$fields);
			if($service)
			{
				redirect(base_url().'index.php/Index/clientadd');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function Company()
	{
		if ( isset($_SESSION['user'])) {
			$name = $this->input->post('txt_client');
			$phn1 = $this->input->post('txt_phn');
			$email1 = $this->input->post('txt_email');
			$pan = $this->input->post('txt_pan');
			$sa = $this->input->post('txt_sa');
			$vat = $this->input->post('txt_vat');

			$fields = array(
				'com_name' => $name,
				'com_ph' => $phn1,
				'com_email' => $email1,
				'pan' => $pan,
				'sa' => $sa,
				'vat' => $vat
			);
			$service = $this->base_model->form_post('td_company',$fields);
			if($service)
			{
				redirect(base_url().'index.php/Index/CompanyAdd');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}

	public function Project()
	{
		if ( isset($_SESSION['user'])) {
			$name = $this->input->post('txt_project');
			$type = $this->input->post('txt_type');
			if($type == 'web') {
				$domain = $this->input->post('txt_domain');
			} else {
				$domain = 'N/A';
			}
			$fields = array(
				'prj_name' => $name,
				'prj_type' => $type,
				'prj_domain' => $domain
			);
			$service = $this->base_model->form_post('td_project',$fields);
			if($service)
			{
				redirect(base_url().'index.php/Index/projectadd');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function ServiceAssign()
	{
		if ( isset($_SESSION['user'])) {
			$client = $this->input->post('txt_client');
			$service = $this->input->post('txt_service');
			$duration = $this->input->post('txt_duration');
			$type = $this->input->post('txt_stype');
			$url = $this->input->post('txt_url');
			$cost = $this->input->post('txt_cost');
			$note = $this->input->post('txt_note');
			$alloc_date = $this->input->post('txt_alloc_date');

			if($type=='many')
			{
				$parts_allcdate = explode('-', $alloc_date);
		// print_r($parts_allcdate);die;
				$expiry_date = date('Y-m-d', mktime(0, 0, 0, $parts_allcdate[1], $parts_allcdate[2] + $duration, $parts_allcdate[0]));
				$parts_excdate = explode('-', $expiry_date);
				$notification_date = date('Y-m-d', mktime(0, 0, 0, $parts_excdate[1], $parts_excdate[2] - 15, $parts_excdate[0]));

				$fields = array(
					'client_id' => $client,
					'service_id' => $service,
					'cost' => $cost,
					'url' => $url,
					'type' => $type,
					'duration' => $duration,
					'allocation_date' => $alloc_date,
					'service_date' => $alloc_date,
					'notification_date' => $notification_date,
					'expiry_date' => $expiry_date,
					'status' => 1,
					'note' => $note
				);
			}
			else
			{
				$fields = array(
					'client_id' => $client,
					'service_id' => $service,
					'cost' => $cost,
					'url' => $url,
					'type' => $type,
					'duration' => $duration,
					'status' => 1,
					'note' => $note
				);
			}

			$service = $this->base_model->form_post('td_service_assign',$fields);
			$this->db->query('update td_service_assign set payment_status=0 where  type="many" and  notification_date<="'.date('Y-m-d').'" and expiry_date>="'.date('Y-m-d').'"');
			$this->db->query('update td_service_assign set due_status=1 where  type="many" and notification_date<="'.date('Y-m-d').'" and expiry_date<="'.date('Y-m-d').'"');
			if($service)
			{
				redirect(base_url().'index.php/View/serviceassign');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	
	public function MediaType()
	{
		if ( isset($_SESSION['user'])) {
			$service = $this->input->post('txt_media');
			$mtype = $this->input->post('txt_type');
		//echo "SELECT MAX(type_id) AS mid FROM td_media_type";exit;
			$num = $this->db->query("SELECT MAX(type_id) AS mid FROM td_media_type")->result_array();
			if($num[0]['mid'] == '') {
				$nm = 1;
			}else {
				$nm = $num[0]['mid']+1;
			}
			$mmedia = $this->db->query("SELECT * FROM td_service WHERE service_id=".$service)->result_array();
			$uni = substr($mtype,0,4).'/'.substr($mmedia[0]['service_name'],0,4).'/BELL/'.$nm;
			$fields = array(
				'main_media_name' => $service,
				'type' => $mtype,
				'uni_code' => $uni
			);
			$service = $this->base_model->form_post('td_media_type',$fields);
			if($service)
			{
				redirect(base_url().'index.php/Index/MediaType');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}


	//This function for Insert Supervisor Credentials
	public function insertsupervisorcredential()
	{
		//Clean XSS
		$txtName=$this->security->xss_clean($this->input->post('txtName'));
		$txtMobileNumber=$this->security->xss_clean($this->input->post('txtMobileNumber'));
		$txtPassword=$this->security->xss_clean($this->input->post('txtPassword'));
		$ddlFactoryLocation=$this->security->xss_clean($this->input->post('ddlFactoryLocation'));
		$ddlFactoryName=$this->security->xss_clean($this->input->post('ddlFactoryName'));
		$txtFromDate=$this->security->xss_clean($this->input->post('txtFromDate'));
		$txtTodate=$this->security->xss_clean($this->input->post('txtTodate'));

		//This Section For Form Validation
		$this->form_validation->set_rules('txtName', 'Suparvisor Name', 'trim|required');
		$this->form_validation->set_rules('txtMobileNumber', 'Mobile Number', 'trim|required');
		$this->form_validation->set_rules('txtPassword', 'password', 'trim|required');
		$this->form_validation->set_rules('ddlFactoryLocation', 'Factory Location', 'trim|required');
		$this->form_validation->set_rules('txtFromDate', 'From Date', 'trim|required');
		$this->form_validation->set_rules('txtTodate', 'To Date', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			
			$this->session->set_flashdata('error_log', validation_errors());
			// echo validation_errors();die;
			redirect('Index/accountsettings','refresh');
		} else {

			$date1 = date_create($txtFromDate);
			$date2 = date_create($txtTodate);
			$diff = date_diff($date1,$date2);
			$days=$diff->format("%a");
			$days=$days+1;

			$object=array(
				'supervisor_id' => $txtName,
				'factory_location' => $ddlFactoryLocation,
				'factory_name' => $ddlFactoryName,
				'mobile_number' => $txtMobileNumber,
				'password' => md5($txtPassword),
				'org_password' => $txtPassword,
				'status' => 1,
				'from_date' => $txtFromDate,
				'to_date' => $txtTodate,
				'working_days' => $days
			);

			$this->base_model->isertsupervisor($object);

			echo $this->session->set_flashdata('success_log', 'Supervisor Credentials Inserted Successfully');
			redirect('Index/accountsettings','refresh');
		}

	}

	public function Factory()
	{
		if (isset($_SESSION['user'])) {
			$txtLocation=$this->input->post('txtLocation');
			$txtName=$this->input->post('txtName');
			// $txtFactoryId=$this->input->post('txtFactoryId');
			$txtAddress=$this->input->post('txtAddress');
			$txtPin=$this->input->post('txtPin');
			$txtPhone=$this->input->post('txtPhone');
			$txtEmail=$this->input->post('txtEmail');
			$txtContactPerson=$this->input->post('txtContactPerson');
			$txtCMobile=$this->input->post('txtCMobile');
			// $txtLocation=$this->input->post('txtLocation');
			// $txtLocation=$this->input->post('txtLocation');
			// $txtLocation=$this->input->post('txtLocation');
			// $txtLocation=$this->input->post('txtLocation');
			// $txtLocation=$this->input->post('txtLocation');

			$fields=array(
				'location' => strtolower($txtLocation),
				'factory_name' => $txtName,
				'full_address' => $txtAddress,
				'pin' => $txtPin,
				'phone_number' => $txtPhone,
				'email_address' => $txtEmail,
				'contact_person' => $txtContactPerson,
				'mobile_number' => $txtCMobile,
				'status' => 1

			);

			$service = $this->base_model->form_post('tbl_factory',$fields);
			if($service)
			{
				// $this->base_model->news_file_upload($image,$temp);
				redirect(base_url().'Index/factorysetting');
			}
		}
		else {
			redirect(base_url().'index.php');
		}
	}


	//This Section To Assign Employee
	public function Assignemployee()
	{
		$ddlSupervisor=$this->input->post('ddlSupervisor');
		$ddlFactoryLocation=$this->input->post('ddlFactoryLocation');
		$ddlFactoryNameWorker=$this->input->post('ddlFactoryNameWorker');
		$txtFromDate=$this->input->post('txtFromDate');
		$txtTodate=$this->input->post('txtTodate');
		$emp=$this->input->post('emp');
		$txtBasicSalary=$this->input->post('txtBasicSalary');
		$txtCA=$this->input->post('txtCA');
		$txtHRA=$this->input->post('txtHRA');
		$txtDLA=$this->input->post('txtDLA');



		$this->form_validation->set_rules('ddlSupervisor', 'Suparvisor', 'trim|required');
		$this->form_validation->set_rules('txtFromDate', 'From Date', 'trim|required');
		$this->form_validation->set_rules('txtTodate', 'To Date', 'trim|required');
		$this->form_validation->set_rules('ddlFactoryLocation', 'Factory Location', 'trim|required');
		$this->form_validation->set_rules('ddlFactoryNameWorker', 'Factory Name', 'trim|required');
		$this->form_validation->set_rules('txtBasicSalary', 'Basic Salary', 'trim|required');
		$this->form_validation->set_rules('txtCA', 'CA Amount', 'trim|required');
		$this->form_validation->set_rules('txtHRA', 'HRA Amount', 'trim|required');
		$this->form_validation->set_rules('txtDLA', 'DLA Amount', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			
			$this->session->set_flashdata('error_log', validation_errors());
			// echo validation_errors();die;
			redirect('Index/accountsettings','refresh');
		} else {

			foreach ($emp as $key => $value) {
				$object=array(
					'supervisor_id' => $ddlSupervisor,
					'factory_location' => $ddlFactoryLocation,
					'factory_name' => $ddlFactoryNameWorker,
					'from_dare' => $txtFromDate,
					'to_date' => $txtTodate,
					'employee_id' => $value,
					'basic_salary' => $txtBasicSalary,
					'ca' => $txtCA,
					'hra' => $txtHRA,
					'dla' => $txtDLA,
					'status' => 1
				);

				$this->base_model->assignjob($object);
				$this->base_model->update_assign_employee_status($value,0);
			}
			

			$this->session->set_flashdata('success_log', 'Job Assign Successfully');
			redirect('Index/accountsettings','refresh');
		}
	}


	//This Function For do Attendance
	public function Attendance()
	{

		$fulldays=$this->input->post('empfullday');
		$half_days=$this->input->post('emphalfday');
		$over_time=$this->input->post('empovertime');

	 // print_r($fullday);
	 // echo "<br>";
	 // print_r($half_day);

	 //This Section For Full Day attendance
		foreach ($fulldays as $day => $value) {
			$this->base_model->do_attendance($value,1,0,0);
		}

	 //This Loop For Half Day
		foreach ($half_days as $day => $value) {
			$this->base_model->do_attendance($value,0,1,0);
		}

		// This Loop For Overtime
		foreach ($over_time as $key => $value) {
			$this->base_model->update_overtime($value);
		}

		$this->session->set_flashdata('success_log', 'Attendance Submited Successfully');
		redirect('Index/emp_attendance');

	}


	// This Function For Assign Worker list
	public function assign_worker()
	{
		if($this->input->post('btnSubmit') == 'assign'){
			// Clean XSS and Store into valriable
			$txtAssignDate=$this->security->xss_clean($this->input->post('txtAssignDate'));
			$txtRelease=$this->security->xss_clean($this->input->post('txtRelease'));
			$txtPlantId=$this->security->xss_clean($this->input->post('txtPlantId'));
			$emp_id=$this->input->post('emp_id');
			if($emp_id!="") //Check Employee Selection
			{
				foreach ($this->input->post('emp_id') as $worker_list) {
					$object=array(
						'from_dare' => $txtAssignDate,
						'to_date' => $txtRelease,
						'employee_id' => $worker_list,
						'plant_id' => $txtPlantId,
						'status' => 1
					);

					$this->base_model->assign_worker($object);
				}
				
				$this->base_model->assing_employee_table($this->input->post('emp_id'),1);

				$this->session->set_flashdata('success_log', 'Worker Assign Successfully');
				redirect('Index/workers_assign','refresh');
			}
			else{
				$this->session->set_flashdata('error_log', 'You did\'t select any worker ');
				redirect('Index/workers_assign','refresh');
			}

			

		}

		if($this->input->post('btnSubmit') == 'unassign'){
			$txtPlantId=$this->security->xss_clean($this->input->post('txtPlantId'));
			$emp_id=$this->input->post('emp_id');
			if($emp_id!="") //Check Employee Selection
			{
				foreach ($this->input->post('emp_id') as $worker_list) {
					$this->base_model->release_worker($txtPlantId,$worker_list);
				}
				$this->base_model->assing_employee_table($this->input->post('emp_id'),0);
				$this->session->set_flashdata('success_log', 'Worker Un-Assign Successfully');
				redirect('Index/workers_assign','refresh');
			}
			else{
				$this->session->set_flashdata('error_log', 'You did\'t select any worker ');
				redirect('Index/workers_assign','refresh');
			}

		}
	}

	// This Function For Transfer Student
	public function transfer_worker()
	{
		// Get Plant Id
		$ddlPlant=$this->security->xss_clean($this->input->post('ddlPlant'));
		$emp_id = $this->input->post('emp_id');

		if($emp_id!="")
		{
			$plant=explode('-', $ddlPlant);
			$this->base_model->transfer_worker($plant[0],$emp_id);
			$this->session->set_flashdata('success_log', 'Worker Assign Successfully');
			redirect('Index/transfer_worker','refresh');
		}
		else{
			$this->session->set_flashdata('error_log', 'You don\'t select any worker');
			redirect('Index/transfer_worker','refresh');
		}
		
	}

	// This Function For Attendance 
	public function previous_attendance()
	{
		$emp_id=$this->input->post('emp_id');
		$txtPlantId=$this->input->post('txtPlantId');
		$txtDateAttendance=$this->input->post('txtDateAttendance');

		foreach ($this->input->post('emp_id') as $worker_list) {
			$this->base_model->previous_attendance($worker_list,$txtPlantId,$txtDateAttendance);
		}

		$this->session->set_flashdata('success_log', 'Worker Attendance Submit Successfully');
		redirect('Index/previous_attendance','refresh');
	}


	// This Function For Create Account User
	public function CreateAccount()
	{
		// Get All Data Here 
		$txtUsername=$this->input->post('txtUsername');
		$txtPassword=$this->input->post('txtPassword');
		$txtFullname=$this->input->post('txtFullname');

		// This Function For Form Validation
		$this->form_validation->set_rules('txtUsername', 'Username', 'trim|required|is_unique[tbl_accounts.username]');
		$this->form_validation->set_rules('txtPassword', 'Username', 'trim|required');
		$this->form_validation->set_rules('txtFullname', 'Username', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			// Set Error Message And Send To Main Page
			
			$this->session->set_flashdata('error_log', validation_errors());
			redirect('Index/accountsettings','refresh');
		} else {

			$object=array(
			'username' => $txtUsername,
			'password' => md5($txtPassword),
			'pass_org' => $txtPassword,
			'fullname' => $txtFullname,
			'status' => 1
			);

			$this->base_model->form_post('tbl_accounts',$object);
			$this->session->set_flashdata('success_log','Account User Create Successfully');
			redirect('Index/accountsettings','refresh');
		}
		
	}


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('base_model');
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


	public function Editprofile()
	{
		if ( isset($_SESSION['user'])) {
			$service['data'] = $this->db->query('select * from td_admin')->result_array();
			$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
			$service['notify'] = $this->db->query($query)->result_array();
			$service['total_notify'] = $this->db->query($query)->num_rows();
			$service['pass'] = $this->db->query('SELECT * FROM td_pass_key')->result_array();
			$this->load->view('edit_profile',$service);
		}
		else {
			redirect(base_url().'index.php');
		}
	}


     //This Function To load edit employee
	public function employee($editId)
	{


		if (isset($_SESSION['user'])) {

			if($this->input->post('mode') == "edit"){
				$imges = $_FILES["photo"]["name"];
				if(!empty($imges))
				{
					$imges = $_FILES["photo"]["name"];
					$exp = explode('.',$imges);
					$image = $exp[0].time().'.'.$exp[1];
					$temp = $_FILES["photo"]["tmp_name"];
					$this->base_model->news_file_upload($image,$temp);
				}
				else{
					$image= $this->input->post('oldimage');
				}
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
				$txtArea=$this->input->post('txtArea');
				$ddlCategory=$this->input->post('ddlCategory');

				$txtcontractor=$this->input->post('txtcontractor');
				$txtPlant=$this->input->post('txtPlant');
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
				$ddlSelectPlant=$this->input->post('ddlSelectPlant');
				$txtPermanentVill=$this->input->post('txtPermanentVill');
				$txtParmanentPS=$this->input->post('txtParmanentPS');
				$txtParmanentPin=$this->input->post('txtParmanentPin');
				$txtParmanentDis=$this->input->post('txtParmanentDis');
				$txtPresentVill=$this->input->post('txtPresentVill');
				$txtPresentPS=$this->input->post('txtPresentPS');
				$txtPresentDis=$this->input->post('txtPresentDis');
				$txtPresentPin=$this->input->post('txtPresentPin');
				$txtMothername=$this->input->post('txtMotherName');

				$update_record_id=$this->input->post('record_id_for_update');

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
				$this->db->where('emp_id_auto', $update_record_id);
				$this->db->update('employee', $fields);

				if($increment_date!=""){
					$this->base_model->log_uniform($increment_date,'Incriment Done',$update_record_id);
				}
				if($txtUniformDate!=""){
					$this->base_model->log_uniform($txtUniformDate,'Uniform Payment Done',$update_record_id);
				}
				if($txtShoeDate!=""){
					$this->base_model->log_uniform($txtShoeDate,'Shoe Payment Done',$update_record_id);
				}

				$this->session->set_flashdata('sucess_log', 'Employee Edit Successfully');
				redirect(base_url().'Index/Employee');

			}

			$data['empDtlcnt'] = $this->db->query('SELECT MAX(emp_id_auto) AS empcnt FROM employee ORDER BY emp_id_auto DESC')->result_array();
			$data['empDtl'] = $this->db->query('SELECT * FROM employee ORDER BY emp_id_auto DESC')->result_array();
			$data['plant_details'] =   $this->db->query('SELECT * FROM tbl_factory')->result();
			$data['edit']=$this->base_model->getEmployeeById($editId);
			$this->load->view('employeemanagement',$data);
		}
		else {
			redirect(base_url().'index.php');
		}
	}

	//This Fnction for edit employee id
	public function Supervisor($editid)
	{


		// echo $this->db->last_query();
		// die;

	  	// $this->load->view('supervisor_login_view',$data);
		//If There Any Post Data Then This Block Will Execute
		if($this->input->post('mode')=='post'){

			//Clean XSS
			$txtName=$this->security->xss_clean($this->input->post('txtName'));
			$txtMobileNumber=$this->security->xss_clean($this->input->post('txtMobileNumber'));
			$txtPassword=$this->security->xss_clean($this->input->post('txtPassword'));
			$ddlFactoryLocation=$this->security->xss_clean($this->input->post('ddlFactoryLocation'));
			$ddlFactoryName=$this->security->xss_clean($this->input->post('ddlFactoryName'));
			$txtFromDate=$this->security->xss_clean($this->input->post('txtFromDate'));
			$txtTodate=$this->security->xss_clean($this->input->post('txtTodate'));
			$record_id=$this->security->xss_clean($this->input->post('update_id'));

			//This Section For Form Validation
			$this->form_validation->set_rules('txtName', 'Suparvisor Name', 'trim|required');
			$this->form_validation->set_rules('txtMobileNumber', 'Mobile Number', 'trim|required');
			$this->form_validation->set_rules('txtPassword', 'password', 'trim|required');
			$this->form_validation->set_rules('ddlFactoryLocation', 'Factory Location', 'trim|required');
			$this->form_validation->set_rules('txtFromDate', 'From Date', 'trim|required');
			$this->form_validation->set_rules('txtTodate', 'To Date', 'trim|required');

			if ($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('error_log', validation_errors());
				redirect('Index/supervisorlogin','refresh');
			}
			else{

				$date1 = date_create($txtFromDate);
				$date2 = date_create($txtTodate);
				$diff = date_diff($date1,$date2);
				$days=$diff->format("%a");
				$days=$days+1;
				// die;
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

				$object1['status'] =0;

				$this->db->where('record_id', $record_id);
				$this->db->update('auth_supervisor', $object1);
  // echo $this->db->last_query();
  // die;


				$this->base_model->editsupervisorinauthbyid($object);
				$this->session->set_flashdata('success_log', 'Supervisor Credentials Updated Successfully');
				$url=base_url()."Index/accountsettings/";
				redirect($url,'refresh');

			}
		}
		$data=array(
			'supervisorlist' => $this->base_model->getallsupervisor(),
			'edit_factory_list' => $this->base_model->getsupervisorlist($editid),
			'factory_list' => $this->base_model->getsupervisorlist(''),
			'factory_locations' => $this->base_model->getfactorylocation(),
			'employeelist' => $this->base_model->getallemployee()
		);
		$this->load->view('accountsettings',$data);
	}

	//This Function To Change Superviser Status
	public function switchsuperisor($id,$status)
	{
		$fields=array('status' => $status);
	// $this->base_model->editsupervisorinauthbyid($id,$fields);
		$this->db->where('record_id', $id);
		$this->db->update('auth_supervisor', $fields);
		$this->session->set_flashdata('success_log', 'Updated successfully');
		$url=base_url()."Index/accountsettings";
		redirect($url,'refresh');
	}

	//This Function To Update Super Admin Password
	public function updateadminpassword()
	{
		//This is encryption algo
		$cid = $this->session->userdata('usid');
		$pass = $this->input->post('txtPassword');
		// echo  $this->input->post('txtPassword');
		// die;
		$sflPss1 = substr($pass,0,3);
		$sflPss2 = substr($pass,-3);
		$str = $sflPss2.$pass.$sflPss1;
		$saltedPW =  $pass . $str;
		$hashedPW = hash('sha256', $saltedPW);

		$object = array(
			'pass_original' => $pass,
			'pass' => $hashedPW
		);

		$this->base_model->updateadminpassword($object);
		$fields1 = array(
			'pass_key' => $str
		);
		$service = $this->base_model->profile_update('td_pass_key',$fields1,$cid);
		$this->session->sess_destroy();
		redirect(base_url());

	}

	//This Function Form Change Factory Status
	public function changefactorystatus($fac_id,$status_code)
	{
		$object=array('status' => $status_code);
		$this->db->where('factory_id', $fac_id);
		$this->db->update('tbl_factory', $object);
		$this->session->set_flashdata('success_log', 'Factory Updated');
		redirect('Index/factorysetting','refresh');
	}


	//This Function For Loadd Edit View
	public function factory($edit_id)
	{
		$data = array(
			'edit' => $this->base_model->getfactorydatabyid($edit_id),
			'editid' => $edit_id
		);
		$data['empDtlcnt'] = $this->db->query('SELECT MAX(factory_id) AS empcnt FROM tbl_factory ORDER BY factory_id DESC')->result_array();
		$data['empDtl'] = $this->db->query('SELECT * FROM tbl_factory ORDER BY factory_id DESC')->result_array();

		// echo $this->db->last_query();
		// die;

		$this->load->view('factorysettings',$data);
		//If There Any Post Data Then This Block Will Execute

	  	//If There is any post data
		if($this->input->post('mode') == "post"){
			$txtLocation=$this->input->post('txtLocation');
			$txtName=$this->input->post('txtName');
			$update_id=$this->input->post('update_id');
			$txtAddress=$this->input->post('txtAddress');
			$txtPin=$this->input->post('txtPin');
			$txtPhone=$this->input->post('txtPhone');
			$txtEmail=$this->input->post('txtEmail');
			$txtContactPerson=$this->input->post('txtContactPerson');
			$txtCMobile=$this->input->post('txtCMobile');

			$fields=array(
				'location' => $txtLocation,
				'factory_name' => $txtName,
				'full_address' => $txtAddress,
				'pin' => $txtPin,
				'phone_number' => $txtPhone,
				'email_address' => $txtEmail,
				'contact_person' => $txtContactPerson,
				'mobile_number' => $txtCMobile
			);

			$this->db->where('factory_id', $update_id);
			$this->db->update('tbl_factory', $fields);
			redirect(base_url().'Index/factorysetting');
		}
	}


	// This Function To Change Plant sattus
	public function change_plant_status($status_id,$plant_id)
	{
		$this->db->where('factory_id', $plant_id);
		$object=array(
			'status' => $status_id
		);

		$this->db->update('tbl_factory', $object);
		if($status_id==0){
			$this->session->set_flashdata('success_log','Plant Deactive Successfully');
		}
		else{
			$this->session->set_flashdata('success_log','Plant Active Successfully');
		}

		redirect(base_url().'Index/Plant');
	}

	// This Function For Edit Plant data
	public function Plant($plant_id)
	{
		// xss Clean
		if($this->input->post('btnSubmit')=='submit')
		{
			//Prevent Cross Site Scriptiong
			$txtPlant=$this->security->xss_clean($this->input->post('txtPlant'));
			$txtPlantLocation=$this->security->xss_clean($this->input->post('txtPlantLocation'));
			$txtPlantAddress=$this->security->xss_clean($this->input->post('txtPlantAddress'));
			$txtPincode=$this->security->xss_clean($this->input->post('txtPincode'));
			$txtPhoneNumber=$this->security->xss_clean($this->input->post('txtPhoneNumber'));
			$txtEmail=$this->security->xss_clean($this->input->post('txtEmail'));
			$txtPanNo=$this->security->xss_clean($this->input->post('txtPanNo'));
			$txtGSTIN=$this->security->xss_clean($this->input->post('txtGSTIN'));
			$txtSupervison=$this->security->xss_clean($this->input->post('txtSupervison'));
			$txtSupervisorPhone=$this->security->xss_clean($this->input->post('txtSupervisorPhone'));
			$txtPassword=$this->security->xss_clean($this->input->post('txtPassword'));
			$txtEditId=$this->security->xss_clean($this->input->post('txtEditId'));
			$txtWorkingHours=$this->security->xss_clean($this->input->post('txtWorkingHours'));
			$txtOverTime=$this->security->xss_clean($this->input->post('txtOverTime'));
			$txtOverTimeAmount=$this->security->xss_clean($this->input->post('txtOverTimeAmount'));

			$this->form_validation->set_rules('txtUsername', 'Username', 'trim|required|is_unique[tbl_factory.username]');

			$object=array(
				'password' => md5($txtPassword),
				'pass_org' => $txtPassword,
				'location' => $txtPlantLocation,
				'factory_name' => $txtPlant,
				'full_address' => $txtPlantAddress,
				'pin' => $txtPincode,
				'phone_number' => $txtPhoneNumber,
				'email_address' => $txtEmail,
				'contact_person' => $txtSupervison,
				'mobile_number' => $txtSupervisorPhone,
				'status' => 1,
				'pan_no' => $txtPanNo,
				'gstin' => $txtGSTIN,
				'working_hours' => $txtWorkingHours,
				'overtime_hr' => $txtOverTime,
				'overtime_amount' => $txtOverTimeAmount
			);

			$this->base_model->update_plant_data($txtEditId,$object);
			$this->session->set_flashdata('success_log','Planrt Updated Successfully');
			redirect('Index/Plant');
		}
		else{
			$id=$this->security->xss_clean($plant_id);
			$data=array(
				'edit_data' => $this->base_model->getfactorydatabyid($id),
				'edit_id' => $id
			);
			$this->load->view('plant_details_view',$data);
		}
	}

}

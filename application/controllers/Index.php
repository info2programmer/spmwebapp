<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('base_model');
		$this->load->helper('url');
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
	public function NewUser()
	{
		$service['data'] = $this->base_model->show_data('td_client','*','')->result_array();
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$this->load->view('subadmin',$service);
	}

	public function login()
	{
		$uname = $this->input->post('txt_username');
		$pass = $this->input->post('txt_password');
		if($this->base_model->chkusernameinadmin($uname,$pass))
		{
			$sflPss1 = substr($pass,0,3);
			$sflPss2 = substr($pass,-3);
			$str = $sflPss2.$pass.$sflPss1;
			$AuthKey = $this->db->query("SELECT * FROM td_pass_key")->result_array();
			$adminalow = $this->db->query("SELECT * FROM td_admin WHERE user='$uname'")->result_array();
			$SaltKey = $AuthKey[0]['pass_key'];
			$logacces = $adminalow[0]['login_allow'];
			if($logacces != 1) {
				if($str != $SaltKey) {
					$attempt_main = $this->db->query("SELECT MAX(attempt_count) AS Matmpt,id FROM td_admin WHERE user='$uname' AND sub_admin=0 AND login_allow=0 GROUP BY id")->result_array();
					$acount = $attempt_main[0]['Matmpt']+1;
					$adid = $attempt_main[0]['id'];
					$rip = $_SERVER['REMOTE_ADDR'];
					$atmptFields = array(
						'attempt_count' => $acount,
						'remote_ip' => $rip
					);
					$service1 = $this->base_model->profile_update('td_admin',$atmptFields,$adid);
					redirect(base_url().'?nomatch&attempt='.$acount);
				} else {
					$saltedPW =  $pass . $SaltKey;
					$hashedPW = hash('sha256', $saltedPW);

					$show = $this->db->query("SELECT * FROM td_admin WHERE user='$uname' AND sub_admin=0 AND login_allow=0 GROUP BY id")->result_array();
					//$exp = (',',$show['result']);
					$db_uname = $show[0]['user'];
					$db_id = $show[0]['id'];
					$db_pass = $show[0]['pass'];
					if ( $db_uname == $uname && $db_pass == $hashedPW) {
						$_SESSION['user'] = $uname;
						$_SESSION['passw'] = $pass;
						$_SESSION['usid'] = $db_id;
						$_SESSION['name'] = $show[0]['name'];
						$_SESSION['photo'] = $show[0]['photo'];
						redirect(base_url().'Index/Home');

					}
					else {
						redirect(base_url());
					}
				}
			}else {
				$saltedPW =  $pass . $SaltKey;
				$hashedPW = hash('sha256', $saltedPW);

				$show = $this->db->query("SELECT * FROM td_admin WHERE user='$uname' AND sub_admin=1 AND login_allow=1")->result_array();
				//$exp = (',',$show['result']);
				$db_uname = $show[0]['user'];
				$db_pass = $show[0]['pass'];
				$db_id = $show[0]['id'];
				if ( $db_uname == $uname && $db_pass == $hashedPW) {
					$_SESSION['user'] = $uname;
					$_SESSION['passw'] = $pass;
					$_SESSION['usid'] = $db_id;
					$_SESSION['name'] = $show[0]['name'];
					$_SESSION['photo'] = $show[0]['photo'];
					redirect(base_url().'Index/Home');

				}
				else {
					$attempt_main = $this->db->query("SELECT MAX(attempt_count) AS Matmpt,id FROM td_admin WHERE user='$uname' AND sub_admin=1 AND login_allow=1")->result_array();
					$acount = $attempt_main[0]['Matmpt']+1;
					$adid = $attempt_main[0]['id'];
					$rip = $_SERVER['REMOTE_ADDR'];
					$atmptFields = array(
						'attempt_count' => $acount,
						'remote_ip' => $rip
					);
					$service1 = $this->base_model->profile_update('td_admin',$atmptFields,$adid);
					redirect(base_url().'?nomatch&attempt='.$acount);

				}
			}
		}

		else{
			// echo "<script>alert();</script>";
			$result=$this->base_model->checkcredential($uname,md5($pass));

			// var_dump($result);
			// die;

			if($result){
				$data=array(
					'user' => $result,
					'userphone' => $uname,
					'password' => $pass,
					'type' => 'supervisor',
					'total_worker' => $this->base_model->total_worker_by_plant_id($result)
				);
				$this->session->set_userdata($data);
				redirect(base_url().'Index/Home');
			}
			else{
				$this->session->set_flashdata('error_log', 'Icorrect username and password');
				redirect(base_url().'?nomatch');
			}
		}


	}
	public function logout()
	{

		$this->session->sess_destroy();
		redirect(base_url());

	}
	public function Home()
	{
		if ( isset($_SESSION['user'])) {
			$data['empDtl'] = $this->db->query('SELECT * FROM employee ORDER BY emp_id_auto DESC')->num_rows();
			$data['totalFactorys'] = $this->db->query('SELECT factory_id FROM tbl_factory')->num_rows();
			$this->load->view('home',$data);
		}
		else {
			redirect(base_url().'INDEX');
		}
	}


	public function SubAdminAccess($id)
	{
		if ( isset($_SESSION['user'])) {
			//echo "SELECT * FROM `td_admin_access` WHERE adm_id=$id AND acc_type='add'";exit;
			$service['u_t_vw'] = $this->db->query("SELECT * FROM td_admin_access WHERE adm_id=".$id." AND acc_type='view'")->result_array();
			$service['u_t_acc'] = $this->db->query("SELECT * FROM td_admin_access WHERE adm_id=".$id." AND acc_type='add'")->result_array();
			$service['admin_id'] = $id;
			$this->load->view('admin_access',$service);
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function SubAdminAllow($aid)
	{
		if ( isset($_SESSION['user'])) {
			$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
			$service['notify'] = $this->db->query($query)->result_array();
			$service['total_notify'] = $this->db->query($query)->num_rows();
			$field = array(
				'login_allow' => 1
			);
			$service1 = $this->base_model->profile_update('td_admin',$field,$aid);
			redirect(base_url().'index.php/view/Users');
		}
		else {
			redirect(base_url().'index.php');
		}
	}
	public function SubAdminCancel($aid)
	{
		if ( isset($_SESSION['user'])) {
			$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
			$service['notify'] = $this->db->query($query)->result_array();
			$service['total_notify'] = $this->db->query($query)->num_rows();
			$field = array(
				'login_allow' => 0
			);
			$service1 = $this->base_model->profile_update('td_admin',$field,$aid);
			redirect(base_url().'index.php/view/Users');
		}
		else {
			redirect(base_url().'index.php');
		}
	}

	public function Employee()
	{
		if ( isset($_SESSION['user'])) {
			$data['empDtlcnt'] = $this->db->query('SELECT MAX(emp_id_auto) AS empcnt FROM employee ORDER BY emp_id_auto DESC')->result_array();
			$data['empDtl'] = $this->db->query('SELECT * FROM employee ORDER BY emp_id_auto DESC')->result_array();
			$data['plant_details'] =   $this->db->query('SELECT * FROM tbl_factory WHERE status=1')->result();

			$this->load->view('employeemanagement',$data);
		}
		else {
			redirect(base_url().'index.php');
		}
	}


	//This function for supervisor login
	// public function supervisorlogin()
	// {
	// 	$data = array(
	// 		'supervisorlist' => $this->base_model->getallsupervisorinemployee(),
	// 		'datas' => $this->base_model->getallsupervisorinauth('')
	// 	);

	//   	$this->load->view('supervisor_login_view',$data);
	// }

	//This Function To Get Supervisor Area Using Supervisor Id
	// public function getsupervisorarea($super_id)
	// {
	// 	$area=$this->base_model->getemployeeareabyid($super_id);
	// 	echo $area[0]['area'];
	// }


	public function backup()
	{
		$this->load->dbutil();
		$backup = $this->dbutil->backup();

		$this->load->helper('file');
		write_file('/backup/mybackup.gz', $backup);

		$this->load->helper('download');
		force_download('mybackup.gz', $backup);
	}


	//This Function For Load Factory Setting View
	public function factorysetting()
	{
		if ( isset($_SESSION['user'])) {
			$data['empDtlcnt'] = $this->db->query('SELECT MAX(factory_id) AS empcnt FROM tbl_factory ORDER BY factory_id DESC')->result_array();
			$data['empDtl'] = $this->db->query('SELECT * FROM tbl_factory ORDER BY factory_id DESC')->result_array();
			$this->load->view('factorysettings',$data);
		}
		else {
			redirect(base_url().'index.php');
		}
		// $this->load->view('factorysettings');
	}

	//This Function For Account Setting
	public function accountsettings()
	{
		if ( isset($_SESSION['user'])) {

			$data=array(
				'supervisorlist' =>'', //$this->base_model->getallsupervisor(),
				'factory_locations' => $this->base_model->getfactorylocation(),
				'employeelist' => $this->base_model->getallemployee(),//,
				'factory_list' => '' //$this->base_model->getsupervisorlist('')
			);
			// echo $this->db->last_query();
			//  		die;
			$this->load->view('accountsettings',$data);
		}
		else {
			redirect(base_url().'index.php');
		}
	}

	//This Function To Get Factory By Location

	public function getfactorybylocation($location)
	{
		$area=$this->base_model->getfactorybylocation($location);
		echo "<option selected='selected' value='' hidden>Select Factory </option>";
		echo "<option>".$area[0]['factory_name']."</option>";
	}


	//This Function For Load Plant Details
	public function Plant()
	{
		if (isset($_SESSION['user'])) {

			$data=array(
				'factory_data' => $this->base_model->getfactorylocation()
			);
			//This Block For Post Section
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
				$txtUsername=$this->security->xss_clean($this->input->post('txtUsername'));
				$txtPassword=$this->security->xss_clean($this->input->post('txtPassword'));
				$txtWorkingHours=$this->security->xss_clean($this->input->post('txtWorkingHours'));

				$this->form_validation->set_rules('txtUsername', 'Username', 'trim|required|is_unique[tbl_factory.username]');
				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error_log', validation_errors());
					redirect('Index/Plant');
				}
				else{
					$object=array(
						'username' => $txtUsername,
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
						'working_hours' => $txtWorkingHours
					);

					$this->base_model->form_post('tbl_factory',$object);
					$this->session->set_flashdata('success_log','Planrt Created Successfully');
					redirect('Index/Plant');
				}

			}


			$this->load->view('plant_details_view',$data);


		}
		else {
			redirect(base_url().'index.php');
		}
	}




	//this function for worker attendence
	public function emp_attendance()
	{
		$data['worker_list'] = $this->base_model->getassignworkerlistbysupervisor();
		$data['do_attandance'] = $this->base_model->check_attandance();
		// if($this->base_model->check_plant_id()->num_rows() > 0){
		// // 	// echo $this->db->last_query();
		// // 	// die;
		// 	$this->load->view('plant_employee_id_view');
		// }
		// else{
			$this->load->view('worker_attendance_view',$data);
		// }
		
	}



	//This Function For Employee Release
	public function EmployeeRelease()
	{
		$data = array('worker_list' => $this->base_model->getassignworkerlistbysupervisor());
		$this->load->view('super_workier_list_view', $data);
	}


	public function attendence()
	{

		if($this->input->post('btnSubmit') == 'search'){
			$from_date=$this->input->post('txtFromDate');
			$to_date=$this->input->post('txtToDate');
			$data['search_result']=$this->base_model->get_attendance($from_date,$to_date);
			$data['txtFromDate'] = $from_date;
			$data['txtToDate'] = $to_date;
			$this->load->view('attendance_list_view',$data);
		}
		else{
			$this->load->view('attendance_list_view');
		}

	}


	// This Function For Assign Worker
	public function workers_assign()
	{
		if ($this->input->post('btnSubmit') == 'search') {
			// Get Value And Clean XSS
			$ddlPlant=$this->security->xss_clean($this->input->post('ddlPlant'));
			$ddlType=$this->security->xss_clean($this->input->post('ddlType'));

			$plant=explode('-', $ddlPlant);

			if($ddlType==1){
				$search_type = 'Assign';
			}
			else{
				$search_type = 'Unassign';
			}

			$data=array(
				'listing_data' => $this->base_model->worker_listing($plant[0],$ddlType),
				'plant_list' => $this->db->query('SELECT * FROM tbl_factory WHERE status=1')->result(),
				'plant_name' => $plant[1],
				'plant_id' => $plant[0],
				'search_type' => $search_type
			);
		}
		else{
			$data=array(
				'plant_list' => $this->db->query('SELECT * FROM tbl_factory WHERE status=1')->result(),
			);
		}
		
		// echo $this->db->last_query();
		// die;
		$this->load->view('workers_assign_view',$data);
	}

	// This Function For Transfer Worker
	public function transfer_worker()
	{
		if ($this->input->post('btnSubmit') == 'search') {

			$ddlPlant=$this->security->xss_clean($this->input->post('ddlPlant'));
			$plant=explode('-', $ddlPlant);

			$data=array(
				'listing_data' => $this->base_model->worker_listing($plant[0],""),
				'plant_list' => $this->db->query('SELECT * FROM tbl_factory WHERE status=1')->result(),
				'plant_name' => $plant[1],
				'plant_id' => $plant[0]
			);
		}
		else{
			$data=array(
				'plant_list' => $this->db->query('SELECT * FROM tbl_factory WHERE status=1')->result()
			);
		}
		$this->load->view('transfer_worker', $data);
	}



}

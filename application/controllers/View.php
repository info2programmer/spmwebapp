<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}

 public function attendance(){

 	 $txtFromDate=$this->security->xss_clean($this->input->post('txtFromDate'));
     $txtToDate=$this->security->xss_clean($this->input->post('txtToDate'));
     $txtLocation=$this->security->xss_clean($this->input->post('txtLocation'));
     $txtFactoryName=$this->security->xss_clean($this->input->post('txtFactoryName'));

 	//This Section For Save Post Date
 	if($this->input->post('btnSubmit')=='submit'){
 		// echo "I Finally Here";
 		$txtEmployeeIds=$this->input->post('emp');
 		// $data['salaryview'] = $this->base_model->calculateSalary($txtFromDate,$txtToDate,$txtEmployeeIds,$txtFactoryName);
 		var_dump($this->base_model->calculateSalary($txtFromDate,$txtToDate,$txtEmployeeIds,$txtFactoryName));
 	}

     //This Section For prevent xss
   

    $data['search_result']=$this->base_model->Attendance_View($txtFromDate,$txtToDate,$txtLocation,$txtFactoryName);
    $data['txtFromDate'] = $txtFromDate;
    $data['txtToDate'] = $txtToDate;
    $data['txtLocation'] = $txtLocation;
    $data['txtFactoryName'] = $txtFactoryName;


    // echo $this->db->last_query();
    // die;
    $this->load->view('attendance_details_view', $data);
 }


 // This Function For View Employee Data
 public function employee($id)
 {
 	// Clean XSS
 	$id=$this->security->xss_clean($id);

 	$data['data'] = $this->db->query('SELECT * FROM employee WHERE emp_id_auto='.$id)->result_array();
 	$data['short_list'] = $this->db->query('SELECT * FROM tbl_incriment_uniform_shoe_log WHERE emp_id='.$id.' ORDER BY id DESC')->result();
 	$this->load->view('eployeedetails', $data);
 }



}

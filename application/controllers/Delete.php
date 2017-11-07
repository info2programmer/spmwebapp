<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}

// This Function to delete Planrt
public function Plant($id)
{
	// xss clean
	$id=$this->security->xss_clean($id);
	$this->db->where('factory_id', $id);
	$this->db->delete('tbl_factory');

	$this->session->set_flashdata('success_log', 'Plant Deleted Successfully');
	redirect('Index/Plant');
}

}

<?php
class base_model extends CI_Model {
 function __construct() {
  parent::__construct();
  date_default_timezone_set('Asia/Kolkata');
}

function form_post($table,$fields)
{
  if($this->db->insert($table,$fields)){
    return true;
  }

}
function day_post($table,$fields)
{
  if($this->db->insert_batch($table,$fields)){
    return true;
  }

}
function form_update($table,$fields,$category)
{

	$this->db->where('pid', $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
  }

}
function land_update($table,$fields,$category)
{

	$this->db->where('land_id', $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
  }

}
function trade_update($table,$fields,$category)
{

	$this->db->where('trad_id', $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
  }

}
function order_update($table,$fields,$category)
{

	$this->db->where('order_id', $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
  }

}
function mtype_update($table,$fields,$category)
{

	$this->db->where('type_id', $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
  }

}
function Mcount_update($table,$fields,$category)
{

	$this->db->where('num_id', $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
  }

}
function tax_update($table,$fields,$category)
{

	$this->db->where('sc_id', $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
  }

}
function area_update($table,$fields,$category)
{

	$this->db->where('area_id', $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
  }

}
function size_update($table,$fields,$category)
{

	$this->db->where('size_id', $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
  }

}
function form_update1($table,$fields,$category)
{

  $this->db->where('cat_id', $category);
  if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
    return true;
  }

}
function form_update2($table,$fields,$category)
{

  $this->db->where('gid', $category);
  if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
    return true;
  }

}
function file_upload2($img,$tmp)
{
  $image_path = 'package/';
  if(move_uploaded_file($tmp,$image_path.$img))
    return true;
}
function file_upload1($img,$tmp)
{
  $image_path = 'guest/';
  if(move_uploaded_file($tmp,$image_path.$img))
    return true;
}
function news_file_upload($img,$tmp)
{
  $image_path = 'employee/';
  if(move_uploaded_file($tmp,$image_path.$img))
    return true;
}
function gnews_file_upload($img,$tmp)
{
  $image_path = 'news/';
  if(move_uploaded_file($tmp,$image_path.$img))
    return true;
}
function sponsor_file_upload($img,$tmp)
{
  $image_path = 'sponsor/';
  if(move_uploaded_file($tmp,$image_path.$img))
    return true;
}
function album_file_upload($img,$tmp)
{
  $image_path = 'album/';
  if(move_uploaded_file($tmp,$image_path.$img))
    return true;
}
function album_image_upload($img,$tmp)
{
  $image_path = 'album/images/';
  if(move_uploaded_file($tmp,$image_path.$img))
    return true;
}
function slider_file_upload($img,$tmp)
{
  $image_path = 'slider/';
  if(move_uploaded_file($tmp,$image_path.$img))
    return true;
}
function subcategory_file_upload($img,$tmp)
{
  $image_path = 'subcategory/';
  if(move_uploaded_file($tmp,$image_path.$img))
    return true;
}
function show_data($table,$fields,$condition)
{
 if(!empty($condition))
 {
   $this->db->where($condition);
 }
 $this->db->select($fields);
 $var = $this->db->get($table);
 return $var;

}
function category_update($table,$fields,$category)
{

	$this->db->where('category_id', $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
  }

}

function update_data($table,$fields,$field_name,$category)
{

	$this->db->where($field_name, $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
  }

}
function file_upload($img,$tmp)
{
 $image_path = 'img/';
 if(move_uploaded_file($tmp,$image_path.$img))
   return true;
}
function profile_update($table,$fields,$category)
{

 $this->db->where('id', $category);
 if($this->db->update($table,$fields)){
       //if($this->db->insert($table,$fields)){
   return true;
 }

}
function client_update($table,$fields,$category)
{

  $this->db->where('client_id', $category);
  if($this->db->update($table,$fields)){
       //if($this->db->insert($table,$fields)){
    return true;
  }

}
function company_update($table,$fields,$category)
{

  $this->db->where('com_id', $category);
  if($this->db->update($table,$fields)){
       //if($this->db->insert($table,$fields)){
    return true;
  }

}
function service_update($table,$fields,$category)
{

 $this->db->where('service_id', $category);
 if($this->db->update($table,$fields)){
       //if($this->db->insert($table,$fields)){
   return true;
 }

}
function project_update($table,$fields,$category)
{

 $this->db->where('prj_id', $category);
 if($this->db->update($table,$fields)){
       //if($this->db->insert($table,$fields)){
   return true;
 }

}

   //This Function To Get Employee Data
public function getEmployeeById($id)
{
 $this->db->where('emp_id_auto', $id);
 $query=$this->db->get('employee')->result_array();
 return $query;
}


   //This Function For Get All employee or worker
public function getallemployee()
{
  $this->db->where('category!=', 'SUPERVISOR');
  $this->db->where('assign_status',1);
  $this->db->order_by('fname', 'asc');
  $query=$this->db->get('employee');
  return $query->result();
}

   //this function for get employeearea by employeeid
public function getemployeeareabyid($emp_id)
{
  $this->db->where('emp_id_auto', $emp_id);
  return $this->db->get('employee')->result_array();
}

   //This function To insert supervisor credential
public function isertsupervisor($object)
{
 $this->db->insert('auth_supervisor', $object);
}

   //get all superviser credentials
// public function getallsupervisorinauth($id)
// {
//   if(!empty($id)){
//     $this->db->where('auth_supervisor.record_id', $id);
//   }
//   $this->db->select('auth_supervisor.*,fname,lname,mob_no');
//   $this->db->from('auth_supervisor');
//   $this->db->join('employee', 'employee.emp_id_auto = auth_supervisor.record_id', 'inner');
//   $query=$this->db->get();
//   if(!empty($id)){
//     return $query->result_array();
//   }
//   else{
//    return $query->result();
//  }
// }

public function editsupervisorinauthbyid($fields)
{

  $this->db->insert('auth_supervisor', $fields);

}


//This Function To Update Password
public function updateadminpassword($array)
{
  $this->db->where('id', $this->session->userdata('usid'));
  $this->db->update('td_admin', $array);
}


//This Function To Get Factory Data By Id
public function getfactorydatabyid($id)
{
  $this->db->where('factory_id', $id);
  $query=$this->db->get('tbl_factory');
  return $query->result_array();
}


  //This Function To Get All Fectory Location
public function getfactorylocation()
{
  $this->db->order_by("factory_id", "desc");
  $this->db->distinct();
  $query=$this->db->get('tbl_factory');
  return $query->result();
}


  //This Function To Get Factory By Location
public function getfactorybylocation($location)
{
  $this->db->where('location', $location);
  $query=$this->db->get('tbl_factory');
  return $query->result_array();
}

  //This Function To Get All Superviser List
// public function getsupervisorlist($id)
// {
//   if($id!="")
//   {
//     $this->db->where('record_id', $id);
//   }
//     // $this->db->distinct();
//     // $this->db->g('supervisor_name');
//   $this->db->where('status', 1);
//   $this->db->group_by('supervisor_id');
//   $this->db->select('record_id,supervisor_id, from_date,to_date,working_days,factory_location,factory_name,mobile_number,org_password,fname,lname,status,emp_id_auto');
//   $this->db->from('auth_supervisor');
//   $this->db->join('employee', 'auth_supervisor.supervisor_id = employee.emp_id_auto', 'inner');
//   return $this->db->get()->result();
//
// }

// // This Function to Get Plant Details
// public function get_pla($value='')
// {
//   # code...
// }


  //This Function For Assign Job
public function assignjob($object)
{
  $this->db->insert('tbl_work_assign', $object);
}

  //This Section For Update employee assign_status
public function update_assign_employee_status($employeeID,$status)
{
  $this->db->where('emp_id_auto', $employeeID);
  $object['assign_status'] = $status;
  $this->db->update('employee', $object);
}


  //Get Assign Employee List By Supervisor Id,Factory Location And Factory Name
public function getassignworkerlist($supervisor_id,$factory_location,$factory_name)
{
  $this->db->where('tbl_work_assign.supervisor_id', $supervisor_id);
  $this->db->where('tbl_work_assign.factory_location  ', $factory_location);
  $this->db->where('tbl_work_assign.factory_name', $factory_name);
  $this->db->where('tbl_work_assign.status', 1);
  $this->db->select('tbl_work_assign.*,employee.fname,employee.lname,employee.category,employee.mob_no,employee.emp_id_auto');
  $this->db->from('tbl_work_assign');
  $this->db->join('employee', 'employee.emp_id_auto = tbl_work_assign.employee_id', 'INNER');

  return $this->db->get()->result();

}


  //This function to get all supervisor in epmloyee table
public function getallsupervisor()
{
  $this->db->where('category', 'SUPERVISOR');
  $query=$this->db->get('employee');
  return $query->result();
}


  //this function to check supervisor credential
public function checkcredential($txt_username,$txt_password)
{
  $this->db->where('status', 1);
  $this->db->where('username',$txt_username);
  $this->db->where('password',$txt_password);
  $result=$this->db->get('tbl_factory');
  // echo $this->db->last_query();
  // die;
  if($result->num_rows()==1){
    // $this->auth_supervisor_last_login($txt_username,$txt_password);
    return $result->row(0)->factory_id;
  }
  else{
    return false;
  }
}


//This function To Update Last Login In Supervisor Table
public function auth_supervisor_last_login($txt_username,$txt_password)
{
  $this->db->where('status', 1);
  $this->db->where('mobile_number',$txt_username);
  $this->db->where('password',$txt_password);
  $object['last_login'] = date('Y/m/d H:i:s');
  $this->db->update('auth_supervisor', $object);
}


//This function To Get Assign Worker By Supervisor Id
public function getassignworkerlistbysupervisor()
{
  $this->db->where('status', 1);
  $this->db->where('supervisor_id', $this->session->userdata('user'));
  $this->db->select('tbl_work_assign.*,employee.fname,employee.lname,employee.category,employee.mob_no,employee.emp_id_auto');
  $this->db->from('tbl_work_assign');
  $this->db->join('employee', 'employee.emp_id_auto = tbl_work_assign.employee_id', 'INNER');
  return $this->db->get()->result();
}



//this function for do attendance
public function do_attendance($emp_id,$full_day,$half_day)
{

  $object=array (
    'employee_id' => $emp_id,
    'half_day' => $half_day,
    'full_day' => $full_day,
    'current_date' => date('Y-m-d'),
    'current_time' => date('H:i:s')
  );
  $this->db->insert('tbl_attendance', $object);
}

  //This Function To Check Attendance Already Submited Or Not
  public function check_attandance()
  {
    $this->db->where('current_date', date('Y-m-d'));
    $result=$this->db->get('tbl_attendance');
    if($result->num_rows()>0){
      return false;
    }
    else{
      return true;
    }
  }


  //check ussername and password
  public function chkusernameinadmin($username,$password)
  {
    $this->db->where('user', $username);
    $this->db->where('pass_original', $password);
    $result=$this->db->get('td_admin');
    if($result->num_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }


  public function get_attendance($from_date,$to_date){
    $this->db->where('from_dare>=', $from_date);
    $this->db->where('to_date<=', $to_date);
    $this->db->select('DISTINCT(factory_name),factory_location,COUNT(employee_id) as emp_id');
    $this->db->from('tbl_work_assign');
    return $this->db->get()->result();
  }


  //This Function For Attendance Details View
    public function Attendance_View($txtFromDate,$txtToDate,$txtLocation,$txtFactoryName){
        $this->db->where('from_dare>=', $txtFromDate);
        $this->db->where('to_date<=', $txtToDate);
        $this->db->where('factory_location',$txtLocation);
        $this->db->where('factory_name',$txtFactoryName);
        $this->db->select('tbl_work_assign.*,emp_id_auto,fname,lname,emp_id,supervisor_id');
        $this->db->from('tbl_work_assign');
        $this->db->join('employee', 'tbl_work_assign.employee_id=employee.emp_id_auto', 'inner');
        // $this->db->join('tbl_work_assign.employee_id=employee.emp_id_auto','inner');
        $query=$this->db->get();
        return $query->result();
    }


    //This Function For check planrt employee id is exist or not
    public function check_plant_id()
    {
      $this->db->where('status', 1);
      $this->db->where('supervisor_id', $this->session->userdata('user'));
      $this->db->where('plant_emp_id', '');
      $this->db->select('tbl_work_assign.*,employee.fname,employee.lname,employee.category,employee.mob_no,employee.emp_id_auto');
      $this->db->from('tbl_work_assign');
      $this->db->join('employee', 'employee.emp_id_auto = tbl_work_assign.employee_id', 'INNER');
      $query=$this->db->get();
      return $query;
    }


    //Updatate Plant Employee Id  By Reord Id
    public function emp_id_update($value,$id)
    {
      $object['plant_emp_id'] =$value;
      $this->db->where('record_id', $id);
      $this->db->update('tbl_work_assign', $object);
    }


    // This Function For Calculate salary
    public function calculateSalary($txtFromDate,$txtToDate,$txtEmployeeIds,$factory_name)
    {
      // $this->db->where_in('tbl_attendance.employee_id', $txtEmployeeIds);
      // $this->db->where('current_date>=', $txtFromDate);
      // $this->db->where('current_date<=', $txtToDate);
      // $this->db->where('factory_name', $factory_name);
      // $this->db->where('tbl_work_assign.status', 1);
      // $this->db->where('employee.category!=', 'SUPERVISOR');
      // $this->db->where('tbl_work_assign.is_salary_generate', 0);
      // $this->db->where_in('tbl_work_assign.employee_id', $txtEmployeeIds);
      // $this->db->group_by('tbl_work_assign.employee_id');
      // $this->db->select('SUM(half_day) as half,SUM(full_day) as full,fname,lname,basic_salary,ca,hra,dla');
      // $this->db->from('tbl_attendance');
      // $this->db->join('employee', 'employee.emp_id_auto = tbl_attendance.record_id', 'INNER');
      // $this->db->join('tbl_work_assign', 'tbl_work_assign.employee_id = tbl_attendance.employee_id', 'INNER');
      // $query=$this->db->get();
      // echo $this->db->last_query();die;
      // return $query->result();

      // $sql="SELECT SUM(tbl_attendance.half_day),SUM(tbl_attendance.full_day),tbl_attendance.employee_id,tbl_work_assign.basic_salary,tbl_work_assign.ca,tbl_work_assign.hra,tbl_work_assign.dla,employee.fname,employee.lname FROM tbl_attendance INNER JOIN tbl_work_assign ON tbl_attendance.employee_id=tbl_work_assign.employee_id INNER JOIN employee ON employee.emp_id_auto=tbl_attendance.employee_id WHERE tbl_attendance.employee_id IN('".$txtEmployeeIds."') AND  `current_date` BETWEEN '".$txtFromDate."' AND '".$txtToDate."' AND tbl_work_assign.is_salary_generate=0 AND tbl_work_assign.status=1 AND tbl_work_assign.factory_name='KBS' GROUP BY(tbl_attendance.employee_id)";

      // $query=$this->db->query($sql)->result();
      // return $query;
      //

      //TODO : SPM SALARY GENERATE
      $this->db->where_in('tbl_attendance.employee_id', $txtEmployeeIds);
      $this->db->where('current_date>=', $txtFromDate);
      $this->db->where('current_date><=', $txtToDate);
      $this->db->where('tbl_work_assign.is_salary_generate', 0);
      $this->db->where('tbl_work_assign.status', 1);
      $this->db->where('tbl_work_assign.factory_name', $factory_name);
      $this->db->group_by('tbl_attendance.employee_id');
      $this->db->select('SUM(tbl_attendance.half_day),SUM(tbl_attendance.full_day),tbl_attendance.employee_id,tbl_work_assign.basic_salary,tbl_work_assign.ca,tbl_work_assign.hra,tbl_work_assign.dla,employee.fname,employee.lname');
      $this->db->from('tbl_attendance');
      $this->db->join('tbl_work_assign', 'tbl_attendance.employee_id=tbl_work_assign.employee_id', 'inner');
      $this->db->join('employee', 'employee.emp_id_auto=tbl_attendance.employee_id', 'inner');
      $query=$this->db->get();
    }

    // this function update plant Details
    public function update_plant_data($plant_id,$object)
    {
      $this->db->where('factory_id', $plant_id);
      $this->db->update('tbl_factory', $object);
    }


      // Insert Shoe , Increment , Uniform Data
  public function log_uniform($date,$reason,$emp_id)
  {
    $object=array(
      'emp_id' => $emp_id,
      'date' => $date,
      'reason' => $reason
    );

    $this->db->insert('tbl_incriment_uniform_shoe_log', $object);
  }

  // This Function For workerlisting by plant and assign status
  public function worker_listing($plant_id,$assign_status)
  {
    $this->db->where('plant_name', $plant_id);
    if($assign_status!="")
    {
      $this->db->where('assign_status', $assign_status);
    }
    $query=$this->db->get('employee');
    return $query->result();
  }


  // This Function To assign worker by workerid and plant id
  public function assign_worker($object)
  {
    $this->db->insert('tbl_work_assign', $object);
  }

  // This Funcation To relese worker list
  public function release_worker($plant_id,$emp_id)
  {
    $this->db->where('plant_id', $plant_id);
    $this->db->where('employee_id', $emp_id);
    $object=array(
      'status' => 0,
      'release_date' => date('Y-m-d')
    );
    $this->db->update('tbl_work_assign', $object);
    // $this->db->update('tbl_work_assign', $object);
  }

  // This Function to Update Employee Table
  public function assing_employee_table($id,$status)
  {
    $this->db->where_in('emp_id_auto', $id);
    $object = array(
      'assign_status' => $status
    );
    $this->db->update('employee', $object);
  }


  // This Function For Transfer Worker
  public function transfer_worker($plant_id,$worker_id)
  {
    $this->db->where_in('emp_id_auto', $worker_id);
    $object['plant_name'] = $plant_id;
    $this->db->update('employee', $object);
  }


}

?>

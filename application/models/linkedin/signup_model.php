<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Signup_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function create_user($data){
		// Prep the query
		$this->db->where('email', $data['email']);
		
		// Run the query
		$query = $this->db->get('users');
		// Let's check if there are any results
		if($query->num_rows == 0)
		{
			$this->db->insert('users', $data);
			$this->db->where('email', $data['email']);
			$query = $this->db->get('users');
			$row = $query->row();


			// create session data
			
			$sess_data = array(
				    'user_id' => $row->user_id,
					'email' => $data['email'],
					'firstname' => $data['firstname'],
					'lastname' => $data['lastname'],
					'validated' => true,
					'profilepic' => $row->profilepic
					);
			$this->session->set_userdata($sess_data);
			return true;
		}
		// If the previous process did not validate
		// then return false.
		return false;
	}



	public function create_user2(){
		// Prep the query
		$temp_user_id=$this->session->userdata('user_id');
		$status_checker=$this->security->xss_clean($this->input->post('status-chooser'));
			$temp=1; 
			if($status_checker=='employed')
			{
				$temp=1;
				//echo $temp;
			}
			else if($status_checker=='looking')
			{
				$temp=2;
				//echo $temp;
			}
			else if($status_checker=='student')
			{
				$temp=3;
				//echo $temp;
			}
			//echo $status_checker;
			//echo $temp;
			
			$insert_array= array(
			'user_id'=>$this->session->userdata('user_id'),
			'country'=> $this->security->xss_clean($this->input->post('country')),
			'postal_Code'=> $this->security->xss_clean($this->input->post('postalcode')),
			'current_position'=>$temp,
			'dob' =>date("Y-m-d"),
			'language' =>'English',
			'years_of_experience'=> 0,
			'joining_date'=>date("Y-m-d")
			);

			$this->db->insert('profile', $insert_array);

				

			if($insert_array['current_position']==1)
			{
				
				$temp_array=array(
					'company_name'=> $this->security->xss_clean($this->input->post('company'))
					);
				$this->db->insert('company',$temp_array);
				$this->db->where('company_name', $temp_array['company_name']);
				$query = $this->db->get('company');
				$row = $query->row();


				$insert_array1= array(
				'user_id'=>$this->session->userdata('user_id'),
				'job_title' =>  $this->security->xss_clean($this->input->post('workCompanyTitle')),
				'company_id' => $row->company_id
				);
			
				$this->db->insert('job', $insert_array1);
			}

			else if($insert_array['current_position']==2)
			{
				//$temp_var= $this->security->xss_clean($this->input->post('companyName'));
				$temp_array=array(
					'company_name'=> $this->security->xss_clean($this->input->post('company2')),
					'industry'=> $this->security->xss_clean($this->input->post('industry-chooser'))
					);
				$this->db->insert('company',$temp_array);
				$this->db->where('company_name', $temp_array['company_name']);
				$query = $this->db->get('company');
				$row = $query->row();


				$insert_array2= array(
				'user_id'=>$this->session->userdata('user_id'),
				'job_title' =>  $this->security->xss_clean($this->input->post('workCompanyTitle2')),
				'company_id' => $row->company_id,
				'industry'=> $this->security->xss_clean($this->input->post('industry-chooser')),
				'start_date'=> $this->security->xss_clean($this->input->post('startYear')),
				'end_date' => $this->security->xss_clean($this->input->post('endYear'))
				);
			
				$this->db->insert('job', $insert_array2);
			}

			else if($insert_array['current_position']==3)
			{
				//$temp_var= $this->security->xss_clean($this->input->post('institutionName'));
				$temp_array=array(
					'institution_name'=> $this->security->xss_clean($this->input->post('school'))
					);
				$this->db->insert('institution',$temp_array);
				$this->db->where('institution_name', $temp_array['institution_name']);
				$query = $this->db->get('institution');
				$row = $query->row();


				$insert_array3= array(
				'user_id'=>$this->session->userdata('user_id'),
				'institution_id' => $row->institution_id,
				'start_date' =>  $this->security->xss_clean($this->input->post('startYear')),
				'end_date'=> $this->security->xss_clean($this->input->post('endYear'))
				
				);
			
				$this->db->insert('education', $insert_array3);
			}
			return true;
		
	}
	


public function insert_pic()
   {
	    $pic_data = array(
	        'profilepic'     => $this->session->userdata('user_id')
	    );
	     
	    $this->db->where('user_id', $this->session->userdata('user_id'));
		$this->db->update('users', $pic_data);
	     // $this->db->insert('user', $pic_data);
	     // return $this->db->insert_id();*/*/
   }

   public function getUploadedPPic($pp_id=NULL){
		if($pp_id==NULL){
			$u_id=$this->session->userdata('userid');
		}
		else {

			$u_d=$pp_id;
		}

		$this->db->where('user_id', $u_id);
		$query = $this->db->get('users');
		if($query->num_rows == 1)
		{
			$row = $query->row();
			$imagepath=$row->profilepic;
			return $imagepath;
		}

		//return "default";

	}



};
?>
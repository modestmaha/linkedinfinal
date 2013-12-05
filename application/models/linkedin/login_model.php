<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Login_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function getUploadedPPic($pp_id=NULL){
		if($pp_id==NULL){
			
			$u_id=$this->session->userdata('user_id');
			//echo $u_id;
		}
		else {

			$u_d=$pp_id;
		}

		$this->db->where('user_id', $u_id);
		$query = $this->db->get('users');
		if($query->num_rows == 1)
		{
			$row = $query->row();
			$imagepath=$row->profilePic;
			//echo $imagepath;
			return $imagepath;
		}

		//return "default";

	}


	public function validate($data, &$main_error_msg){
		
		// Prep the query
		$this->db->where('email', $data['email']);
		$query = $this->db->get('users');
		if($query->num_rows == 0)
		{
			$main_error_msg = "Hmm, we don't recognize that email. Please try again.";
		}
		else
		{
			$row = $query->row();
			if($row->password != $data['password'])
			{
				$main_error_msg = "Hmm, that's not the right password. Please try again or <a href='<?php echo base_url()index.php/linkedin/edit_profile/edit_password ?>'>request a new one.<a/>";
			}
			else
			{
				$sess_data = array(
					'email' => $row->email,
					'user_id'=> $row->user_id,
					'firstName' => $row->firstName,
					'lastName' => $row->lastName,
					'validated' => true,
					'profilePic' => $row->profilePic
					);
			$this->session->set_userdata($sess_data);
			return true;
			}

		}
		
		return false;
	}
}
?>
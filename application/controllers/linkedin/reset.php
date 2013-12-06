
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Reset extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index( $email = NULL, $main_error_msg = NULL, $email_error_msg = NULL){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

		if($this->session->userdata('email'))
		{
			redirect('linkedin/login/go_to_profile', 'refresh');
		}
		else
		{
			$data['heading'] = "Password Change | LinkedIn";
			$data['css_url'] = "linkedin/style6";
			
			$this->load->view('linkedin/header',$data);
			$this->load->view('linkedin/nav1');
			$data['main_error_msg'] = $main_error_msg;
			$data['email_error_msg'] = $email_error_msg;
			$data['email'] = $this->security->xss_clean($this->input->post('email');
			$this->load->view('linkedin/screen6body', $data);
			$this->load->view('linkedin/footer3');
		}
		//$this->load->view('common/footer',$data);
	}
	
	public function pass(){
		
		$email = $this->security->xss_clean($this->input->post('login_textbox');	
		if (strlen($email)<3)
		{
			$email_error_msg = "The text you provide is too short (the minimum length is 3 characters, your text contains ";
			$email_error_msg .=strlen($email);
			$email_error_msg .=" characters).";
		}
		else if (!preg_match("/^[a-z]+[a-z0-9_]*@[a-zA-z]+.[a-z]+$/", $email))
			$email_error_msg = "Invalid email address.";
		else
			$email_error_msg = NULL;

		if($email_error_msg !=NULL)
		{
			$main_error_msg = "Please correct the marked field(s) below.";
			$this->index($email, $main_error_msg, $email_error_msg);
		}
		else
		{
			$this->load->model('linkedin/reset_model');
		// Validate the user can login
			$result = $this->reset_model->pass($email);
			// Now we verify the result
			if(! $result){
				// If email is present, then show them login page again
				$main_error_msg = "Please correct the marked field(s) below.";
				$email_error_msg = 'The email address, ';
				$email_error_msg .= $email;
				$email_error_msg .= ', is not registered.';
				$this->index($data, $main_error_msg);
			}
			else{
				// If user did validate, 
				// Send them to members area
				redirect('linkedin/','refresh');

			}	
		}	
	}
}
?>
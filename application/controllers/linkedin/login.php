<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index($form_data = NULL, $main_error_msg = NULL, $email_error_msg = NULL, $password_error_msg = NULL){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

		if($this->session->userdata('email')){
			$this->go_to_profile();
		}
		else{
			$data['heading'] = "Sign In | LinkedIn";
			$data['css_url'] = "linkedin/style5";
			$this->load->view('linkedin/header', $data);
			$this->load->view('linkedin/nav1');
			
			$data['main_error_msg'] = $main_error_msg;
			$data['email_error_msg'] = $email_error_msg;
			$data['password_error_msg'] = $password_error_msg;
			$data['email'] = $form_data['email'];
			
			$this->load->view('linkedin/screen5body', $data);
			$this->load->view('linkedin/footer3');
		}
		//$this->load->view('common/footer',$data);
	}
	
	public function go_to_profile()
	{

		$this->load->helper('url');
		if($this->session->userdata('email'))
		{
			$data['heading'] = $this->session->userdata('email');
			$data['css_url'] = "linkedin/profilepage";

			$this->load->model('linkedin/login_model');
			//echo "Hello";

			$data['pic_path']=$this->login_model->getUploadedPPic() . '.jpg';
			$data['pic_path'] = 'uploads/'.$data['pic_path'];

			//$this->load->view('linkedin/header', $data);
			redirect('linkedin/newsfeed', 'refresh');
		}
		else
			$this->index();
	}

	public function validate(){
		
		$email = $this->security->xss_clean($this->input->post('login_textbox'));	
		if (strlen($email)<3)
		{
			$email_error_msg = "The text you provide is too short (the minimum length is 3 characters, your text contains";
			$email_error_msg .=strlen($email);
			$email_error_msg .=" characters).";
		}
		else if (!preg_match("/^[a-z]+[a-z0-9_]*@[a-zA-z]+.[a-z]+$/", $email))
			$email_error_msg = "Please enter a valid email address.";
		else
			$email_error_msg = NULL;

		$password = $this->security->xss_clean($this->input->post('password_textbox'));
		if(strlen($password)<1)
			$password_error_msg = "Please enter a password.";
		else if (strlen($password)<3)
			$password_error_msg = "The password you provide must have at least 6 characters";
		else
			$password_error_msg = NULL;

		$data['email'] = $email;
		//$data['password'] = $password;
		$this->load->helper('security');
		$data['password'] = do_hash($password, 'md5');

		//echo $data['password'];

		if($email_error_msg !=NULL || $password_error_msg !=NULL)
		{
			$main_error_msg = "There were one or more errors in your submission. Please correct the marked fields below.";
			$this->index($data, $main_error_msg, $email_error_msg, $password_error_msg);

		
		}
		else
		{// Load the model
			$this->load->model('linkedin/login_model');
			$main_error_msg = NULL;
			// Validate the user can login
			$result = $this->login_model->validate($data, $main_error_msg);
			// Now we verify the result
			
			if($result==false){
				// If user did not validate, then show them login page again
				
				$this->index($data, $main_error_msg);
			}
			else
			{

					redirect('linkedin/newsfeed', 'refresh');
			}
		}
	}
	public function do_logout(){
		$this->session->sess_destroy();
		redirect('linkedin/signup','refresh');
	}
}
?>
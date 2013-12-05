<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Signup extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index( $form_data = NULL, $main_error_msg = NULL, $firstname_error_msg = NULL, $lastname_error_msg = NULL, $email_error_msg = NULL, $password_error_msg = NULL){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

		if($this->session->userdata('email')){
			redirect('linkedin/login/go_to_profile', 'refresh');

		}else{
			$data['heading'] = "World's Largest Professional Network | LinkedIn";
			$data['css_url'] = "linkedin/signup";
			
			$this->load->view('linkedin/header',$data);
			$this->load->view('linkedin/nav1');
			$data['main_error_msg'] = $main_error_msg;
			$data['firstname_error_msg'] = $firstname_error_msg;
			$data['lastname_error_msg'] = $lastname_error_msg;
			$data['email_error_msg'] = $email_error_msg;
			$data['password_error_msg'] = $password_error_msg;	
			$data['firstname'] = $form_data['firstname'];
			$data['lastname'] = $form_data['lastname'];
			$data['email'] = $form_data['email'];
			$data['password'] = $form_data['password'];

			$this->load->helper('security');
			$data['password'] = do_hash($data['password'], 'md5'); // MD5
			$this->load->view('linkedin/signup', $data);
			$this->load->view('linkedin/footer1');
			$this->load->view('linkedin/footer2');
			$this->load->view('linkedin/footer3');
		}
		//$this->load->view('common/footer',$data);
	}

	public function index2( $data){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

				
			//$data['heading'] = " let's start creating your professional profile";
			//$data['css_url'] = "linkedin/page2";
			
			//$this->load->view('linkedin/header',$data);
			//$this->load->view('linkedin/nav1');

			$this->load->view('linkedin/khudse');
		
	}
	
	public function validate(){
		
		$firstname =  $this->security->xss_clean($this->input->post('firstname'));
		if (strlen($firstname)<2)
			$firstname_error_msg = "The text you provide must have at least 2 characters";
		else if (!preg_match("/^[A-Z].(['].[A-Z])?[a-z]+.$/", $firstname))
			$firstname_error_msg = "Please provide a valid name";
		else
			$firstname_error_msg = NULL;

		$lastname =  $this->security->xss_clean($this->input->post('lastname'));
		if  (strlen($lastname)<3)
			$lastname_error_msg = "The text you provide must have at least 3 characters";
		else if (!preg_match("/^[A-Z].(['].[A-Z])?[a-z]+.$/", $lastname))
			$lastname_error_msg = "Please provide a valid name";
		else
			$lastname_error_msg = NULL;
		
		$email =  $this->security->xss_clean($this->input->post('emailAddress'));	
		if (strlen($email)<3)
		{
			$email_error_msg = "The text you provide is too short (the minimum length is 3 characters, your text contains";
			$email_error_msg .=strlen($email);
			$email_error_msg .=" characters).";
		}
		else if (!preg_match("/^[a-z]+[a-z0-9_]*@[a-zA-z]+.[a-z]+$/", $email))
			$email_error_msg = "Invalid email address.";
		else
			$email_error_msg = NULL;

		$password =  $this->security->xss_clean($this->input->post('password'));
		if (strlen($password)<3)
			$password_error_msg = "The password you provide must have at least 6 characters";
		else if (!preg_match("/^[A-Za-z0-9]*+$/", $password))
			$password_error_msg = "Password may not contain symbols.";
		else
			$password_error_msg = NULL;

		$pic_name='default';
		$data['firstname'] = $firstname;
		$data['lastname'] = $lastname;
		$data['email'] = $email;
		$data['password'] = $password;
		$this->load->helper('security');
		$data['password'] = do_hash($data['password'], 'md5'); // MD5
		$data['profilepic'] = $pic_name;

		if($firstname_error_msg != NULL || $lastname_error_msg != NULL || $email_error_msg !=NULL || $password_error_msg !=NULL)
		{
			$main_error_msg = "Please correct the marked field(s) below.";
			$this->index($data, $main_error_msg, $firstname_error_msg, $lastname_error_msg, $email_error_msg, $password_error_msg);
		}
		else
		{
			$this->load->model('linkedin/signup_model');
		// Validate the user can login
			$result = $this->signup_model->create_user($data);
			// Now we verify the result
			if(! $result){
				// If email is present, then show them login page again
				$email =  $this->security->xss_clean($this->input->post('emailAddress'));
				$main_error_msg = 'The email address, ';
				$main_error_msg .= $email;
				$main_error_msg .= ', is already registered.';
				$this->index($data, $main_error_msg);
			}
			else{
				// If user did validate, 
				// Send them to members area
				//redirect('linkedin/profile','refresh');
				$this->index2($data);
			}	
		}	
	}

	public function validate2()
	{
		$this->load->helper('url');
			$this->load->model('linkedin/signup_model');
		// Validate the user can login
			$result = $this->signup_model->create_user2();
			
				$this->load->view('linkedin/uploadpic2');
			//echo $result;

	}

	public function upload_new_picture()
	{
		if($this->session->userdata('email')){
		
			$this->load->helper('url');
			$this->load->view('linkedin/uploadpic2');
		}
		else
			$this->index();
	}


	public function uploaded_pic(){

		$max_file_size = 10240*10240; // 200kb
		$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
		// thumbnail sizes
		$sizes = array(100 => 100);


		if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_FILES['img'])) {
			if( $_FILES['img']['size'] < $max_file_size ){
				// get file extension
				$ext = strtolower(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));
				if (in_array($ext, $valid_exts)) {
					$_FILES['img']['name']=$this->session->userdata('user_id').'.jpg';
					
					$this->load->model('linkedin/signup_model');
					$this->signup_model->insert_pic();


					foreach ($sizes as $w => $h) {
						$files[] = $this->resize($w, $h);
					}

					redirect('linkedin/login/go_to_profile', 'refresh');
				} 
				else {
					$msg = 'Unsupported file';
					
				}
			} else{
			
				$msg = 'Please upload image smaller than 200KB';
			}
		}
		else{
			
		echo "not success";

		}
	}

	function resize($width, $height){
	/* Get original image x y*/
		list($w, $h) = getimagesize($_FILES['img']['tmp_name']);
		/* calculate new image size with ratio */
		$ratio = max($width/$w, $height/$h);
		$h = ceil($height / $ratio);
		$x = ($w - $width / $ratio) / 2;
		$w = ceil($width / $ratio);
		/* new file name */
		$path = 'uploads/'.$_FILES['img']['name'];
		/* read binary data from image file */
		$imgString = file_get_contents($_FILES['img']['tmp_name']);
		/* create image from string */
		$image = imagecreatefromstring($imgString);
		$tmp = imagecreatetruecolor($width, $height);
		imagecopyresampled($tmp, $image,
	  	0, 0,
	  	$x, 0,
	  	$width, $height,
	  	$w, $h);

		/* Save image */
		switch ($_FILES['img']['type']) {
			case 'image/jpeg':
				imagejpeg($tmp, $path, 100);
				break;
			case 'image/png':
				imagepng($tmp, $path, 0);
				break;
			case 'image/gif':
				imagegif($tmp, $path);
				break;
			default:
				exit;
				break;
		}

		return $path;
		/* cleanup memory */
		imagedestroy($image);
		imagedestroy($tmp);
	}



	//}
};

?>
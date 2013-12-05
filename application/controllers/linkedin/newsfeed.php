<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Newsfeed extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index($data = NULL)
	{

		$this->load->helper('url');

		if($this->session->userdata('email'))
		{

			$data['posts'] = $this->load_newsfeed();
			$data['heading'] = "Home | LinkedIn";
			$data['css_url'] = "linkedin/newsfeed";
			$this->load->view('linkedintoo/home', $data);			
		}
		else
		{
			redirect('linkedin/login', 'refresh');
		}
	}

	public function share_post()
	{
		$this->load->helper('url');
		$this->load->model("linkedin/newsfeed_model");

		if($this->session->userdata('email'))
		{
			$data['post_content'] = $this->input->post("post_content");
			$data['privacy'] = $this->input->post("privacy");
			//$data['upload_pic_id'] = $this->input->post("upload_pic_id");
			
			if(1==2)//($data['upload_pic_id'])
			{
				$data['link'] = NULL;
				$data['attachment'] = $_FILES['img']['name'];

			}
			else if(preg_match("/(https|http|ftp|ftps)\:\/\/[www.]?[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU)\/[a-zA-Z0-9\-\.]+/", $data['post_content'], $link) || preg_match("/(https|http|ftp|ftps)\:\/\/[www.]?[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU)/", $data['post_content'], $link))
			{
				$data['link'] = $link[0];
				$data['attachment'] = NULL;
			}
			else
			{
				$data['link'] = NULL;
				$data['attachment'] = NULL;
			}
			$this->newsfeed_model->insert_post($data);
						redirect('linkedin/newsfeed', 'refresh');

		}
		else
		{
			redirect('linkedin/login', 'refresh');
		}
	}
	public function add_comment()
	{
		$this->load->helper('url');
		$this->load->model("linkedin/newsfeed_model");
		if($this->session->userdata('email'))
		{
			$data['post_id'] = $this->input->post("post_id");
			$data['comment_content'] = $this->input->post("comment_content");
			$this->newsfeed_model->add_comment($data);
			$this->index();
		}
		else
		{
			redirect('linkedin/login', 'refresh');
		}
	}

		public function upload_attachment(){

		$max_file_size = 10240*10240; // 200kb
		$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
		// thumbnail sizes
		$sizes = array(100 => 100);
		$upload_pic_id = NULL;

		if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_FILES['img'])) {
			if( $_FILES['img']['size'] < $max_file_size ){
				// get file extension
				$ext = strtolower(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));
				if (in_array($ext, $valid_exts)) {
					
					$this->load->helper('date');

					$upload_pic_id = now();

					$_FILES['img']['name']=$this->session->userdata('user_id').$upload_pic_id.'.jpg';
					
					foreach ($sizes as $w => $h)
					{
						$files[] = $this->resize($w, $h);
					}
				} 
				else 
				{
					$msg = 'Unsupported file';
					
				}
			} 
			else
			{
				$msg = 'Please upload image smaller than 200KB';
			}
		}
		else
		{
			$msg =  "not success";
		}

		$data['heading'] = "Search | LinkedIn";
		$data['css_url'] = "linkedintoo/style";
		$data['css_url_1'] = "linkedintoo/inside-linkedin";
		$data['upload_pic_id'] = $upload_pic_id;
		$this->load->view('linkedintoo/home', $data);
	}

	function resize($width, $height)
	{
	
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


	public function share_attachment()
	{
		$this->load->helper('url');
		$this->load->model("linkedin/newsfeed_model");

		if($this->session->userdata('email'))
		{
			$data['post_content'] = $this->input->post("post_content");
			$data['privacy'] = $this->input->post("privacy");
			if(preg_match("/(https|http|ftp|ftps)\:\/\/[www.]?[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU)", $data['post_content'], $link))
			{
				$data['link'] = $link[0];
			}
			else
			{
				$data['link'] = NULL;
			}
			$this->newsfeed_model->insert_post($data);
		}
		else
		{
			redirect('linkedin/login', 'refresh');
		}
	}

	public function load_newsfeed()
	{
		$this->load->helper('url');
		if($this->session->userdata('email'))
		{
			$this->load->model("linkedin/newsfeed_model");
			return $this->newsfeed_model->retrieve_posts();
		}
		else
		{
			redirect('linkedin/login', 'refresh');
		}
	}

};
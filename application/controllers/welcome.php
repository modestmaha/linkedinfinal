<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->check_isvalidated();
		
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
		$data = '';
		$data['heading'] = 'DHALIA | Home';
		
		$this->load->view('common/header',$data);
		$this->load->view('common/nav',$data);
		$this->load->view('welcome_message',$data);
		$this->load->view('common/footer',$data);
	}
	private function check_isvalidated(){
		$this->load->helper('url');
		if(! $this->session->userdata('validated')){
			redirect('login/login', 'refresh');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
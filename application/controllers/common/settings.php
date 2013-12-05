<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class settings extends CI_Controller{
	private $mckey = '';
	private $mcList = '';
	function __construct(){
		parent::__construct();
		$this->check_isvalidated();

		$this->load->model('SettingsModel');
		$this->mckey = $this->SettingsModel->GetMailchimpApi();
		$this->mcList = $this->SettingsModel->GetMailchimpList();
		$this->mdkey = $this->SettingsModel->GetMD();
	}
	public function index(){
		if($this->mckey && $this->mcList){
			$config1 = array(
		    	'apikey' => $this->mckey,      // Insert your api key
	            'secure' => FALSE   // Optional (defaults to FALSE)
			);
			$this->load->library('MCAPI', $config1, 'mail_chimp1');
			$retval = $this->mail_chimp1->lists();
			foreach ($retval['data'] as $list) {
				if($list['id'] == $this->mcList){
					$listname = $list['name'];
				}
			}
		}else{
			$listname = '';
		}

		///var_dump($retval['data'][0]['id']);
		$this->load->helper('url');
		$data = '';

		if($listname){
			$data['McList'] = $listname;
		}else{
			$data['McList'] = '';
		}
		// GET MAILCHIMP API
		if($this->mckey == '0'){
			$data['MCkey'] = '';
		}else{
			$data['MCkey'] = $this->mckey;
		}

		if($this->mdkey == '0'){
			$data['MDkey'] = '';
		}else{
			$data['MDkey'] = $this->mdkey;
		}
		// GET SHOPIFY DATA
		$data['getShop'] = '';
		$data['getApi'] = '';
		$shopifyInfo = $this->SettingsModel->GetShopifyInfo();
		if($shopifyInfo){
			foreach ($shopifyInfo as $values) {
				$name = $values->name;
				$value = $values->value;
				if($name == 'shop'){
					$data['getShop'] = $value;
				}
				if($name == 'api'){
					$data['getApi'] = $value;
				}
			}
		}

		$data['heading'] = 'Settings';
		$data['actionMC'] =	site_url('common/settings/MailchimpKey');
		$data['actionMD'] =	site_url('common/settings/MandrillKey');
		$data['actionShopify'] = site_url('common/settings/InsertShopify');

		$this->load->view('common/header',$data);
		$this->load->view('common/nav',$data);
		$this->load->view('common/settings_view',$data);
		$this->load->view('common/footer',$data);


	}

	public function MailchimpKey(){
		
		$this->load->model('SettingsModel');
		header('Content-Type: application/json');
		if($_POST['key']){
			$config = array('apikey' =>$_POST['key'], 'secure' => FALSE);
			$this->load->library('MCAPI', $config, 'mail_chimp');
			$lists = $this->mail_chimp->lists();
			if($lists){
				$this->SettingsModel->InsertMC($_POST);
				echo "true";
			}else{
				echo "false";
			}
		}else{
			echo "null";	
		}
		
	}

	public function MandrillKey(){
		$this->load->model('SettingsModel');
		header('Content-Type: application/json');
		if($_POST['key']){

			$data["key"] = $_POST['key'];
			$json_data = json_encode($data);

			$ch = curl_init('https://mandrillapp.com/api/1.0/users/ping.json');
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			    'Content-Type: application/json',                                                                                
			    'Content-Length: ' . strlen($json_data))
			);

			$result = curl_exec($ch);
			$result = json_decode($result);	
			$type = gettype($result); 
			if($type == 'string'){
				$this->SettingsModel->InsertMD($_POST['key']);
				echo 'true';
			}elseif($type == 'object'){
				echo 'false';
			}
		}else{
			echo "null";	
		}
	}

	public function getList(){
		$key =$_POST['key'];
		$config1 = array(
	    	'apikey' => $key,      // Insert your api key
            'secure' => FALSE   // Optional (defaults to FALSE)
		);
		
		$this->load->library('MCAPI', $config1, 'mail_chimp1');

		$retval = $this->mail_chimp1->lists();
		$list1 = array();
		if($retval){
			foreach ($retval['data'] as $lists) {
				$list1[] = array($lists['id'] => $lists['name']);	
			}
		}
		if($list1){
			header('Content-Type: application/json');
			echo $json = json_encode($list1);	
		}else{
			echo "0";
		}
		
		//echo $json;
		//return $json;
	}

	private function check_isvalidated(){
		$this->load->helper('url');
		if(! $this->session->userdata('validated')){
			redirect('login/login', 'refresh');
		}
	}


}
?>
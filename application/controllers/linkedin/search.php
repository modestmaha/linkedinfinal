<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: search controller class
 */
class Search extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index($data = NULL, $results_contacts = NULL, $results_non_contacts = NULL)
	{

		$this->load->helper('url');

		if($this->session->userdata('email'))
		{
			$data['heading'] = "Search | LinkedIn";
			$data['css_url'] = "linkedin/newestadvanced";
			$data['result_contacts'] = $results_contacts;
			$data['result_non_contacts'] = $results_non_contacts;
			$this->load->view('linkedintoo/advanced search', $data);
			
		}
		else
		{
			redirect('linkedin/signup', 'refresh');
		}
	}

	public function basic_search_connections()
	{
		$this->load->helper('url');

		if($this->session->userdata('email'))
		{

			$this->load->model('linkedin/search_model');
			$results = $this->search_model->basic_search_connections();
			$data['heading'] = "Search | LinkedIn";
			$data['css_url'] = "linkedin/newestadvanced";
			$data['results'] = $results;
			$this->load->view('linkedintoo/connectionresults',$data);

		}
		else
		{
			redirect('linkedin/signup', 'refresh');
		}

	}

	public function search_users()
	{
		$this->load->helper('url');

		if($this->session->userdata('email'))
		{
			$data['keywords'] = $this->input->post('keywords');
			$data['contactFName'] = $this->input->post('contactFName');
			$data['contactLName'] = $this->input->post('contactLName');
			$data['job_title'] = $this->input->post('job_title');
			$data['company'] = $this->input->post('company');
			$data['school'] = $this->input->post('school');
			// $data['location'] = $this->input->post('location');
			// $data['country'] = $this->input->post('country');

			$this->load->model('linkedin/search_model');
			// Validate the user can signup
			// $results_contacts = $this->search_model->search_connections($data);
			// $results_contacts = NULL;
			// $results_non_contacts = $this->search_model->search_non_connections($data);
			// $results_non_contacts = NULL;
			$results = $this->search_model->advanced_search($data);

			//$this->index($data, NULL, $results);
			$data['heading'] = "Search | LinkedIn";
			$data['css_url'] = "linkedin/newestadvanced";
			$data['results'] = $results;
			$this->load->view('linkedintoo/advancedsearchresults',$data);
		}
		else
		{
			redirect('linkedin/signup', 'refresh');
		}
	}

	public function basic_search()
	{
		$this->load->helper('url');

		if($this->session->userdata('email'))
		{
			$data['keywords'] = $this->input->post('keywords');
			
			$this->load->model('linkedin/search_model');
			// Validate the user can signup
			// $results_contacts = $this->search_model->search_connections($data);
			// $results_contacts = NULL;
			// $results_non_contacts = $this->search_model->search_non_connections($data);
			// $results_non_contacts = NULL;
			
			// echo $data['keywords'];
			$results = $this->search_model->basic_search($data);
			
			// foreach ($results as $iter)
			// {

			// 	echo $iter->us_id;
			// }
			$data['heading'] = "Search | LinkedIn";
			$data['css_url'] = "linkedin/newestadvanced";
			$data['results'] = $results;
			$this->load->view('linkedintoo/advancedsearchresults',$data);

		}
		else
		{
			redirect('linkedin/signup', 'refresh');
		}
	}

	public function find_alumni()
	{

		$this->load->helper('url');
		$this->load->model('linkedin/search_model');	
 		$results = $this->search_model->find_alumni();

		$data['heading'] = "Find Alumni | LinkedIn";
		$data['css_url'] = "linkedin/newestadvanced";
		$data['results'] = $results;
		$this->load->view('linkedintoo/sprint3 step1 - find alumni', $data);
	}
};
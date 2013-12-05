<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: add_connection controller class
 */
class Add_connection extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{

		$this->load->helper('url');

		if($this->session->userdata('email'))
		{
			$data['heading'] = "Invite to Connect | LinkedIn";
			$data['css_url'] = "linkedin/newestadvanced";
			$data['contact_fname'] = $this->input->post('contact_fname');
			$data['contact_lname'] = $this->input->post('contact_lname');
			$data['contact_id'] = $this->input->post('contact_id');
			$data['firstname'] = $this->session->userdata('firstname');
			$data['lastname'] = $this->session->userdata('lastname');
			$data['css_url'] = "linkedin/newestadvanced";
			$this->load->view('linkedintoo/sprint3 step2 - connect', $data);
		}
		else
		{
			redirect('linkedin/signup', 'refresh');
		}
	}

	public function send_connection_request()
	{
		$this->load->helper('url');
		if($this->session->userdata('email'))
		{
			$contact_id = $this->input->post('contact_id');
			$load_display = true;

			$this->load->model('linkedin/add_connection_model');
			$contact_fname = $this->input->post('contact_fname');
			$contact_lname = $this->input->post('contact_lname');
			if($this->add_connection_model->check_connection($contact_id))
			{
				$data['display_message'] = "Cannot send invitation. The connection ".$contact_fname." ".$contact_lname." is already a connection.";
			}
			else
			{
				if($this->add_connection_model->check_request_sent($contact_id))
				{
					$data['display_message'] = "Cannot send invitation again. The request to ".$contact_fname." ".$contact_lname." is already sent.";
				}
				else
				{
					if($this->add_connection_model->check_request_received($contact_id))	
					{
						$this->accept_request($contact_id);
						$load_display = false;

					}	
					else
					{
						$this->add_connection_model->send_connection_request($contact_id);
						$data['display_message'] = "The invitation to ".$contact_fname." ".$contact_lname." sent";
					}	
				}
			}
			if($load_display)
			{
				$data['heading'] = "Invitation Result | LinkedIn";
				$data['css_url'] = "linkedin/newestadvanced";
				$this->load->view('linkedintoo/result_display', $data);
			}
		}
		else
		{
			redirect('linkedin/signup', 'refresh');
		}
	}

	public function load_requests()
	{
		$this->load->helper('url');
		if($this->session->userdata('email'))
		{
			$this->load->model('linkedin/add_connection_model');
			$data['results'] = $this->add_connection_model->load_requests();
			$data['heading'] = "Connection Requests | LinkedIn";
			$data['css_url'] = "linkedin/newestadvanced";
			$this->load->view('linkedintoo/accept or ignore', $data);
		}
		else
		{
			redirect('linkedin/signup', 'refresh');
		}
	}

	public function accept_request($contact_id = NULL)
	{
		$this->load->helper('url');
		if($this->session->userdata('email'))
		{
			if($contact_id==NULL)
			{
				$contact_id = $this->input->post('contact_id');
			}
			$this->load->model('linkedin/add_connection_model');

			$contact_fname = $this->input->post('contact_fname');
			$contact_lname = $this->input->post('contact_lname');

			if ($this->add_connection_model->accept_request($contact_id)) 
			{
				$data['display_message'] = "The connection ".$contact_fname." ".$contact_lname." has been added to your connections.";
			}
			else
			{
				$data['display_message'] = "The connection ".$contact_fname." ".$contact_lname." has not been added to your connections.";
			}
			
			$data['heading'] = "Invitation Result | LinkedIn";
			$data['css_url'] = "linkedin/newestadvanced";
			$this->load->view('linkedintoo/result_display', $data);
		}
		else
		{
			redirect('linkedin/signup', 'refresh');
		}
	}

	public function ignore_request()
	{
		$this->load->helper('url');
		if($this->session->userdata('email'))
		{
			$contact_id = $this->input->post('contact_id');
			$this->load->model('linkedin/add_connection_model');
			
			if ($this->add_connection_model->ignore_request($contact_id)) 
			{
				$data['results'] = $this->add_connection_model->load_requests();
				$data['heading'] = "Connection Invitations | LinkedIn";
				$data['css_url'] = "linkedin/newestadvanced";
				$this->load->view('linkedintoo/accept or ignore', $data);
			}
			}
		else
		{
			redirect('linkedin/signup', 'refresh');
		}
	}
};
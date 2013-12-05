<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Add_connection_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function check_request_sent($contact_id)
	{
		$own_id = $this->session->userdata('user_id');
		
		$this->db->where('user_id1', $own_id);
		$this->db->where('user_id2', $contact_id);

		$query = $this->db->get('request');
		if($query->num_rows == 0)
			return false;
		else
			return true;
	}

	public function check_request_received($contact_id)
	{
		$own_id = $this->session->userdata('user_id');
		
		$this->db->where('user_id2', $own_id);
		$this->db->where('user_id1', $contact_id);

		$query = $this->db->get('request');
		if($query->num_rows == 0)
			return false;
		else
			return true;
	}

	public function check_connection($contact_id)
	{
		$own_id = $this->session->userdata('user_id');
		$this->db->where('user_id1', $contact_id);
		$this->db->where('user_id2', $own_id);
		$query = $this->db->get('connection');

		if($query->num_rows == 0)
			return false;
		else
			return true;
	}

	public function send_connection_request($contact_id){
		// Prep the query	
		$own_id = $this->session->userdata('user_id');
		$data = array(
		   'user_id1' => $own_id,
		   'user_id2' => $contact_id
		);
		$this->db->insert('request', $data); 
	}

	public function load_requests(){
		// Prep the query	
		$own_id = $this->session->userdata('user_id');
		
		$this->db->from('users');
		$this->db->join("request", "request.user_id1 = users.user_id");
		$this->db->where('request.user_id2', $own_id);
		$query = $this->db->get();
		$results = $query->result();
		return $results;
	}

	public function accept_request($contact_id){
		// Prep the query	
		$own_id = $this->session->userdata('user_id');
		$data = array(
				   'user_id2' => $own_id,
				   'user_id1' => $contact_id
				);
		$this->db->delete('request', $data);
		$this->db->insert('connection', $data);
		$data = array(
				   'user_id1' => $own_id,
				   'user_id2' => $contact_id
				);
		$this->db->insert('connection', $data);
		return true;
	}

	public function ignore_request($contact_id){
		// Prep the query	
		$own_id = $this->session->userdata('user_id');
		$data = array(
				   'user_id2' => $own_id,
				   'user_id1' => $contact_id
				);
		$this->db->delete('request', $data);
		return true;
	}
}
?>
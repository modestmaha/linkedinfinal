<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Reset_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function pass($email){
		// Prep the query
		$this->db->where('email', $email);
		
		// Run the query
		$query = $this->db->get('users');
		// Let's check if there are any results
		if($query->num_rows != 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>
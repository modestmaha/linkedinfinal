<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Search_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function basic_search($data)
	{
		$own_id = $this->session->userdata('user_id');
		
		$this->db->select('*');
		$this->db->select('us.user_id as us_id');
		$this->db->from('users us');
		$this->db->join('profile', 'us.user_id = profile.user_id', 'left outer');
		$this->db->join('job', 'job.user_id = us.user_id', 'left outer');
		$this->db->join('company', 'company.company_id = job.company_id', 'left outer');
		$this->db->join('education', 'education.user_id = us.user_id', 'left outer');
		$this->db->join('institution', 'institution.institution_id = education.institution_id', 'left outer');

		if($data['keywords']!='')
		{	
			$this->db->like('firstname', $data['keywords']);
			$this->db->or_like('lastname', $data['keywords']);
			$this->db->or_like('job_title', $data['keywords']);
			$this->db->or_like('company_name', $data['keywords']);
			$this->db->or_like('institution_name', $data['keywords']);
			// $this->db->or_where('location', $data['keywords']);
			// $this->db->or_where('country', $data['keywords']);
		}

		$query = $this->db->get();
		
		$results = $query->result();

		return $results;
	}

	public function advanced_search($data){
		
		$own_id = $this->session->userdata('user_id');
		
		$this->db->select('*');
		$this->db->select('us.user_id as us_id');
		$this->db->from('users us');
		$this->db->join('profile', 'us.user_id = profile.user_id', 'left outer');
		$this->db->join('job', 'job.user_id = us.user_id', 'left outer');
		$this->db->join('company', 'company.company_id = job.company_id', 'left outer');
		$this->db->join('education', 'education.user_id = us.user_id', 'left outer');
		$this->db->join('institution', 'institution.institution_id = education.institution_id', 'left outer');

		if($data['keywords']!='')
		{	
			$this->db->like('firstname', $data['keywords']);
			$this->db->or_like('lastname', $data['keywords']);
			$this->db->or_like('job_title', $data['keywords']);
			$this->db->or_like('company_name', $data['keywords']);
			$this->db->or_like('institution_name', $data['keywords']);
			// $this->db->or_where('location', $data['keywords']);
			// $this->db->or_where('country', $data['keywords']);
		}
		if($data['contactFName'] != '')
		{
			$this->db->where('firstname', $data['contactFName']);
		}
		if($data['contactlname'] != '')
		{
			$this->db->where('lastname', $data['contactlname']);			
		}
		if($data['job_title'] != '')
		{
			$this->db->where('job_title', $data['job_title']);
		}
		if($data['company'] != '')
		{
			$this->db->where('company_name', $data['company']);
		}
		if($data['school'] != '')
		{
			$this->db->where('institution_name', $data['school']);	
		}
		// if($data['location'] != '')
		// {
		// 	$this->db->where('location', $data['location']);
		// }
		// if($data['country'] != '')
		// {
		// 	$this->db->where('country', $data['country']);
		// }
		// $this->db->select('');

	
		$query = $this->db->get();
		
		$results = $query->result();

		return $results;

	}

	public function basic_search_connections()
	{
		$own_id = $this->session->userdata('user_id');
		$this->db->select('*');
		$this->db->select('us.user_id as us_id');
		$this->db->from('users us');
		$this->db->join('connection', 'us.user_id = connection.user_id2 AND connection.user_id1='.$own_id);
		$this->db->join('profile', 'us.user_id = profile.user_id', 'left outer');
		$query = $this->db->get();
		
		$results = $query->result();
		return $results;	

	}



	public function search_connections($data){
		
		$own_id = $this->session->userdata('user_id');
		
		$this->db->select('*');
		$this->db->select('us.user_id as us_id');
		$this->db->from('users us');
		$this->db->join('connection', '(us.user_id = connection.user_id2 AND connection.user_id1='.$own_id);
		$this->db->join('profile', 'us.user_id = profile.user_id', 'left outer');
		$this->db->join('job', 'job.user_id = us.user_id', 'left outer');
		$this->db->join('company', 'company.company_id = job.company_id', 'left outer');
		$this->db->join('education', 'education.user_id = us.user_id', 'left outer');
		$this->db->join('institution', 'institution.institution_id = education.institution_id', 'left outer');

		if($data['keywords']!='')
		{	
			$this->db->where('firstname', $data['keywords']);
			$this->db->or_where('lastname', $data['keywords']);
			$this->db->or_where('job_title', $data['keywords']);
			$this->db->or_where('company_name', $data['keywords']);
			$this->db->or_where('institution_name', $data['keywords']);
			// $this->db->or_where('location', $data['keywords']);
			// $this->db->or_where('country', $data['keywords']);
		}
		if($data['contactFName'] != '')
		{
			$this->db->where('firstname', $data['contactFName']);
		}
		if($data['contactlname'] != '')
		{
			$this->db->where('lastname', $data['contactlname']);			
		}
		if($data['job_title'] != '')
		{
			$this->db->where('job_title', $data['job_title']);
		}
		if($data['company'] != '')
		{
			$this->db->where('company_name', $data['company']);
		}
		if($data['school'] != '')
		{
			$this->db->where('institution_name', $data['school']);	
		}
		// if($data['location'] != '')
		// {
		// 	$this->db->where('location', $data['location']);
		// }
		// if($data['country'] != '')
		// {
		// 	$this->db->where('country', $data['country']);
		// }
		// $this->db->select('');

	
		$query = $this->db->get();
		
		$results = $query->result();

		return $results;

	}

	public function search_non_connections($data){
		
		// $connections_ids = array();
		// $this->db->select('us.user_id as us_id');
		// $this->db->from('users us');
		// $this->db->join('connection', 'us.user_id = connection.user_id2');
		// // $this->db->join('connection', 'us.user_id = connection.user_id1');
		// $this->db->where('user_id1', $own_id);
		// $result_connections = $this->db->get();
		// $connections_id_result = $result_connections->result();

		// for ($i = 0; $i < count($connections_id_result); $i++)
		//    echo $connections_ids[$i] = $connections_id_result[$i]->us_id;
		// $this->db->flush_cache();

		// $this->db->select('us.user_id');
		// $this->db->where_not_in('us.user_id', $connections_ids);
		// $result_not_connections = $this->db->get();

		$own_id = $this->session->userdata('user_id');
		$this->db->select('*');
		$this->db->select('us.user_id as us_id');
		$this->db->from('users us');
		$this->db->join('connection', '(us.user_id = connection.user_id2 AND connection.user_id1!='.$own_id, 'left outer');
		$this->db->join('profile', 'us.user_id = profile.user_id', 'left outer');
		$this->db->join('job', 'job.user_id = us.user_id', 'left outer');
		$this->db->join('company', 'company.company_id = job.company_id', 'left outer');
		$this->db->join('education', 'education.user_id = us.user_id', 'left outer');
		$this->db->join('institution', 'institution.institution_id = education.institution_id', 'left outer');
		
		// Prep the query
		// if($data['keywords']!='')
		// {	
		// 	$this->db->where('firstname', $data['keywords']);
		// 	$this->db->or_where('lastname', $data['keywords']);
		// 	$this->db->or_where('job_title', $data['keywords']);
		// 	$this->db->or_where('company_name', $data['keywords']);
		// 	$this->db->or_where('institution_name', $data['keywords']);
		// 	// $this->db->or_where('location', $data['keywords']);
		// 	// $this->db->or_where('country', $data['keywords']);
		// }
		// if($data['contactFName'] != '')
		// {
		// 	$this->db->where('firstname', $data['contactFName']);
		// }
		// if($data['contactlname'] != '')
		// {
		// 	$this->db->where('lastname', $data['contactlname']);			
		// }
		// if($data['job_title'] != '')
		// {
		// 	$this->db->where('job_title', $data['job_title']);
		// }
		// if($data['company'] != '')
		// {
		// 	$this->db->where('company_name', $data['company']);
		// }
		// if($data['school'] != '')
		// {
		// 	$this->db->where('institution_name', $data['school']);	
		// }
		// if($data['location'] != ''
		// {
		// 	$this->db->where('location', $data['location']);
		// }
		// if($data['country'] != '')
		// {
		// 	$this->db->where('country', $data['country']);
		// }
		// $this->db->select('');

		// Run the query
		$query = $this->db->get();
		// Let's check if there are any results
		$results = $query->result();

		foreach ($results as $iter):
			if( $iter->us_id!=NULL)
			{echo $iter->us_id; 

			echo " name ";
			echo $iter->firstname;
			echo ' cid ';
			echo $iter->company_id;
			echo ' iid ';
			echo $iter->institution_id;
		}
		else
		{
			echo "null ";
		}
		endforeach;
		return $results;

	}

	public function find_alumni()
	{
		$own_id = $this->session->userdata('user_id');
		$this->db->select('education.institution_id');
		$this->db->where('education.user_id', $own_id);
		$institution_id_query = $this->db->get('education')->row();
		$institution_id = $institution_id_query->institution_id;

		$this->db->flush_cache();
		$this->db->distinct();
		$this->db->select('count(*) as users_count, profile.country');
		$this->db->group_by('profile.country'); 
		$this->db->order_by('profile.country', "desc"); 
		$this->db->from('profile');
		$this->db->join('education', 'education.user_id = profile.user_id AND education.institution_id='.$institution_id);
		
		$country_stats_query = $this->db->get()->result();

		foreach ($country_stats_query as $iter):
			if( $iter->users_count!=NULL)
			{
				echo $iter->country; 
				echo $iter->users_count; 
			}
			endforeach;
		
		$this->db->select('job.company_id');
		$this->db->where('job.user_id', $own_id);
		$company_id_query = $this->db->get('job')->row();
		$company_id = $company_id_query->company_id;

		$this->db->flush_cache();
		$this->db->distinct();
		$this->db->select('count(*) as users_count, company.company_name');
		$this->db->group_by('company.company_name'); 
		$this->db->order_by('company.company_name', "desc"); 
		$this->db->from('job');
		$this->db->join('education', 'education.user_id = job.user_id AND education.institution_id='.$institution_id);
		$this->db->join('company', 'job.company_id = company.company_id');

		$company_stats_query = $this->db->get()->result();
		
		foreach ($company_stats_query as $iter):
			if( $iter->users_count!=NULL)
			{
				echo $iter->company_name; 
				echo $iter->users_count; 
			}
			endforeach;

		$this->db->flush_cache();
		$this->db->distinct();
		$this->db->select('count(*) as users_count, job.job_title');
		$this->db->group_by('job.job_title'); 
		$this->db->order_by('job.job_title', "desc"); 
		$this->db->from('job');
		$this->db->join('education', 'education.user_id = job.user_id AND education.institution_id='.$institution_id);
		
		$job_stats_query = $this->db->get()->result();
		
		foreach ($job_stats_query as $iter):
			if( $iter->users_count!=NULL)
			{
				echo $iter->job_title; 
				echo $iter->users_count; 
			}
			endforeach;

		$this->db->flush_cache();
		$this->db->distinct();
		$this->db->select('*');
		$this->db->select('us.user_id as us_id');
		$this->db->from('users us');
		$this->db->join('profile', 'us.user_id = profile.user_id');
		$this->db->join('education', 'education.user_id = profile.user_id AND education.institution_id='.$institution_id);
		$this->db->join('job', 'job.user_id = us.user_id', 'left outer');
		
		$user_stats_query = $this->db->get()->result();
		
		foreach ($user_stats_query as $iter):
			if( $iter->us_id!=NULL)
			{
				echo $iter->us_id; 
			}
			endforeach;
	}
}
?>
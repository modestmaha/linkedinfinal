<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Newsfeed_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function insert_post($data)
	{
		$data['user_id'] = $this->session->userdata("user_id");
		$this->db->insert("post", $data);
	}

	public function add_comment($data)
	{
		$data['user_id'] = $this->session->userdata("user_id");
		$this->db->insert("comment", $data);
	}

	public function retrieve_comments($post_id)
	{
		$this->db->select('*');
		$this->db->from("users");
		$this->db->join("comment", "comment.user_id = users.user_id");
		$this->db->where("comment.post_id", $post_id);
		$this->db->order_by('comment.comment_time', "asc"); 
		
		return $this->db->get()->result();
	}

	public function retrieve_posts()
	{
		$own_id = $this->session->userdata['user_id'];

		$this->db->select('*');
		$this->db->select('users.user_id as us_id');
		$this->db->from("users");
		$this->db->join("connection", "connection.user_id2 = users.user_id AND connection.user_id1 = ".$own_id, "left outer");
		$this->db->join("post", "post.user_id = users.user_id");
		$this->db->where("connection.user_id1", $own_id);
		$this->db->or_where("users.user_id", $own_id);
		$this->db->or_where("post.privacy", "public");
		$this->db->order_by('post.post_time', "desc"); 
		$posts = $this->db->get()->result();
		
		foreach ($posts as $iter):
			if( $iter->us_id!=NULL)
			{
				$iter->comments = $this->retrieve_comments($iter->post_id);
			}
		endforeach;
		return $posts;
	}

   public function getUploadedPic($pp_id=NULL)
   {
		if($pp_id==NULL){
			$u_id=$this->session->userdata('userid');
		}
		else {

			$u_d=$pp_id;
		}

		$this->db->where('user_id', $u_id);
		$query = $this->db->get('user');
		if($query->num_rows == 1)
		{
			$row = $query->row();
			$imagepath=$row->profilePic;
			return $imagepath;
		}
	}
};
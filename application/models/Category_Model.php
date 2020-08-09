<?php
Class Category_Model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}
	public function get_categories($slug = FALSE){
		if ($slug == FALSE){
			$this->db->order_by('id','DESC');
			$query = $this->db->get('category');
			return $query->result_array();
		}
		$query = $this->db->get_where('category',array('slug'=>$slug));
		return $query->row_array();
	}
	public function create_category(){
		$slug = url_title($this->input->post('name'));
		$data = array(
			'name'=>$this->input->post('name'),
			'slug'=>$slug,
			'description'=>$this->input->post('description')
		);
		return $this->db->insert('category',$data);
	}
	public function delete_category($id){
		$this->db->where('id',$id);
		$this->db->delete('category');
		return true;
	}
	public function update_category(){
		$slug = url_title($this->input->post('name'));
		$data = array(
			'name'=>$this->input->post('name'),
			'slug'=>$slug,
			'description'=>$this->input->post('description')
		);
		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('category',$data);

	}
}

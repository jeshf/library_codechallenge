<?php
Class Book_Model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}
	public function get_books($slug = FALSE){
		if ($slug == FALSE){
			$this->db->order_by('id','DESC');
			$query = $this->db->get('books');
			return $query->result_array();
		}
		$query = $this->db->get_where('books',array('slug'=>$slug));
		return $query->row_array();
	}
	public function create_book(){
		$slug = url_title($this->input->post('name'));
		$data = array(
			'name'=>$this->input->post('name'),
			'author'=>$this->input->post('author'),
			'published_date'=>$this->input->post('published_date'),
			'user'=>$this->input->post('user'),
			'slug'=>$slug,
			'availability'=>$this->input->post('availability')
		);
		return $this->db->insert('books',$data);
	}
	public function delete_book($id){
		$this->db->where('id',$id);
		$this->db->delete('books');
		return true;
	}
	public function update_book(){
		$slug = url_title($this->input->post('name'));
		$data = array(
			'name'=>$this->input->post('name'),
			'author'=>$this->input->post('author'),
			'published_date'=>$this->input->post('published_date'),
			'user'=>$this->input->post('user'),
			'slug'=>$slug,
			'availability'=>$this->input->post('availability')
		);
		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('books',$data);

	}
}

<?php
class Books extends CI_Controller{
	public function index(){
		$this->load->library('Pagination_bootstrap');
		$data['name']='Todos los libros';
		$sql=$this->db->get('books');
		//print_r($data['users']);
		$ar=$sql->result_array();
		if(count($ar) > 0) {
			$this->pagination_bootstrap->offset(5);
			$data['books'] = $this->pagination_bootstrap->config('/books/index', $sql);
			$data['flag']=true;
		}
		else{
			$data['flag']=false;
		}
		$this->load->view('templates/header');
		$this->load->view('books/index', $data);
		$this->load->view('templates/footer');
	}
	public function view($slug = NULL){
		$data['books']=$this->book_model->get_books($slug);
		if(empty($data['books'])){
			show_404();
		}
		$data['name']=$data['books']['name'];
		$this->load->view('templates/header');
		$this->load->view('books/view', $data);
		$this->load->view('templates/footer');
	}
	public function create(){
		$data['users']=$this->user_model->get_users();
		$data['name']='Crear Libro';
		$this->form_validation->set_rules('name','Nombre','required|regex_match[/^[a-z ,.]*$/i]');
		$this->form_validation->set_rules('author','Autor','required');
		$this->form_validation->set_rules('published_date','Fecha de publicación','required');
		$this->form_validation->set_rules('user','Usuario');
		$this->form_validation->set_rules('availability','Disponibilidad','required');
		if($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('books/create', $data);
			$this->load->view('templates/footer');
		}
		else{
			$this->book_model->create_book();
			redirect('books');
		}
	}

	public function delete($id){
		$this->book_model->delete_book($id);
		redirect('books');
	}
	public function edit($slug){
		$data['books']=$this->book_model->get_books($slug);
		if(empty($data['books'])){
			show_404();
		}
		$data['name']='Editar Libro';
		$this->load->view('templates/header');
		$this->load->view('books/edit', $data);
		$this->load->view('templates/footer');
	}
	public function update(){
		$this->book_model->update_book();
		redirect('books');
	}
}
/**
 * Created by PhpStorm.
 * User: jesushf
 * Date: 12/06/2020
 * Time: 08:31 PM
 */

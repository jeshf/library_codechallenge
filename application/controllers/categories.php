<?php
class Categories extends CI_Controller{
	public function index(){
		$this->load->library('Pagination_bootstrap');
		$data['name']='Todas las categorias';
		$sql=$this->db->get('category');
		//print_r($data['users']);
		$ar=$sql->result_array();
		if(count($ar) > 0) {
		$this->pagination_bootstrap->offset(5);
			$data['categories'] = $this->pagination_bootstrap->config('/categories/index', $sql);
			$data['flag']=true;
		}
		else{
			$data['flag']=false;
		}
		$this->load->view('templates/header');
		$this->load->view('categories/index', $data);
		$this->load->view('templates/footer');
	}
	public function view($slug = NULL){
		$data['category']=$this->category_model->get_categories($slug);
		if(empty($data['category'])){
			show_404();
		}
		$data['name']=$data['category']['name'];
		$this->load->view('templates/header');
		$this->load->view('categories/view', $data);
		$this->load->view('templates/footer');
	}
	public function create(){
		$data['name']='Crear Categoria';
		$this->form_validation->set_rules('name','Nombre','required|regex_match[/^[a-z ,.]*$/i]');
		$this->form_validation->set_rules('description','Descripción','required');
		if($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('categories/create', $data);
			$this->load->view('templates/footer');
		}
		else{
			$this->category_model->create_category();
			redirect('categories');
		}
	}

	public function delete($id){
		$this->category_model->delete_category($id);
		redirect('categories');
	}
	public function edit($slug){
		$data['category']=$this->category_model->get_categories($slug);
		if(empty($data['category'])){
			show_404();
		}
		$data['name']='Editar Categoria';
		$this->load->view('templates/header');
		$this->load->view('categories/edit', $data);
		$this->load->view('templates/footer');
	}
	public function update(){
		$this->category_model->update_category();
		redirect('categories');
	}
}
/**
 * Created by PhpStorm.
 * User: jesushf
 * Date: 12/06/2020
 * Time: 08:31 PM
 */

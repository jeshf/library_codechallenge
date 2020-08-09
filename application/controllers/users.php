<?php
class Users extends CI_Controller{
	public function index(){
		$this->load->library('Pagination_bootstrap');
		$data['name']='Todos los usuarios';
		$sql=$this->db->get('users');
		//print_r($data['users']);
		$this->pagination_bootstrap->offset(5);
		$ar=$sql->result_array();
		if(count($ar) > 0) {
			$this->pagination_bootstrap->offset(5);
			$data['users'] = $this->pagination_bootstrap->config('/users/index', $sql);
			$data['flag']=true;
		}
		else{
			$data['flag']=false;
		}
		$this->load->view('templates/header');
		$this->load->view('users/index', $data);
		$this->load->view('templates/footer');
	}
	public function view($slug = NULL){
		$data['user']=$this->user_model->get_users($slug);
		if(empty($data['user'])){
			show_404();
		}
		$data['name']=$data['user']['name'];
		$this->load->view('templates/header');
		$this->load->view('users/view', $data);
		$this->load->view('templates/footer');
	}
	public function create(){
		$data['name']='Crear Usuario';
		$this->form_validation->set_rules('name','Nombre','required|regex_match[/^[a-z ]*$/i]');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		if($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('users/create', $data);
			$this->load->view('templates/footer');
		}
		else{
			$this->user_model->create_user();
			redirect('users');
		}
	}

	public function delete($id){
		$this->user_model->delete_user($id);
		redirect('users');
	}
	public function edit($slug){
		$data['user']=$this->user_model->get_users($slug);
		if(empty($data['user'])){
			show_404();
		}
		$data['name']='Editar Usuario';
		$this->load->view('templates/header');
		$this->load->view('users/edit', $data);
		$this->load->view('templates/footer');
	}
	public function update(){
		$this->user_model->update_user();
		redirect('users');
	}
}
/**
 * Created by PhpStorm.
 * User: jesushf
 * Date: 12/06/2020
 * Time: 08:31 PM
 */

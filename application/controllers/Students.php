<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('StudentModel');         
   }

	public function index()
	{
		$students=new StudentModel;
		$data['data']=$students->get_students();
		$this->load->view('includes/header');       
		$this->load->view('students/list',$data);
		$this->load->view('includes/footer');
	}

	public function create()
	{
		$this->load->view('includes/header');
		$this->load->view('students/create');
		$this->load->view('includes/footer');      
	}

	public function store()
	{
		$students=new StudentModel;
		$students->insert_student();
		redirect(base_url('students'));
	}

	public function edit($id)
	{
		$student = $this->db->get_where('students', array('id' => $id))->row();
		$this->load->view('includes/header');
		$this->load->view('students/edit',array('student'=>$student));
		$this->load->view('includes/footer');   
	}

	public function update($id)
	{
		$students=new StudentModel;
		$students->update_student($id);
		redirect(base_url('students'));
	}

	public function delete($id)
	{
	   $this->db->where('id', $id);
	   $this->db->delete('students');
	   redirect(base_url('students'));
	}
}

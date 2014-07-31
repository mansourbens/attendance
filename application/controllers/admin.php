<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('student_m');
		$this->load->model('teacher_m');
	}

	public function index() {
		$this->load->view('admin/main_layout', $this->data);
	}

	public function login() {
		$this->load->view('bootstrap/header_login', $this->data);
		$this->load->view('admin/login');
		$this->load->view('bootstrap/footer_login');
	}

	public function show() {
		$students = $this->student_m->get();
		$teachers = $this->teacher_m->get(2);
		var_dump($students);
		var_dump($teachers);
	}

	public function save() {
		$data = array(
			'teacher_name' => 'test3',
			'username' => 'test3',
			'password' => 'test3'
		);
		$teachers = $this->teacher_m->save($data);
		var_dump($teachers);
	}

}

?>
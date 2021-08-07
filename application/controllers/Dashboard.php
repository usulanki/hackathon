<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	    header('Access-Control-Allow-Origin: *');
	    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
	    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
    }

	public function index()
	{    
        $role_id =  $this->session->userdata('role_id');
        $this->load->model('dashboard_model');
        $menus = $this->dashboard_model->getMenus($role_id);

		$this->load->view('dashboard',['menus' => $menus]);
	}
}

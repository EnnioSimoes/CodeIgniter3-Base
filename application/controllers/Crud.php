<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index()
    {
        $this->load->model('Crud_model');
        
        $data['jtStartIndex'] = $this->input->get('jtStartIndex', TRUE);
        $data['jtPageSize'] = $this->input->get('jtPageSize', TRUE);
        $data['jtSorting'] = $this->input->get('jtSorting', TRUE);
        $count = $this->Crud_model->countAll();        
        
        $d['data'] = $this->Crud_model->getAllPagination($data['jtStartIndex'], $data['jtPageSize'], $data['jtSorting']);
        $this->load->view('crud/crud_view', $d);
    }
        
    public function getAll()
    {
        $this->load->model('Crud_model');
        
        $data['jtStartIndex'] = $this->input->get('jtStartIndex', TRUE);
        $data['jtPageSize'] = $this->input->get('jtPageSize', TRUE);
        $data['jtSorting'] = $this->input->get('jtSorting', TRUE);
        $count = $this->Crud_model->countAll();
        
        $d = $this->Crud_model->getAllPagination($data['jtStartIndex'], $data['jtPageSize'], $data['jtSorting']);
        
        echo json_encode( array( 'Result' => 'OK', $data ,'Records' => $d, 'TotalRecordCount' => $count));
    }

    public function insert(){
        $this->load->model('Crud_model');
        $data = $this->Crud_model->insert();
        print json_encode( array( 'Result' => 'OK' ,'Record' => $data));
    }
    
    public function update(){
        $this->load->model('Crud_model');
        $this->Crud_model->update();        
        echo json_encode(array('Result' => 'OK'));
    }
    
    public function delete(){
        $this->load->model('Crud_model');
        $this->Crud_model->delete();
        echo json_encode(array('Result' => 'OK'));
    }
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */
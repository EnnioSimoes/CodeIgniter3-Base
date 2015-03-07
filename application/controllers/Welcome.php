<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * __construct method
	 *
	 */	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}	
	
	
	/**
	 * index method
	 * 
	 */
	public function index()
	{		
		$this->load->view('welcome/index');
	}
	
	
	/**
	 * ajaxGetDate method 
	 */
	public function ajaxGetDate()
	{		
		echo json_encode( array( 'date' => date( 'H:i:s' ) ) );
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


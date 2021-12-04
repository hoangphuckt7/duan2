<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Online extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// $this->load->admin_model();
		
	}

	function index()
	{	
			$this->data['title'] = 'admin/online/title';
			// $this->load->view('admin/meta', $this->data);

			$this->data['dulieu'] = 'admin/online/index';
			$this->load->view('admin/main', $this->data);
	}

	function logout()
	{
		if($this->session->userdata('login'))
        {
            $this->session->unset_userdata('login');
        }
        redirect(base_url('admin-dang-nhap'));
	}	
}
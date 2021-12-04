<?php
class Home extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		// $data=array();
  		// $this->data['title'] = 'user/login/title';
        // $this->load->view('user/meta', $this->data);

		// $this->data['dulieu'] = 'user/login/index';
		$this->load->view('user/home/index', $this->data);
	}	
}
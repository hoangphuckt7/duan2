<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Online extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('nhanvien_model');
		$this->load->model('khuvuc_model');
		$this->load->model('diemgiao_model');
		$this->load->model('sanpham_model');
	}

	function index()
	{	
			$this->data['title'] = 'admin/online/title';
			// $this->load->view('admin/meta', $this->data);

			$total = $this->nhanvien_model->get_total();
        	$this->data['total'] = $total;

			$khuvuc_total = $this->khuvuc_model->get_total();
        	$this->data['khuvuc_total'] = $khuvuc_total;

			$diemgiao_total = $this->diemgiao_model->get_total();
        	$this->data['diemgiao_total'] = $diemgiao_total;

			$sanpham_total = $this->sanpham_model->get_total();
        	$this->data['sanpham_total'] = $sanpham_total;

			$input = array();
			$list = $this->khuvuc_model->get_list($input);
			$this->data['list'] = $list;

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
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Quanlysanpham extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->model('sanpham_model');
		$this->data['title'] = 'admin/quanlysanpham/title';
	}

	function index()
	{
		$input = array();
        $list = $this->sanpham_model->get_list($input);
        $this->data['list'] = $list;
    
        $total = $this->sanpham_model->get_total();
        $this->data['total'] = $total;
		

		$this->data['dulieu'] = 'admin/quanlysanpham/index';
		$this->load->view('admin/main', $this->data);
	}
    function add()
	{
		$this->load->library('form_validation');
        $this->load->helper('form');
         //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
           
            $this->form_validation->set_rules('name', 'Tên Sản Phẩm', 'required');
            $this->form_validation->set_rules('price', 'Đơn Giá', 'required');        
            $this->form_validation->set_rules('description','Mô Tả','required');
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $tenSP      = $this->input->post('name');
                $dongia     = $this->input->post('price');
                $mota       = $this->input->post('description');
                
                $data = array(
                    
                    'tenSP'     => $tenSP, 
                    'donGia' => $dongia,
                    'Mota'  => $mota,
                );
               
                if($this->sanpham_model->create($data))
                { 
                    // echo 'Thêm mới thành công';
                    redirect(admin_url('quanlysanpham'));
                }else{
                    $this->session->set_flashdata('message', 'Thêm thất bại');
                    // echo 'Thêm mới không thành công';
                }
                //chuyen tới trang danh sách quản trị viên
                
            }
        }

		$this->data['dulieu'] = 'admin/quanlysanpham/add';
		$this->load->view('admin/main', $this->data);
	}
    function edit() 
	{
		//lay id cua quan tri vien can chinh sua
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //lay thong cua quan trị viên
        $infor  = $this->sanpham_model->get_info($id);

        $this->data['infor'] = $infor;
		if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên Sản Phẩm', 'required');
            $this->form_validation->set_rules('price', 'Đơn Giá', 'required');        
            $this->form_validation->set_rules('description','Mô Tả','required');
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $tenSP      = $this->input->post('name');
                $donGia     = $this->input->post('price');
                $moTa       = $this->input->post('description');
                
                $data = array(
                    
                    'tenSP'     => $tenSP, 
                    'donGia' => $donGia,
                    'moTa'  => $moTa,
                );
               
                if($this->sanpham_model->update($id, $data))
                { 
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật thành công!');
                    echo 'Thêm mới thành công';
                    redirect(admin_url('quanlysanpham'));
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật không thành công!');
                    echo 'Thêm mới không thành công';
                }
                //chuyen tới trang danh sách quản trị viên
               
            }
        }

		$this->data['dulieu'] = 'admin/quanlysanpham/edit';
		$this->load->view('admin/main', $this->data);
	}
    function delete()
	{
		$id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->sanpham_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không có thông tin');
            redirect(admin_url('quanlysanpham'));
        }
        //thuc hiện xóa
        $this->sanpham_model->delete($id);
        
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('quanlysanpham'));
	}
}
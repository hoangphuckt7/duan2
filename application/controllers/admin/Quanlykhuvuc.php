<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Quanlykhuvuc extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('khuvuc_model');
		$this->load->model('diemgiao_model');
        $this->load->library('session');
		$this->data['title'] = 'admin/quanlykhuvuc/title';
	}

	function index()
	{
		$input = array();
		$list = $this->khuvuc_model->get_list($input);
		$this->data['list'] = $list;

		$this->data['dulieu'] = 'admin/quanlykhuvuc/index';
		$this->load->view('admin/main', $this->data);
	}	
	function add()
	{
		$this->load->library('form_validation');
        $this->load->helper('form');
         //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
           
            $this->form_validation->set_rules('name', 'Tên Khu Vực', 'required|min_length[3]');
            $this->form_validation->set_rules('makhuvuc', 'Mã Khu Vực', 'required|min_length[1]');        
            $this->form_validation->set_rules('trangthai','Trạng Thái','required|min_length[5]');
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $maKhuVuc      = $this->input->post('makhuvuc');
                $tenKhuVuc     = $this->input->post('name');
                $trangThai     = $this->input->post('trangthai');
                
                $data = array(
                    
                    'maKhuVuc' => $maKhuVuc,
                    'tenKhuVuc'     => $tenKhuVuc, 
                    'trangThai'  => $trangThai,
                );
                if($this->khuvuc_model->create($data))
                { 
                    // echo 'Thêm mới thành công';
                    redirect(admin_url('quanlykhuvuc'));
                }else{
                    $this->session->set_flashdata('message', 'Thêm thất bại');
                    // echo 'Thêm mới không thành công';
                }
                //chuyen tới trang danh sách quản trị viên
                
            }
        }
		$this->data['dulieu'] = 'admin/quanlykhuvuc/add';
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
        $infor  = $this->khuvuc_model->get_info($id);

        $this->data['infor'] = $infor;
		if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên Khu Vực', 'required|min_length[3]');
            $this->form_validation->set_rules('makhuvuc', 'Mã Khu Vực', 'required|min_length[1]');        
            $this->form_validation->set_rules('trangthai','Trạng Thái','required|min_length[5]');
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $maKhuVuc      = $this->input->post('makhuvuc');
                $tenKhuVuc     = $this->input->post('name');
                $trangThai     = $this->input->post('trangthai');
                
                $data = array(
                    
                    'maKhuVuc' => $maKhuVuc,
                    'tenKhuVuc'     => $tenKhuVuc, 
                    'trangThai'  => $trangThai,
                );
                if($this->khuvuc_model->update($id, $data))
                { 
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật thành công!');
                    echo 'Thêm mới thành công';
                    redirect(admin_url('quanlykhuvuc'));
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật không thành công!');
                    echo 'Thêm mới không thành công';
                }
                //chuyen tới trang danh sách quản trị viên
               
            }
        }
		$this->data['dulieu'] = 'admin/quanlykhuvuc/edit';
		$this->load->view('admin/main', $this->data);
	}
	
	/*
     * Hàm xóa dữ liệu từng phần
     */
	function delete()
	{
		$id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->khuvuc_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không có thông tin');
            redirect(admin_url('quanlykhuvuc'));
        }
        //thuc hiện xóa
        $this->khuvuc_model->delete($id);
        
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('quanlykhuvuc'));
	}

    function diemgiao($id){
        $this->data['list'] = $this->db->select("*")->from('diemgiao')->where("idKhuVuc", $id)->get()->result();

        // echo $id ;
        // select * from diemgiao where idKhuVuc = 1;
        // echo "<pre>";var_dump($this->data);exit();
        //lấy tên khu vực
        $infor  = $this->khuvuc_model->get_info($id);
        $this->data['infor'] = $infor;

        
        $this->data['id'] = $id;
        $this->data['dulieu'] = 'admin/quanlykhuvuc/diemgiao';
		$this->load->view('admin/main', $this->data);
    }
}

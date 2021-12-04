<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class QuanlyNV extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('nhanvien_model');
		$this->data['title'] = 'admin/quanlyNV/title';
	}

	function index()
	{
		$input = array();
        $list = $this->nhanvien_model->get_list($input);
        $this->data['list'] = $list;
    
        $total = $this->nhanvien_model->get_total();
        $this->data['total'] = $total;
		

		$this->data['dulieu'] = 'admin/quanlyNV/index';
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
        $infor  = $this->nhanvien_model->get_info($id);

        $this->data['infor'] = $infor;
		if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Họ và Tên', 'required|min_length[3]');
            $this->form_validation->set_rules('username', 'Tài khoản', 'required|min_length[3]');        
            $this->form_validation->set_rules('phone',' Số điện thoại','required|min_length[10]');
            $this->form_validation->set_rules('chucvu',' Chức Vụ','required|min_length[2]');
            $this->form_validation->set_rules('machucvu',' Mã Chức Vụ','required');
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[4]');
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $tenNV     = $this->input->post('name');
                $taiKhoan = $this->input->post('username');
                $password = $this->input->post('password');
                $SDT = $this->input->post('phone');
                $chucVu = $this->input->post('chucvu');
                $maChucVu = $this->input->post('machucvu');
                
                $data = array(
                    
                    'tenNV'     => $tenNV, 
                    'taiKhoan' => $taiKhoan,                   
                    'password' => md5($password),
                    'SDT'  => $SDT,
                    'chucVu'=> $chucVu,
                    'maChucVu'=> $maChucVu
                );
               
                if($this->nhanvien_model->update($id, $data))
                { 
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật thành công!');
                    echo 'Thêm mới thành công';
                    redirect(admin_url('quanlyNV'));
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật không thành công!');
                    echo 'Thêm mới không thành công';
                }
                //chuyen tới trang danh sách quản trị viên
               
            }
        }

		$this->data['dulieu'] = 'admin/quanlyNV/edit';
		$this->load->view('admin/main', $this->data);
	}
	function add()
	{
		$this->load->library('form_validation');
        $this->load->helper('form');
         //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
           
            $this->form_validation->set_rules('name', 'Họ và Tên', 'required|min_length[3]');
            $this->form_validation->set_rules('username', 'Tài khoản', 'required|min_length[3]');        
            $this->form_validation->set_rules('phone',' Số điện thoại','required|min_length[10]');
            $this->form_validation->set_rules('chucvu',' Chức Vụ','required|min_length[2]');
            $this->form_validation->set_rules('machucvu',' Mã Chức Vụ','required');
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[4]');
            $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'required|matches[password]');
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $tenNV     = $this->input->post('name');
                $taiKhoan = $this->input->post('username');
                $password = $this->input->post('password');
                $SDT = $this->input->post('phone');
                $ChucVu = $this->input->post('chucvu');
                $maChucVu = $this->input->post('machucvu');
                
                $data = array(
                    
                    'tenNV'     => $tenNV, 
                    'taiKhoan' => $taiKhoan,                   
                    'password' => md5($password),
                    'SDT'  => $SDT,
                    'chucVu'=> $chucVu,
                    'maChucVu'=> $maChucVu,
                );
               
                if($this->nhanvien_model->create($data))
                { 
                    // echo 'Thêm mới thành công';
                    redirect(admin_url('quanlyNV'));
                }else{
                    $this->session->set_flashdata('message', 'Thêm thất bại');
                    // echo 'Thêm mới không thành công';
                }
                //chuyen tới trang danh sách quản trị viên
                
            }
        }

		$this->data['dulieu'] = 'admin/quanlyNV/add';
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
        $info = $this->nhanvien_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không có thông tin');
            redirect(admin_url('quanlyNV'));
        }
        //thuc hiện xóa
        $this->nhanvien_model->delete($id);
        
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('quanlyNV'));
	}
}
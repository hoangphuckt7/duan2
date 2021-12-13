<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_diemgiao extends MY_Controller
{
    function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('diemgiao_model');
	}

    function add()
    {
            $this->form_validation->set_rules('name','Tên Điểm Giao','required');
            $this->form_validation->set_rules('diachi','Địa Chỉ','required');
            $this->form_validation->set_rules('kinhdo','Kinh Độ','required');
            $this->form_validation->set_rules('vido','Vĩ Độ','required');
            $this->form_validation->set_rules('trangthai','Trạng Thái','required');
            $this->form_validation->set_rules('id','id','required');

            if($this->form_validation->run() == FALSE){
                echo validation_errors();
            }
            else{
            //     //them vao csdl
                $tenDiemGiao      = $this->input->post('name');
                $kinhDo     = $this->input->post('diachi');
                $viDo     = $this->input->post('kinhdo');
                $diaChi     = $this->input->post('vido');
                $trangThai     = $this->input->post('trangthai');
                $id     = $this->input->post('id');

                $ndata = array(

                    'tenDiemGiao'       => $tenDiemGiao,
                    'longitude'         => $kinhDo,
                    'latitude'          => $viDo,
                    'diaChi'            => $diaChi,
                    'trangThai'         => $trangThai,
                    'idKhuVuc'          => $id,
                );

                if($this->diemgiao_model->create($ndata))
                { 
                    echo 'Thêm mới thành công';
                    redirect($_SERVER['HTTP_REFERER']);
                }else{
                    echo 'Thêm mới không thành công';
                }
            }
    }

    function edit() 
    {
        if ($this->input->is_ajax_request()) {
            //echo $this->input->post('id');
            $id = $this->input->post('id');
            $trangThai = $this->input->post('trangThai');

            $data = array(

                'trangThai'         => $trangThai
            );

            if($this->diemgiao_model->update($id, $data))
                { 
                    echo 'Thêm mới thành công';
                    redirect($_SERVER['HTTP_REFERER']);
                }else{
                    echo 'Thêm mới không thành công';
                }
        }

    }

    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin 
        $info = $this->diemgiao_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không có thông tin');
            redirect($_SERVER['HTTP_REFERER']);
        }
        //thuc hiện xóa
        $this->diemgiao_model->delete($id);
        
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
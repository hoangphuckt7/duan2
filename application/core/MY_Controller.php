<?php 
class MY_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$controller = $this->uri->segment(1);
		switch ($controller) {
			case 'admin':
				{ 
				$this->load->helper('admin');
				$this->check_login();
				break;
				}
			
			default:
				{
					  $user_id_login = $this->session->userdata('user_id_login');
                    $this->data['user_id_login'] = $user_id_login;
                    //neu da dang nhap thi lay thong tin cua thanh vien
                    if($user_id_login)
                    {
                        $this->load->model('admin_model');
                        $admin_info = $this->admin_model->get_info($user_id_login);
                        $this->data['admin_info'] = $admin_info;
                    }
				}
		}
	} 

	function check_login()
	{
		$controller = $this->uri->rsegment('1');
		$controller = strtolower($controller);

		$login = $this->session->userdata('login');
		if (!$login && $controller != 'login') {
			redirect(admin_url('login'));
		}

		if ($login && $controller == 'login') {
			redirect(admin_url('online'));
		}
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin-dang-nhap'] = 'admin/login/index';

$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['online'] = 'admin/online/index';
// $route['quan-tri-vien'] = 'admin/admin';
// user
$route['home'] =  'user/home';
$route['add-diemgiao'] =  'admin/add_diemgiao/add';
?>
<?php
function public_url($url = '')
{
	return base_url('public/'.$url);
}

function pre($list, $exit = true)
{
	echo "<pre>";
	print_r($list);
	if($exit)
	{
		die();
	}
}


if(!function_exists('isUrlExists')){
    function isUrlExists($tblName, $urlSlug){
        if(!empty($tblName) && !empty($urlSlug)){
            $ci = & get_instance();
            $ci->db->from($tblName);
            $ci->db->where('url_slug',$urlSlug);
            $rowNum = $ci->db->count_all_results();
            return ($rowNum>0)?true:false;
        }else{
            return true;
        }
    }
}
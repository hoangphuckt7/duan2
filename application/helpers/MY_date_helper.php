<?php
/*
 * Lay ngay tu dang int
 * @$time : int - thoi gian muon hien thi ngay
 * @$full_time : cho biet co lay ca gio phut giay hay khong
 */
function get_date($time, $full_time = true)
{
    $fomat = '%d-%m-%Y';
    // $time = time();
    // if($full_time)
    // {
    //     $fomat = $fomat.' - %H:%i:%s ';
    // }
 //    if( ! ini_get('date.timezone') )
	// {
	//     date_default_timezone_set('GMT');
	// }

    // timezone_menu('UP7');
    
	$date = mdate($fomat , $time);
    return $date;
}
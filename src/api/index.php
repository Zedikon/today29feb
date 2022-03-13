<?php

$leap_year_txt = file('config/leap_year.txt');
$leap_year = $leap_year_txt[0];
$days_for_leap_year_txt = file('config/days_for_leap_year.txt');
$days_for_leap_year = $days_for_leap_year_txt[0];
$today_txt = file('config/today.txt');
$todays = $today_txt[0];
$today = date('Y-m-d');

if($today > $todays){
    if ($days_for_leap_year - '1' == '0'){
        $new_days_for_leap_years = '1460';
        file_put_contents('config/days_for_leap_year.txt', $new_days_for_leap_years);
        file_put_contents('config/today.txt', $today);
    }else{
         $new_days_for_leap_years = $days_for_leap_year - '1';
        file_put_contents('config/days_for_leap_year.txt', $new_days_for_leap_years);
        file_put_contents('config/today.txt', $today);   
    }
}

switch(date('m-d')){
    case '03-12':
        echo '{"today 29 feb?": "No, but today is 12 of march!", "when 29 feb?": "After '.$days_for_leap_year.' days"}';
        break;
        
    case '01-1':
        echo '{"today 29 feb?": "No, but happy new year!", "when 29 feb?": "After '.$days_for_leap_year.' days"}';
        break;
        
    case '06-1':
        echo '{"today 29 feb?": "No, but today is the first day of summer!", "when 29 feb?": "After '.$days_for_leap_year.' days"}';
        break;
        
    case '09-1':
        echo '{"today 29 feb?": "No, but today is the first day of autumn", "when 29 feb?": "After '.$days_for_leap_year.' days"}';
        break;
    
    case '04-1':
        echo '{"today 29 feb?": "Yes! Ha-ha, no, from April 1!", "when 29 feb?": "After '.$days_for_leap_year.' days"}';
        break;
        
    case '14-02':
        echo '{"today 29 feb?": "No, but happy St. Valentine"s day!", "when 29 feb?": "After '.$days_for_leap_year.' days"}';
        
    default:
        echo '{"today 29 feb?": "No.", "when 29 feb?": "After '.$days_for_leap_year.' days"}';
        break;
        
}


?>

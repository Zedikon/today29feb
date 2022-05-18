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
        echo '{"today_29_feb": "No, but today is just 12 of march!", "when_29_feb": "After '.$days_for_leap_year.' days"}';
        break;
        
    case '01-01':
        echo '{"today_29_feb": "No, but happy new year!", "when_29_feb": "After '.$days_for_leap_year.' days"}';
        break;
        
    case '01-06':
        echo '{"today_29_feb": "No, but today is the first day of summer!", "when_29_feb": "After '.$days_for_leap_year.' days"}';
        break;
        
    case '09-1':
        echo '{"today_29_feb": "No, but today is the first day of autumn", "when_29_feb": "After '.$days_for_leap_year.' days"}';
        break;
    
    case '04-1':
        echo '{"today_29_feb": "Yes! Ha-ha, no, from April 1!", "when_29_feb": "After '.$days_for_leap_year.' days"}';
        break;
        
    case '14-02':
        echo '{"today_29_feb": "No, but happy St. Valentine"s day!", "when_29_feb": "After '.$days_for_leap_year.' days"}';

    case '18-05':
        echo '{"today_29_feb": "No, but happy birthday, Alexey!", "when_29_feb": "After '.$days_for_leap_year.' days"}';
        
    default:
        echo '{"today_29_feb": "No.", "when_29_feb": "After '.$days_for_leap_year.' days"}';
        break;
        
}


?>

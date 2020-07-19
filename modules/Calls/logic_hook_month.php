<?php


class MonthLogicHook{

function extract_month($bean, $event, $arguments){
	//echo date('d - m - Y',strtotime('2013-01-19 01:23:42'));
/*bean->month_c = 1;
int month;
month = date('n', strtotime($bean->date_entered_c_date));
$bean->month_c = month;*/

$niz = explode("-", $bean->date_entered_c);


switch ($niz[1]) {
    case "01":
        $bean->month_c = 'January';
		$bean->quartal_c = 'I';
        break;
    case "02":
        $bean->month_c = 'February';
		$bean->quartal_c = 'I';
        break;
    case "03":
        $bean->month_c = 'March';
		$bean->quartal_c = 'I';
        break;
    case "04":
        $bean->month_c = 'April';
		$bean->quartal_c = 'I';
        break;
    case "05":
        $bean->month_c = 'May';
		$bean->quartal_c = 'II';
        break;
    case "06":
        $bean->month_c = 'June';
		$bean->quartal_c = 'II';
        break;
    case "07":
        $bean->month_c = 'July';
		$bean->quartal_c = 'II';
        break;
    case "08":
        $bean->month_c = 'August';
		$bean->quartal_c = 'II';
        break; 
    case "09":
        $bean->month_c = 'September';
		$bean->quartal_c = 'III';
        break; 
    case "10":
        $bean->month_c = 'October';
		$bean->quartal_c = 'III';
        break; 
    case "11":
        $bean->month_c = 'November';
		$bean->quartal_c = 'III';
        break;
    case "12":
        $bean->month_c = 'December';
		$bean->quartal_c = 'III';
        break;                                                                
    default:
        $bean->month_c = 'Greska';
		$bean->quartal_c = 'Greska';
}
      }
 }
?>
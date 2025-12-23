<?php

function checkPermission($permission) {
    $user = Auth::user();
    $userPermissions = $user->getAllPermissions();

    foreach($userPermissions as $up) {
        // echo $up->name."<br>";
        if($up->name == $permission)
            return true;
    }
    return false;
}

function getIndianCurrency($number) {
    if($number < 0)
        return 'NAN';

    $no = floor($number);
    $decimal = round($number - $no, 2) * 100;
    $decimal_part = $decimal;
    $hundred = null;
    $hundreds = null;
    $digits_length = strlen($no);
    $decimal_length = strlen($decimal);
    $i = 0;
    $str = array();
    $str2 = array();
    $words = array(0 => '', 1 => 'One', 2 => 'Two',
        3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
        7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
        10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
        13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
        16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
        19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
        40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
        70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
    $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore', 'Arab', 'Kharab', 'Neel', 'Padma');

    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? '' : null;
            $hundred = ($counter == 1 && $str[0]) ? '' : null;
            $str [] = ($number < 21) ? $words[$number] .' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }

    $d = 0;
    while( $d < $decimal_length ) {
        $divider = ($d == 2) ? 10 : 100;
        $decimal_number = floor($decimal % $divider);
        $decimal = floor($decimal / $divider);
        $d += $divider == 10 ? 1 : 2;
        if ($decimal_number) {
            $plurals = (($counter = count($str2)) && $decimal_number > 9) ? 's' : null;
            $hundreds = ($counter == 1 && $str2[0]) ? '' : null;
            @$str2 [] = ($decimal_number < 21) ? $words[$decimal_number].' '. $digits[$decimal_number]. $plural.' '.$hundred:$words[floor($decimal_number / 10) * 10].' '.$words[$decimal_number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str2[] = null;
    }

    $Rupees = implode('', array_reverse($str));
    $paise = implode('', array_reverse($str2));
    $paise = ($decimal_part > 0) ? 'and ' . $paise . 'Paise' : '';

    return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
}


// Convert Numbers to Shortest Number in Thousands, Lacs, Crores, Arabs
function getShortNumberCurrency($number, $precision = 1 ) {
    // $length = strlen(round($number, 0));
    $length = strlen($number);
    $currency = '';

    if ($length < 4) {
        // 0 - 999
        $number = round($number, 2);
        $ext = "";
        $currency = $number.''.$ext;
    } else if($length == 3 || $length == 4) {
        // Thousand
        $number = $number / 1000;
        $number = round($number, 2);
        $ext = "K";
        $currency = $number.''.$ext;
    } elseif($length == 5 || $length == 6) {
        // Lac
        $number = $number / 100000;
        $number = round($number,2);
        $ext = "L";
        $currency = $number.''.$ext;
    } elseif($length == 7 || $length == 8) {
        // Crore
        $number = $number / 10000000;
        $number = round($number,2);
        $ext = "Cr";
        $currency = $number.''.$ext;
    } else {
        // Arab
        $number = $number / 1000000000;
        $number = round($number,2);
        $ext = "Ar";
        $currency = $number.''.$ext;
    }
    return $currency;
}

// Convert Numbers to Shortest Number in Thousands, Lacs, Crores, Arabs
function getShortNumberFormat($number, $precision = 1 ) {
    $n_format = 0;
    if ($number < 900) {
        // 0 - 900
        $n_format = number_format($number, $precision);
        $suffix = '';
    } else if ($number < 900000) {
        // Thousand
        $n_format = number_format($number / 1000, $precision);
        $suffix = 'K';
    } else if ($number < 900000000) {
        // Lakhs
        $n_format = number_format($number / 1000000, $precision);
        $suffix = 'Lac';
    } else if ($number < 900000000000) {
        // Crores
        $n_format = number_format($number / 1000000000, $precision);
        $suffix = 'Cr';
    } else {
        // Arab
        $n_format = number_format($number / 1000000000000, $precision);
        $suffix = 'Arab';
    }

    if ( $precision > 0 ) {
        $dotzero = '.' . str_repeat('0', $precision );
        $n_format = str_replace($dotzero, '', $n_format );
    }

    return $n_format . $suffix;
}

/* ---------- STARTs : American Short Number Format Conversion ---------- */
function number_format_short( $n, $precision = 1 ) {
    if ($n < 900) {
        // 0 - 900
        $n_format = number_format($n, $precision);
        $suffix = '';
    } else if ($n < 900000) {
        // 0.9k-850k
        $n_format = number_format($n / 1000, $precision);
        $suffix = 'K';
    } else if ($n < 900000000) {
        // 0.9m-850m
        $n_format = number_format($n / 1000000, $precision);
        $suffix = 'M';
    } else if ($n < 900000000000) {
        // 0.9b-850b
        $n_format = number_format($n / 1000000000, $precision);
        $suffix = 'B';
    } else {
        // 0.9t+
        $n_format = number_format($n / 1000000000000, $precision);
        $suffix = 'T';
    }

    // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
    // Intentionally does not affect partials, eg "1.50" -> "1.50"
    if ( $precision > 0 ) {
        $dotzero = '.' . str_repeat('0', $precision );
        $n_format = str_replace($dotzero, '', $n_format );
    }
    return $n_format . $suffix;
}
/* ---------- ENDs : American Short Number Format Conversion ---------- */


/* ---------- STARTs : Indian Short Number Format Conversion ---------- */
function count_digit($number) {
    return strlen($number);
}

function divider($number_of_digits) {
    $tens="1";

    if($number_of_digits>8)
        return 10000000;

    while(($number_of_digits-1)>0)
    {
        $tens.="0";
        $number_of_digits--;
    }
    return $tens;
}

function short_number_format( $num ) {
    $ext=""; //thousand,lac, crore
    $number_of_digits = count_digit($num); //this is call :)

    if($number_of_digits > 3) {
        if($number_of_digits%2!=0)
            $divider=divider($number_of_digits-1);
        else
            $divider=divider($number_of_digits);
    }
    else
        $divider=1;

    $fraction=$num/$divider;
    $fraction=number_format($fraction, 2);
    if($number_of_digits == 4 ||$number_of_digits == 5)
        $ext="k";
    if($number_of_digits==6 ||$number_of_digits==7)
        $ext="Lac";
    if($number_of_digits==8 ||$number_of_digits==9)
        $ext="Cr";

    return $fraction." ".$ext;
}
/* ---------- ENDs : Indian Short Number Format Conversion ---------- */

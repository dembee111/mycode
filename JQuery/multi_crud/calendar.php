<?php
const BR = "<br />";
const PRE = "<pre>";
$d = cal_days_in_month(CAL_GREGORIAN,2,2023);
echo "Өнөөдөр 2023 оны хоёрдугаар сарын $d";
echo BR;
echo PRE;
$d = unixtojd(mktime(0,0,0,6,7,2018));
print_r(cal_from_jd($d,CAL_GREGORIAN));
echo BR;
print_r(cal_info(0));
echo BR;
echo easter_date()."<br />";
echo date("m:t-d-M-Y");
echo BR;
echo date("d-M-Y",easter_date());
echo BR;
var_dump(checkdate(6,7,2018));
echo BR;

$date = date_create("2018-06-07");
date_add($date, date_interval_create_from_date_string("49 days"));
echo date_format($date,"Y-m-d");
echo BR;
$date=date_create_from_format("d-M-Y","15-Mar-2013");
echo date_format($date,"Y/m/d");
echo BR;
echo BR;
$date1 = date_create();

date_date_set($date1,2020,10,30);
echo date_format($date1,"Y/m/d");
echo BR;
echo BR;
date_default_timezone_set("Asia/Ulaanbaatar");
echo date_default_timezone_get();
echo BR;
$date1=date_create("1984-01-14");
$date2=date_create();
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
echo BR;
$date = date_create();
echo date_format($date,"Y/m/d H:i:s");
echo BR;
$date1=date_create();
$date2=date_create("2019-02-10");
$diff=date_diff($date1,$date2);

// %a outputs the total number of days
echo $diff->format("Total number of days: %a.");
echo "<br>";

// %R outputs + beacause $date2 is after $date1 (a positive interval)
echo $diff->format("Total number of days: %R%a.");
echo "<br>";

// %d outputs the number of days that is not already covered by the month
echo $diff->format("Month: %m, days: %d.");
echo BR;
$date=date_create();

date_isodate_set($date,2013,78);
echo date_format($date,"Y-m-d") . "<br>";

date_isodate_set($date,2013,78,2);
echo date_format($date,"Y-m-d");
echo BR;
$winter=date_create("2017-12-31",timezone_open("Asia/Ulaanbaatar"));
$summer=date_create("2017-06-30",timezone_open("Asia/Ulaanbaatar"));

echo date_offset_get($winter) . " seconds.<br>";
echo date_offset_get($summer) . " seconds.";
echo BR;
print_r(date_parse("2018-06-07 14:52:45"));
echo BR;
$date=date_create();
date_sub($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");
echo BR;

echo "<h3>Date: 7st Jun, 2018</h3>";
$sun_info=date_sun_info(strtotime("2018-06-07"),47.919536,106.917445);
foreach ($sun_info as $key=>$val)
  {
  echo "$key: " . date("H:i:s",$val) . "<br>";
  }

echo "<h3>Date: 16st December, 2018</h3>";
$sun_info=date_sun_info(strtotime("2018-12-16"),47.919536,106.917445);
foreach ($sun_info as $key=>$val)
  {
  echo "$key: " . date("H:i:s",$val) . "<br>";
  }
  echo BR;
    $date=date_create();

    date_time_set($date,13,24);
    echo date_format($date,"Y-m-d H:i:s") . "<br>";

    date_time_set($date,12,20,55);
    echo date_format($date,"Y-m-d H:i:s");
    echo BR;
    echo BR;
    // $date=date_create();
    // $dd = date_timestamp_get($date);
    // date_timestamp_set($dd);
    // echo date_format($dd,"U = Y-m-d H:i:s");
    echo BR;
      print_r(getdate());
      echo "<br><br>";

      // Return date/time info of a timestamp; then format the output
      $mydate=getdate(date("U"));
      echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
      echo BR;
      echo idate("B") . "<br>";
      echo idate("d") . "<br>";
      echo idate("h") . "<br>";
      echo idate("H") . "<br>";
      echo idate("i") . "<br>";
      echo idate("I") . "<br>";
      echo idate("L") . "<br>";
      echo idate("m") . "<br>";
      echo idate("s") . "<br>";
      echo idate("t") . "<br>";
      echo idate("U") . "<br>";
      echo idate("w") . "<br>";
      echo idate("W") . "<br>";
      echo idate("y") . "<br>";
      echo idate("Y") . "<br>";
      echo idate("z") . "<br>";
      echo idate("Z") . "<br>";

?>

$exp_date = '24 Dec 2020';
$today_date = date('d M Y');


//now convert
$exp = strtotime($exp_date);
$td = strtotime($today_date);

if($td > $exp) {
  echo 'is expired';
  } else {
  echo 'is not expired';
}

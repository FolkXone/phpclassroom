<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-all");
  $data = json_decode($json);
  echo "ยอดผู้ป่วยวันนี้ : ".$data[0]->new_case."<br>";
  echo "ยอดผู้ป่วยรวม : ".$data[0]->total_case."<br>";
  echo "ยอดผู้ป่วยรวม : ".$data[0]->new_case_excludeabroad."<br>";
  echo "ยอดผู้ป่วยรวม : ".$data[0]->total_case_excludeabroad."<br>";
  echo "ยอดผู้ป่วยรวม : ".$data[0]->new_death."<br>";
  echo "ยอดผู้ป่วยรวม : ".$data[0]->total_death."<br>";
  echo "ยอดผู้ป่วยรวม : ".$data[0]->new_recovered."<br>";
  echo "ยอดผู้ป่วยรวม : ".$data[0]->total_recovered."<br>";
  echo "ยอดผู้ป่วยรวม : ".$data[0]->update_date."<br>";  
?>

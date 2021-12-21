<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

    echo "<center><b>รายงานสถานการณ์โควิด-19 แยกจังหวัด</b></center>";
    echo "<br><br>";

echo '<body style="background-color:#77DD77">';
echo "<center><table border='1'>";
echo "<tr><td style= 'background-color:#E9967A'>ลำดับ</td>
      <td style= 'background-color:#E9967A'>จังหวัด</td>
      <td style= 'background-color:#E9967A'>จำนวนผู้ป่วยใหม่</td>
      <td style= 'background-color:#E9967A'>จำนวนผู้ป่วยสะสม</td>
      <td style= 'background-color:#E9967A'>จำนวนผู้ป่วยใหม่(รวมต่างประเทศ)</td>
      <td style= 'background-color:#E9967A'>จำนวนผู้ป่วยสะสม(รวมต่างประเทศ)</td>
      <td style= 'background-color:#E9967A'>จำนวนผู้เสียชีวิต</td>
      <td style= 'background-color:#E9967A'>จำนวนผู้เสียชีวิตสะสม</td>
      </tr>";
  
foreach($data as $key=>$val){
  echo "<tr>";
  echo "<td style= 'background-color:#FFCBA4'>";
  echo ($key+1);
  echo "</td>";
  echo "<td style= 'background-color:#E8ADAA'>";
  echo $val->province;
  echo "</td>";
  echo "<td style= 'background-color:#E8ADAA'>";
  echo $val->new_case;
  echo "</td>";
  echo "<td style= 'background-color:#E8ADAA'>";
  echo $val->total_case;
  echo "</td>";
  echo "<td style= 'background-color:#E8ADAA'>";
  echo $val->new_case_excludeabroad;
  echo "</td>";
  echo "<td style= 'background-color:#E8ADAA'>";
  echo $val->total_case_excludeabroad;
  echo "</td>";
  echo "<td style= 'background-color:#E8ADAA'>";
  echo $val->new_death;
  echo "</td>";
  echo "<td style= 'background-color:#E8ADAA'>";
  echo $val->total_death;
  echo "</td>";
  echo "</tr>";
}
echo "</table></center>";

echo "<br><br>";
echo "วันที่อัพเดต";
echo $val->txn_date;

?>

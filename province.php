<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

    echo "<center><b>รายงานสถานการณ์โควิด-19 แยกจังหวัด</b></center>";
    echo "<br><br>";

echo '<body style="background-color:#FFFFE0">';
echo "<center><table border='1'>";
echo "<tr><td style= 'background-color:#FCDFFF'><b>ลำดับ</b></td>
      <td style= 'background-color:#FCDFFF'><b>จังหวัด</b></td>
      <td style= 'background-color:#FCDFFF'><b>จำนวนผู้ป่วยใหม่</b></td>
      <td style= 'background-color:#FCDFFF'><b>จำนวนผู้ป่วยสะสม</b></td>
      <td style= 'background-color:#FCDFFF'><b>จำนวนผู้ป่วยใหม่(รวมต่างประเทศ)</b></td>
      <td style= 'background-color:#FCDFFF'><b>จำนวนผู้ป่วยสะสม(รวมต่างประเทศ)</b></td>
      <td style= 'background-color:#FCDFFF'><b>จำนวนผู้เสียชีวิต</b></td>
      <td style= 'background-color:#FCDFFF'><b>จำนวนผู้เสียชีวิตสะสม</b></td>
      </tr>";
  
foreach($data as $key=>$val){
  echo "<tr>";
  echo "<td style= 'background-color:#FDEEF4'>";
  echo ($key+1);
  echo "</td>";
  echo "<td style= 'background-color:#CCFFFF'>";
  echo $val->province;
  echo "</td>";
  echo "<td style= 'background-color:#CCFFFF'>";
  echo $val->new_case;
  echo "</td>";
  echo "<td style= 'background-color:#CCFFFF'>";
  echo $val->total_case;
  echo "</td>";
  echo "<td style= 'background-color:#CCFFFF'>";
  echo $val->new_case_excludeabroad;
  echo "</td>";
  echo "<td style= 'background-color:#CCFFFF'>";
  echo $val->total_case_excludeabroad;
  echo "</td>";
  echo "<td style= 'background-color:#CCFFFF'>";
  echo $val->new_death;
  echo "</td>";
  echo "<td style= 'background-color:#CCFFFF'>";
  echo $val->total_death;
  echo "</td>";
  echo "</tr>";
}
echo "</table></center>";

echo "<br>";
echo "<center>วันที่อัพเดต</center>";
echo "<center>$val->txn_date</center>";

?>

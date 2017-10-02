<?php
//Draw 100 X 100 multiplication table
echo "<div style='position:absolute;top:0px;left:0px;font-size:8px;width:2240px;margin-bottom:1.5em;'>";
for ($i = 0; $i <= 100; $i++) {
  for ($j = 0; $j <= 100; $j++) {
    if($i == 0 && $j ==0) {
      //(0,0) whitespace:
      //Used for alignment of labels
      echo "<div style='display:inline-block;width:22px;height:10px;'></div>";
    }else if($i == 0) {
      //Create column labels
      echo "<div style='display:inline-block;width:22px;height:12px;padding-top:2px;text-align:center;color:#aaa;'>" . $j . "</div>";
    }else if($j == 0) {
      //Create row labels
      echo "<div style='display:inline-block;width:22px;height:12px;padding-top:2px;text-align:center;color:#aaa;'>" . $i . "</div>";
    }else {
      //Create multiplication table
      echo "<div style='display:inline-block;width:20px;height:12px;padding-top:2px;text-align:center;border:1px solid #eee;'>" . ($i * $j) . "</div>";
    }
  }
  //Every 100 cells start a new row
  echo "<br>";
}
echo "</div>";
//@END Draw
?>

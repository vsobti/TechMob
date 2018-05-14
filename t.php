<?php
ini_set('max_execution_time', 10);
echo "__________________TEST---------------";
echo "Process Started";
for($i=0;$i<1000;$i++){

sleep(200);
  echo $i."\n";
  
  

}
echo "Process Stopped";
?>

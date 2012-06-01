<?php
   session_start(); 
   echo "<br>";
   echo exec("/bin/bash ./test.sh");
   echo "<br>";
   echo exec("/bin/ls -l");
   echo "<br>";
   echo system("cd /home/simon/opencv/OpenCV-2.3.1/samples/cpp/; ./track");
   
  
     echo "<form name=\"terForm\" method=\"post\" action=\"terminateInst.php\">";
     echo "<input type=\"submit\" value=\"termintate\" />";
     echo "</form>";
?>

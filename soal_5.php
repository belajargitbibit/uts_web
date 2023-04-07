<?php
  echo"<table align='center'><tr><td align='center'>";
    for($i=0;$i<=6;$i++){
       for($a=$i;$a>=0;$a--){
         print('*');
       }
    echo"<br/>";
   }
  for($i=0;$i<=5;$i++){
    for($a=$i;$a<=5;$a++){
      print('*');
    }
  echo"<br/>";
  }
 echo"</td></tr></table>";
?>
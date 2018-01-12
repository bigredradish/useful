<?php 


     system ( "gpio -g mode 24 out" );
     system ( "gpio -g mode 25 out" );
     system ( "gpio -g mode 7 out" );
     system ( "gpio -g mode 8 out" );
     system ( "gpio -g  write 24 0" );
     system ( "gpio -g write 25 1");
     system ( "gpio -g write 7 1" );
     system ( "gpio -g write 8 0" );
 ?>

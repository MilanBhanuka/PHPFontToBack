<?php
      echo date('d');   //Day
      echo date('m');   //Month
      echo date('Y');   //Year
      echo date('l');   //Day of the week

      echo date('Y/m/d');
      echo date('m-d-Y');


      echo date('h');   //Hour
      echo date('i');   //Minuts
      echo date('s');   //Seconds
      echo date('a');   //AM or PM

      //Set Time Zone
      date_default_timezone_set('America/New_York');

      echo date('h:i:sa');

?>
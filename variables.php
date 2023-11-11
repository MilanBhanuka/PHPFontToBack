<?php
      //single line comment
      #single line comment
      /*
      multi line 
      comment
      */

      #VARIABLES............................................
      /*
      - Prefix $
      - Start with a letter or an underscore
      - Only letters, numbers and underscores
      - Case sensitive
      */

      #DATA TYPES...........................................
      /*
      String
      Integers
      floats
      Booleans
      Arrays
      Objects
      NULL
      Resource
      */

      $output = 'Hello World';
      $num1 = 4;
      $num2 = 10;
      $sum = $num1+$num2;

      $string1 = 'Hello';
      $string2 = 'World';
      $greeting = $string1 .' '. $string2.'!';
      $greeting2 = "$string1 $string2";

      $string3 = 'They\'re Here';

      $floors =4.4;
      $bool1 = true;

      define('GREETING','HELLO EVERYONE',true);

      echo $string3;
?>
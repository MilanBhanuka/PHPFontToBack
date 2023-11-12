<?php
      #substr()
      # Returns a portion of a string
      $output = substr('Hello', 1, 3);
      echo $output."<br>";
      $output = substr('Hello', -2);
      echo $output."<br>";


      #strlen()
      # Returns the length of a string
      $output = strlen('Hello World');
      echo $output."<br>";

      #strpos()
      # Finds the position of the first occurence of a sub string
      $output = strpos('Hello World', 'o');
      echo $output."<br>";

      #strrpos()
      # Finds the position of the last occurence of a sub string
      $output = strrpos('Hello World', 'o');
      echo $output."<br>";

      #trim()
      # Strips whitespace
      $text = 'Hello World                ';
      var_dump($text);
      echo "<br>";

      $trimmed = trim($text);
      var_dump($trimmed);
      echo "<br>";

      #strtoupper
      # Makes everything uppercase
      $output = strtoupper('Hello World');
      echo $output."<br>";

      #strtolower
      # Makes everything lowercase
      $output = strtolower('Hello World');
      echo $output."<br>";

      #ucwords()
      # Capitalize every word
      $output = ucwords('hello world');
      echo $output."<br>";

      #str_replace()
      # Replace all occurences of a search string with a replacement
      $text = 'Hello World';
      $output = str_replace('World', 'Everyone', $text);
      echo $output."<br>";

      #is_string()
      # Check if string
      $val = 'Hello';
      $output = is_string($val);
      echo $output."<br>";


      $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
      foreach($values as $value){
            if(is_string($value)){
                  echo "{$value} is a string<br>";
            }
      }

      #gzcompress()
      # Compress a string

      $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
      $compressed = gzcompress($string);
      echo $compressed."<br>";  
      $original = gzuncompress($compressed);
      echo $original."<br>";


?>
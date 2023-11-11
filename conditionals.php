<?php
      /*
            Coparison Operators

            ==
            ===
            <
            >
            <=
            >=
            !=
            !==
      */

      $num = 4;

      if($num == 5){
            echo '5 passed';
      }elseif($num == 6){
            echo '6 passed';
      }else{
            echo 'did not pass';
      }


      #Nesting if
      $num = 5;

      if($num>4){
            if($num<10){
                  echo "$num passed";
            }
      }


      /*
            Logical Operators

            and &&
            or  ||
            xor 
      */

      if($num > 4 AND $num < 10){
            echo "$num passed";
      }


      #switch

      $favColor = 'red';

      switch($favColor){
            case 'red':
                  echo 'Your Favorite Color is red';
                  break;
            case 'blue':
                  echo 'Your Favorite Color is blue';
                  break;
            case 'green':
                  echo 'Your Favorite Color is green';
                  break;
            default:
                  echo 'Your Favorite Color is somthig else';
                  break;
      }
?>
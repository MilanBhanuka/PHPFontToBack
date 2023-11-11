<?php
      #Loops  -  Execute code set number of times

      /*
            for
            while
            do..while
            foreach
      */

      #Foor Loop
      # @params - init, condition, inc

      for($i = 0; $i <= 10; $i++){
            echo 'Number '.$i;
            echo '<br>';
      }


      #While Loop
      # @params - condition
      $i = 0;
      while($i < 10){
            echo $i;
            echo '<br>';
            $i++;
      }

      # Do...While
      # @params - condition
      $i=0;
      do{
            echo $i;
            echo '<br>';
            $i++;  
      }
      while($i<10);

      #Foreach Loop - For arrays
      $people = array('Brad','Jose','William');

      foreach($people as $person){
            echo $person;
            echo '<br>';
      }

      $people = array('Brad'=>'brad@gmail.com','Jose'=>'jose@gmail.com','William'=>'william@gmail.com');

      foreach($people as $person => $email){
            echo $person.' : ' .$email;
            echo '<br>';
      }
?>
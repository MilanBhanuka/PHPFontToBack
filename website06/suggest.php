<?php
      // People Array @TODO - Get from DB
      $people[] = "Steve";
      $people[] = "John";
      $people[] = "Kathy";
      $people[] = "Evan";
      $people[] = "Anthony";
      $people[] = "Tom";
      $people[] = "Rhonda";
      $people[] = "Hal";
      $people[] = "Ernie";
      $people[] = "Johanna";
      $people[] = "Farrah";
      $people[] = "Larry";
      $people[] = "Javier";
      $people[] = "Beth";
      $people[] = "Monica";
      $people[] = "Angie";
      $people[] = "Adam";
      $people[] = "Hillary";
      $people[] = "Bob";
      $people[] = "Jose";
      $people[] = "Miriam";
      $people[] = "Diana";
      $people[] = "Becky";
      $people[] = "Frank";
      $people[] = "Katie";
      $people[] = "Michael";
      $people[] = "Martin";
      $people[] = "Betsy";
      $people[] = "Sue";

      // Get Query String
      $q = $_REQUEST['q'];

      $suggestion = "";

      // Get Suggestions
      if($q !== ""){
            $q = strtolower($q);
            $len = strlen($q);
            foreach($people as $person){
                  if(stristr($q, substr($person, 0, $len))){
                        if($suggestion === ""){
                              $suggestion = $person;
                        } else {
                              $suggestion .= ", $person";
                        }
                  }
            }
      }

      echo $suggestion === "" ? "No Suggestion" : $suggestion;

?>
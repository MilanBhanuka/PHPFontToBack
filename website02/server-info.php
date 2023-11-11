<?php
      # $_SERVER is a superglobal variable

      # Create Server Array
      $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
      ];

      // echo $server['Host Server Name'];
      // echo '<br>';
      // echo $server['Host Header'];
      // echo '<br>';
      // echo $server['Server Software'];
      // echo '<br>';
      // echo $server['Document Root'];
      // echo '<br>';
      // echo $server['Current Page'];
      // echo '<br>';
      // echo $server['Script Name'];
      // echo '<br>';
      // echo $server['Absolute Path'];
      // echo '<br>';


      # Create Client Array
      $client = [
        'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP' => $_SERVER['REMOTE_ADDR'],
        'Remote Port' => $_SERVER['REMOTE_PORT']
      ];

      // echo '<br>';
      // echo '<br>';
      // echo $client['Client System Info'];
      // echo '<br>';
      // echo $client['Client IP'];
      // echo '<br>';
      // echo $client['Remote Port'];
?>
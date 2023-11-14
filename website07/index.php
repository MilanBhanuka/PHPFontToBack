<?php
      $path = 'dir0/dir1/myfile.php';
      $file = 'file1.txt';

      // Return filename
      echo basename($path).'<br>';

      // Return filename without ext
      echo basename($path, '.php').'<br>';

      // Return the dir name from path
      echo dirname($path).'<br>';

      // Check if file exists
      echo file_exists($file).'<br>';

      // Get abs path
      echo realpath($file).'<br>';

      // Check to see if file
      echo is_file($file).'<br>';

      // Check if writeable
      echo is_writable($file).'<br>';

      // Check if readable
      echo is_readable($file).'<br>';

      // Get file size
      echo filesize($file).'<br>';

      // Create a directory
      mkdir('testing');

      // Remove dir if empty
      rmdir('testing');

      // Copy file
      echo copy('file1.txt', 'file2.txt').'<br>';

      // Rename file
      rename('file2.txt', 'myfile.txt');

      // Delete file
      unlink('myfile.txt');

      // Write from file to string
      echo file_get_contents($file).'<br>';

      // Write string to file
      echo file_put_contents($file, 'Goodbye World').'<br>';

      // Append to file
      $current = file_get_contents($file);
      $current .= ' Goodbye World';
      file_put_contents($file, $current);

      // Open file for reading
      $handle = fopen($file, 'r');
      $data = fread($handle, filesize($file));
      echo $data.'<br>';

      // Open file for writing
      $handle = fopen('file2.txt', 'w');
      $txt = "John Doe\n";
      fwrite($handle, $txt);
      $txt = "Steve Smith\n";
      fwrite($handle, $txt);
      fclose($handle);
?>
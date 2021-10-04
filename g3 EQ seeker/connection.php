<?php
  $host_name = 'db5005091880.hosting-data.io';
  $database = 'dbs4262860';
  $user_name = 'dbu719324';
  $password = 'Mandeep.123';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
  } else {
    //echo '<p>Connection to MySQL server successfully established.</p>';
  }
?>

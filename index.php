<?php
define('BASEPATH', true);
include "app/root.php";
include "app/app.php";
root\Modules::basic();

$data = array(
  'header' => 'Header',
  'name'   => 'Dejan',
  'msg'    => 'Test'
  );

app($app, $data);

?>

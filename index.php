<?php

require "./jsonconfig.php";
use JSONConfig\JSONConfig;

try
{
  $cfg = new JSONConfig('./config.json');
  echo $cfg->server . "<br/>";
}
catch(Exception $e)
{
  echo $e->getMessage()."\n";
}

?>

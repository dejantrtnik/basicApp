<?php
namespace root;

class Modules
{
  static function basic(){
    require "./Modules/dotEnv/dotEnv.php";
    require "./Modules/telegram/telegram.php";
    require "./Modules/ip/ip.php";
  }

}
?>

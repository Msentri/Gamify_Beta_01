<?php
  /***************************************************************************************/
  // Add all functions generated by manage gamify application / level section for manually trigger within your application.
  //**************************************************************************************/
  if(!defined("INCLUDE_ROOT"))
   include_once("../include/config.php");
  
  include_once(INCLUDE_ROOT . "bll/ga_core_bll.php");
  class ga_level_item_events {

      function trigger_item_45($userid)
      {
          $obj = new ga_core_bll();
          $obj->trigger_item($userid, 45);
      }
	
  }

?>
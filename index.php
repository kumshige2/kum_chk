<?php
mb_internal_encoding('UTF-8');
//
// echo  '<p>' .'index.php ' .date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";

 //
 require_once('userlib/config.php');
 require_once(LIBPATH.'execute.php');
 require_once(LIBPATH.'view.php');
 require_once(LIBPATH.'data.php');
//------------------------------------------------------ 
 // execute instance
 //------------------------------------------------------ 
   $execute = new execute();
   $execute ->main();
 ?>
 
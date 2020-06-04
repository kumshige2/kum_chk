    <?php
    /**
     * Buggy inside Firebug - Advanced
     * 
     * @package GONX
     * @author hatem <hatem at php dot net>
     * @website http://phpmagazine.net
     * @copyright Copyright (c) 2005-2007
     * @version $Id: buggy.class.php,v 2.2 2007/02/10 04:10:12 hatem Exp $
     * @access public
     **/
    class buggy {
     
      function init(){
        $old_error_handler = set_error_handler(array("buggy","ErrorHandler"));
        define ("FATAL",E_USER_ERROR);
        define ("WARNING",E_USER_WARNING);
        define ("NOTICE",E_USER_NOTICE);
        // configure reporting level
        error_reporting (FATAL | WARNING | NOTICE);  
      }
     
      /**
       * Buggy::getmicrotime()
       * 
       * @return 
       **/
      function getmicrotime(){
        $mtime = microtime();
        $mtime = explode(" ",$mtime);
        $mtime = $mtime[1] + $mtime[0];
        return ($mtime);
      }
     
      /**
       * Buggy::SetMicroTime()
       * 
       * @param $module
       * @return 
       **/
      function SetMicroTime($module)
      {
        global $Buggy;
        $Buggy[$module] = Buggy::getmicrotime();
        return $Buggy[$module];
      }
      
      /**
       * Buggy::GetExecutionTime()
       * 
       * @param $module
       * @return 
       **/
      function GetExecutionTime($module)
      {
        global $Buggy;
        $end = Buggy::getmicrotime();
        $res = $end - $Buggy[$module];
        return $res;
      }
     
      /**
       * Buggy::Track()
       *
       * @param $module
       * @param $msg    additional message to display
       * @return 
       **/
      function Track($module, $msg = '') {
      
        global $Buggy;
      
        if (!isset($Buggy[$module])) {
          
          Buggy::SetMicroTime($module);
          
        } else {
          
          $duration = Buggy::GetExecutionTime($module);
          Buggy::logMessage($module,'Notice',$msg,$duration);
        
        }
      
      }
      
      /**
       * Buggy::logMessage()
       * 
       * @param string $module
       * @param string $type
       * @param string $message
       * @param string $duration
       * @return 
       **/
      function logMessage($module = '', $type = '', $message = '', $duration = ''){
        if ($module == 'PHPError') {
        
          if ($type == 'WARNING') {
            echo "<script>console.warn(\"[Buggy] - $module [$type] - $message\")</script>\n";
          } elseif ($type == 'Fatal') {
            echo "<script>console.error(\"[Buggy] - $module [$type] - $message\")</script>\n";
          }else{
            echo "<script>console.info(\"[Buggy] - $module [$type] - $message\")</script>\n";
          }
            
        } else {
          echo "<script>console.info(\"[Buggy] - $module [$type] - $message - Execution Time: $duration \")</script>\n";
        }
      }
      
      /**
       * Buggy errors manager
       * 
       * @param $errno
       * @param $errstr
       * @param $errfile
       * @param $errline
       * @return 
       **/
      function ErrorHandler ($errno, $errstr, $errfile, $errline) {
        switch ($errno) {
          case FATAL:
        Buggy::logMessage('PHPError', 'Fatal', "{$errno} : $errstr - Fatal error in line ".$errline." of file ".$errfile);
        exit(1);
        break;
        
        case WARNING:
          Buggy::logMessage('PHPError', 'WARNING', "{$errno} : $errstr - WARNING error in line ".$errline." of file ".$errfile);
        break;
        
        default:
          Buggy::logMessage('PHPError', 'Notice', "{$errno} : $errstr - Notice error in line ".$errline." of file ".$errfile);
        break;
        }
      }
     
    }
    ?>
<?php
  session_start();

  #remove cookie
  if(isset($_COOKIE[session_name()])){
       setcookie(session_name(),'',time()-3600);
  }

  #unset data in $_SESSION
  $_SESSION[] = array();

  #destroy the session
  session_destroy();


?>
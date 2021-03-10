<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['USERNAMEID'== "uname" && 'PASSWORD'== "XXXX"] ) ) {
      header("Location: home.php");
    
} else {
    echo"nothing";
  
}
?>
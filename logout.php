
<?php
   session_start();
   
   if(session_destroy()) {
        header("Location: index.html");
        echo '<script language="javascript">';
        echo 'alert("Logout successful")';
        echo '</script>';

   }
?>
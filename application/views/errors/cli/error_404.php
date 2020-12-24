<script type="text/javascript">
         <!--
            function Redirect() {
               window.location = "/";
            }            
            document.write("Please Wait...");
            setTimeout('Redirect()', 1000);
         //-->
      </script>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

echo "\nERROR: ",
	$heading,
	"\n\n",
	$message,
	"\n\n";
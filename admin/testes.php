<?php

$username=shell_exec("finger `whoami` | awk -F: '{ print $3 }' | head -n1 | sed 's/^ //'");
echo ("username : $username" );

?>
 <? echo(file_get_contents('sablona.html')) ?>




<?php
if ($_GET["heslo"] == "FRT458") {
echo "<a href='editobsah.php' > Access Granted! </a> " ;   }
else {
echo "Access Denied!" ;}

?>




<? echo(file_get_contents('sablona2.html')) ?>
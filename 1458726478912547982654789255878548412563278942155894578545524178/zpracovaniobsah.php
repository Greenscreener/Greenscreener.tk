<? echo(file_get_contents('sablona.html')) ?>




   <? $soubor = fopen("./text.txt", "w") ; 
   fwrite($soubor, $_GET["obsah"]);    ?>
   
   Done!










<? echo(file_get_contents('sablona2.html')) ?>
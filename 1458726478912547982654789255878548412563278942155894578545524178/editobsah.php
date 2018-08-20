<? echo(file_get_contents('sablona.html')) ?>




 <h3>Editor</h3>
 <br />
 <p>
 <form method="GET"
 action="zpracovaniobsah.php">
 <p>Home: </p>
<textarea align="text-top" name="obsah" cols="80" rows="10">
 <? echo(file_get_contents('text.txt')) ?>
</textarea>
 <input type="submit" value="Publikovat"></p>
 </form>





















<? echo(file_get_contents('sablona2.html')) ?>
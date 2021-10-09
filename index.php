<?php

print_r($_POST);

?>


<form action="index.php" method="post">
 <p>
 
<?php

echo rand(5, 100);
?>
+
<?php

echo rand(5, 100);
?>

 <input type="text" name="Ergebnis" /></p>
 <p><input type="submit" /></p>
</form>


<?php
if ($_POST['Ergebnis'] == 2){
       echo "Richtig";
}

?>




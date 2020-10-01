<?php
/**
 * Authors : Pedroletti Michael and Theo Cook
 * CreationFile date : 29.09.2020
 * Description : Call the right function to get information for a page and display the pages
 **/

ob_start();

?>
<h1>DASHBOARD BESTIOLE LA</h1>
<br><br><br><br><br><br><br><br>
<?php
if(isset($_POST['successMessage']) && $_POST['successMessage'] == "loginSuccess"){
    echo "<div style='color: red'>Connexion réussie</div>";
}
?>

<?php

$content = ob_get_clean();
require "template.php";

?>

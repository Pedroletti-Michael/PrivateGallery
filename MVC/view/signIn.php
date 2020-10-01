<?php
/**
 * Authors : Pedroletti Michael and Theo Cook
 * CreationFile date : 29.09.2020
 * Description : Call the right function to get information for a page and display the pages
 **/

ob_start();

?>

<form method="post" action="../MVC/index.php?action=requestLogin">
    <div class="d-inline-block w-100 pt-2 mb-2">
        <label for="inputLogin" class="font-weight-bold">Nom d'utilisateur</label>
        <div class="input-group mb-2 mr-sm-2 ">
            <input type="text" class="form-control" id="userName" name="userName" placeholder="Login AAI" required>
        </div>
    </div>
    <div class="d-inline-block w-100 pb-2">
        <label for="inputPassword" class="font-weight-bold">Mot de passe</label>
        <div class="input-group mb-2 mr-sm-2">
            <input type="password" class="form-control w-100" id="pwd" name="pwd" placeholder="Mot de passe" required>
        </div>
        <button type="submit" class="input-group btn btn-success w-auto m-auto w3-center">Connexion</button>
    </div>
    <?php
    if(isset($_POST['error']) && $_POST['error'] == "loginFailed"){
        echo "<div style='color: red'>Indentifiant ou mot de passe invalide.</div>";
    }
    ?>
    </div>
</form>

<?php

$content = ob_get_clean();
require "template.php";

?>

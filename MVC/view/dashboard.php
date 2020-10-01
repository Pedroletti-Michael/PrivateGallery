<?php
/**
 * Authors : Pedroletti Michael and Theo Cook
 * CreationFile date : 29.09.2020
 * Description : Call the right function to get information for a page and display the pages
 **/

ob_start();

?>

<h1>DASHBOARD TEST</h1>

<title>Gabriel Lado | #SignIn</title>
<div style="width: 500px; height: 300px;" class="p-5 rounded center">
    <form method="post" action="../MVC/index.php?action=requestLogin">
        <div class="d-inline-block w-100 pb-2 text-center">
            <label for="inputPassword" class="font-weight-bold">Mot de passe de la Galerie</label>
            <div class="input-group mb-2 mr-sm-2">
                <input type="password" class="form-control w-100" id="pwd" name="pwd" placeholder="Mot de passe" required>
            </div>
            <button type="submit" class="input-group btn btn-secondary w-auto m-auto w3-center">Accéder</button>
        </div>
        <?php
        if(isset($_SESSION['successMessage']) && $_SESSION['successMessage'] == 'loginSuccess'){
            echo "<div style='color: green'>Connexion réussie.</div>";
        }
        if(isset($_SESSION['error']) && $_SESSION['error'] == "signOutFailed"){
            echo "<div style='color: red'>Erreur de déconnexion.</div>";
        }
        ?>
    </form>
</div>


<?php

$content = ob_get_clean();
require "template.php";

?>

<?php

/**
 * Authors : Pedroletti Michael and Theo Cook
 * CreationFile date : 29.09.2020
 * Description : Call function to modify or to set information.
 **/

function isUserConnected(){
    if(isset($_SESSION) && isset($_SESSION['userLogged']) && $_SESSION['userLogged'] == true){
        return true;
    }
    else{
        return false;
    }
}

function login($usrName, $pwd){
    //TODO Récupérer les données utilisateurs les comparer et si jamais une correspondance est trouvée on retourne true
    $_SESSION['userLogged'] = true;
    return true;
}

function signOut(){
    $_SESSION['userLogged'] = false;
    return true;
}
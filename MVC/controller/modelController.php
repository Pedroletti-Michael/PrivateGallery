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
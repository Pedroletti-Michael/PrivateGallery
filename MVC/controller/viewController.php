<?php
/**
 * Authors : Pedroletti Michael and Theo Cook
 * CreationFile date : 29.09.2020
 * Description : Call the right function to get information for a page and display the pages
 **/

// Function used to display the dashboard
function displayDashboard(){
    require_once 'controller/modelController.php';
    if(isUserConnected()){
        $_GET['action'] = 'dashboard';
        require 'view/dashboard.php';
    }
    else{
        $_GET['action'] = 'signIn';
        require 'view/signIn.php';
    }
}

// Function used to display the signIn
function displaySignIn($post){
    require_once 'controller/modelController.php';

    //if $post = false
    if($post == false){
        //if is connected we return in dashboard
        if(isUserConnected()){
            $_GET['action'] = 'dashboard';
            require 'view/dashboard.php';
        }
        //else we going to signIn
        else{
            $_GET['action'] = 'signIn';
            require 'view/signIn.php';
        }
    }
    //if action == signOut we need to logout the user and return to the signIn menu
    elseif($post == 'signOut'){
        if(signOut()){
            $_GET['action'] = 'signIn';
            $_SESSION['successMessage'] = 'signOutSuccess';
            require 'view/signIn.php';
        }
        else{
            $_GET['action'] = 'dashboard';
            $_SESSION['error'] = 'signOutFailed';
            require 'view/dashboard.php';
        }
    }
    //else $post != false we need to try to login
    else{
        $pwd = $post['pwd'];
        //try to login with data send by user
        if(login($pwd)){
            //login success, go to dashboard
            $_GET['action'] = 'dashboard';
            $_SESSION['successMessage'] = 'loginSuccess';
            require 'view/dashboard.php';
        }
        //if login failed, go to signIn with an error message
        else{
            $_GET['action'] = 'signIn';
            $_SESSION['error'] = 'loginFailed';
            require 'view/signIn.php';
        }
    }

}

// Function used to display the page to create a new private gallery
function displayNewGalleryPage(){
    require_once 'controller/modelController.php';
    if(isUserConnected()){
        $_GET['action'] = 'createNewGalleryPage';
        require 'view/createNewGalleryPage.php';
    }
    else{
        $_GET['action'] = 'signIn';
        require 'view/signIn.php';
    }
}

// Function used to display a gallery page
function displayVisitGalleryPage(){
    require_once 'controller/modelController.php';
    if(isUserConnected()){
        $_GET['action'] = 'visitGalleryPage';
        require 'view/visitGalleryPage.php';
    }
    else{
        $_GET['action'] = 'signIn';
        require 'view/signIn.php';
    }
}
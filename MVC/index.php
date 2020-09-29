<?php

/**
 * Authors : Pedroletti Michael and Theo Cook
 * CreationFile date : 29.09.2020
 * Description : Redirct all action on the good controller
 **/

session_start();

// Require all controller's files
$files = glob(__DIR__ . '/controller/*.php');
foreach ($files as $file) {
    require($file);
}

// Redirect the user depending of his actions
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'dashboard':
            displayDashboard();
            break;
        case 'signIn':
            displaySignIn(false);
            break;
        case 'requestLogin':
            displaySignIn($_POST);
            break;
        case 'createNewGalleryPage':
            displayNewGalleryPage();
            break;
        case 'visitGalleryPage':
            displayVisitGalleryPage();
            break;
        default:
            displayDashboard();
            break;
    }
} else {
    displayDashboard();
}

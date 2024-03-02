<?php

session_start();
require_once '../config/db.php';

// user tidak bisa langsung mengakses form admin
if (!isset($_SESSION['id_user'])){
    header('location: ../index.php');
}

// view
require_once 'includes/v_admin.php'; //content
require_once 'includes/v_home.php';
require_once 'includes/v_login.php';
require_once 'includes/kategori.php';

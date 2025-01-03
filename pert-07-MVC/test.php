<?php


$action = isset($_GET['action']) ? $_GET['action'] : '';

// Tentukan aksi yang harus dijalankan berdasarkan parameter 'action' di URL
if ($action === 'login') {
    // Panggil controller login
    include_once 'UserController.php';
    $controller = new UserController();
    $controller->userCheck();
} else {
    echo 'ada yang salah';
}
?>


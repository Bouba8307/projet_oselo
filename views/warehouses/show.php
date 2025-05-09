<?php
// Include controller
include_once '../../controllers/WarehouseController.php';

// Check if ID is set
if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Initialize controller
    $controller = new WarehouseController();
    
    // Display warehouse details
    $controller->show($_GET['id']);
} else {
    // Redirect to index if ID is not set
    header("Location: index.php");
    exit();
}
?>
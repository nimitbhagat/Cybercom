<?php

if (isset($_SESSION['id'])) {

    require_once('database/database.php');

    $database = new DatabaseConnection();

    if (isset($_GET['id'])) {
        if ($database->deleteCategory($_GET['is'])) {
            header('location:/manage_category.php?msg=Deleted');
        } else {
            header('location:/manage_category.php?msg=Error In Deleting');
        }
    }
}

<?php
require_once('database.php');

$contacts = new DatabaseConnection();

if (isset($_POST['id'])) {
    $contacts->deleteRecord($_POST['id']);
}

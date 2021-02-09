<?php
require_once('database.php');

$contacts = new DatabaseConnection();

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['title']) && isset($_POST['created'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['title']) && !empty($_POST['created'])) {
        //$contacts->insertContacts($_POST);
    }
}

//$contacts->insertContacts($data);

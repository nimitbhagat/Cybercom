<?php

require_once('database.php');

$contacts = new DatabaseConnection();

//$contacts->connect();

$limit = 10;
$total_records = $contacts->countRecords();
$total_page = ceil($total_records / $limit);
$contacts->selectContacts(0, $limit);


if (!isset($_GET["page"]) || $_GET["page"] > $total_page) {
    $page_no = 1;
} else {
    $page_no  = $_GET["page"];
}
$start_from = ($page_no - 1) * $limit;

$result = $contacts->selectContacts($start_from, $limit);





?>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Title</th>
                <th>Created</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>

            <?php
            $index = ($page_no * $limit) - $limit;
            while ($row = mysqli_fetch_assoc($result)) {
                $index++;
            ?>
                <tr>
                    <td><?php echo ($index); ?></td>
                    <td><?php echo ($row['Name']); ?></td>
                    <td><?php echo ($row['Email']); ?></td>
                    <td><?php echo ($row['Phone']); ?></td>
                    <td><?php echo ($row['Title']); ?></td>
                    <td><?php echo ($row['Created']); ?></td>
                    <td>
                        <a href="update.php?id=<?php echo ($row['id']); ?>" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                        <button class="btn btn-danger" onclick="deleteContact(this);" value="<?php echo ($row['id']); ?>"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</div>
<?php
if ($total_page) {
    foreach (range(1, $total_page) as $i) {
?>
        <a href="contacts.php?page=<?php echo $i; ?>" class="btn btn-default"><?php echo $i; ?></a>
<?php
    }
}
?>

<div id="demo"></div>
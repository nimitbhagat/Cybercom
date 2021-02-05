<?php

if (isset($_REQUEST['search_text']) && !empty($_REQUEST['search_text'])) {
    $s = $_REQUEST['search_text'];
    if (@$con = mysqli_connect('localhost', 'root', '', 'cybercom')) {

        $query = "select * from users where username like '%" . mysqli_real_escape_string($con, $s) . "%' or password like '%" . mysqli_real_escape_string($con, $s) . "%' order by username";

        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
?>
            <tr>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
            </tr>
<?php
        }
    }
}
?>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Date Of Birth</th>
        </tr>
    </thead>
    <tbody>

        <?php

        if (@$con = mysqli_connect('localhost', 'root', '', 'cybercom')) {

            $query = "select * from tbluser";

            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>
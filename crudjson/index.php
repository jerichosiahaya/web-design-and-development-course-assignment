<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CRUD Operation on JSON File using PHP</title>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <td colspan="7" align="right"><a href="add.php">Add</a></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Address</td>
            <td>Email</td>
            <td>Mobile</td>
            <td>Action</td>
        </tr>
        <?php
        $data = file_get_contents('users.json');
        $data = json_decode($data);
        $index = 1;
        if (!empty($data)) {
            foreach ($data as $row) {
        ?>
                <tr>
                    <td><?php echo $row->first_name; ?></td>
                    <td><?php echo $row->last_name; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->address; ?></td>
                    <td><?php echo $row->mobile; ?></td>
                    <td><a href="update.php?edit_id=<?php echo $index; ?>">Edit</a>&nbsp; &nbsp;<a href="delete.php?delete_id=<?php echo $index; ?>">Delete</a> </td>
                </tr>
        <?php
                $index++;
            }
        }
        ?>

    </table>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CRUD Operation using JSON File in PHP</title>
</head>

<body>
    <?php
    $edit_id = $_GET['edit_id'];
    //get json data
    $data = file_get_contents('users.json');
    $data_array = json_decode($data, true);
    $row = $data_array[$edit_id];
    ?>
    <?php
    if (isset($_POST['btnUpdate'])) {
        $update_arr = array(
            'id' => $_POST['id'],
            'first_name' => $_POST['txtFname'],
            'last_name' => $_POST['txtLname'],
            'address' => $_POST['txtAddress'],
            'email' => $_POST['txtEmail'],
            'mobile' => $_POST['txtMobile']
        );
        $data_array[$edit_id] = $update_arr;
        $data = json_encode($data_array, JSON_PRETTY_PRINT);
        file_put_contents('users.json', $data);
        header('location: index.php');
    }
    ?>

    <form method="post" name="frmUpdate">
        <table align="center">
            <tr>
                <td colspan="2" align="center">Update Record</td>
            </tr>

            <tr>
                <td>First Name</td>
                <td><input type="text" name="txtFname" value="<?php echo $row['first_name']; ?>"> </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="txtLname" value="<?php echo $row['last_name']; ?>"> </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="txtAddress" rows="4" cols="16"><?php echo $row['address']; ?></textarea> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="txtEmail" value="<?php echo $row['email']; ?>"> </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="txtMobile" value="<?php echo $row['mobile']; ?>"> </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Update" name="btnUpdate"> </td>
            </tr>
        </table>
    </form>
</body>

</html>
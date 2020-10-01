<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CRUD Operation using JSON File in PHP</title>
</head>

<body>
    <?php
    if (isset($_POST['btnadd'])) {
        $data = file_get_contents('users.json');
        $data = json_decode($data, true);
        $add_arr = array(
            'first_name' => $_POST['txtFname'],
            'last_name' => $_POST['txtLname'],
            'address' => $_POST['txtAddress'],
            'email' => $_POST['txtEmail'],
            'mobile' => $_POST['txtMobile']
        );
        $data[] = $add_arr;

        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('users.json', $data);
        header('location: index.php');
    }
    ?>
    <form method="post" name="frmAdd">
        <table align="center">
            <tr>
                <td colspan="2" align="center">Add Record</td>
            </tr>

            <tr>
                <td>First Name</td>
                <td><input type="text" name="txtFname"> </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="txtLname"> </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="txtAddress" rows="4" cols="16"></textarea> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="txtEmail"> </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="txtMobile"> </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Add" name="btnadd"> </td>
            </tr>
        </table>
    </form>
</body>

</html>
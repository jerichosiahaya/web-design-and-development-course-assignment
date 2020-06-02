<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<!--
    * Jericho Cristofel Siahaya
    * 00000032932
-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="box">
        <style scoped>
            .button-success,
            .button-error,
            .button-warning,
            .button-secondary {
                color: white;
                border-radius: 4px;
                text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
            }

            .button-success {
                background: rgb(28, 184, 65);
                /* this is a green */
            }

            .button-error {
                background: rgb(202, 60, 60);
                /* this is a maroon */
            }

            .button-warning {
                background: rgb(223, 117, 20);
                /* this is an orange */
            }

            .button-secondary {
                background: rgb(66, 184, 221);
                /* this is a light blue */
            }
        </style>
        <h1>Page Internal</h1>
        <h2>Halaman ini dapat diakses oleh user yang sudah login,
            yaitu dosen dan mahasiswa</h2>

        <?php if ($_SESSION['role'] == "dosen") : ?>
            <a href="page_dosen.php"> <button class="button-secondary pure-button">Page Dosen</button></a> |
        <?php endif; ?>

        <?php if ($_SESSION['role'] == "mahasiswa") : ?>
            <a href="page_mahasiswa.php"> <button class="button-secondary pure-button">Page Mahasiswa</button></a> |
        <?php endif; ?>

        <a href="logout.php"><button class="button-warning pure-button">Logout</button></a>
    </div>
    <script src="" async defer></script>
</body>

</html>




<?php
// echo $_SESSION['role'];
?>
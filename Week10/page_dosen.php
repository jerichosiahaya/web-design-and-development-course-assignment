<?php
session_start();
if ($_SESSION['role'] != "dosen") {
    header("Location: page_mahasiswa.php");
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WEEK 10 | MAHASISWA</title>
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
        <h1>Page Dosen</h1>
        <h2>Halaman ini hanya bisa diakses oleh dosen.</h2>
        <a href="page_internal.php"><button class="button-secondary pure-button">Kembali ke halaman utama</button></a> |
        <a href="logout.php"><button class="button-warning pure-button">Logout</button></a>
    </div>
    <script src="" async defer></script>
</body>

</html>
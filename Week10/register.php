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
    <form action="register_proses.php" method="post" class="pure-form pure-form-stacked">
        <fieldset>

            <div class="box">
                <h1>Register</h1>
                <label for="email">Username:</label>
                <input id="email" type="text" name="uname" placeholder="Username">
            </div>

            <div class="box">
                <label for="password">Password:</label>
                <input id="password" type="password" name="upass" placeholder="Password">
            </div>

            <div class="box">
                <label for="role">Role:</label>
                <select name="role" id="role">
                    <option value="dosen">Dosen</option>
                    <option value="mahasiswa">Mahasiswa</option>
                </select>
            </div>

            <div class="box">
                <button type="submit" class="pure-button pure-button-primary">Sign up</button>
                <p>Sudah punya akun? <a href="login.php">Login</a></p>
            </div>
        </fieldset>
    </form>
    <script src="" async defer></script>
</body>

</html>
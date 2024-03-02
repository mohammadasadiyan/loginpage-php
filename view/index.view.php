<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("./partials/bootstrap.php"); ?>
    <link rel="stylesheet" href="../partials/login.view.css"/>
</head>
<body>
    <?php 
        $email = '';
        $pass = '';
        function post() {
            global $email, $pass;
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                $pass = filter_input(INPUT_POST, 'password', FILTER_VALIDATE_INT);
                if (!isset($email)) {
                    echo "<p>empty email</p>";
                }
                if (empty($password)) {
                    echo "<p>empty password</p>";
                }
                echo $_POST['email'];
                echo $_POST['password'];
                echo output($_POST);
            }
        }
    ?>
    <div class="container">
    <?php require "partials/login.view.php" ?>
    <p><?= output($_POST); ?></p>
    </div>
    <div class="container output">
</div>
</body>
</html>
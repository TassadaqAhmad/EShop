<?php session_start()?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="color-scheme" content="dark light">
    <title>Clever Dashboard | Made by Ahmad Awan</title>
    <link rel="shortcut icon" href="../assets/img/logos/clever-primary.svg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/utilities.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/npm/bootstrap-icons-1.7.2/font/bootstrap-icons.css">
</head>

<body>

    <?php
    require "../config.php";

    if (isset($_POST['confit'])) {
        $varif = $_POST['code'];
        $confirm = $_GET['user'];
        $err;

        $check = mysqli_query($conn, "SELECT * FROM users WHERE Id='$confirm' And varifCode='$varif'");

        if ($check) {
            $insert = mysqli_query($conn, "UPDATE users SET isActive='Yes' WHERE Id='$confirm'");

            if (mysqli_num_rows($check)) {
                while ($row = mysqli_fetch_assoc($check)) {
                    $_SESSION['logit'] = $row['Id'];
                }
                header('Location: ../index.php');
            }
        }
    }

    ?>

    <div class="px-5 py-5 p-lg-0 h-screen bg-surface-secondary d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="col-12 col-md-9 col-lg-6 min-h-lg-screen d-flex flex-column justify-content-center py-lg-16 px-lg-20 position-relative">
                <div class="row">
                    <div class="col-lg-10 col-md-9 col-xl-7 mx-auto">
                        <div class="text-center mb-12">
                            <h3 class="display-5">🔐</h3>
                            <h1 class="ls-tight font-bolder mt-6">Varify your account</h1>
                            <p class="mt-2">Enter your varification code</p>
                            <p class="my-2 text-danger">
                                <?php

                                if (isset($_POST['confit']) && empty($_POST['code'])) {
                                    echo "Please enter varification code!";
                                }
                                ?>
                            </p>
                        </div>
                        <form method="post">
                            <div class="mb-5">
                                <label class="form-label" for="varify">Enter code</label>
                                <input type="number" name="code" class="form-control" id="varify" placeholder="Your email address">
                            </div>
                            <div>
                                <button type="submit" name="confit" class="btn btn-primary w-full">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
</body>

</html>
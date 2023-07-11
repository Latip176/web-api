<?php

include 'config.php';
include '../connect/koneksi.php';

$login_button = '';

if (isset($_GET['code']) && isset($_SESSION['user_email'])) {
    header("Location:../");
    exit;
}

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $_SESSION['access_token'] = $token['access_token'];

    // get info user
    $gauth = new Google_Service_Oauth2($client);
    $data = $gauth->userinfo->get();

    if (!empty($data['picture'])) {
        $_SESSION['user_image'] = $data['picture'];
    }
     
    if (!empty($data['email'])) {
        $_SESSION['user_email'] = $data['email'];
    }

    if (!empty($data['name'])) {
        $_SESSION['user_name'] = $data['name'];
    }

}

if (!isset($_SESSION['access_token'])) {
    $login_button = '<a href="'.$client->createAuthUrl().'">Login with Google</a>';
} else {
    $user_email = $_SESSION['user_email'];
    $filter = $collection->findOne(["email" => $user_email]);
    
    if (!$filter) {
        $user_name = $_SESSION['user_name'];
        $user_image = $_SESSION['user_image'];
        $collection->insertOne(["name" => $user_name, "email" => $user_email, "image" => $user_image]);
    } else {
        header("Location:../");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with Google</title>
</head>
<body>
    <div class="container">
        <h2 align="center">
            Login with Google Account
        </h2>
        <?php
        if ($login_button == "") {
            echo "Welcome User <br>";
            echo "Nama: " . $_SESSION['user_name'] . "<br>";
            echo "Email: " . $_SESSION['user_email'] . "<br>";
            echo "<img src='" . $_SESSION['user_image'] . "'><br>";
            echo '<a href="../index.php">Lanjut masuk ke Web</a>';
        } else {
            session_destroy();
            $client->revokeToken();
            echo '<div align="center">' . $login_button . '</div>';
        }
        ?>
    </div>
</body>
</html>

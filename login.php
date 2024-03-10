<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf(
        "SELECT * FROM users
                    WHERE email = '%s'",
        $mysqli->real_escape_string($_POST["email"])
    );

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {

        if (password_verify($_POST["password"], $user["password"])) {

            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

            header("Location: order.php");
            exit;
        }
    }

    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="shortcut icon" href="./assets/images/logo.jpeg" type="image/x-icon">
    <!-- <link rel="stylesheet" href="styles.css"> -->


    <style type="text/css">
        html,
        body {
            height: 100%;
            /* font-family: Arial, sans-serif; */
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            }

        html {
            display: table;
            margin: auto;
        }

        body {
            display: table-cell;
            vertical-align: middle;
        }

        .margin {
            margin: 0 !important;
        }
        button:hover {
    background-color: #0056b3;
  }
  button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  .container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  h2 {
    text-align: center;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
  }
  
  input[type="text"],
  input[type="email"],
  input[type="tel"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
    </style>


<body>

    <center>
        <img src="./assets/images/logo.jpeg" alt="IMATRANS" width="80">
    </center>
    <center>
        <h1>Login</h1>
        </section>
        <?php if ($is_invalid) : ?>
            <em>Invalid login</em>
        <?php endif; ?>

        <form method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <div class="button-login">
                <button>Log in</button>
            </div>
            </li>
            <div class="nav-item">
               
            </div>

        </form>
    </center>
    <div>
        <footer class="page-footer">
            <div class="footer-copyright">
                <div class="container">
                    
                    © 2024Copyright |All Rights Reserved

                </div>
</body>

</html>
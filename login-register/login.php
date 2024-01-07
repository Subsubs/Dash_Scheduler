<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASH</title>
    <link rel="icon" href="img/dash2.png" type="image/x-icon">
    <link rel="stylesheet" href="css1/style2.css">
</head>

<body>
    <header>
        <h3 class="Dash">DASH LOGIN PAGE</h3>
        <nav class="navigation">
            <a href="home.php">Home</a>   
            <a href="loginpage.php">Admin Panel</a>
        </nav>
    </header>

    <div class="container">
        <div class="item">
            <h2 class="logo"><img src="img/dash2.png"></h2>
            <div class="text-item">
                <h2>Welcome!</h2>
                <p>Experience seamless scheduling on our platform, powered by cutting-edge algorithms and real-time data integration. Say goodbye to conflicts and hello to efficiency with DASH!</p>
            </div>
        </div>

        <?php
        session_start();

        // Database connection
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $database = "login_register";

        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the form is submitted for login
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login_username"]) && isset($_POST["login_password"])) {
            // Get input data
            $login_username = $_POST["login_username"];
            $login_password = $_POST["login_password"];

            // Retrieve hashed password from the database
            $stmt = $conn->prepare("SELECT id, username, password FROM admin_credentials WHERE username = ?");
            $stmt->bind_param("s", $login_username);
            $stmt->execute();
            $stmt->bind_result($user_id, $db_username, $hashed_password);
            $stmt->fetch();
            $stmt->close();

        }
    ?>

        <div class="login-section">
            <div class="form-box login">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <h2>Sign In</h2>
         
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" id="login_username" name="login_username" required><br>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" id="login_password" name="login_password" required><br>
                        <label>Password</label>
                    </div>
                    
                    <?php
                // Check if the form is submitted for login
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login_username"]) && isset($_POST["login_password"])) {
                    // Verify the password
                    if (password_verify($login_password, $hashed_password)) {
                        // Password is correct, set session variables
                        $_SESSION["user_id"] = $user_id;
                        $_SESSION["username"] = $db_username;
                        header("Location: index.php"); // Redirect to the admin panel
                        exit();
                    } else {
                        echo '<div class="error-message">Incorrect username or password.</div>';
                    }
                }
                ?>

                    <button class="btn">Sign In</button>

                </form>
            </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
<?php
// Simple login logic for demonstration
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    <?php
    session_start();
    $error = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        // Replace with your own authentication logic
        if ($username === 'admin' && $password === 'password') {
            $_SESSION['logged_in'] = true;
            header('Location: index.php');
            exit();
        } else {
            $error = 'Invalid username or password.';
        }
    }
            background: #fff;
            padding: 2rem 2.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            width: 350px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }
        .login-btn {
            width: 100%;
            padding: 0.7rem;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 1rem;
        }
        .login-btn:hover {
            background: #0056b3;
        }
        .login-container .extra {
            text-align: center;
            margin-top: 1rem;
        }
        .login-container .extra a {
            color: #007bff;
            text-decoration: none;
        }
        .login-container .extra a:hover {
            text-decoration: underline;
        }
        .error {
            color: #d9534f;
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <div class="extra">
            <a href="#">Forgot Password?</a>
        </div>
    </div>
</body>
</html>

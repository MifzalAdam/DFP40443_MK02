<?php
require 'config.php';

$rememberUser = $_COOKIE['remember_user'] ?? "";

// LOGIN LOGIC
if(isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user === "admin" && $pass === "123") {
        $_SESSION['username'] = $user;

        if(isset($_POST['remember'])) {
            setcookie("remember_user", $user, time()+3600);
        }

        header("Location: katalog.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Member Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="card shadow p-4" style="width: 400px;">
        <h3 class="text-center mb-3">🔐 Member Login</h3>

        <?php if(!empty($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" 
                       value="<?= $rememberUser ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember">
                <label class="form-check-label">Remember Me</label>
            </div>

            <button type="submit" name="login" class="btn btn-primary w-100">
                Login
            </button>
        </form>
    </div>
</div>

</body>
</html>

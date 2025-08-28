<?php
include_once 'resource/config/app.php';
session_start(); 

$isLoggedIn = isset($_SESSION['user']);

try {
    $conn = new PDO("sqlite:resource/config/database/imago_authentication.db"); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

$users = [];
if ($isLoggedIn) {
    $stmt = $conn->prepare("SELECT username, email, created_at FROM users WHERE username = :username LIMIT 1");
    $stmt->execute([':username' => $_SESSION['user']]);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Homepage</title>
    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f9f9f9;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 24px;
        background: #333;
        color: #fff;
    }

    header .logo img {
        height: 40px;
    }

    .navbar {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .navbar span {
        font-weight: 500;
    }

    .navbar a.btn {
        background: #ff9800;
        color: #fff;
        padding: 6px 14px;
        border-radius: 6px;
        text-decoration: none;
        transition: 0.3s;
    }

    .navbar a.btn:hover {
        background: #e68900;
    }

    .home {
        padding: 2rem;
    }

    .user-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1rem;
        margin-top: 2rem;
    }

    .user-card {
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 1rem;
        background: #fff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }

    .user-card h4 {
        margin: 0 0 .5rem;
    }

    .user-card p {
        margin: .2rem 0;
        font-size: 14px;
        color: #555;
    }
    </style>
</head>

<body>
    <header>
        <a href="#" class="logo">
            <img src="resource/assets/logo.png" alt="Logo Tosepatu" />
        </a>
        <nav class="navbar">
            <?php if (!$isLoggedIn): ?>
            <a href="resource/view/auth/sign-in.php" class="btn">Masuk</a>
            <?php else: ?>
            <span>Halo, <?= htmlspecialchars($_SESSION['user']) ?></span>
            <a href="resource/php/logout.php" class="btn">Logout</a>
            <?php endif; ?>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="content">
            <h3>Profil User</h3>
            <?php if ($isLoggedIn && $users): ?>
            <div class="user-list">
                <?php foreach ($users as $u): ?>
                <div class="user-card">
                    <h4><?= htmlspecialchars($u['username']) ?></h4>
                    <p>Email: <?= htmlspecialchars($u['email']) ?></p>
                    <p>Dibuat: <?= htmlspecialchars($u['created_at']) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <?php else: ?>
            <p>Silakan login untuk melihat profil Anda.</p>
            <?php endif; ?>
        </div>
    </section>
</body>

</html>
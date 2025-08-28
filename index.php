<?php
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
        background: #5fd3d0;
        color: #fff;
        padding: 6px 14px;
        border-radius: 6px;
        text-decoration: none;
        transition: 0.3s;
    }

    .navbar a.btn:hover {
        background: #419290ff;
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
        <nav class="navbar">
            <a href="resource/view/auth/sign-in.php" class="btn">Masuk</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="content">
            <h3>Profil User</h3>

        </div>
    </section>
</body>

</html>
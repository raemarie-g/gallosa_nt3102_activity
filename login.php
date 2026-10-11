<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Login — Brgy IT Service Request System</title>
        <?php

            include 'phpfiles/shared/header.php';
        ?>

        <link rel="stylesheet" href="css/auth.css" />
    </head>

    <body>
        <main class="auth-page">
            <div class="auth-wrap">

                <!-- Brand -->
                <div class="auth-brand">
                    <div class="auth-brand-badge">
                        <i class="bi bi-bank2"></i>
                    </div>
                    <span class="auth-eyebrow">Brgy IT Service Request System</span>
                    <h1 class="auth-title">Welcome Back</h1>
                </div>

                <!-- Folder Tabs -->
                <?php include'phpfiles/auth/folder_tabs.php' ?>

                <!-- Login Card -->
                <div class="card auth-card">
                    <div class="tab-content" id="loginTabsContent">

                        <?php include 'phpfiles/auth/login/resident_login.php'; ?>
                        <?php include 'phpfiles/auth/login/official_login.php'; ?>

                    </div>
                </div>

            </div>
        </main>

        <?php include 'phpfiles/auth/script.php'; ?>

    </body>
</html>
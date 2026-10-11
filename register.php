<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Register — Brgy IT Service Request System</title>

        <?php include 'phpfiles/shared/header.php';?>

        <link rel="stylesheet" href="css/auth.css" />
    </head>

    <body>
        <main class="auth-page">
            <div class="auth-wrap" style="max-width: 460px;">

                <!-- Brand -->
                <div class="auth-brand">
                    <div class="auth-brand-badge">
                        <i class="bi bi-bank2"></i>
                    </div>
                    <span class="auth-eyebrow">Brgy IT Service Request System</span>
                    <h1 class="auth-title">Create Your Account</h1>
                </div>

                <!-- Folder Tabs -->
                <?php
                    // to target the correct resident and official panel since i used the same folder tabs as the login
                    $registerFolderTabs = true;
                    include 'phpfiles/auth/folder_tabs.php';
                    unset($registerFolderTabs);
                ?>

                <!-- Register Card -->
                <div class="card auth-card">
                    <div class="tab-content" id="registerTabsContent">

                        <?php include 'phpfiles/auth/registration/resident_registration.php'; ?>
                        <?php include 'phpfiles/auth/registration/official_registration.php'; ?>


                    </div>
                </div>
            </div>
        </main>

        <?php include 'phpfiles/auth/script.php'; ?>
    </body>
</html>
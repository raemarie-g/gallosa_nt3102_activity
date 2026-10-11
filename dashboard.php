<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <!-- to check if naka login na ba si user -->
        <script>
        if (sessionStorage.getItem("loggedIn") !== "true") {
            window.location.replace("login.php");
        }
        </script>

        <title>Dashboard — Brgy IT Service Request System</title>

        <?php include 'phpfiles/shared/header.php'; ?>

        <link rel="stylesheet" href="css/dashboard.css" />
    </head>

    <body>

        <!-- Top bar -->
        <?php include 'phpfiles/dashboard/topbar.php'; ?>

        <div class="app-shell">

            <!-- Sidebar -->
            <?php include 'phpfiles/dashboard/sidebar.php'; ?>

            <!-- Main content -->
            <main class="main-content">

                <?php include 'phpfiles/dashboard/dashboard_hero.php'; ?>
                <?php include 'phpfiles/dashboard/dashboard_services.php'; ?>
                <?php include 'phpfiles/dashboard/dashboard_recent_requests.php'; ?>

            </main>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
            ></script>
        <script src="js/dashboard_sidebar.js"></script>
        <script>
        document.getElementById("welcomeName").textContent = sessionStorage.getItem("username");
        </script>
    </body>
</html>
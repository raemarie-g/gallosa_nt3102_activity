<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <!-- to check if naka login na ba si user -->
    <script>
        if (sessionStorage.getItem("loggedIn") !== "true") {
            window.location.replace("login.php");
        }
    </script>

    <title>Home — Brgy IT Service Request System</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/dashboard.css" />
</head>

<body>

    <!-- Top bar -->
    <header class="topbar">
        <div class="topbar-left">
            <button class="sidebar-toggle" id="sidebarToggle" aria-label="Toggle menu" aria-expanded="true">
                <i class="bi bi-list"></i>
            </button>
            <span class="topbar-logo"><i class="bi bi-bank2"></i></span>
            <div class="topbar-title">
                <div class="name">Brgy IT Service Request System</div>
                <div class="tagline">Digital Barangay Services</div>
            </div>
        </div>

        <div class="topbar-right">
            <div class="topbar-search">
                <i class="bi bi-search"></i>
                <input type="search" placeholder="Search services..." aria-label="Search services" />
            </div>
            <button class="topbar-bell" aria-label="Notifications">
                <i class="bi bi-bell"></i>
                <span class="badge rounded-pill bg-danger">2</span>
            </button>
            <a href="#" class="topbar-user">
                <span class="topbar-avatar">JD</span>
                <span class="who">
                    <div class="who-name">Juan dela Cruz</div>
                    <div class="who-role">Resident</div>
                </span>
            </a>
        </div>
    </header>

    <div class="app-shell">

        <!-- Sidebar -->
        <?php include 'phpfiles/sidebar.php'; ?>

        <!-- Main content -->
        <main class="main-content">

            <!-- Hero -->
            <section class="home-hero">
                <span class="eyebrow on-dark">Welcome back, <span id="welcomeName"></span>!</span>
                <h1>Your Barangay Services, Made Simpler.</h1>
                <p>Submit requests, track their progress, and access barangay services in one convenient place.</p>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="#" class="hero-btn-primary text-decoration-none"><i class="bi bi-plus-circle me-1"></i> Request a Service</a>
                    <a href="#" class="hero-btn-outline text-decoration-none "><i class="bi bi-search me-1"></i> Track My Request</a>
                </div>
            </section>

            <!-- Services -->
            <section class="mt-4">
                <h2 class="section-heading">Barangay Services</h2>
                <div class="row g-3">
                    <div class="col-6 col-md-3">
                        <div class="service-card">
                            <span class="service-icon"><i class="bi bi-file-earmark-text-fill"></i></span>
                            <h3>Barangay Documents</h3>
                            <p>Request official barangay documents and related records.</p>
                            <a href="#" class="btn btn-outline w-100">Request Document</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="service-card">
                            <span class="service-icon"><i class="bi bi-award-fill"></i></span>
                            <h3>Certificates</h3>
                            <p>Request barangay certificates and monitor their processing.</p>
                            <a href="#" class="btn btn-outline w-100">Request Certificate</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="service-card">
                            <span class="service-icon"><i class="bi bi-building-fill"></i></span>
                            <h3>Facility Reservation</h3>
                            <p>Request and reserve available barangay facilities.</p>
                            <a href="#" class="btn btn-outline w-100">Reserve Facility</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="service-card">
                            <span class="service-icon"><i class="bi bi-clipboard-check-fill"></i></span>
                            <h3>Track Request</h3>
                            <p>Check the current status of your submitted requests.</p>
                            <a href="#" class="btn btn-outline w-100">Track Request</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Actions + Recent requests -->
            <section class="mt-4">
                <div class="row g-3">
                    <!-- <div class="col-lg-5">
                        <div class="panel-card">
                            <div class="panel-title">What would you like to do?</div>
                            <div class="action-list">
                                <a href="request-service.html" class="action-item">
                                    <i class="bi bi-pencil-square action-ico"></i> Submit a Request
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                                <a href="track-request.html" class="action-item">
                                    <i class="bi bi-search action-ico"></i> Track a Request
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                                <a href="request-history.html" class="action-item">
                                    <i class="bi bi-clock-history action-ico"></i> View Request History
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                                <a href="facilities.html" class="action-item">
                                    <i class="bi bi-calendar-week action-ico"></i> Reserve a Facility
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-lg-7">
                        <div class="panel-card">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="panel-title mb-0">Recent Requests</div>
                                <a href="#" class="text-brand fw-semibold" style="font-size:0.85rem;">View All</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table requests-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Request</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Barangay Clearance</td>
                                            <td>Sept. 5, 2026</td>
                                            <td><span class="status-pill status-processing">Processing</span></td>
                                        </tr>
                                        <tr>
                                            <td>Certificate of Residency</td>
                                            <td>Sept. 3, 2026</td>
                                            <td><span class="status-pill status-approved">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>Facility Reservation</td>
                                            <td>Sept. 1, 2026</td>
                                            <td><span class="status-pill status-pending">Pending</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <title>Login — Brgy IT Service Request System</title>
    <?php 

    include 'phpfiles/header.php';
    ?>
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
            <ul class="nav auth-tabs" id="loginTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button
                        type="button"
                        role="tab"
                        id="resident-tab"
                        class="nav-link active rounded"
                        data-bs-toggle="tab"
                        data-bs-target="#resident"
                        aria-controls="resident"
                        aria-selected="true"
                    >
                        <i class="bi bi-house-fill"></i> Resident
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        type="button"
                        role="tab"
                        id="official-tab"
                        class="nav-link rounded"
                        data-bs-toggle="tab"
                        data-bs-target="#official"
                        aria-controls="official"
                        aria-selected="false"
                    >
                        <i class="bi bi-shield-fill"></i> Official
                    </button>
                </li>
            </ul>

            <!-- Login Card -->
            <div class="card auth-card">
                <div class="tab-content" id="loginTabsContent">

                    <!-- Resident Login -->
                    <div class="tab-pane fade show active" id="resident" role="tabpanel" aria-labelledby="resident-tab" tabindex="0">
                        <div class="card-body">
                            <form id="residentLoginForm" novalidate>
                                <div class="mb-3">
                                    <label for="residentLogin" class="form-label auth-label">Email or Username</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="login"
                                        id="residentLogin"
                                        placeholder="admin"
                                        autocomplete="username"
                                    />
                                </div>

                                <div class="mb-3">
                                    <label for="residentPassword" class="form-label auth-label">Password</label>
                                    <div class="auth-password-wrap">
                                        <input
                                            type="password"
                                            class="form-control"
                                            name="password"
                                            id="residentPassword"
                                            placeholder="12345"
                                            autocomplete="current-password"
                                        />
                                        <button type="button" class="auth-toggle-pw" data-target="residentPassword" aria-label="Show password">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>

                                <button type="submit" class="btn auth-submit w-100">Login</button>

                                <p class="auth-footer-text mt-3 mb-0">
                                    Don't have an account? <a href="register.php">Register</a>
                                </p>
                            </form>
                        </div>
                    </div>

                    <!-- Barangay Official Login -->
                    <div class="tab-pane fade" id="official" role="tabpanel" aria-labelledby="official-tab" tabindex="0">
                        <div class="card-body">
                            <form id="officialLoginForm" novalidate>
                                <div class="mb-3">
                                    <label for="officialPosition" class="form-label auth-label">Official Position *</label>
                                    <select class="form-select" id="officialPosition" name="position">
                                        <option value="" selected disabled>Select your position</option>
                                        <option value="captain">Barangay Captain</option>
                                        <option value="kagawad">Barangay Kagawad</option>
                                        <option value="secretary">Barangay Secretary</option>
                                        <option value="treasurer">Barangay Treasurer</option>
                                        <option value="sk_chair">SK Chairperson</option>
                                        <option value="sk_kagawad">SK Kagawad</option>
                                        <option value="other">Other Authorized Official</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="officialLogin" class="form-label auth-label">Email or Username</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="login"
                                        id="officialLogin"
                                        placeholder="admin"
                                        autocomplete="username"
                                    />
                                </div>

                                <div class="mb-3">
                                    <label for="officialPassword" class="form-label auth-label">Password</label>
                                    <div class="auth-password-wrap">
                                        <input
                                            type="password"
                                            class="form-control"
                                            name="password"
                                            id="officialPassword"
                                            placeholder="12345"
                                            autocomplete="current-password"
                                        />
                                        <button type="button" class="auth-toggle-pw" data-target="officialPassword" aria-label="Show password">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>

                                <button type="submit" class="btn auth-submit w-100">Login</button>

                                <p class="auth-footer-text mt-3 mb-0">
                                    Don't have an account? <a href="register.php">Register</a>
                                </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>

    <!-- Bootstrap JS Bundle -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"
    ></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.22.1/jquery.validate.min.js" integrity="sha512-qu7dMuIm2f0KcKZ3BOoP4c+Hn+r4E8PbD2Ro4rmKsOyheCxcwhzQpf6SojA76dn+owqfANzfTFUTkGA+HpHjOA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/auth.js"></script>
    
    <script src="js/password_visibility.js"></script>
    
</body>
</html>
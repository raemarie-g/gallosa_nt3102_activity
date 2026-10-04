<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <title>Register — Brgy IT Service Request System</title>
    <?php 
    include 'phpfiles/header.php';
    ?>
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
            <ul class="nav auth-tabs" id="registerTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button
                        type="button"
                        role="tab"
                        id="reg-resident-tab"
                        class="nav-link active"
                        data-bs-toggle="tab"
                        data-bs-target="#regResident"
                        aria-controls="regResident"
                        aria-selected="true"
                    >
                        <i class="bi bi-house-fill"></i> Resident
                    </button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <button
                        type="button"
                        role="tab"
                        id="reg-official-tab"
                        class="nav-link"
                        data-bs-toggle="tab"
                        data-bs-target="#regOfficial"
                        aria-controls="regOfficial"
                        aria-selected="false"
                    >
                        <i class="bi bi-shield-fill"></i> Official
                    </button>
                </li>
            </ul>

            <!-- Register Card -->
            <div class="card auth-card">
                <div class="tab-content" id="registerTabsContent">

                    <!-- Resident Registration -->
                    <div class="tab-pane fade show active" id="regResident" role="tabpanel" aria-labelledby="reg-resident-tab" tabindex="0">
                        <div class="card-body">
                            <form id="residentRegisterForm" novalidate>
                                <div class="mb-3">
                                    <label for="resEmail" class="form-label auth-label">Email</label>
                                    <input type="email" class="form-control" id="resEmail" name="email" placeholder="abc@mail.com" autocomplete="email" />
                                </div>

                                <div class="mb-3">
                                    <label for="resUsername" class="form-label auth-label">Username</label>
                                    <input type="text" class="form-control" id="resUsername" name="username" placeholder="Choose a username" autocomplete="username" />
                                </div>

                                <div class="mb-3">
                                    <label for="resPassword" class="form-label auth-label">Password</label>
                                    <div class="auth-password-wrap">
                                        <input type="password" class="form-control" id="resPassword" name="password" placeholder="Create a password" autocomplete="new-password" />
                                        <button type="button" class="auth-toggle-pw" data-target="resPassword" aria-label="Show password">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="resConfirmPassword" class="form-label auth-label">Confirm Password</label>
                                    <div class="auth-password-wrap">
                                        <input type="password" class="form-control" id="resConfirmPassword" name="confirmPassword" placeholder="Re-enter your password" autocomplete="new-password" />
                                        <button type="button" class="auth-toggle-pw" data-target="resConfirmPassword" aria-label="Show password">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>

                                <button type="submit" class="btn auth-submit w-100">Create Account</button>

                                <p class="auth-footer-text mt-3 mb-0">
                                    Already have an account? <a href="login.php">Login</a>
                                </p>
                            </form>
                        </div>
                    </div>

                    <!-- Official Registration -->
                    <div class="tab-pane fade" id="regOfficial" role="tabpanel" aria-labelledby="reg-official-tab" tabindex="0">
                        <div class="card-body">
                            <form id="officialRegisterForm" novalidate>
                                <div class="mb-3">
                                    <label for="offPosition" class="form-label auth-label">Official Position *</label>
                                    <select class="form-select" id="offPosition" name="position">
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
                                    <label for="offEmail" class="form-label auth-label">Email</label>
                                    <input type="email" class="form-control" id="offEmail" name="email" placeholder="abc@mail.com" autocomplete="email" />
                                </div>

                                <div class="mb-3">
                                    <label for="offUsername" class="form-label auth-label">Username</label>
                                    <input type="text" class="form-control" id="offUsername" name="username" placeholder="Choose a username" autocomplete="username" />
                                </div>

                                <div class="mb-3">
                                    <label for="offPassword" class="form-label auth-label">Password</label>
                                    <div class="auth-password-wrap">
                                        <input type="password" class="form-control" id="offPassword" name="password" placeholder="Create a password" autocomplete="new-password"/>
                                        <button type="button" class="auth-toggle-pw" data-target="offPassword" aria-label="Show password">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="offConfirmPassword" class="form-label auth-label">Confirm Password</label>
                                    <div class="auth-password-wrap">
                                        <input type="password" class="form-control" id="offConfirmPassword" name="confirmPassword" placeholder="Re-enter your password" autocomplete="new-password"/>
                                        <button type="button" class="auth-toggle-pw" data-target="offConfirmPassword" aria-label="Show password">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>

                                <button type="submit" class="btn auth-submit w-100">Create Account</button>

                                <p class="auth-footer-text mt-3 mb-0">
                                    Already have an account? <a href="login.php">Login</a>
                                </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>

    <!-- Bootstrap -->
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
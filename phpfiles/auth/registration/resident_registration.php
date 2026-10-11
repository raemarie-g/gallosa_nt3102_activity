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
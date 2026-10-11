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


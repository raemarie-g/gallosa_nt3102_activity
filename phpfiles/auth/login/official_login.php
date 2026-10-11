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

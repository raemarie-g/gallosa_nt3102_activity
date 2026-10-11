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

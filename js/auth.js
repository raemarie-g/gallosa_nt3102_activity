// auth.js — password visibility toggle
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".auth-toggle-pw").forEach(function (btn) {
        btn.addEventListener("click", function () {
            var targetId = btn.getAttribute("data-target");
            var input = document.getElementById(targetId);
            if (!input) return;

            var icon = btn.querySelector("i");
            var isHidden = input.type === "password";
            input.type = isHidden ? "text" : "password";

            if (icon) {
                icon.classList.toggle("bi-eye", !isHidden);
                icon.classList.toggle("bi-eye-slash", isHidden);
            }
            btn.setAttribute("aria-label", isHidden ? "Hide password" : "Show password");
        });
    });
});
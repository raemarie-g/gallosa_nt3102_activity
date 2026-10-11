// Show or hide the password field linked to each toggle button.
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".auth-toggle-pw").forEach(function (btn) {
        btn.addEventListener("click", function () {
            // Find the password field specified by the button.
            var targetId = btn.getAttribute("data-target");
            var input = document.getElementById(targetId);

            if (!input) return;

            var icon = btn.querySelector("i");
            var isHidden = input.type === "password";

            // Switch the field between masked and visible text.
            input.type = isHidden ? "text" : "password";

            // Update the icon and button label to match the new state.
            if (icon) {
                icon.classList.toggle("bi-eye", !isHidden);
                icon.classList.toggle("bi-eye-slash", isHidden);
            }

            btn.setAttribute("aria-label", isHidden ? "Hide password" : "Show password");
        });
    });
});

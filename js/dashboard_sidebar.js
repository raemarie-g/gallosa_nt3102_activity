// Sidebar behavior
document.addEventListener("DOMContentLoaded", function () {
    var toggleBtn = document.getElementById("sidebarToggle");
    var sidebar = document.getElementById("sidebar");

    // Skip setup if the page does not contain a sidebar and toggle button.
    if (!toggleBtn || !sidebar) return;

    var MOBILE_BREAKPOINT = 900;

    function isMobile() {
        return window.innerWidth <= MOBILE_BREAKPOINT;
    }

    // Keep the toggle button accessible state in sync with sidebar visibility.
    function updateAria() {
        var isVisible = isMobile()
            ? sidebar.classList.contains("is-open")
            : !sidebar.classList.contains("is-collapsed");

        toggleBtn.setAttribute("aria-expanded", isVisible ? "true" : "false");
    }

    // Open or collapse the sidebar according to the screen width.
    toggleBtn.addEventListener("click", function () {
        if (isMobile()) {
            sidebar.classList.toggle("is-open");
        } else {
            sidebar.classList.toggle("is-collapsed");
        }

        updateAria();
    });

    // Close an open mobile sidebar when clicking outside it.
    document.addEventListener("click", function (e) {
        if (!isMobile()) return;
        if (!sidebar.classList.contains("is-open")) return;
        if (sidebar.contains(e.target) || toggleBtn.contains(e.target)) return;

        sidebar.classList.remove("is-open");

        updateAria();
    });

    // Remove classes that do not apply to the current screen width.
    window.addEventListener("resize", function () {
        if (isMobile()) {
            sidebar.classList.remove("is-collapsed");
        } else {
            sidebar.classList.remove("is-open");
        }

        updateAria();
    });

    // Set the initial accessible state when the page loads.
    updateAria();
});

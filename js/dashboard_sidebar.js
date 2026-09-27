// dashboard.js — sidebar toggle behavior
document.addEventListener("DOMContentLoaded", function () {
    var toggleBtn = document.getElementById("sidebarToggle");
    var sidebar = document.getElementById("sidebar");

    if (!toggleBtn || !sidebar) return;

    var MOBILE_BREAKPOINT = 900;

    function isMobile() {
        return window.innerWidth <= MOBILE_BREAKPOINT;
    }

    function updateAria() {
        var isVisible = isMobile()
            ? sidebar.classList.contains("is-open")
            : !sidebar.classList.contains("is-collapsed");
        toggleBtn.setAttribute("aria-expanded", isVisible ? "true" : "false");
    }

    toggleBtn.addEventListener("click", function () {
        if (isMobile()) {
            sidebar.classList.toggle("is-open");
        } else {
            sidebar.classList.toggle("is-collapsed");
        }
        updateAria();
    });

    // On mobile, clicking outside an open sidebar closes it
    document.addEventListener("click", function (e) {
        if (!isMobile()) return;
        if (!sidebar.classList.contains("is-open")) return;
        if (sidebar.contains(e.target) || toggleBtn.contains(e.target)) return;
        sidebar.classList.remove("is-open");
        updateAria();
    });

    // Reset stray classes when crossing the breakpoint (e.g. resizing window)
    window.addEventListener("resize", function () {
        if (isMobile()) {
            sidebar.classList.remove("is-collapsed");
        } else {
            sidebar.classList.remove("is-open");
        }
        updateAria();
    });

    updateAria();
});

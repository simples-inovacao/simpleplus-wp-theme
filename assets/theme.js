document.addEventListener("DOMContentLoaded", function () {
    var header = document.getElementById("site-header");
    var mobileToggle = document.getElementById("mobile-toggle");
    var mobileMenu = document.getElementById("mobile-menu");
    var iconMenu = document.getElementById("icon-menu");
    var iconClose = document.getElementById("icon-close");
    var mobileLinks = document.querySelectorAll(".mobile-link");

    // Scroll: toggle frosted glass header after 20px
    window.addEventListener("scroll", function () {
        if (window.scrollY > 20) {
            header.classList.add("bg-brand-charcoal/90", "backdrop-blur-xl", "shadow-lg", "border-b", "border-primary-foreground/5");
            header.classList.remove("bg-transparent");
        } else {
            header.classList.remove("bg-brand-charcoal/90", "backdrop-blur-xl", "shadow-lg", "border-b", "border-primary-foreground/5");
            header.classList.add("bg-transparent");
        }
    });

    // Mobile menu toggle
    if (mobileToggle) {
        mobileToggle.addEventListener("click", function () {
            var isHidden = mobileMenu.classList.contains("hidden");
            if (isHidden) {
                mobileMenu.classList.remove("hidden");
                iconMenu.classList.add("hidden");
                iconMenu.classList.remove("block");
                iconClose.classList.add("block");
                iconClose.classList.remove("hidden");
            } else {
                mobileMenu.classList.add("hidden");
                iconMenu.classList.add("block");
                iconMenu.classList.remove("hidden");
                iconClose.classList.add("hidden");
                iconClose.classList.remove("block");
            }
        });
    }

    // Close mobile menu on anchor link click
    mobileLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            mobileMenu.classList.add("hidden");
            iconMenu.classList.add("block");
            iconMenu.classList.remove("hidden");
            iconClose.classList.add("hidden");
            iconClose.classList.remove("block");
        });
    });
});

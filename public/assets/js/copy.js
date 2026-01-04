// -----------------slider-----------------
function initSlider() {
    const imagelist = document.querySelector(".carousel-slider .image-list");
    if (!imagelist) return;

    const sliderButtons = document.querySelectorAll(
        ".carousel-slider .slider-button"
    );
    const sliderScrollbar = document.querySelector(".slider-scrollbar");
    const scrollbarThumb = document.querySelector(".scrollbar-thumb");

    let maxScrollLeft = imagelist.scrollWidth - imagelist.clientWidth;

    // Drag Scrollbar
    scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const startLeft = scrollbarThumb.offsetLeft;
        const maxThumbPos =
            sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth;

        function mouseMove(ev) {
            const delta = ev.clientX - startX;
            let newLeft = startLeft + delta;

            newLeft = Math.max(0, Math.min(maxThumbPos, newLeft));

            scrollbarThumb.style.left = `${newLeft}px`;

            imagelist.scrollLeft = (newLeft / maxThumbPos) * maxScrollLeft;
        }

        function mouseUp() {
            document.removeEventListener("mousemove", mouseMove);
            document.removeEventListener("mouseup", mouseUp);
        }

        document.addEventListener("mousemove", mouseMove);
        document.addEventListener("mouseup", mouseUp);
    });

    // Buttons
    sliderButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
            const direction = btn.id === "prev-slider" ? -1 : 1;
            const amount = imagelist.clientWidth * direction;
            imagelist.scrollBy({ left: amount, behavior: "smooth" });
        });
    });

    // Update Scroll Thumb
    imagelist.addEventListener("scroll", () => {
        const maxThumbPos =
            sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth;
        const position = (imagelist.scrollLeft / maxScrollLeft) * maxThumbPos;
        scrollbarThumb.style.left = `${position}px`;
    });
}

window.addEventListener("load", initSlider);

// Wait for the document to be fully loaded-----------------------------------------------
document.addEventListener("DOMContentLoaded", function () {
    // Select all feature items
    const featureItems = document.querySelectorAll(".feature-item");

    // Function to add the rise animation from bottom to top
    function riseAnimation() {
        featureItems.forEach((item, index) => {
            // Set initial state - start from bottom
            item.style.opacity = "0";
            item.style.transform = "translateY(60px)";
            item.style.transition = "all 0.6s ease-out";

            // Animate each item with a delay - rising up
            setTimeout(() => {
                item.style.opacity = "1";
                item.style.transform = "translateY(0)";
            }, 200 * index); // 200ms delay between each item
        });
    }

    // Run the animation when the page loads
    riseAnimation();

    // Add hover effect
    featureItems.forEach((item) => {
        item.addEventListener("mouseenter", function () {
            this.style.transform = "translateY(-10px)";
            this.style.boxShadow = "0 10px 20px rgba(0,0,0,0.1)";
            this.style.transition = "all 0.3s ease";
            const icon = this.querySelector(".feature-icon");
            if (icon) {
                icon.style.transform = "scale(1.1) rotate(5deg)";
                icon.style.backgroundColor = "var(--primary-color)";
                const iconElement = icon.querySelector("i");
                if (iconElement) {
                    iconElement.style.color = "white";
                }
            }
        });
        item.addEventListener("mouseleave", function () {
            this.style.transform = "translateY(0)";
            this.style.boxShadow = "none";
            const icon = this.querySelector(".feature-icon");
            if (icon) {
                icon.style.transform = "scale(1) rotate(0)";
                icon.style.backgroundColor = "white";
                const iconElement = icon.querySelector("i");
                if (iconElement) {
                    iconElement.style.color = "#374151";
                }
            }
        });
    });
});

// Mobile Menu Toggle Functionality-------------------------------------------------
document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
    const menuContainer = document.querySelector(".menu-container");
    const body = document.body;

    if (mobileMenuBtn && menuContainer) {
        mobileMenuBtn.addEventListener("click", function () {
            // Toggle active class on button
            this.classList.toggle("active");

            // Toggle active class on menu
            menuContainer.classList.toggle("active");

            // Toggle body class for overlay
            body.classList.toggle("menu-open");
        });

        // Close menu when clicking on overlay
        document.addEventListener("click", function (e) {
            if (
                body.classList.contains("menu-open") &&
                !menuContainer.contains(e.target) &&
                !mobileMenuBtn.contains(e.target)
            ) {
                mobileMenuBtn.classList.remove("active");
                menuContainer.classList.remove("active");
                body.classList.remove("menu-open");
            }
        });

        // Close menu when clicking on menu links
        const menuLinks = document.querySelectorAll(".menu-link");
        menuLinks.forEach((link) => {
            link.addEventListener("click", function () {
                if (window.innerWidth <= 768) {
                    mobileMenuBtn.classList.remove("active");
                    menuContainer.classList.remove("active");
                    body.classList.remove("menu-open");
                }
            });
        });

        // Handle window resize
        let resizeTimer;
        window.addEventListener("resize", function () {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function () {
                if (window.innerWidth > 768) {
                    mobileMenuBtn.classList.remove("active");
                    menuContainer.classList.remove("active");
                    body.classList.remove("menu-open");
                }
            }, 250);
        });
    }

    // Search functionality (optional enhancement)
    const searchInputs = document.querySelectorAll(
        ".search-input, .mobile-search input"
    );
    searchInputs.forEach((input) => {
        input.addEventListener("keypress", function (e) {
            if (e.key === "Enter") {
                e.preventDefault();
                const searchTerm = this.value.trim();
                if (searchTerm) {
                    // Add your search logic here
                    console.log("Searching for:", searchTerm);
                    // Example: window.location.href = '/search?q=' + encodeURIComponent(searchTerm);
                }
            }
        });
    });

    const searchButtons = document.querySelectorAll(
        ".search-btn, .mobile-search .search-icon"
    );
    searchButtons.forEach((button) => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            const searchContainer = this.closest(".search-box, .search");
            const input = searchContainer.querySelector("input");
            const searchTerm = input.value.trim();
            if (searchTerm) {
                // Add your search logic here
                console.log("Searching for:", searchTerm);
                // Example: window.location.href = '/search?q=' + encodeURIComponent(searchTerm);
            }
        });
    });
});

// slider
document.addEventListener("DOMContentLoaded", function () {
    new bootstrap.Carousel(document.getElementById("homeCarousel"), {
        interval: 3000,
        wrap: true,
        touch: true,
    });
});

// Scroll-triggered hero animation using Intersection Observer
document.addEventListener("DOMContentLoaded", function () {
    const heroSection = document.querySelector(".hero");

    if (!heroSection) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    heroSection.classList.add("animate-in");
                } else {
                    heroSection.classList.remove("animate-in");
                }
            });
        },
        {
            threshold: 0.3, // 30% visible before triggering
        }
    );

    observer.observe(heroSection);
});

// Scroll-triggered animation for Half Overlay Section about -----------------
// Repeat animation on every scroll in-out
document.addEventListener("DOMContentLoaded", function () {
    const section = document.querySelector(".half-overlay-section");

    if (!section) return;

    const leftText = section.querySelector(".left-text");
    const rightImage = section.querySelector(".right-image");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Section visible → play animation
                    leftText.classList.add("animate-left");
                    rightImage.classList.add("animate-right");
                } else {
                    // Section not visible → remove animation so it can replay
                    leftText.classList.remove("animate-left");
                    rightImage.classList.remove("animate-right");
                }
            });
        },
        { threshold: 0.2 }
    );

    observer.observe(section);
});

// ===== GALLERY POP ANIMATION - TRIGGERS ON SCROLL UP/DOWN =====
document.addEventListener("DOMContentLoaded", function () {
    const galleryItems = document.querySelectorAll(".gallery-item-wrapper");

    if (galleryItems.length === 0) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("in-view"); // show animation
                } else {
                    entry.target.classList.remove("in-view"); // reset animation
                }
            });
        },
        { threshold: 0.3 } // Trigger when 30% visible
    );

    galleryItems.forEach((item) => {
        observer.observe(item);
    });
});

// -------------------login----------------------
document.addEventListener("DOMContentLoaded", function () {
    const authTabBtns = document.querySelectorAll(".auth-tab-btn");
    const authFormItems = document.querySelectorAll(".auth-form-item");

    authTabBtns.forEach((btn) => {
        btn.addEventListener("click", function (e) {
            e.preventDefault();

            // Remove active class from all buttons and forms
            authTabBtns.forEach((b) => b.classList.remove("active"));
            authFormItems.forEach((f) => f.classList.remove("active"));

            // Add active class to clicked button
            this.classList.add("active");

            // Show corresponding form
            const tabId = this.getAttribute("data-tab");
            const targetForm = document.getElementById(tabId);

            if (targetForm) {
                targetForm.classList.add("active");
            }
        });
    });

    // Prevent form submission for demo
    document.querySelectorAll("form").forEach((form) => {
        form.addEventListener("submit", function (e) {
            e.preventDefault();
           
        });
    });
});

// --------------------custome service---------------------------
document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".tab-btn");
    const contents = document.querySelectorAll(".tab-content");

    buttons.forEach((btn) => {
        btn.addEventListener("click", function (e) {
            e.preventDefault();

            // Remove active class from all buttons
            buttons.forEach((b) => b.classList.remove("active"));

            // Add active class to clicked button
            this.classList.add("active");

            const target = this.getAttribute("href").replace("#", "");

            // Hide all sections
            contents.forEach((sec) => (sec.style.display = "none"));

            // Show target section
            document.getElementById(target).style.display = "block";
        });
    });
});

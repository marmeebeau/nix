// Get the menu button and navigation items
const menuBtn = document.getElementById("menu-btn");
const menuIcon = document.getElementById("menu-icon");
const navItems = document.getElementById("nav-items");

menuBtn.addEventListener("click", () => {
    if (menuIcon.src.includes("menu.svg")) {
        menuIcon.src = "assets/images/icons/x-close.svg";
        navItems.classList.add("active");
    } else {
        menuIcon.src = "assets/images/icons/menu.svg";
        navItems.classList.remove("active");
    }
});

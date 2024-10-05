const options = document.querySelectorAll(".option");

options.forEach((option) => {
    option.addEventListener("click", () => {
        const checkbox = option.querySelector('input[type="checkbox"]');

        if (option.classList.contains("active")) {
            option.classList.remove("active");
        } else {
            option.classList.add("active");
        }

        if (checkbox.hasAttribute("checked")) {
            checkbox.removeAttribute("checked");
        } else {
            checkbox.setAttribute("checked", "");
        }
    });
});

/**
 * Checkbox and radio toggling.
 * Script for multiple selection of an element using checkboxes.
 *
 */

/**
 * Update the selected checkbox to DOM.
 */
function updateCheckboxOptionStateToDOM(option, newState, checkbox) {
    option.classList.toggle("active", newState);
    checkbox.setAttribute("checked", "");
}

/**
 * Toggles the value 'active' state of the selected element based on its asociated checkbox.
 */
function toggledCheckboxOption(option) {
    const checkbox = option.querySelector('input[type="checkbox"]');
    const newState = !checkbox.checked;

    updateCheckboxOptionStateToDOM(option, newState, checkbox);
}

export function setupToggleOptionsEventListeners() {
    console.log(`Toggle options event listeners are running...`);
    const allSelectors = document.querySelectorAll(".option");

    allSelectors?.forEach((selector) => {
        selector.addEventListener("click", () => {
            toggledCheckboxOption(selector);
        });
    });
}

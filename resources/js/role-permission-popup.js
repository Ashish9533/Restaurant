const openPopupButton = document.getElementById("openPopupButton");
const popupForm = document.getElementById("popupForm");
const popupInnerForm = document.getElementById("popupInnerForm");

// Show the popup form
openPopupButton.addEventListener("click", () => {
popupForm.classList.remove("hidden");
});

// Close the popup when clicking outside the inner form
popupForm.addEventListener("click", (event) => {
if (event.target === popupForm) {
popupForm.classList.add("hidden");
}
});

// Get the "Select All" checkbox for the "View" column
const selectAllViewCheckbox = document.getElementById('selectAllView');

// Get all checkboxes in the "View" column
const viewCheckboxes = document.querySelectorAll('.view-checkbox');

// Add an event listener to the "Select All" checkbox
selectAllViewCheckbox.addEventListener('change', (event) => {
const isChecked = event.target.checked;

// Toggle all "View" checkboxes based on "Select All" state
viewCheckboxes.forEach((checkbox) => {
checkbox.checked = isChecked;
});
});
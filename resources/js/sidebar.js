const sidebar = document.getElementById('sidebar');
const toggleButton = document.getElementById("toggleSidebarMobile");

toggleButton.addEventListener("click", function () {
  const isExpanded = toggleButton.getAttribute("aria-expanded") === "true";

  // Update the aria-expanded attribute
  toggleButton.setAttribute("aria-expanded", !isExpanded);
  // Toggle the hidden class on sidebar
  sidebar.classList.toggle("hidden");
});


// Mouseenter and mouseleave for hover effect (Desktop only)
const sidebarTexts = document.getElementsByClassName('sidebar-text');
const buttons = sidebar.querySelectorAll('button');

sidebar.addEventListener('mouseenter', () => {
  sidebar.classList.add('w-64');
  sidebar.classList.remove('w-16');
  Array.from(sidebarTexts).forEach(sidebarText => {
    sidebarText.classList.remove('hidden');
  });
  buttons.forEach(button => {
    button.classList.add('justify-start', 'space-x-4');
  });
});

sidebar.addEventListener('mouseleave', () => {
  Array.from(sidebarTexts).forEach(sidebarText => {
    sidebarText.classList.add('hidden');
  });
  sidebar.classList.add('w-16');
  sidebar.classList.remove('w-64');
  buttons.forEach(button => {
    button.classList.remove('justify-start', 'space-x-4');
  });
});

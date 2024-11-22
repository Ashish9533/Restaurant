const sidebar = document.getElementById('sidebar');
const buttons = sidebar.querySelectorAll('button');
const sidebarTexts = document.getElementsByClassName('sidebar-text');


sidebar.addEventListener('mouseenter', () => {
  console.log('mouseenter');
  sidebar.classList.add('w-64');
  sidebar.classList.remove('w-16');

  console.log(sidebarTexts);
  Array.from(sidebarTexts).forEach(sidebarText => {
    console.log(sidebarText,'sidebarTesxt')
    sidebarText.classList.remove('hidden');
    
  });

  buttons.forEach(button => {
    button.classList.add('justify-start');
    button.classList.add('space-x-4');
  });
});

sidebar.addEventListener('mouseleave', () => {
 

  Array.from(sidebarTexts).forEach(sidebarText => {
    console.log(sidebarText,'sidebarTesxt')
    sidebarText.classList.add('hidden');
   
  });
  sidebar.classList.add('w-16');
  sidebar.classList.remove('w-64');

  buttons.forEach(button => {
    button.classList.remove('justify-start');
    button.classList.remove('space-x-4');
  });
});

if (sidebar) {
    const toggleSidebarMobile = (sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose) => {
        sidebar.classList.toggle('hidden');
        sidebarBackdrop.classList.toggle('hidden');
        toggleSidebarMobileHamburger.classList.toggle('hidden');
        toggleSidebarMobileClose.classList.toggle('hidden');
    }
    
    const toggleSidebarMobileEl = document.getElementById('toggleSidebarMobile');
    const sidebarBackdrop = document.getElementById('sidebarBackdrop');
    const toggleSidebarMobileHamburger = document.getElementById('toggleSidebarMobileHamburger');
    const toggleSidebarMobileClose = document.getElementById('toggleSidebarMobileClose');
    const toggleSidebarMobileSearch = document.getElementById('toggleSidebarMobileSearch');
    
    toggleSidebarMobileSearch.addEventListener('click', () => {
        toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose);
    });
    
    toggleSidebarMobileEl.addEventListener('click', () => {
        toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose);
    });
    
    sidebarBackdrop.addEventListener('click', () => {
        toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose);
    });
}

  
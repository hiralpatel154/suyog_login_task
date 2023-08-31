$(document).ready(function () {

    $('#sidebarToggle').on('click', event => {
        event.preventDefault();
        document.body.classList.toggle('sb-sidenav-toggled');
    });
    
})
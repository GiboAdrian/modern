/*!
* Start Bootstrap - Creative v7.0.2 (https://startbootstrap.com/theme/creative)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    // Activate SimpleLightbox plugin for portfolio items
    new SimpleLightbox({
        elements: '#portfolio a.portfolio-box'
    });

});

window.onload = function() {        
    var divArt = document.getElementsByName('artesania');
    divArt[0].style.display="none";            
}      
function showModernArt(){
    var divArt = document.getElementsByName('artesania');
    var divMod = document.getElementsByName('modernart');
    var secServ = document.getElementById('services');
    secServ.style.background = "linear-gradient(to bottom, rgba(128, 112, 102, 0.596) 0%, rgba(92, 77, 66, 0.8) 100%), url('../assets/img/modernart.gif')";
    secServ.style.backgroundPosition = "center";
    secServ.style.backgroundRepeat = "no-repeat";
    secServ.style.backgroundAttachment = "scroll";
    secServ.style.backgroundSize = "cover";
    divArt[0].style.display="none";   
    divMod[0].style.display="block";     
}
function showArtesania(){
    var divArt = document.getElementsByName('artesania');
    var divMod = document.getElementsByName('modernart');
    var secServ = document.getElementById('services');
    secServ.style.background = "linear-gradient(rgb(0 255 220 / 20%) 0%, rgb(255 0 247 / 47%) 100%), url('../assets/img/artesania2.gif')";
    secServ.style.backgroundPosition = "center";
    secServ.style.backgroundRepeat = "no-repeat";
    secServ.style.backgroundAttachment = "scroll";
    secServ.style.backgroundSize = "cover";
    divArt[0].style.display="block";   
    divMod[0].style.display="none"; 
}

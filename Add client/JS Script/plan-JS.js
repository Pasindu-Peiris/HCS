//Create Navigation Bar & Slide Bar

//get Document to varible
let clickOn = document.getElementById('menubut');
let slideUp = document.getElementById('slider');
let clickOff = document.getElementById('close');
let navBody = document.getElementById('navigation');
let logoIcon = document.getElementById('Logo');

clickOn.addEventListener('click', function() {

    slideUp.style.width = "220px";

    clickOn.style.display = "none";
    navBody.classList.add('navBody');

});

clickOff.addEventListener('click', slideHide);

function slideHide() {

    slideUp.style.width = "0px";
    clickOn.style.display = "flex";
    navBody.classList.remove('navBody');

}
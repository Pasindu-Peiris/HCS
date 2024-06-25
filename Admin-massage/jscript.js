//Create Navigation Bar & Slide Bar

//get Document to varible
let clickOn = document.getElementById('menubut');
let slideUp = document.getElementById('slider');
let clickOff = document.getElementById('close');
let planBody = document.getElementById('add-palne');
let navBody = document.getElementById('navigation');
let logoIcon = document.getElementById('Logo');

clickOn.addEventListener('click', function() {

    slideUp.style.width = "220px";
    planBody.style.marginLeft = "100px";
    clickOn.style.display = "none";
    navBody.classList.add('navBody');

});

clickOff.addEventListener('click', slideHide);

function slideHide() {

    slideUp.style.width = "0px";
    planBody.style.marginLeft = "0px";
    clickOn.style.display = "flex";
    navBody.classList.remove('navBody');

}
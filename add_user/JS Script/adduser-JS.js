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

//Create Drop Dwon and Hide Up

let dropButton = document.getElementById('button');
let dropBox = document.getElementById('dropDwon');

dropButton.addEventListener('click', function() {

    dropBox.classList.toggle('DropUp');

    //Change Button value

    if (dropButton.innerHTML == 'Hide Plan') {

        dropButton.innerHTML = 'Show Plan';
    } else {

        dropButton.innerHTML = 'Hide Plan';

    }

});


let dropButton1 = document.getElementById('button1');
let dropBox1 = document.getElementById('input-add');

dropButton1.addEventListener('click', function() {

    dropBox1.classList.toggle('DropUp');


});

let dropButton2 = document.getElementById('button2');
let dropBox2 = document.getElementById('input-remove');

dropButton2.addEventListener('click', function() {

    dropBox2.classList.toggle('DropUp');


});

let dropButton3 = document.getElementById('button3');
let dropBox3 = document.getElementById('input-update');

dropButton3.addEventListener('click', function() {

    dropBox3.classList.toggle('DropUp');

});

//refresh button

let refrbut = document.getElementById('refresh');

refrbut.addEventListener('click', function() {

    window.location.reload();
})
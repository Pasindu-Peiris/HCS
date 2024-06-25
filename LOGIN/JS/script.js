//password show | hide JS Script


//get document to varible
let eyeClose = document.getElementById('icon2');
let eyeOpen = document.getElementById('icon1');
let passBox = document.getElementById('password');
let iconBox = document.getElementById('pass-box-2');


//addEventListener with anonymous function || display as Text
iconBox.addEventListener('mousemove', function() {

    passBox.type = "text";
    eyeOpen.style.display = "flex";
    eyeClose.style.display = "none";

});

//addEventListener with anonymous function || display as Password
iconBox.addEventListener('mouseout', function() {

    passBox.type = "password";
    eyeOpen.style.display = "none";
    eyeClose.style.display = "flex";

});
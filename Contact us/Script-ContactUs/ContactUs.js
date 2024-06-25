// ------------------------ Search Box Popup
function searchBox() {

    document.getElementById('search-Box').style.height = "50vh";
    document.getElementById('area-search').style.display = "flex"

}

function CloseBox() {

    document.getElementById('search-Box').style.height = "0vh";
    document.getElementById('area-search').style.display = "none"


}


// ------------------------------ navigation

window.onscroll = function() {

    CloseBox();
    scrollfunction();

}

var nav = document.getElementById('second-nav');
var scrolSize = nav.offsetTop;

function scrollfunction() {

    if (window.scrollY >= scrolSize) {

        nav.classList.add('navJS-code');

    } else {

        nav.classList.remove('navJS-code');

    }

}
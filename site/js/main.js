
function navMenu() {
    if (document.querySelector("#menu").innerHTML == "<i class=\"fas fa-bars\"></i>") {
        document.querySelector("#menu").innerHTML = "<i class=\"fas fa-times\"></i>";
        document.querySelector("#menu").classList.add("menu");
        document.querySelector(".nav-menu").style.transform = "translateY(0px)";
        document.querySelector(".nav-menu").style.visibility = "visible";
    } else {
        document.querySelector("#menu").innerHTML = "<i class=\"fas fa-bars\"></i>";
        document.querySelector("#menu").classList.remove("menu");
        document.querySelector(".nav-menu").style.transform = "translateY(-30px)";
        document.querySelector(".nav-menu").style.visibility = "hidden";

    }
}


var myslides = 0;
slides();

function slides() {
    var i;
    var x = document.getElementsByClassName("myslides");
    for (i = 0; i < x.length; i++) {
        x[i].style.opacity = 0;
        x[i].style.visibility = "hidden";
    }

    myslides++;
    if (myslides > x.length) { myslides = 1 }
    x[myslides - 1].style.opacity = 1;
    x[myslides - 1].style.visibility = "visible";

    setTimeout(slides, 4000);
}

var menu_btn = document.getElementById("menu-phone");
var menu = document.getElementsByClassName("phone-menu")[0];

menu_btn.addEventListener("click", function () {
    if (menu_btn.innerHTML == "<i class=\"fas fa-bars\"></i>") {
        //     menu.show();
        // menu.hide();
        // menu.style.display = "block";
        menu_btn.innerHTML = "<i class=\"fas fa-times\"></i>";
        menu_btn.classList.add("menu");
        menu.style.maxHeight = "89vh";
        menu.style.visibility = "visible";
        document.querySelector(".nav-menu").style.visibility = "visible";
    } else {
        //     menu.hide();
        // menu.slideDown();
        // menu.style.display = "none";
        menu_btn.innerHTML = "<i class=\"fas fa-bars\"></i>";
        menu_btn.classList.remove("menu");
        menu.style.maxHeight = "1vh";
        menu.style.visibility = "hidden";
        document.querySelector(".nav-menu").style.visibility = "hidden";
    }
})

var search = $("#header-search");
var search_btn = $("#search-btn");

search_btn.click(function () {
    if (!search_btn.hasClass("menu")) {
        search_btn.addClass("menu");
        search_btn.css("color", "#f2f3f3");
        search.slideDown("fast");
        search.focus();
    } else if (search_btn.hasClass("menu")) {
        search_btn.removeClass("menu");
        search_btn.css("color", "#ffc200");
        search.slideUp("fast");
    }
})


fyear();
tyear();

function fyear() {
    for (i = 2019; i < 2025; i++) {
        document.querySelector("#fyear").innerHTML += "<option value='" + i + "'>" + i + "</option>";
    }

};

function tyear() {
    for (i = 2019; i < 2025; i++) {
        document.querySelector("#tyear").innerHTML += "<option value='" + i + "'>" + i + "</option>";
    }

};

showHideMonthF();
showHideMonthT();

function showHideMonthF() {
    if (document.querySelector("#fyear").value == 0) {
        document.querySelector(".select-month").style.display = "none"
    } else {
        document.querySelector(".select-month").style.display = "inline-block"
    }
};

function showHideMonthT() {
    if (document.querySelector("#tyear").value == 0) {
        document.querySelector(".tselect-month").style.display = "none"
    } else {
        document.querySelector(".tselect-month").style.display = "inline-block"
    }
};




showHideDayF();
showHideDayT();

function showHideDayF() {
    if (document.querySelector("#fmonth").value == 0) {
        document.querySelector(".select-day").style.display = "none";
    } else {
        document.querySelector(".select-day").style.display = "inline-block";
        document.querySelector("#fday").innerHTML = "";

        function day() {
            var x;
            var month = document.querySelector("#fmonth").value;
            if (month == "February") {
                x = 29
            } else if (month == "January" || month == "March" || month == "May" || month == "July" || month == "August" || month == "October" || month == "December") {
                x = 32
            } else if (month == "April" || month == "June" || month == "Septemper" || month == "November") {
                x = 31
            } else {
                x = 3;
            }
            return x;
        };
        var result = day();

        for (i = 1; i < result; i++) {
            document.querySelector("#fday").innerHTML += "<option value='" + i + "'>" + i + "</option>";
        }
    };
};


function showHideDayT() {
    if (document.querySelector("#tmonth").value == 0) {
        document.querySelector(".tselect-day").style.display = "none";
    } else {
        document.querySelector(".tselect-day").style.display = "inline-block";
        document.querySelector("#tday").innerHTML = "";

        function day() {
            var x;
            var month = document.querySelector("#tmonth").value;
            if (month == "February") {
                x = 29
            } else if (month == "January" || month == "March" || month == "May" || month == "July" || month == "August" || month == "October" || month == "December") {
                x = 32
            } else if (month == "April" || month == "June" || month == "Septemper" || month == "November") {
                x = 31
            } else {
                x = 3;
            }
            return x;
        };
        var result = day();

        for (i = 1; i < result; i++) {
            document.querySelector("#tday").innerHTML += "<option value='" + i + "'>" + i + "</option>";
        }
    };
};
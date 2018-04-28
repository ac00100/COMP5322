function overUser(x) {
    var element = document.getElementById("UUU");
    element.classList.add("UserBG");
    var element2 = document.getElementById("subUUU");
    element2.classList.remove("UserOption");
}

function normalUser(x) {
    var element = document.getElementById("UUU");
    element.classList.remove("UserBG");
    var element2 = document.getElementById("subUUU");
    element2.classList.add("UserOption");
}

function overCase(x) {
    var element = document.getElementById("CCC");
    element.classList.add("UserBG");
    var element2 = document.getElementById("subCCC");
    element2.classList.remove("UserOption");
}

function normalCase(x) {
    var element = document.getElementById("CCC");
    element.classList.remove("UserBG");
    var element2 = document.getElementById("subCCC");
    element2.classList.add("UserOption");
}

function overReport(x) {
    var element = document.getElementById("RRR");
    element.classList.add("UserBG");
    var element2 = document.getElementById("subRRR");
    element2.classList.remove("UserOption");
}

function normalReport(x) {
    var element = document.getElementById("RRR");
    element.classList.remove("UserBG");
    var element2 = document.getElementById("subRRR");
    element2.classList.add("UserOption");
}
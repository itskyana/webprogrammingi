
document.addEventListener("DOMContentLoaded", function() {
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector("header ul");

    hamburger.addEventListener("click", function() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    });
});

let name = "Bina Sarana Informatika";
document.getElementById("fieldname").innerHTML = name;

// SHOW IMAGE
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
   showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var imgList = document.getElementsByClassName("img-slideshow");
    if (n > imgList.length) slideIndex = 1;
    else if (n < 1) slideIndex = imgList.length;

    for (i = 0; i < imgList.length; i++) {
        imgList[i].style.display = "none";
    }

    imgList[slideIndex - 1].style.display = "block";
    imgList[slideIndex - 1].style.maxHeight = "70vh"; // Memastikan gambar tidak melebihi tampilan awal
}

setInterval(() => {
    plusDivs(1);
}, 4000)


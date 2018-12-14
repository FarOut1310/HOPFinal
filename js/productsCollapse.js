var btn = document.getElementsByClassName("productBox__btn");
var i;

console.log(btn);
//console.log(btnContent);
//var i;
//var content = document.getElementsByClassName("productBox__content");

for (i = 0; i < btn.length; i++) {
    btn[i].addEventListener("click", function() {
        var btnContent = this.nextElementSibling;
        if (btnContent.style.display === "block") {
            btnContent.style.display = "none";
            console.log("Box is closed");
        }
        else {
            btnContent.style.display = "block";
            console.log("Box is open");
        }
    });
}

/*document.getElementById("bedL").addEventListener("click", function() {
    if (btnContent[0].style.display === "none") {
            btnContent[0].style.display = "block";
    }
    else {
            btnContent[0].style.display = "none";
    }
});*/
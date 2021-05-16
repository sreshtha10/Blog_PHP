var uppercase = document.getElementById("uppercase");
var lowercase = document.getElementById("lowercase");
var capitalize= document.getElementById("capitalize");
var clear = document.getElementById("clear");


uppercase.addEventListener("click",f6);
lowercase.addEventListener("click",f7);
capitalize.addEventListener("click",f8);
clear.addEventListener("click",f9);



function f6() {
    document.getElementById("textarea1").style.textTransform = "uppercase";
}
  
function f7() {
    document.getElementById("textarea1").style.textTransform = "lowercase";
}
  
function f8() {
    document.getElementById("textarea1").style.textTransform = "capitalize";
}
  
function f9() {
    document.getElementById("textarea1").style.fontWeight = "normal";
    document.getElementById("textarea1").style.textAlign = "left";
    document.getElementById("textarea1").style.fontStyle = "normal";
    document.getElementById("textarea1").style.textTransform = "capitalize";
    document.getElementById("textarea1").value = " ";
}
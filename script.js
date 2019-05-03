var username=document.getElementById("email");
var password=document.getElementById("password");

username.onblur=function () {


if(username.value != "") {
    username.className = "form-control is-valid";

}
else{
    username.className = "form-control is-invalid";
}}
password.onblur= function () {


if(password.value != "") {
    password.className = "form-control is-valid";

}
else{
    password.className = "form-control is-invalid";
}
}
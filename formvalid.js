// JavaScript Document
function validateForm() {
    var x = document.forms["myForm"]["Nm"].value;
    if (x==null || x=="") {
        document.forms.getElementById("Enm").innerHTML="Please Enter FirstName";
    }
}
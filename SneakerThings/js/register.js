let passwordCheck = RegExp("(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})");
let regBtn;
let passwordInput;

let firstname = document.getElementById("Fname");
let lastname = document.getElementById("Lname");
let address = document.getElementById("Address");
let number = document.getElementById("Number");
let email = document.getElementById("reg-email");
let password = document.getElementById("reg-password");

window.onload = function ()
{
    regBtn = document.getElementById("reg-btn")
    regBtn.onclick = Register;
    regBtn.disabled = true;
    passwordInput = document.getElementById("reg-password");
    passwordInput.onkeyup = checkPassword;
}

function checkPassword()
{
    let password = document.getElementById("reg-password").value;
    let result = passwordCheck.test(password);

    if (result)
    {
        regBtn.disabled = false;
    }
}

function Register()
{
    var userDetails = {};
    userDetails.fname = document.getElementById("Fname").value;
    userDetails.lname = document.getElementById("Lname").value;
    userDetails.address = document.getElementById("Address").value;
    userDetails.number = document.getElementById("Number").value;
    userDetails.email = document.getElementById("reg-email").value;
    userDetails.password = document.getElementById("reg-password").value;

    if(userDetails.fname.length === 0 || userDetails.lname.length === 0 || userDetails.address.length === 0 ||
        userDetails.number.length === 0 || userDetails.email.length === 0 || userDetails.password.length === 0)
    {
        window.alert("Please fill out all fields");
        return false;
    }
}

function FormValidation(){


    $(document).ready(function() {
        $('#phone').keyup(function () {
            var val = this.value.replace(/\D/g, '');
            var newVal = '';
            while (val.length > 5) {
                newVal += val.substr(0, 3) + '-';
                val = val.substr(3);
            }
            newVal += val;
            this.value = newVal;
        });
    });

    $(document).ready(function() {
        $('#zip').keyup(function () {
            var val = this.value.replace(/\D/g, '');
            var newVal = '';
            while (val.length > 5) {
                newVal += val.substr(0, 5) + '-';
                val = val.substr(5);
            }
            newVal += val;
            this.value = newVal;
        });
    });



    //username validation
    let username=document.getElementById('username').value;
    let usererror = document.getElementById('usererror');


    if (username.length >= 50) {
        usererror.innerText = 'Username too long';
        document.getElementById('username').style.border = "5px solid red";
        return false;
    }

    if (username.length < 6) {
        usererror.innerText = 'Enter username with 6 characters at least';
        document.getElementById('username').style.border = "5px solid red";
        return false;
    }
    else{
        usererror.innerText = '';
        document.getElementById('username').style.border = "5px solid green";
    }




    //password validation
    let password=document.getElementById('password').value;
    let passerror = document.getElementById('passerror');
    let passRegEx = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*(),.?":[\]{}|<>_\-~`+=;'\/\\])/g;


    if (!(passRegEx.test(password))) {
        passerror.innerText = 'Include a uppercase, lowercase, digit, and special character.';
        document.getElementById('password').style.border = "5px solid red";
        return false;
    }
    if(password.length >= 50){
        passerror.innerText = 'Your password is too long must be 50 or less characters';
        document.getElementById('password').style.border = "5px solid red";
        return false;
    }
    if(password.length < 8){
        passerror.innerText = 'Your password must be at least 8 characters';
        document.getElementById('password').style.border = "5px solid red";
        return false;
    }
    else{
        passerror.innerText = '';
        document.getElementById('password').style.border = "5px solid green";
    }



    //re-enter password validation
    let REpassword=document.getElementById('REpassword').value;
    let REpasserror = document.getElementById('REpasserror');

    if ( REpassword !== password) {
        REpasserror.innerText = 'Passwords do not match';
        document.getElementById('REpassword').style.border = "5px solid red";
        return false;
    }
    else{
        REpasserror.innerText = '';
        document.getElementById('REpassword').style.border = "5px solid green";
    }



    //First Name Validation
    let firstName=document.getElementById('firstname').value;
    let firsterror = document.getElementById('firsterror');

    if (/^[0-9]+$/.test(document.getElementById("firstname").value)) {
        firsterror.innerText = 'Numbers are not allowed.';
        document.getElementById('firstname').style.border = "5px solid red";
        return false;
    }
    if(firstName.length >= 50 || firstName.length === 0){
        firsterror.innerText = 'Enter first name, must be 50 or less characters';
        document.getElementById('firstname').style.border = "5px solid red";
        return false;
    }
    else{
        firsterror.innerText = '';
        document.getElementById('firstname').style.border = "5px solid green";
    }




    //Last Name validation
    let lastName=document.getElementById('lastname').value;
    let lasterror = document.getElementById('lasterror');


    if (/^[0-9]+$/.test(document.getElementById("lastname").value)) {
        lasterror.innerText = 'Last names must be all letters';
        document.getElementById('lastname').style.border = "5px solid red";
        return false;
    }
    if(lastName.length === 0 || lastName.length > 50){
        lasterror.innerText = 'Enter last name, must be less than 50 characters';
        document.getElementById('lastname').style.border = "5px solid red";
        return false;

    }
    else{
        lasterror.innerText = '';
        document.getElementById('lastname').style.border = "5px solid green";
    }



    //address1 validation
    let address1=document.getElementById('address1').value;
    let adderror = document.getElementById('adderror');

    if (address1.length > 100 || address1.length < 5) {
        adderror.innerText = 'Address must be between 5-100 characters.';
        document.getElementById('address1').style.border = "5px solid red";
        return false;
    }
    else{
        adderror.innerText = '';
        document.getElementById('address1').style.border = "5px solid green";
    }



    //address2 validation
    let address2=document.getElementById('address2').value;
    let adderror2 = document.getElementById('adderror2');

    if(address2.length > 100){
        adderror2.innerText = 'Address must be less than 100 characters.';
        document.getElementById('address2').style.border = "5px solid red";
        return false;
    }
    else{
        adderror2.innerText = '';
        document.getElementById('address2').style.border = "5px solid green";
    }



    //city validation
    let city=document.getElementById('city').value;
    let cityerror = document.getElementById('cityerror');

    if (city.length > 50 || city.length < 2) {
        cityerror.innerText = 'City must be between 2-50 characters long.';
        document.getElementById('city').style.border = "5px solid red";
        return false;
    }
    else{
        cityerror.innerText = '';
        document.getElementById('city').style.border = "5px solid green";
    }



    //state validation
    let state=document.getElementById('state').value;
    let stateerror = document.getElementById('stateerror');

    if(state === ""){
        stateerror.innerText = 'Please choose a state.';
        document.getElementById('state').style.border = "5px solid red";
        return false;
    }
    else{
        stateerror.innerText = '';
        document.getElementById('state').style.border = "5px solid green";
    }


    //zip validation
    let zip=document.getElementById('zip').value;
    let ziperror = document.getElementById('ziperror');

    if (zip.length > 5 && zip.length < 10) {
        ziperror.innerText = 'Zip must be at least 9 digits.';
        document.getElementById('zip').style.border = "5px solid red";
        return false;

    }
    if (zip.length < 5) {
        ziperror.innerText = 'Zip must be at least than 5 digits.';
        document.getElementById('zip').style.border = "5px solid red";
        return false;

    }
    else{
        ziperror.innerText = '';
        document.getElementById('zip').style.border = "5px solid green";
    }



    //Phone number validation
    let phone=document.getElementById('phone').value;
    let phoneerror = document.getElementById('phoneerror');

    if (phone.length < 11 ) {
        phoneerror.innerText = 'Enter 10 digit phone number.';
        document.getElementById('phone').style.border = "5px solid red";
        return false;
    }
    else{
        phoneerror.innerText = '';
        document.getElementById('phone').style.border = "5px solid green";
    }



    //email validation
    let email=document.getElementById('email').value;
    let emailerror= document.getElementById('emailerror');
    var emailregExp = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    if(!(emailregExp.test(email))){
        emailerror.innerText = 'Please enter valid email';
        document.getElementById('email').style.border = "5px solid red";
        return false;
    }
    else{
        emailerror.innerText = '';
        document.getElementById('email').style.border = "5px solid green";
    }



    //birthday validation
    let birthday=document.getElementById('birthday').value;
    let birthdayerror= document.getElementById('birthdayerror');

    if(birthday.length < 8){
        birthdayerror.innerText = 'Please enter valid birthday';
        document.getElementById('birthday').style.border = "5px solid red";
        return false;
    }
    else{
        birthdayerror.innerText = '';
        document.getElementById('birthday').style.border = "5px solid green";
    }


}

function Reset() {
    document.getElementById('firstname').style.border = "0px";
    document.getElementById('username').style.border = "0px";
    document.getElementById('password').style.border = "0px";
    document.getElementById('REpassword').style.border = "0px";
    document.getElementById('lastname').style.border = "0px";
    document.getElementById('address1').style.border = "0px";
    document.getElementById('address2').style.border = "0px";
    document.getElementById('city').style.border = "0px";
    document.getElementById('state').style.border = "0px";
    document.getElementById('zip').style.border = "0px";
    document.getElementById('phone').style.border = "0px";
    document.getElementById('email').style.border = "0px";
    document.getElementById('birthday').style.border = "0px";

    document.getElementById('usererror').innerText = "";
    document.getElementById('password').innerText = "";
    document.getElementById('REpassword').innerText = "";
    document.getElementById('firsterror').innerText = "";
    document.getElementById('lasterror').innerText = "";
    document.getElementById('adderror').innerText = "";
    document.getElementById('adderror2').innerText = "";
    document.getElementById('cityerror').innerText = "";
    document.getElementById('stateerror').innerText = "";
    document.getElementById('ziperror').innerText = "";
    document.getElementById('phoneerror').innerText = "";
    document.getElementById('emailerror').innerText = "";
    document.getElementById('birthdayerror').innerText = "";
}


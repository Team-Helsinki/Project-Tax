function validateForm() {
    var name = document.forms["signup_form"]["Name"].value;
    var email = document.forms["signup_form"]["Email"].value;

    var namelength = name.length;
    //console.log(namelength);
    if (namelength < 4) {
        alert("Name must be at least 4 letters");
        return false;
    }

    else {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
        {
            return (true)
        }
        alert("You have entered an invalid email address!");
        return (false)
    }
}
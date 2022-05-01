document.getElementById("fname").addEventListener("keyup", function()
{
    var regname=/^[a-zA-Z]+$/;
    if (document.getElementById("fname").value == ""){
        document.getElementById("fnameerr").innerHTML = "please fill ";
    }
    else if (regname.test(document.getElementById("fname").value)==false)
    {
        document.getElementById("fnameerr").innerHTML= "Invalid name";
    }
    else 
    {
        document.getElementById("fnameerr").innerHTML = "";
    }
    
});
document.getElementById("lname").addEventListener("keyup", function()
{
    var regname=/^[a-zA-Z]+$/;
    if (document.getElementById("lname").value == ""){
        document.getElementById("lnameerr").innerHTML = "please fill ";
    }
    else if (regname.test(document.getElementById("lname").value)==false)
    {
        document.getElementById("lnameerr").innerHTML= "Invalid name";
    }
    else 
    {
        document.getElementById("lnameerr").innerHTML = "";
    }
    
});


document.getElementById("age").addEventListener("keyup", function()
{
    var age=document.getElementById("age").value;
    if (document.getElementById("age").value == ""){
        document.getElementById("ageerr").innerHTML = "please fill";
    }
    else if (( age > 15 && age<100 )==false)
    {
        document.getElementById("ageerr").innerHTML= "Invalid age";
    }
    else 
    {
        document.getElementById("ageerr").innerHTML = "";
    }
    
});



document.getElementById("email").addEventListener('keyup', function() 
{
    var regemail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (document.getElementById("email").value == "") {
        document.getElementById("emailerr").innerHTML =
            "Please fill  ";

    } else if (regemail.test(document.getElementById("email").value) == false) {
        document.getElementById("emailerr").innerHTML = "Inavalid email";

    } 
    else {
        document.getElementById("emailerr").innerHTML = "";
    }
});

document.getElementById("pass").addEventListener('keyup', function() 
{
    var regpass=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,10}$/;

    if (document.getElementById("pass").value == "") {
        document.getElementById("passerr").innerHTML ="Please fill ";

    } else if (regpass.test(document.getElementById("pass").value) == false) {
        document.getElementById("passerr").innerHTML = "Password must have one upper case, one lower case, one special character";

    } 
    else {
        document.getElementById("passerr").innerHTML = "";
    }
});



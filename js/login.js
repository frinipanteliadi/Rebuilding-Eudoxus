function removeBorder(input) {
    input.style.removeProperty('border');
}

function checkStudent(checkbox)
{
    if (checkbox.checked)
    {   
        // A block element fills the entire line, and nothing can be displayed on its left or right side.
        document.getElementById("student_info").style.display="block";
    }
    else
    {   // Set a <div> element to not be displayed 
        // i.e. the element will not take any space
        document.getElementById("student_info").style.display="none";
    }
}

function checkPublisher(checkbox)
{
    if (checkbox.checked)
    {
        document.getElementById("publisher_info").style.display="block";
    }
    else
    {
        document.getElementById("publisher_info").style.display="none";
    }
}

function checkSecretary(checkbox)
{
    if (checkbox.checked)
    {
        document.getElementById("secretary_info").style.display="block";
    }
    else
    {
        document.getElementById("secretary_info").style.display="none";
    }
}

function checkDistributor(checkbox)
{
    if (checkbox.checked)
    {
        document.getElementById("distributor_info").style.display="block";
    }
    else
    {
        document.getElementById("pdistributor_info").style.display="none";
    }
}

// Checks the input that was given in the form
function checkInp()
{
    var flag=0;
    var email=document.forms["myForm"]["Email"].value;
    if(!email.includes("@")){
        document.getElementById('inputEmail').placeholder = "Τo email δεν είναι σωστό";
        document.getElementById('inputEmail').value = "";
        document.getElementById('inputEmail').style.borderColor='red';
        flag=flag+1;
    }else if(email.length>60){
        document.getElementById('inputEmail').placeholder = "Το email είναι μεγάλο";
        document.getElementById('inputEmail').value = "";
        document.getElementById('inputEmail').style.borderColor='red';
        flag=flag+1;
    }
    var x=document.forms["myForm"]["AFM"].value;
    if (isNaN(x))
    {
        document.getElementById('AFM').placeholder = "Το ΑΦΜ πρέπει να είναι αριθμός";
        document.getElementById('AFM').value = "";
        document.getElementById('AFM').style.borderColor='red';
        flag=flag+1;
    }else if(x.length>10){
        document.getElementById('AFM').placeholder = "Το ΑΦΜ είναι μέχρι 10 αριθμούς";
        document.getElementById('AFM').value = "";
        document.getElementById('AFM').style.borderColor='red';
        flag=flag+1;
    }
    var x=document.forms["myForm"]["Pwd"].value;
    if(x.length>25){
        document.getElementById('inputPassword').placeholder = "Ο κωδικός είναι μέχρι 25 χαρακτήρες";
        document.getElementById('inputPassword').value = "";
        document.getElementById('inputPassword').style.borderColor='red';
        flag=flag+1;
    }
    var x=document.forms["myForm"]["Phone"].value;
    if(x.length!=10){
        document.getElementById('inputPhoneNumber').placeholder = "Ο αριθμός τηλεφώνου πρέπει να έχει ακριβώς 10 ψηφία";
        document.getElementById('inputPhoneNumber').value = "";
        document.getElementById('inputPhoneNumber').style.borderColor='red';
        flag=flag+1;
    }
    if(flag>0){
        return false;
    }
}

function checkValue(){
    var form = document.forms[0];
    if(
        (form["nameUser"].value != "" && form["nameUser"].value != null) &&
        (form["surname"].value != "" && form["surname"].value != null) &&
        (form["login"].value != "" && form["login"].value != null) &&
        (form["city"].value != "" && form["city"].value != null) &&
        (form["street"].value != "" && form["street"].value != null) &&
        (form["building"].value != "" && form["building"].value != null) &&
        (form["postoffice"].value != "" && form["postoffice"].value != null)
    ){
        return true;
    }else{
        return false;
    }
}

function checkPESELNotNull(){
    var form = document.forms[0];
    if(
        (form["Pesel"].value != "" && form["Pesel"].value != null)
    ){
        return true;
    }else{
        return false;
    }
}

function checkPESELSize(){
    var form = document.forms[0];
    if(
        (form["Pesel"].lenght == 11)
    ){
        return true;
    }else{
        return false;
    }
}

function checkPESEL(){
    if(
        checkPESELNotNull() && checkPESELSize()
    ){
        return true;
    }else{
        return false;
    }
}

function checkEmailNotNull(){
    var form = document.forms[0];
    if(
        (form["email"].value != "" && form["email"].value != null)
    ){
        return true;
    }else{
        return false;
    }
}

function checkEmailOK(){
    var form = document.forms[0];
    if(
        (form["email"].value.indexOf('@') != -1)
    ){
        return true;
    }else{
        return false;
    }
}

function checkEmail(){
    if( checkEmailNotNull() && checkEmailOK() ){
        return true;
    }else{
        return false;
    }
}

function checkPasswordNotNull(){
    var form = document.forms[0];
    if(
        (form["npassword"].value != "" && form["npassword"].value != null)
    ){
        return true;
    }else{
        return false;
    }
}

function checkRep_PasswordNotNull(){
    var form = document.forms[0];
    if(
        (form["rep_password"].value != "" && form["rep_password"].value != null)
    ){
        return true;
    }else{
        return false;
    }
}

function checkPasswordSize(){
    var form = document.forms[0];
    // var sizePassword = form["npassword"].lenght;
    if(form["npassword"].lenght == 6){
        return true;
    }else{
        return false;
    }
}

function checkPasswordOK(){
    var form = document.forms[0];
    if(form["npassword"].value === form["rep_password"].value){
        return true;
    }else{
        return false;
    }
}

function checkPassword(){
    if( checkPasswordNotNull() && checkRep_PasswordNotNull() && checkPasswordSize() && checkPasswordOK() ){
        return true;
    }else{
         return false;
    }
}

function checkKod1NotNull(){
    var form = document.forms[0];
    if(
        (form["kod1"].value != "" && form["kod1"].value != null)
    ){
        return true;
    }else{
        return false;
    }
}

function checkKod1Size(){
    var form = document.forms[0];
    if(
        (form["kod1"].lenght == 6)
    ){
        return true;
    }else{
        return false;
    }
}

function checkKod1OK(){
    var form = document.forms[0];
    if(
        (form["kod1"].value.indexOf('-') != -1)
    ){
        return true;
    }else{
        return false;
    }
}

function checkKod1(){
    if(
        checkKod1NotNull() && checkKod1Size() && checkKod1OK()
    ){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){
    $(document).mouseover(function(){
        if( checkValue() && checkEmail() && checkPESEL() && checkPassword() && checkKod1() ){
            $("#submit").attr("disabled", false);
            $("#submit").removeClass("submitStart");
            $("#submit").addClass("button2");
        }else{
            $("#submit").attr("disabled", true);
            $("#submit").removeClass("submitHover");
            $("#submit").addClass("submitStart");

            $("#submit").removeClass("button2");
            $("#submit").removeClass("submitHover");
        }

        if(checkPESELNotNull()){
            if( !(checkPESELSize()) ){
                $("#pesel").removeClass("pesel");
                $("#pesel").addClass("peselError");
            }else{
                $("#pesel").removeClass("peselError");
                $("#pesel").addClass("pesel");
            }
        }

        if(checkEmailNotNull()){
            if( !(checkEmailOK()) ){
                $("#email").removeClass("email");
                $("#email").addClass("emailError");
            }else{
                $("#email").removeClass("emailError");
                $("#email").addClass("email");
            }
        }

        if(checkPasswordNotNull()){
            if( !(checkPasswordSize()) ){
                $("#password").removeClass("password");
                $("#password").addClass("passwordError");
            }else{
                $("#password").removeClass("passwordError");
                $("#password").addClass("password");
            }
        }

        if(checkPasswordNotNull() && checkRep_PasswordNotNull()){
            if( !(checkPasswordOK()) ){
                $("#rep_password").removeClass("rep_password");
                $("#rep_password").addClass("rep_passwordError");
            }else{
                $("#rep_password").removeClass("rep_passwordError");
                $("#rep_password").addClass("rep_password");
            }

        }

        if(checkKod1NotNull()){
            if( !(checkKod1OK()) && !(checkKod1Size()) ){
                $("#kod1").removeClass("kod1");
                $("#kod1").addClass("kod1Error");
            }else{
                $("#kod1").removeClass("kod1Error");
                $("#kod1").addClass("kod1");
            }
        }

    })
    $("#submit").mouseover(function(){
        $("#submit").removeClass("button2");
        $("#submit").addClass("submitHover");
    });
    $("#submit").mouseout(function(){
        $("#submit").removeClass("submitHover");
        $("#submit").addClass("button2");
    });
});
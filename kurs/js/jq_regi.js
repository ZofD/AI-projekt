function checkValue(){
    var form = document.forms[0];
    if(
        (form["nameUser"].value != "" && form["nameUser"].value != null)
    ){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){
    //var str = $("input[name=nameUser]").text();
    if(checkValue()){
        $("#submit").attr("disabled", false);
    }else{
        $("#submit").attr("disabled", true);
    }
});
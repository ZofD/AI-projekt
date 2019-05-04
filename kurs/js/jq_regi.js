$(document).ready(function(){
    var str = $("input[name=nameUser]").text();
    if(
        (str.serch("") || str.serch(null))
    ){
        $("#submit").attr("disabled", false);
    }else{
        $("#submit").attr("disabled", true);
    }
});
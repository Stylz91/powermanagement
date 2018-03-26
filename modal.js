$(function() {
    $('#loginbtn').on("click", function() {
        $('#usermodal').css("display", "block");
    });
    $('#closemodal').on("click", function() {
        $('#usermodal').addClass("w3-animate-out-top");
        setTimeout(function(){$('#usermodal').css("display", "none")},390)
        setTimeout(function(){$('#usermodal').removeClass("w3-animate-out-top");},390)
    });
    $('.userselect').on("click", function() {
        $('#usermodal').addClass("w3-animate-out-top");
        setTimeout(function(){$('#usermodal').css("display", "none")},390)
        setTimeout(function(){$('#usermodal').removeClass("w3-animate-out-top");},390)
    })
    console.log("hallo")
})
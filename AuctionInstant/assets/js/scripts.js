$(document).ready(function(){
//Login/Registration scripts
    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $('#register-form-link').removeClass('text-darken-3');
        $('#register-form-link').addClass('text-lighten-2');
        $(this).removeClass('text-lighten-2');
        $(this).addClass('active');
        $(this).addClass('text-darken-3');
        e.preventDefault();
    });

    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $('#login-form-link').removeClass('text-darken-3');
        $('#login-form-link').addClass('text-lighten-2');
        $(this).removeClass('text-lighten-2');
        $(this).addClass('active');
        $(this).addClass('text-darken-3');
        e.preventDefault();
    });

//Countdown Timer
    var timeEnd = "2015/10/28 20:00:00";
    $("#clock").countdown(timeEnd, function(event) {
        $(this).html(event.strftime(' Time Left: %H:%M:%S'));
    });

//Materialize Initializations
    $(".button-collapse").sideNav();
    $('.modal-trigger').leanModal();
    $('select').material_select();

    $('#modal1').on('modal-close', function (e) {
        $(this).find("input,textarea,select").val('').end();
    })
});

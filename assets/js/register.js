$(document).ready(function () {
    $('#hideLogin').click(function () {
        $('.loginInput').hide();
        $('.registerInput').show();
    })

    $('#hideRegister').click(function () {
        $('.registerInput').hide();
        $('.loginInput').show();
    })
})
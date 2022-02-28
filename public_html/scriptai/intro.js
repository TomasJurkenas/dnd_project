let button = document.getElementById('registrationForm');

let openForm = function (){

    button.style.display="flex";
}
let closeForm = function (){

    button.style.display="none"

}
$('#mainButton').click(function(){

    $('#registrationForm').animate({
        opacity: '0,1',
        height :'auto',
        width : '300px'
    });

});

$('.closeButton').click(function(){

    $('#registrationForm').animate({
        opacity: '0,1',
        height :'1',
        width : '1'
    });

});

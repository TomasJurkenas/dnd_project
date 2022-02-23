let button = document.getElementById('registrationForm');

let openForm = function (){

    button.style.display="flex";
}
let closeForm = function (){

    button.style.display="none"

}
$('#regBtn').click(function(){

    $('#regBtn').animate({
        left :'250px',
        opacity: '0,5',
        height :'150px',
        width : '150px'
    });

});

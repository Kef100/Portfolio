const age = $('#age');
const typewriter = $('#typewriter');
const duration = 1000;

$(window).on('load', function () {
    age.text(calculateAge(new Date('12/02/2002')));
    setTimeout(function () {
        typewriter.addClass('typewriter-start');
    }, duration);
});

function calculateAge(date){
    return new Date().getFullYear() - date.getFullYear();
}

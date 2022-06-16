const age = $('#age');

$(window).on('load', function () {
    age.text(calculateAge(new Date('12/02/2002')));
});

function calculateAge(date){
    return new Date().getFullYear() - date.getFullYear();
}

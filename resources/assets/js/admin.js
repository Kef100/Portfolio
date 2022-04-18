const sideBar = $('#sidebar');
const arrowCollapse = $('#toggle');

arrowCollapse.click(function (){
    sideBar.toggleClass('collapsed');
    arrowCollapse.toggleClass('collapsed');
    if (arrowCollapse.classList.contains('collapsed')) {
        arrowCollapse.classList = 'bx bx-arrow-from-left logo-name__icon collapse';
    } else {
        arrowCollapse.classList = 'bx bx-arrow-from-right logo-name__icon';
    }
});

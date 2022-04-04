const inner = $("#circle #inline")
// const length = $("#length")
const time = 500
let i = 0
const pi = 3.14;
const dasharray = 2 * inner.attr("r") * pi;
inner.css("stroke-dasharray", dasharray);
inner.css("stroke-dashoffset", dasharray);

function startCounter() {
    let interval = setInterval(function () {
        if (i === time) {
            clearInterval(interval);
            return;
        }
        inner.css('stroke-dashoffset', dasharray - ((i + 1) * (dasharray / time)));
        i++;
    }, 10);
}






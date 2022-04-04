const inner = $("#circle #inline")
// const length = $("#length")
const length = 1000
const pi = 3.14;
const dasharray = 2 * inner.attr("r") * pi;


inner.attr("stroke-dasharray", dasharray);
inner.attr("stroke-dashoffset", dasharray);


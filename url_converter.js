function f () {
var fullReq;
var toklong;
var timelong;
var tok;
var time;
var b;
fullReq=location.search;
b=fluuReq.split("&");
toklong=b[0].split("=");
tok=toklong[1];
timelong=b[1].split("=");
time=timelong[1];
document.getElementById("a_tok").value=tok;
document.getElementById("expire").value=time;}
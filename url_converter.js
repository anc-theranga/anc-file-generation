function f () {
var fullReq;
var toklong;
var timelong;
var tok;
var time;
var a;
var b;
fullReq=location.search;
a=window.location.search.substr(1);
b=a.split("&");
toklong=b[0].split("=");
tok=toklong[1];
timelong=b[1].split("=");
time=timelong[1];
document.getElementById("a_tok").value=tok;
document.getElementById("expire").value=time;}
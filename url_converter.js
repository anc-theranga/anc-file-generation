function f (var in) {
var fullReq;
var toklong;
var timelong;
var tok;
var time;
var b;
var ret;
var c;
var d;
fullReq=location.search;
b=fullReq.split("&");
toklong=b[0].split("=");
tok=toklong[1];
timelong=b[1].split("=");
time=timelong[1];
var a="https://localhst:84201/?tok=";
ret=a.concat(tok,"&time=",time);
document.getElementById(in).href=ret;}
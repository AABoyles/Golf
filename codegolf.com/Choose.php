<?
function f($n){return$n?$n*f($n-1):1;}$t=explode(", ",fgets(STDIN));echo f($t[0])/(f($t[1])*f($t[0]-$t[1]));
Change phone number in website when visited through google and facebook
The Javascript goes on like this.....

function testing(){
 
var url_string = window.location.href; //
var url = new URL(url_string);
var google = url.searchParams.get("gclid");
var facebook = url.searchParams.get("fbclid");
var normal = url.searchParams.get("norm");
if(google){
 
  console.log(google);
  var str = document.getElementById("demo").innerHTML;
  var res = str.replace("000", "111");
  document.getElementById("demo").innerHTML = res;
  document.getElementById("demo").href = "tel:1111111111";
  }
else if(facebook){
 console.log(facebook);
 var str = document.getElementById("demo").innerHTML;
  var res = str.replace("000", "222hjgfhjg");
  document.getElementById("demo").innerHTML = res;
  document.getElementById("demo").href = "tel:22222222222";
}else {
 console.log(normal);
 var str = document.getElementById("demo").innerHTML;
  var res = str.replace("000", "000");
  document.getElementById("demo").innerHTML = res;
  document.getElementById("demo").href = "tel:0000000000";
}
}



Later call the function as onload in body

<body onload="testing()">

Finally add the id in the a tag where your number needs to change in the website.

<a id="demo" href="#">000</a>


Thank you for reading and i hope this information helps you.

// Cord js is a js framework that make scripting easy.
"use strict";



var $ = {};





   $.add = function(url,frame){
     
        var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(""+frame+"").innerHTML =
      this.responseText;
    }
    else if (this.readyState == 3) {
        document.getElementById(""+frame+"").innerHTML = "Loading.....";    
      } 
      else if (this.readyState == 404) {
        document.getElementById(""+frame+"").innerHTML = "Page not found";    
      }
      else if (this.readyState == 403) {
        document.getElementById(""+frame+"").innerHTML = "Page is Forbidden";    
      }
  };
  xhttp.open("GET", ""+url+"?r="+Math.random()+"", true);
  xhttp.send();
        

    };
$.style = function (el, property, value) {
  el.style.setProperty(property, value);


};
$.importer = function () {
  
    let d = document.getElementsByTagName('cord-importer');
for (var i = 0; i <= d.length; i++) {
  let url = d[i].innerHTML;  
   let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      d[i].innerHTML = this.responseText;
    }
    else if (this.readyState == 3) {
        d[i].innerHTML = "Loading.....";    
      } 
      else if (this.readyState == 404) {
        d[i].innerHTML = "Page not found";    
      }
      else if (this.readyState == 403) {
        d[i].innerHTML = "Page is Forbidden";    
      }
  };
  xhttp.open("GET", ""+url+"?r="+Math.random()+"", true);
  xhttp.send();
        

    }


};
$.importer();















Sci = {};

// id
function $(params) {
    
let id = document.getElementById(params);
return id;

}












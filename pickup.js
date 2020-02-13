function validatename(){
    var a = document.getElementById("sname").value;
         var name = /^[A-Za-z '']{5,16}$/i;
			 if (!name.test(a)) {
                 alert("enter valid name");
				 document.getElementById("sname").value="";
                 document.getElementById("sname").focus();
                 }
    
}
 
function validatephn() {
var b = document.getElementById("phn").value;
         var phone = /^[0-9]{10}$/i;
			 if (!phone.test(b)) {
                 alert("enter valid number");
				 document.getElementById("phn").value="";
                 document.getElementById("phn").focus();
                 }
}
 
function addr() {
    document.getElementById("add").value=""
}
 
function valname(){
    var a = document.getElementById("rname").value;
         var name = /^[A-Za-z '']{5,16}$/i;
			 if (!name.test(a)) {
                 alert("enter valid name");
				 document.getElementById("rname").value="";
                 document.getElementById("rname").focus();
                 }
    
}
 
function raddr() {
    document.getElementById("rad").value=""
}
function valphn() {
var b = document.getElementById("rphn").value;
         var phone = /^[0-9]{10}$/i;
			 if (!phone.test(b)) {
                 alert("enter valid number");
				 document.getElementById("rphn").value="";
                 document.getElementById("rphn").focus();
                 }
}
function calculate() {
    var a = document.getElementById("typ").value;
     if(a<=10)
         {
             document.getElementById("fcost").value=200;
         }
     elseif(a>=10||a<=50)
     {
         document.getElementById("fcost").value=500;
     }
     else
         {
             document.getElementById("fcost").value=700;
         }
} 
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function validation(){
    if(document.getElementById("name").value==""){
        window.alert("Please enter your Name");
        document.getElementById("name").focus();
        return false;
    }else if(document.getElementById("email").value==""){
        //return validateEmail(); 
        window.alert("Please enter your E-Mail");
        document.getElementById("email").focus();
        return false;
    }else if(document.getElementById("telephone").value==""){
        window.alert("Please enter your Phone Number");
        document.getElementById("telephone").focus();
        return false;
    }else if(document.getElementById("inquirymessage").value==""){
        window.alert("Please enter your Message");
        document.getElementById("inquirymessage").focus();
        return false;
    }
    if(document.getElementById("email").value!=""){
          return validateEmail(); 
    }
}
function validateEmail(){
var x=document.getElementById("email").value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  window.alert("Not a valid e-mail address");
  document.getElementById("email").focus();
  return false;
  }
  
}
function reset(){
    document.getElementById("contact").reset();
}



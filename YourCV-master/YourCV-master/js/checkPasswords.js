/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var goodColor = "#66cc66";
    var badColor = "#ff6666";
    var medColor ="#FFCC00";
function checkPass()
{
  
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    
    var message = document.getElementById('confirmMessage');
   
    if(pass1.value === pass2.value){
   
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!";
}
else
{

        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!";
    }
}
function passStr()
{
    var strength = document.getElementById('strength');
    var pass1 = document.getElementById('pass1');
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        
        if (pass1.value.length===0) 
        {
            strength.innerHTML = "Password is missing";
            pass1.style.backgroundColor = badColor;
            strength.style.color = badColor;
            
        } 
        else if (false === enoughRegex.test(pass1.value)) 
        {

        } 
        else if (strongRegex.test(pass1.value)) 
        {
        strength.innerHTML = 'Perfect';
        pass1.style.backgroundColor = goodColor;
        strength.style.color = goodColor;
        } 
        else if (mediumRegex.test(pass1.value)) 
        {
        strength.innerHTML = 'Good!';
        pass1.style.backgroundColor = goodColor;
        strength.style.color = goodColor;
        
        } 
        else 
        {
        strength.innerHTML = '<span style="color:red">Weak!</span>';
        }
}
function passLength()
{
    var pass1 = document.getElementById('pass1');
    var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).*$", "g");
    if(pass1.value.length <8 && strongRegex.test(pass1))
    {
        error = "Password must be longer than 8 chracters";
        strength.innerHTML = 'Good!';
        pass1.style.backgroundColor = badColor;
        strength.style.color = badColor;
        alert(error);
        return false;
    }
   
    
return true;
   
   
}
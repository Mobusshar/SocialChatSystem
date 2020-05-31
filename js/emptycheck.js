function checkforblank(){


var userText=document.getElementById('username').value;
userText = userText.replace(/^\s+/, '').replace(/\s+$/, '');
if (userText == "") {
    // text was all whitespace
    alert('No white space allowed');
    document.getElementById('username').style.borderColor = "blue";
    return false;
} 


var passText=document.getElementById('password').value;
passText = passText.replace(/^\s+/, '').replace(/\s+$/, '');
if (passText == "") {
    // text was all whitespace
    alert('No white space allowed');
    document.getElementById('password').style.borderColor = "blue";
    return false;
} 




}
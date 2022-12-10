
function validate(){
var username=document.getElementById("Username").value;
var password=document.getElementById("Password").value;
if(username=="admin"&&password=="user"){
    
    window.open("dashboard.php");
    return false;
}
else{
    alert("login failed");
}
}
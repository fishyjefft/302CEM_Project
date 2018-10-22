function List_SendRequest()
{
    var UserId = document.getElementById("username");
    var Pwd = document.getElementById("password");
    
    var error = false;
    
    if(UserId.value === null || UserId.value === ""){
        error = true;
    }
    
    if(Pwd.value === null || Pwd.value === ""){
        error = true;
    }
    
    if(error === true){
        alert("Input error, please input again.");
        return;
    }
    
    var encode = JSON.stringify({"UserID":UserId.value, "UserPw":Pwd.value});
    
    UserId.value = "";
    Pwd.value = "";
    
    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var data = JSON.parse(this.responseText);
            
            if(data.Result === "true"){
				window.open('../','_self');
            }
            else{
                alert("Invalid combination of User ID and Password, please try again.")
            }
        }
    };
    
    xmlhttp.open("POST", "/WB_Services/UserLogin_Resp.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("inf=" + encode);
}
    

function auth(event) {
        event.preventDefault();

        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        

        if (username === "sam" && password === "user"  ) {
            window.location.replace("../user/home.html");
        }
        else if(username === "john" && password === "admin" ){
            window.location.replace("../admin/management.html");
        }else
            alert("Invalid information");
            return;
        }
    

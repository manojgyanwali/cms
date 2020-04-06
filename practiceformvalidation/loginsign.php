<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name="myform" action="jpt.php" method="POST"  onkeypress="return validation()">
        username:<input type="text" name="username" id="username">
        <span id="usererror"></span>
        password:<input type="password" id="password">
        <span id="passworderror"></span>
        <input type="submit">


    </form>



    <script>
        function validation()
        {
            var user= document.getElementById("username").value;
            var pass= document.getElementById("password").value;

            var userpatt=/[a-zA-Z]/;
            var passpatt=/[a-zA-Z]/;
            
            if(!user.match(userpatt))
                {
                    document.getElementById("usererror").innerHTML="***invalid username***";
                    document.getElementById("usererror").style.color="blue";
                    return(false)
                        
                }
             else (user.match(userpatt))
             {
                document.getElementById("usererror").innerHTML="";

             }

             if(!pass.match(passpatt))  
             {
                 document.getElementById("passworderror").innerHTML="invalid password";
                
                 return(false)

             } 
             else (pass.match(passpatt))
             {
                 document.getElementById("passworderror").innerHtml="";
             }

             
        }
        
        //document.myform.username.addEventListener("keyup",validation();

    </script>
</body>
</html>
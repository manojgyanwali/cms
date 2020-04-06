<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name="form" method="POST" action="insert.php" onsubmit="retutn validate()" >
            <input type="text" id="firstname"  name="firstname" placeholder="firstname">
            <span id="errorfirst"></span>
            <input type="submit" name="submit" value="sign-up">
                
    </form>
    <script>
    function validate(){
    var name=document.getElementById("firstname").value;
    var namepatt=/[a-zA-Z]/;


    if (!name.match(namepatt))
    {
        document.getElementById("errorfirst").innerHTML="***invalid username***";
        document.getElementById("errorfirst").style.color="red";
        return false;
    }

    else(name.match(namepatt))
    {
    document.getElementById("errorfirst").innerHTML="";
    }
    

     }
    
</script>
















</body>
</html>
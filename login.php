<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(images/cassa.jpg) ;
}
.container{
    display: flex;
    height: 500px;
    width: 800px;
   /* border: 1px solid black; */
    margin: auto;
    margin-top: 100px;
    box-shadow: 15px 15px 20px black;
}

.form{
    display: flex;
    flex-direction: column;
    width: 50%;
    align-items: center;
    background-color: whitesmoke;
}.form h2{
    font-size: 3rem;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    margin: 40px;
}
.box{
    padding: 12px;
    width: 65%;
    margin: 15px;
    border: 1px solid black;
    outline: none;
    border-radius: 20px;
}
#submit{
    padding: 12px 30px;
    width: 40%;
    margin-top: 40px;
    background-color: black;
    color: white;
    font-weight: bold;
    border: none;
    outline: none;
    border-radius: 20px;
}
#submit:hover{
    cursor: pointer;
    background-color: #750000;
}
.form a{
    text-decoration: none;
    color: black;
    margin-top: 20px;
}
.form a:hover{
    color: #fd4e4e;
}
.side{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
}
.side img{
    width: 450px;
    height: 499px;
}
    </style>
</head>
<body>
  <div class="container">
    <form action="nav.php" method="post" class="form">
        <h2>SUPER ADMIN</h2>
        <input type="text" name="user" class="box" placeholder="Enter Username">
        <input type="password" name="pass" class="box" placeholder="Password">
        <input type="checkbox" id="showPasswordCheckbox"> Show Password
        <input type="submit" value="SIGN IN" id="submit">
        <a href="#">Forget Password?</a>
    </form>
    <div class="side">
        <img src="images/cassa.jpg" alt="">
    </div>
  </div>
      
 
  <script>
    const passwordInput = document.getElementsByName("pass")[0];
    const showPasswordCheckbox = document.getElementById("showPasswordCheckbox");

    showPasswordCheckbox.addEventListener("change", function() {
        if (showPasswordCheckbox.checked) {
            passwordInput.type = "text";
            confirmPasswordInput.type = "text";
        } else {
            passwordInput.type = "password";
            confirmPasswordInput.type = "password";
        }
    });
</script>
</body>
</html>
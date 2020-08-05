<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        
        <form action="loginValidation.php" method="post">
            <fieldset>
                <legend> Name : </legend>
                    Username : <input type="text" name="username"/><br/><br/>
                    Password : &nbsp;<input type="password" name="password"/></br>
                    <hr color="black">
                    <input type="checkbox">Remember Me</input><br/><br/>

                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"/>
                    <a href="forgotPass.php">Forgot Password?</a>
            </fieldset>
        </form>
    </body>
</html>
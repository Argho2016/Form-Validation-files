<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        
        <form action="registerPageValidation.php" method="post">
            <fieldset>
                <legend> Registration : </legend>
                    Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="name"/><br/>
                    <hr color="black">
                    Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="email"/> i.g.: anyone@example.com <br/>
                    <hr color="black">
                    Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="username"/><br/>
                    <hr color="black">
                    Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type="password" name="password"/><br/>
                    <hr color="black">
                    Confirm Password : &nbsp;<input type="password" name="Confirmpassword"/><br/>
                    <hr color="black">

                    <fieldset>
                        <legend>Gender:</legend>
                        <input type="radio" name="gender" value="female"/>Female
                        <input type="radio" name="gender" value="male"/>Male
                        <input type="radio" name="gender" value="other"/>Other
                        
                        <br/>
                    </fieldset>
                    <hr color="black">

                        <fieldset>
                            <legend>Date of Birth:</legend>
                                <table>
                                    <tr>
                                        <td>
                                            dd <br/>
                                            <input type="text" name="date">
                                        </td>
                                        <td>
                                            mm <br/>
                                            <input type="text" name="month">
                                        </td>
                                        <td>
                                            yyyy <br/>
                                            <input type="text" name="year">
                                        </td>
                                        <td>
                                            <br/>&nbsp;<b>dd/mm/yyyy<b/>
                                        </td>
                                    </tr>
                                </table>
                                <br/>
                        </fieldset>
                    <hr color="black">
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"/>&nbsp;&nbsp;<input type="Reset"/>
            </fieldset>
        </form>
    </body>
</html>
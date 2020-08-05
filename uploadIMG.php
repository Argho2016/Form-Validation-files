<html>
    <head>
        <title>Upload Image</title>
    </head>
    <body>
        
        <form action="uploadIMGValidation.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend> Name : </legend>
                <img src="image.png" alt="upload image" height="90"><br/>
                    <input type="file" name="file"/><br/><br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"/>
            </fieldset>
        </form>
    </body>
</html>
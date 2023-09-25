<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="./contact.css" />
</head>
<body>
    <h1>Contact Us</h1>
    <form action="connect.php" method="post">
        <div class="container">
        <div class="group">
        <label>Name</label>
        <input type="text" class="element" id="name" name="Name"/>
        </div>
        <div class="group">
        <label>Mail </label>
        <input type="text" class="element" id="mail" name="Mail"/>
        </div>
        <div class="group">
        <label>Mobile</label>
        <input type="text" class="element" id="mobile" name="Mobile"/>
        </div>
        <div class="group">
            <input type="submit"/>
        </div>
        </div>
    </form>
</body>
</html>
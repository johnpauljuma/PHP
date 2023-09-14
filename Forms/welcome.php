<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .container{
            height: 70%;
            width: 40%;
            margin: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 0 5px 0;
            border-radius: 10px;
            border-style: outset;
            padding: 2em;

        }
        form{
            height: 100%;
            width: 100%;
            padding: 2em;

        }
        .input{
            margin: 2em;
            height: 2em;
            border-radius: 5px;
        }

    </style>
    <div class="container">
    <form action="welcome_get.php" >
        Name <input type="text" name="name" class="input">
        <br>
        Email<input type="text" name="email" class="input">
        <br>
        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>
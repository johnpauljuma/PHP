<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        h1{
            text-align: center;
            color: blue;
        }
        h2{
            text-align: center;
            color: blue;
            justify-content: center;
        }
        .div{
            background-color: orange;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 25em;
            

        }
        .content{
            
            background-color: aqua;
            width: 30em;
            justify-content: center;
            height: 20em;
            margin: 2em;
            padding: 2em;
        }
    </style>
    
    <?php
    echo "<h1>My  First PHP Web Page!</h1> <hr>";
    
    echo "<div class='div'> 
    <div class='content'><h2>Hello world!</h2><hr> </div>
    <div class='content'>
        <h2>PHP is Fun!</h2><hr>
        Hello world!<br>
        I'm about to learn PHP!<br>
        This , string , was , made , with multiple parameters.
    </div>
    <div></div>
    <div></div>
    </div>";
    
    ?>
</body>
</html>
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
            width: 80%;
            margin: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 0 5px 0;
            border-radius: 10px;
            border-style: outset;
            padding: 2em;
            background-color: grey;

        }
        form{
            height: 100%;
            width: 95%;
            padding: 2em;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 3px 0;
            margin: auto;
        }
        .input{
            margin: 2em;
            height: 2em;
            border-radius: 5px;
        }
        input[type='submit'], 
        input[type='reset']{
            background-color: blue;
            padding: 5px;
            font-size: 24px;
            cursor: pointer;
            border-radius: 5px;

        }
        input[type='reset']{
            margin-left: 2em;
        }

    </style>
    <div class="container">
        <div><h3>Enter Your Profile Details</h3></div>
    <form action="profile_.php" >
        First Name <input type="text" name="fname" class="input">
        Midle Name <input type="text" name="mname" class="input">
        Last Name <input type="text" name="lname" class="input">
        <br>
        Email<input type="text" name="email" class="input">
        Date of birth <input type="date" name="date" class="input">
        Address <input type="text" name="address" class="input">
        <br>
        Occupation <input type="text" name="occupation" class="input">
        Phone <input type="text" name="phone" class="input">
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset"> 
    </form>
    </div>
</body>
</html>
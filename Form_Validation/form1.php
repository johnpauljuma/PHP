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
        input[type="text"]{
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
        table{
            margin: auto;
            margin-top: 2em;
            padding: 10px;
            box-shadow: 0 0 3px 0;
        }
        th{
            padding: 5px;
            text-align: left;
            box-shadow: 0 0 5px 0;

        }
        td{
            border: 1px;
            margin: 5px;
            text-align: left;
            padding: 10px;
        }
    </style>
    <?php 
    $fname = $lname = $email = $address = $gender = $phone = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $fname = test($_POST['fname']);
        $lname = test($_POST['lname']);
        $email = test($_POST['email']);
        $address = test($_POST['address']);
        $gender = test($_POST['gender']);
        $phone = test($_POST['phone']);
    }
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <div class="container">
        <h2>Enter Your Details in the Form Below</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            First Name<input type="text" name="fname">
            Last Name <input type="text" name="lname">
            <br><br>
            Email <input type="text" name="email">
            Address <input type="text" name="address">
            <br><br>
            Gender: <input type="radio" name="gender">Male
            <input type="radio" name="gender">Female
            <input type="radio" name="gender">Other 
            <br><br>
            Phone <input type="number" name="phone">
            <br><br>
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Reset">

        </form>
    </div>
    <div class="container">
        <div><h2>Your Details are as below:</h2></div>
        <div>
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Phone</th>
                </tr>
                <tr>
                    <td><?php echo $fname?></td>
                    <td><?php echo $lname?></td>
                    <td><?php echo $email?></td>
                    <td><?php echo $address?></td>
                    <td><?php echo $gender?></td>
                    <td><?php echo $phone?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
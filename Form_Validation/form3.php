<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Re2quired dataidation!</title>
    <style>
        .container{
            height: 70%;
            width: 90%;
            margin: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 0 5px 0;
            border-radius: 10px;
            border-style: outset;
            padding: 1em;
            background-color: grey;

        }
        form{
            height: 100%;
            width: 95%;
            padding: 1em;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 3px 0;
            margin: auto;
        }
        input[type="text"],
        input[type="number"],
        input[type="date"]{
            margin-left: 1.5em;
            margin-bottom: 2em;
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
        span{
            color: red;
            margin-left: 0;
            margin-right: 2em;
        }
    </style>
</head>
<body>
    <?php
    $fname = $lname = $stdid = $address = $city = $phone = $cons =$gdate = "";
    $error = "";
    $studentdata = [];
    
    if($_SERVER["REQUEST_METHOD"] == 'POST')
    {
        if(empty($_POST['fname'] || $_POST['lname'] || $_POST['stdid']))
        {
            $error = "Please fill this field!";
        }
        else
        {
            $fname = test($_POST['fname']);
            $lname = test($_POST['lname']);
            $stdid = test($_POST['stdid']);
            $address = test($_POST['address']);
            $city = test($_POST['city']);
            $phone = test($_POST['phone']);
            $major = test($_POST['major']);
            $cons = test($_POST['cons']);
            $gdate = test($_POST['gdate']);
        
            
            $studentdata [] =[
                'fname' => $fname,
                'lname' => $lname,
                'stdid' => $stdid,
                'address' => $address,
                'city' => $city,
                'phone' => $phone,
                'major' => $major,
                'cons' => $cons,
                'gdate' => $gdate,
            ];   
        }
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
        <h2>Enter the details Below</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
        <p><span>* Required!</span></p>
            First Name:
            <input type="text" name="fname">
            <span><?php echo "* ".$error?></span>
            Last Name:
            <input type="text" name="lname">
            <span><?php echo "* ".$error?></span>
            Student ID:
            <input type="number" name="stdid">
            <span><?php echo "* ".$error?></span>
            <br><br>
            Address:
            <input type="text" name="address">
            City:
            <input type="text" name="city">
            Phone:
            <input type="number" name="phone">
            <br><br>
            Major:
            <input type="text" name="major">
            Concentration:
            <input type="text" name="cons">
            Graduation Date:
            <input type="date" name="gdate">
            <br><br>
            <input type="submit" value="Submit">

        </form>
    </div>
    <div class="container">
        <table>
            <tr>
                <th>First Name</th>
                <th>Last name</th>
                <th>Studet ID</th>
                <th>Address</th>
                <th>City</th>
                <th>Phone</th>
                <th>Major</th>
                <th>Concentration</th>
                <th>Graduation Date</th>
            </tr>
            <?php 
            foreach($studentdata as $data)
            {
                echo "<tr>
                <td>" . $data['fname'] . "</td>
                <td>" . $data['lname'] . "</td>
                <td>" . $data['stdid'] . "</td>
                <td>" . $data['address'] . "</td>
                <td>" . $data['city'] . "</td>
                <td>" . $data['phone'] . "</td>
                <td>" . $data['major'] . "</td>
                <td>" . $data['cons'] . "</td>
                <td>" . $data['gdate'] . "</td>
                </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
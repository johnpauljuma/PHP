<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
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
    <div>
        <div><center><h3>Profile Table</h3></center></div>
        <table>
            <tr>
                <th>First Name</th>
                <th>Midle Name</th>
                <th>Lastst Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Address</th>
                <th>Occupation</th>
                <th>Phone</th>
            </tr>
            <tr>
                <td><?php echo $_GET['fname'];?></td>
                <td><?php echo $_GET['mname'];?></td>
                <td><?php echo $_GET['lname'];?></td>
                <td><?php echo $_GET['email'];?></td>
                <td><?php echo $_GET['date'];?></td>
                <td><?php echo $_GET['address'];?></td>
                <td><?php echo $_GET['occupation'];?></td>
                <td><?php echo $_GET['phone'];?></td> 
            </tr>
        </table>
    </div>
</body>
</html>
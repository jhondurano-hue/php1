<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output 1</title>
    <style>
        body {
            font-family: "Arial";
        }
    </style>
</head>
<body>
    <h1>PHP Output No. 1</h1>
    
    <fieldset>
        <legend>This form uses GET request</legend>
        <form action="redirect.php" method="GET">
        <table>
            <tr>
                <td>First Name</td>
                <td>
                    <input type="text" name="fname" placeholder="Enter First Name" required />
                </td>
            </tr>
            <tr>
                <td>Middle Name</td>
                <td>
                    <input type="text" name="mname" placeholder="Enter Middle Name" required />
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" name="lname" placeholder="Enter Last Name" required />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit Data">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
        </form>
    </fieldset>
    
    <fieldset style="margin-top: 20px">
        <legend>This form uses POST request</legend>
        <form action="redirect.php" method="POST">
        <table>
            <tr>
                <td>First Name</td>
                <td>
                    <input type="text" name="fname" placeholder="Enter First Name" required />
                </td>
            </tr>
            <tr>
                <td>Middle Name</td>
                <td>
                    <input type="text" name="mname" placeholder="Enter Middle Name" required />
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" name="lname" placeholder="Enter Last Name" required />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit Data">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
        </form>
    </fieldset>

</body>
</html>

<?php
    
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $req_type = '$_GET';
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $req_type = '$_POST';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output No. 1</title>
    <style>
        body {
            font-family: "Arial";
        }
    </style>
</head>
<body>
    <h2>Data is sent here, and it is store at <?php echo $req_type; ?> variable</h2>
    <table>
        <tr>
            <td width="120">First Name:</td>
            <td style="text-decoration: underline">
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo ($req_type == '$_GET') ? $_GET['fname'] : $_POST['fname']; ?>
            </td>
        </tr>
        <tr>
            <td>Middle Name:</td>
            <td style="text-decoration: underline">
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo ($req_type == '$_GET') ? $_GET['mname'] : $_POST['mname']; ?>
            </td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td style="text-decoration: underline">
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo ($req_type == '$_GET') ? $_GET['lname'] : $_POST['lname'];?>
            </td>
        </tr>
    </table>
    <br><br>
    <a href="./">Return to Main Form</a>
</body>
</html>
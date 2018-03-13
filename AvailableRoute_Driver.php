<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AvailableRoute_Driver</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <nav>
        <a href="AvailableRoute_Driver.php">Available Offers</a> |
        <a href="RequestedRoute_Driver.php">Requested Route</a> |
        <a href="OfferedRoute.php">My routes booked</a>
    </nav>
    <br>
    <form action="">
        <p>Departure</p>
        <br>
        <input type="text" name="Departure" value="" require>
        <br>
        <p>Destination</p>
        <input type="text" name="Destination" value="" require>
        <br>
        <p>Time and Date</p>
        <input type="date" name="Date" require>
        <br>
        <input type="time" name="Time" require>
    </form>
</body>
</html>
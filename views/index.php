<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Registration </title>
</head>

<body>
    <div id="main">
        <form  action="../actions/RegistrationAction.php" class="form"  method="post">
            <input type="text" placeholder="For Name" name="name">
            <input type="email"  placeholder="For Email" name="email">
            <input type="password"  placeholder="For Password" name="password">
            <input type="submit" value="Registration" class="btn" name="submit">
        </form>
    </div>
</body>

</html>
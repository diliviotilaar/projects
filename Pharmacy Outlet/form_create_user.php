<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKOPEDEI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="images/logo_apotek.png" alt="logo" width=150px height= 150px>
        </div>
        <div class="pharmacy">
            <h1>CVJ</h1>
            <h3>PHARMACY</h3>
        </div>
        <div class="cart">
            <a href="index.php">
                <img src="images/log_out.png" alt="" width=110px height= 110px id= "logo" style="margin: 20px;">
            </a>
        <form action="admin.php" method="get">
            <input type="image" src="images/return_logo.png " alt="Submit" width=110px height= 110px id="cartl" style="margin: 20px;">
        </form>
        </div>
    </div>
    <form action="create_user.php" method = "get">
		<strong> USERNAME </strong><br/> 
			<input name="username" type="text"> <br/><br/>
		<strong> PASSWORD </strong><br/>
			<input name="password" type="text" size="30"> <br/><br/>
		<input type="submit" name="btnSubmit" value ="create">
	</form>
</body>
</html>
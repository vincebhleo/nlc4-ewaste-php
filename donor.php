<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="scripts/jq/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="scripts/script.js"></script>
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/extend.css" />
    <link rel="shortcut icon" type="image/png" href="images/persistent-favicon.png"/>
    <title>eWaste Management App</title>
</head>
<body>
    <img src="images/BackgoundEcoEnvcrop.jpg" alt="BackgoundEcoEnvcrop">
    <h2 class="title">Find Your Nearest Collection Point</h2>
    <form action="action_page.php" id="registration">
        <div id="label_input">
            <h3>Pick a City</h3>
            <hr>   
            <label for="city">City Selection</label> 
            <select name="city" id="city">
                <option value="donor">Kuala Lumpur</option>
                <option value="collector">Penang</option>
                <option value="recycler">Petaling Jaya</option>
                <option value="recycler">Sunway</option>
            </select>
            <br>
        </div>
        <br>
        <input type="submit" id="submitBtn">
    </form>
    <div class="footer">
      <p style="color:black;"><em>Powered by</em></p>
      <img src="images/logo1.png" alt="logo" style="width:80px;height:40px;">
    </div>
</body>
</html>
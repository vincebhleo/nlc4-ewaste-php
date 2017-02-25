<?php
    include("classes/Helper.php");
?>
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
    <img src="../../images/E-WasteTree.jpg" alt="E-WasteTree">
    <div class="statements">
        <p><strong>Our Mission</strong></p>
        <p><i>Mission statement</i></p>
        <p><strong>Our Goals</strong></p>
        <p><i>Goals statement</i></p>
    </div>
    <button class="accordion">FIND US</button>
    <div class="panel">
      <p>MERCHANT LOCATOR</p>
    </div>
    <button class="accordion">PARTNER WITH US</button>
    <div class="panel">
      <p>REGISTRATION</p>
      <p>PARTNER LOGIN</p>
    </div>
    <script type="text/javascript">
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        }
    }
    </script>
    <div class="footer">
      <p style="color:black;"><em>Powered by</em></p>
      <img src="../../images/logo1.png" alt="logo" style="width:80px;height:40px;">
    </div>
</body>
</html>

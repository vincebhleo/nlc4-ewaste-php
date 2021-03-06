<?php
include("config.php");
include("classes/Helper.php");

if (Helper::isDevelopment()) {
    $mysqli = @new mysqli("10.211.50.18", "root", "Root#123", "console", "3306");
} else {
    $vcap_services = json_decode ( $_ENV ["VCAP_SERVICES"] );
    $db = $vcap_services->{"compose-for-mysql"} [0]->credentials;
    $temp = explode ( '@', $db->uri );
    $mysql_cred = explode ( ':', $temp [0] );
    $mysql_db = explode ( '/', $temp [1] );

    // Create DB connection
    $mysqli = new mysqli ( $mysql_db [0], ltrim ( $mysql_cred [1], "/" ), $mysql_cred [2], $mysql_db [1] );
}

// Check DB connection
if ($mysqli->connect_error) {
	die ( "Connection failed: " . $mysqli->connect_error );
}
$email = @$_GET['email'];

// To update insert query from form
$sql = "select _role, _id from ewaste_user where email = '" . $email . "' limit 1";
$result = $mysqli->query($sql);
$role = "unknown" ;
$_id = 0 ;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $role = $row["_role"];
        $_id = $row["_id"];
    }
}

$mysqli->close ();

if($role == "donor") header("Location: " . PROJECT_FOLDER . "donor.php");
elseif($role == "recycler") header("Location: " . PROJECT_FOLDER . "recycler.php?_id=" . $_id);
elseif($role == "volunteer") header("Location: " . PROJECT_FOLDER . "volunteer.php?_id=" . $_id);
else header("Location: " . PROJECT_FOLDER . "partnerlogin.php?error=true");
?>
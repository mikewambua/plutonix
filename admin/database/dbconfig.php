<link href="../css/sb-admin-2.min.css" rel="stylesheet">

<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "plutonix";

$connection = mysqli_connect($server_name, $db_username, $db_password);

$dbconfig = mysqli_select_db($connection,$db_name);
if($dbconfig){
    // echo "Database Connected!";
}else{
    echo '
    <div class="container">
        <div class="row">
        <div class="col-md-6 mr-auto ml-auto pt-5 text-center">
            <div class="error" data-text="Database">Database Connection Failed</div>
                <a href="#" class="btn btn-danger">:)</a>
        </div>
        </div>
    </div>
';
}
?>
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "plutonix";

$connection = mysqli_connect($host, $username, $password);

$dbconnect = mysqli_select_db($connection,$dbname);
if($dbconnect){
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
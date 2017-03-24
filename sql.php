<?php
    
function db_conn()
{
    $user = "root";
    $pass = "";
    $host = "localhost"; 
    
    $handle = mysql_connect($host, $user, $pass)  or die("Unable to connect to MySQL");
        echo "Connected to MySQL<br>";

    mysql_select_db("wawa", $handle)  or die("Could not select examples");
}

db_conn();
$result = mysql_query("SELECT * from dom ");

   
while ($row = mysql_fetch_array($result) )
{
    echo $row['id_dom'];
    echo '</br>';
}


mysql_close($dbhandle);









?>
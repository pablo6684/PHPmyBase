<?php
    
function db_conn()
{
    $user = "root";
    $pass = "";
    $host = "localhost"; 
    
    $handle = mysql_connect($host, $user, $pass)  or die("Unable to connect to MySQL");
    mysql_select_db("wawa", $handle)  or die("Could not select examples");
}



db_conn();
$result = mysql_query("SELECT * from dom ");

   
//mysql_fetch_row();
//mysql_fetch_assoc();
//mysql_num_rows();
//mysql_num_fields();

while ($row = mysql_fetch_array($result) )
{
    echo $row['id_dom'];
    echo '</br>';
}


//mysql_query("START TRANSACTION")or die("blad wlaczenia transakcji");
//mysql_query("ROLLBACK")or die("blad wlaczenia transakcji");
//mysql_query("COMMIT")or die("blad wlaczenia transakcji");

    mysql_close();

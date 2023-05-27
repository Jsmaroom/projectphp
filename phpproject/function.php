<?php 
require_once 'db_conn.php';

function display_data (){
    global $conn;
    $query = "select * from users" ;
    $result = musqli_qurey($conn ,$query);
    return $result ;
}
?>
<?php
 include '../config/db_conn.php';

 $id= $_GET['id'];

 $query = "DELETE FROM users WHERE userType = 'Tenants' AND id=$id";

 mysqli_query($conn, $query);

 header('location: tenants.php');
?>
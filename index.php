<?php

require_once 'domain_object/node_role.php';

$obj_role = [];
$obj_role[] = new Role (1, "farsya", "dibuat untuk kasir", 1);
// $obj_role[] = new Role (2, "farsya", "dibuat untuk kasir", 0);
// $obj_role[] = new Role (3, "farsya", "dibuat untuk kasir", 1);

// foreach ($obj_role as $role){
//     echo "id role :".$role->role_id."<br>";
//     echo "nama :".$role->role_name."<br>";
//     echo "Keterangan :".$role->role_description."<br>";
//     echo "Status :".$role->role_status."<br>";
//     echo "<br>";
// }
include'views/role_list.php';
?>
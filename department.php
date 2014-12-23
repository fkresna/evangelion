<?php
/**
 * User: Freddy
 * Date: 2/24/14
 */
include_once "lib/Db.php";
$db = new Db();

if(isset($_POST['action'])) {
    include_once "model/department.php";
    $department = new Department();
    $department->setDeptID($_POST['id']);
    $department->setDeptName($_POST['name']);

    if($_POST['action']=="insert"){
        $table = "department";
        $column = "department_id, department_name";
        $value = "'".$department->getDeptId()."','".$department->getDeptName()."'";
        $db->insert($table,$column,$value);
        echo "1";
    }
    else if($_POST['action']=="update") {
        $table = "department";
        $value = "department_name='".$department->getDeptName()."'";
        $condition = "department_id='".$department->getDeptId()."'";
        $db->update($table,$value,$condition);
        echo "1";
    }
}

else {
    $data = $db->select("SELECT department_id, department_name FROM department ORDER BY department_id");
    include_once "lib/twig.php";
    $twig = new Twig();
    $twig->display("department.html",array(
        'data' => $data));
}	
?>
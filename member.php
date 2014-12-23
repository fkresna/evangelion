<?php
/**
 * User: Freddy
 * Date: 2/24/14
 */
include_once "lib/Db.php";
$db = new Db();

if(isset($_POST['action'])) {
  include_once "model/member.php";
  $member = new Member();
  $member->setMemberId($_POST['id']);
  $member->setFirstName($_POST['fname']);
  $member->setLastName($_POST['lname']);
  $member->setAddress($_POST['address']);
  $member->setPhone($_POST['phone']);
  $member->setSex($_POST['gender']);
  $member->setEmail($_POST['email']);
  $member->setBirthday($_POST['bdate']);
  $table = "member";
  $column = "member_id,first_name,last_name,address,phone,sex,email,birthday";
  $value = "'".$member->getMemberId()."','".$member->getFirstName()."','".$member->getLastName()."','".$member->getAddress()."','".$member->getPhone()."','".$member->getSex()."','".$member->getEmail()."','".$member->getBirthday()."'";
  $db->insert($table,$column,$value);
  echo "1";
}
else {
  $data = $db->select("SELECT member_id, first_name, last_name, address, phone, sex, email, birthday FROM member");
  include_once "lib/twig.php";
  $twig = new Twig();
  $twig->display("member.html",array('data' => $data));
}	
?>
<?php
/**
 * User: Freddy
 * Date: 2/24/14
 */
if(isset($_POST['action'])) 
{ 
	include_once "model/member.php";
	$member = new Member();
	$member->setMemberId($_POST['id']);
	$member->setFirstName($_POST['fname']);
	$member->insert();
}
else
{
// attempt a connection
try {
  $dbh = new PDO('mysql:dbname=absensi;host=localhost', 'root', '');
} catch (PDOException $e) {
  echo "Error: Could not connect. " . $e->getMessage();
}

// set error mode
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// attempt some queries
try {
  // execute SELECT query
  // store each row as an object
  $sql = "SELECT member_id, first_name, last_name, address, phone, sex, email, birthday FROM member";
  $sth = $dbh->query($sql);
  while ($row = $sth->fetchObject()) {
    $data[] = $row;
  } 
  // close connection, clean up
  unset($dbh); 
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
 
include_once "lib/twig.php";
$twig = new Twig();
$twig->display("member.html",array(
    'data' => $data));
}	
?>
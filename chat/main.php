<?php
// start session
session_starts();
$db_name = 'chats';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
try{
	// try to connect to the database
	$pdo = new PDO('mysql:host=localhost; dbname='.$db_name. ';charset=utf8', $db_user, $db_pass);
	// try to get errors that might occurr when connecting
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $exception){
	// failed to connect
	exit('Failed to connect!');
}
// function to chech if the user is logged in
function loggedin ($pdo){
	if(isset($_SESSION['account_loggedin'])){
		// update the last seen date
		$stmt = $pdo->prepare('UPDATE accounts SET last_seen =? WHERE id = ?');
		$stmt ->execute([date('Y-m-d H:i:s'), $_SESSION['account_id']]);
		return TRUE;
	}
	// check if cookies are decleared in the browser
	if()

}
// if not logged
return FALSE;
?>
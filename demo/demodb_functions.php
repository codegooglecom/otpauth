<?php

function check_login($user, $pw) {
	$dbhandle = sqlite_open('demodb.sqlite');
	$real_pw = sha1($pw);
print "<H1>|$pw|$real_pw|</h1>";
	$sql = "SELECT * from user WHERE user_name='$user' AND user_pw='$real_pw+5'"; 
	$res = sqlite_query($dbhandle, $sql, $error);
print "before res";
print_r($res);
while ($entry = sqlite_fetch_array($res, SQLITE_ASSOC)) {
   echo 'Name: ' . $entry['name'] . '  E-mail: ' . $entry['email'];
}
print "after res";
	if (!$res) { 
		return false;
	} 
	else { 
		return true;
	}

}

function db_initialized() {
	$dbhandle = sqlite_open('demodb.sqlite');
	$sql = "select * from user";
	$query = sqlite_exec($dbhandle, $sql, $error);
	if (!$query) { 
		echo "database not initialized: '$error'<br/><br/>\n\n"; 
		return false;
	} 
	else { 
		/* echo "db has been initialized<br/><br/>\n\n"; */ 
		return true;
	}

}

function initialize_db() {
	$dbhandle = sqlite_open('demodb.sqlite');

	/******************************************
         *
	 * create user table 
         *
	 ******************************************/
	$user_create_stmt = "CREATE TABLE user (
  		id int auto_increment,
  		user_name text NOT NULL,
  		user_pw varchar(40) NOT NULL default '',
  		status char(1) NOT NULL default 'A',
  		PRIMARY KEY  (id)
		) ";

	$query = sqlite_exec($dbhandle, $user_create_stmt, $error);
	if (!$query) { echo "Error in user create statement: '$error'<br/><br/>\n\n"; } 
	else { echo "user table created<br/><br/>\n\n"; }

 
	/******************************************
         *
	 * create session table 
         *
	 ******************************************/
        $session_create_stmt = "CREATE TABLE session (
				user_id int(11) default '0',
				session_hash char(32) NOT NULL default '',
				ip_addr char(15) NOT NULL default '',
				time int(11) NOT NULL default '0',
				PRIMARY KEY  (session_hash)
				) ";

        $query = sqlite_exec($dbhandle, $session_create_stmt, $error);
	if (!$query) { echo "Error in session create statement: '$error'<br/><br/>\n\n"; } 
	else { echo "session table created<br/><br/>\n\n"; }

	/******************************************
         *
	 * create otp table 
         *
	 ******************************************/
	$otp_create_stmt = " CREATE TABLE otp (
				id int auto_increment, 
				user_id int(11) NOT NULL default '0',
				sequence int(11) NOT NULL default '0',
				otp char(60) NOT NULL default '',
				PRIMARY KEY  (id)
				)";

        $query = sqlite_exec($dbhandle, $otp_create_stmt, $error);
	if (!$query) { echo "Error in otp create statement: '$error'<br/><br/>\n\n"; } 
	else { echo "otp table created<br/><br/>\n\n"; }



	/******************************************
         *
	 * insert lameduck user
         *
	 ******************************************/
	$pw = sha1('demopass');
	$user_insert_stmt = "INSERT INTO user (id, user_name, user_pw, status) 
			     VALUES (1, 'demo', '$pw', 'A')";
        $query = sqlite_exec($dbhandle, $user_insert_stmt, $error);
	if (!$query) { echo "Error in user insert statement: '$error'<br/><br/>\n\n"; } 
	else { echo "user inserted<br/><br/>\n\n"; }
	
	



}
?>

<?php
    
    
function redirect_to($new_location){
        header("Location: " . $new_location);
        exit;
    }

function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}


function confirm_super_adminlogged_in() {
		if (!logged_inad()) {
			redirect_to("../index.php");
		}
	}

function confirm_adminlogged_in() {
		if (!logged_in()) {
			redirect_to("../index.php");
		}
	}
function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to("../register/userregister.php");
		}
	}

function mysql_prep($string) {
		global $connection;
		
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}

function generate_salt($length) {
	  // Not 100% unique, not 100% random, but good enough for a salt
	  // MD5 returns 32 characters
	  $unique_random_string = md5(uniqid(mt_rand(), true));
	  
		// Valid characters for a salt are [a-zA-Z0-9./]
	  $base64_string = base64_encode($unique_random_string);
	  
		// But not '+' which is valid in base64 encoding
	  $modified_base64_string = str_replace('+', '.', $base64_string);
	  
		// Truncate string to the correct length
	  $salt = substr($modified_base64_string, 0, $length);
	  
		return $salt;
	}

function password_encrypt($password) {
  	$hash_format = "$2y$10$";   // 
	  $salt_length = 22; 				
	  $salt = generate_salt($salt_length);
	  $format_and_salt = $hash_format . $salt;
	  $hash = crypt($password, $format_and_salt);
		return $hash;
	}

function attempt_login($email, $password) {
		$admin = find_admin_by_username($email);
		if ($admin) {
			// found admin, now check password
			if (password_check($password, $admin["hashed_password"])) {
				// password matches
				return $admin;
			} else {
				// password does not match
				return false;
			}
		} else {
			// admin not found 
			return false;
		}
	}

function logged_in() {
		return isset($_SESSION['email']);
	}

function logged_inad() {
		return isset($_SESSION['email']);
	}
function find_all_admins() {
		global $connection;
		
		$query  = "SELECT * ";
		$query .= "FROM abhi ";
		$query .= "ORDER BY email ASC";
		$admin_set = mysqli_query($connection, $query);
		confirm_query($admin_set);
		return $admin_set;
	}

function find_admin_by_username($email) {
		global $connection;
		
		$safe_email  = mysqli_real_escape_string($connection, $email);
		
		$query  = "SELECT * ";
		$query .= "FROM abhi ";
		$query .= "WHERE email = '{$safe_email}' ";
		$query .= "LIMIT 1";
		$admin_set = mysqli_query($connection, $query);
		confirm_query($admin_set);
		if($admin = mysqli_fetch_assoc($admin_set)) {
			return $email;
		} else {
			return null;
		}
	} 
	
function find_admin_by_id($admin_id) {
		global $connection;
		
		$safe_admin_id = mysqli_real_escape_string($connection, $admin_id);
		
		$query  = "SELECT * ";
		$query .= "FROM abhi ";
		$query .= "WHERE email = {$safe_admin_id} ";
		$query .= "LIMIT 1";
		$admin_set = mysqli_query($connection, $query);
		confirm_query($admin_set);
		if($admin = mysqli_fetch_assoc($admin_set)) {
			return $admin;
		} else {
			return null;
		}
	}
?>
<style>
.error {
	color: #8D0D19; border: 2px solid #8D0D19;
	margin: 1em 0; padding: 1em;
}
.error ul { padding-left: 2em; }
    
</style>


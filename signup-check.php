<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {				// Username null check
		header("Location: signup.php?error=Username is required&$user_data");
	    exit();
	}  else if (empty($name)){			// Full name null check
        header("Location: signup.php?error=Full name is required&$user_data");
	    exit();
	} else if (empty($pass)){			// Password null check
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	} else if (empty($re_pass)){		// Password confirmation null check
        header("Location: signup.php?error=Password confirmation is required&$user_data");
	    exit();
	} else if ($pass !== $re_pass){		// Password confirmation verification
        header("Location: signup.php?error=Password confirmation does not match&$user_data");
	    exit();
	} else{
		if (strlen($pass) < 8) { 				// Minimum length check
			header("Location: signup.php?error=Password must be at least 8 characters&$user_data");
			exit();
		} if (!preg_match('/[A-Z]/', $pass)) { 	// Uppercase letter check
			header("Location: signup.php?error=Password must contain at least one uppercase letter&$user_data");
			exit();
		} if (!preg_match('/[a-z]/', $pass)) { 	// Lowercase letter check
			header("Location: signup.php?error=Password must contain at least one lowercase letter&$user_data");
			exit();
		} if (!preg_match('/[\W_]/', $pass)) { 	// Special character check
			header("Location: signup.php?error=Password must contain at least one special character&$user_data");
			exit();
		}

		// MD5 hashing
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is already taken&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
			/*
				// Reload signup.php page after successful registration
		 	if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		   */
		   	if ($result2) {
				// Redirect to index.php after successful registration
				header("Location: index.php?success=Your account has been created successfully");
				exit();
			} else {
				header("Location: signup.php?error=unknown error occurred&$user_data");
			exit();
			}	
		
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}
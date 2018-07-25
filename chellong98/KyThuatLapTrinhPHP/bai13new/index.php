<<<<<<< HEAD
<?php
session_start();
?>

<?php
if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
        $check = true;
        $list = array();    
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
                $check = false;
		break;
		}
	}
        
	/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){ 
            $error_message = 'Passwords should be same<br>'; 
             $check = false;
	}

	/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Invalid Email Address";
                 $check = false;
		}
	}

	/* Validation to check if gender is selected */
	if(!isset($error_message)) {
            if(!isset($_POST["gender"])) {
                $error_message = " All Fields are required";
                 $check = false;
            }
	}

	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($error_message)) {
		if(!isset($_POST["terms"])) {
                    $error_message = "Accept Terms and Conditions to Register";
                     $check = false;
		}
	}
        
        if($check) {
            $username = $_POST['userName'];
            $name = $_POST['firstName'] . " " . $_POST['lastName'];
            $password = $_POST['password'];
            $email = $_POST['userEmail'];
            $gender = $_POST['gender'];
            $terms = $_POST['terms'];
            $list = array('username'=>$username, 'name'=>$name, 'password'=>$password, 'email'=>$email, 'gender'=>$gender, 'terms'=>$terms);
//            foreach($_POST as $key=>$value) {
//                array_push($key=>$_POST[$key]);
//            }
            $_SESSION['list'] = $list;
             header('Location: login.php');
        }
	
}
?>
<html>
<head>
    <meta charset="UTF-8">
        <title> User Registration Form</title>
        <link rel="stylesheet" href="./css.css"/>
</head>
            <body>
            <form name="frmRegistration" method="post" action="">
            <table border="0" width="500" align="center" class="demo-table">
            <?php if(!empty($success_message)) { ?>	
            <div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
            <?php } ?>
            <?php if(!empty($error_message)) { ?>	
            <div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
            <?php } ?>
            <tr>
            <td>User Name</td>
            <td><input type="text" class="demoInputBox" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
            </tr>
            <tr>
            <td>First Name</td>
            <td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
            </tr>
            <tr>
            <td>Last Name</td>
            <td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
            </tr>
            <tr>
            <td>Password</td>
            <td><input type="password" class="demoInputBox" name="password" value=""></td>
            </tr>
            <tr>
            <td>Confirm Password</td>
            <td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
            </tr>
            <tr>
            <td>Gender</td>
            <td><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
            <input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
            </td>
            </tr>
            <tr>
            <td colspan=2>
            <input type="checkbox" name="terms"> I accept Terms and Conditions
             <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
            </tr>
            </table>
        </form>
=======
<?php
session_start();
?>

<?php
if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
        $check = true;
        $list = array();    
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
                $check = false;
		break;
		}
	}
        
	/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){ 
            $error_message = 'Passwords should be same<br>'; 
             $check = false;
	}

	/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Invalid Email Address";
                 $check = false;
		}
	}

	/* Validation to check if gender is selected */
	if(!isset($error_message)) {
            if(!isset($_POST["gender"])) {
                $error_message = " All Fields are required";
                 $check = false;
            }
	}

	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($error_message)) {
		if(!isset($_POST["terms"])) {
                    $error_message = "Accept Terms and Conditions to Register";
                     $check = false;
		}
	}
        
        if($check) {
            $username = $_POST['userName'];
            $name = $_POST['firstName'] . " " . $_POST['lastName'];
            $password = $_POST['password'];
            $email = $_POST['userEmail'];
            $gender = $_POST['gender'];
            $terms = $_POST['terms'];
            $list = array('username'=>$username, 'name'=>$name, 'password'=>$password, 'email'=>$email, 'gender'=>$gender, 'terms'=>$terms);
//            foreach($_POST as $key=>$value) {
//                array_push($key=>$_POST[$key]);
//            }
            $_SESSION['list'] = $list;
             header('Location: login.php');
        }
	
}
?>
<html>
<head>
    <meta charset="UTF-8">
        <title> User Registration Form</title>
        <link rel="stylesheet" href="./css.css"/>
</head>
            <body>
            <form name="frmRegistration" method="post" action="">
            <table border="0" width="500" align="center" class="demo-table">
            <?php if(!empty($success_message)) { ?>	
            <div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
            <?php } ?>
            <?php if(!empty($error_message)) { ?>	
            <div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
            <?php } ?>
            <tr>
            <td>User Name</td>
            <td><input type="text" class="demoInputBox" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
            </tr>
            <tr>
            <td>First Name</td>
            <td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
            </tr>
            <tr>
            <td>Last Name</td>
            <td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
            </tr>
            <tr>
            <td>Password</td>
            <td><input type="password" class="demoInputBox" name="password" value=""></td>
            </tr>
            <tr>
            <td>Confirm Password</td>
            <td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
            </tr>
            <tr>
            <td>Gender</td>
            <td><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
            <input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
            </td>
            </tr>
            <tr>
            <td colspan=2>
            <input type="checkbox" name="terms"> I accept Terms and Conditions
             <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
            </tr>
            </table>
        </form>
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
</body></html>
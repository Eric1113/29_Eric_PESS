<?php
	session_start();
	$has_cookie_displayname = isset($_COOKIE["COOKIE_DISPLAYNAME"]);
	if($has_cookie_displayname == true)
	{
		$_SESSION["SESS_DISPLAYNAME"] = $_COOKIE["COOKIE_DISPLAYNAME"];
	}

	if(isset($_SESSION['SESS_DISPLAYNAME']))
	{
		header("Location: logcall.php");
	}

	$isLoginButtonClicked = isset($_POST["btnSubmit"]);
	if($isLoginButtonClicked == true)
	{
		$userName = $_POST["tbUsername"];
		$password = $_POST["tbPassword"];
			require_once "db.php";
	$conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
	$sql = "SELECT * FROM `login` WHERE `user_id`='" . $userName . "' AND `pass`='" . $password . "'";
	$result = $conn->query($sql);
	$incidenttypes = [];
	if($row = $result->fetch_assoc()){
		$user = $row["user_id"];
		$pass = $row["pass"];
		$_SESSION["SESS_DISPLAYNAME"] = $userName;
			
			$rememberMeChecked = isset($_POST["cbRememberMe"]);
			if($rememberMeChecked == true){
				$expiryTime = time() + 0;
				setcookie("COOKIE_DISPLAYNAME","David",$expiryTime);
			}
			header("Location: logcall.php");
		}
		else {
			echo "<span style='color:red'>Wrong Username / Password </span>";
		} $conn->close();
		}
		
?>
<!doctype html>
<html>
	<link rel="stylesheet" href="css/bootstrap-4.4.1.css">
	<body background="image/loginpage1.jpg">
		<div class="container" style="width:560px" align="center">
			<header> <img src="image/banner1.jpg" class="img-fluid" alt="PESS">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      </div>
    </nav>
  </header>
			<div class="text-Black-50" align="center"><h2><strong>PESS Login</strong></h2></div>
			<div class="text-Black-50" align="center"><p><strong>Enter your Username and Password to Login</strong></p></div>
			<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
				<table>
					<tbody>
						<tr>
							<td><strong><span style="color:#F8001E">Username</span></strong></td>
							<td><input type="textbox" name="tbUsername" id="tbUsername" /></td>
						</tr>
						<tr>
							<td><strong><span style="color: #FBE200">Password</span></strong></td>
							<td><input type="password" name="tbPassword" id="tbPassword" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="checkbox" name="cbRememberMe" id="cbRememberMe" value="Yes" /><span style="color: #F800FF"><strong>Remember Me</strong></span></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="btnSubmit" id="btnSubmit" value="Log in" /></td>
						</tr>
						<style>
							table{
								margin-left: auto;
								margin-right: auto;
							}
						</style>
					</tbody>
				</table>
			</form>
		</div>
	</body>
</html>

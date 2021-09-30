<?php
	session_start();
	if(!isset($_SESSION['logincust']))
	{
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<title>Login with Facebook and Google | Home</title>
	</head>
	<body>
		<?php
			//load data
			echo '
			<table>
				<tr>
					<td><h2>Information Provider : </h2></td>
					<td><h1 style="color:green;">'.$_SESSION['oauth_provider'].'</h1></td>
				</tr>
				<tr>
					<td><h2>Account ID : </h2></td>
					<td><h1 style="color:green;">'.$_SESSION['oauth_uid'].'</h1></td>
				</tr>
				<tr>
					<td><h2>First Name : </h2></td>
					<td><h1 style="color:green;">'.$_SESSION['first_name'].'</h1></td>
				</tr>
				<tr>
					<td><h2>Last Name : </h2></td>
					<td><h1 style="color:green;">'.$_SESSION['last_name'].'</h1></td>
				</tr>
				<tr>
					<td><h2>Email : </h2></td>
					<td><h1 style="color:green;">'.$_SESSION['email'].'</h1></td>
				</tr>
			</table>';
		?>
		<?php
	include "../model/pdo.php";
	include "../model/taikhoan.php";
	// echo '<pre>';
	// print_r($_SESSION['email']);
	// echo '</pre>';
    $email = $_SESSION['email'];
   $name = $_SESSION['first_name'];
  $kt = Kiemtra_TkFB_DaTonTaiChua($email, $name);
  // echo "kq:".$kt;
  if ($kt == null) {
	insert_TKFB($email, $name);
  }
?>
			<form  action="http://duan.test:8999/index.php?act=dangnhapgoogle" method="post">
			<?php
			echo '<input type="hidden" name="user" value=' .$_SESSION['first_name'].'>
			<input type="hidden" name="email" value='. $_SESSION['email'].'>
			<input type="submit" value="login" name="dn">'; 
			?>
				
			</form>
		<form method="post">
			<input class="btn btn-danger" style="margin-top:5px;width:70px;height:35px;" type="submit" value="Logout" name="logoutsr" width="48" height="48">	
		</form>
		<?php
		if(isset($_POST['dn']))
		{
			
			  header("Location: http://duan.test:8999/index.php?act=dangnhapgoogle");
		
		}
		
			if(isset($_POST['logoutsr']))
			{
				session_unset();
				echo "<script type='text/javascript'>location.href = 'http://duan.test:8999/index.php?';</script>";
			}
		?>


Tao day ne file
	</body>
</html>
<?php

	session_start();
	if(isset($_SESSION['logged'])){//controllo se l'utente è registrato dato che solamente ad un utente non registrato è consentito registrarsi
		if($_SESSION['logged']){
			header("Location:admin/index.php");//se l'utente è registrato lo rimando alla pagina principale
		}
	}else{
		if(isset($_SESSION['permessi'])){
	    	if($_SESSION['permessi']!=0){
	    		header("Location: admin/index.php");
	    	}
	  	}
	}
	require_once '../configDB.php';

	if(isset($_POST['invia'])){
		$user = $_POST['user'];
		do{
			$temp = $user;
			$user = htmlspecialchars($temp);
		}while($temp!=$user);

		if(($user=="admin")&&($_POST['password']=="password")){
			session_destroy();
			session_start();
			$_SESSION['user'] = $user;
			header("Location: admin/index.php");
		}else{
			echo '<script>alert("Username o password errati"); location.replace("login.php");</script>';
		}

	}

?>

<!DOCTYPE HTML>
<html lang="it">
	<head>
		<?php require "head.php";?>
	</head>

	<body class="w3-content" style="max-width:1200px; padding-top: 40px;">

		<!-- Sidebar/menu -->
		<?php require "sidebar.php";?>

		<!-- !PAGE CONTENT! -->
		<div class="w3-main spazio-sotto" style="margin-left:250px">

		  	<!-- Push down content on small screens -->
			<div class="w3-hide-large" style="margin-top:83px"></div>

		  	<div class="container-fluid">
			  	<form action="login.php" method="post">

		  			<h1 style="margin-bottom: 30px">Accedi</h1>
					<div class="container-form">
						<div class="row">

							<div class="col-sm-5">
								<div class="w3-container">
									<label for="email" class="label"><p>Email:</p></label>
								</div>
							</div>
							<div class="col-sm-7">
					      		<div class="w3-container">
									<input type="email" name="email" id="email" maxlength="150" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="prova@esempio.com" required><br><br>
								</div>
							</div>

						</div>
						<div class="row">

							<div class="col-sm-5">
								<div class="w3-container">
									<label for="password" class="label"><p>Password:</p></label>
								</div>
							</div>
							<div class="col-sm-7">
					      		<div class="w3-container">
									<input type="password" name="password" id="password" maxlength="50" required><br><br>
								</div>
							</div>

						</div>
						<div class="row">

							<div class="col-sm-12">
					      		<div class="w3-container">
									<h5 style="text-align: center; margin-top: 10px"><input class="submit-button" style="width: 120px" type="submit" name="invia" id="invia" value="Accedi"></h5>
								</div>
							</div>

						</div>
					</div>

				</form>
			</div>

		<!-- End page content -->
		</div>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Aplikasi BRI</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<style>
		.centered {
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);  
			}
		</style>
	</head>
	<body class="container bg-info">
	<div class="centered">
				<p class="text-center">
					<img src="image/BRI.png" class="img-thumbnail"/>
				</p>
				<form method="POST" action="CekLogin.php">
				<div class="form-group row">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off" autofocus>
				</div>

				<div class="form-group row">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password format = email">
				</div>

				<div class="form-group row">
					<button type="submit" name="tbl_simpan" class="btn btn-danger btn-block">Login</button>
				</div>	
				
				<label class="text-center">Silahkan masuk-kan username<br/> password anda !</label>	
			</form>	
        <div>

        </div>    	
	</div> <!-- row -->
	
	
</body>
</html>
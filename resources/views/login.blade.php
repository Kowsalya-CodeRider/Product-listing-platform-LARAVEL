<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pythondeals Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<br /><br />
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6"><h4 class="text-danger"><center><b><i>Pythondeals Product list - Admin panel</i></b></center></h4>
			@if (\Session::has('success'))				
				<div class="alert alert-success">
				<center><b>{!! \Session::get('success') !!}</b></center></div>
			@endif
			@if (\Session::has('failure'))				
				<div class="alert alert-danger">
				<center><b>{!! \Session::get('failure') !!}</b></center></div>
			@endif
			</div>
			<div class="col-md-3"></div>			
		</div>
	</div>
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
				<div class="col-md-6">				
				  <div class="card"><br />
					<center><img class="card-img-top" src="images/user.webp" alt="Card image" style="width:25%"></center>
					<div class="card-body">
						<form action = "/login" method = "post">	
						<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">								  
						  <div class="form-group row">
							<label for="staticEmail" class="col-sm-4 col-form-label">Username</label>
							<div class="col-sm-8">
							  <input type="text" class="form-control" name="username" placeholder="Enter username" required>
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
							<div class="col-sm-8">
							  <input type="text" class="form-control" name="password" placeholder="Enter password" required>
							</div>
						  </div>						  
						  <center>
							<button type="submit" class="btn btn-success">Login</button>
						  </center>
						</form>											
					</div>
				  </div>		  			
				</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>

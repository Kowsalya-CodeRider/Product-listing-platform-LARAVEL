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
			</div>
			<div class="col-md-3"></div>			
		</div>
	</div>
	<br />
	<div class="container">
		<div align="right">
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
			  Add Product
			</button>
			<button class="btn btn-danger" onclick="logout()">Logout</button>			  
		</div>
		<br />
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  </div>
			  <form action = "/products" method = "post" enctype="multipart/form-data">	
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			
			  <div class="modal-body">
				 <div class="form-group row">
					<label for="staticEmail" class="col-sm-4 col-form-label">Product Image</label>
					<div class="col-sm-8">
					  <input type="file" class="form-control" name="productimage" required>
					</div>
				  </div>
				  <div class="form-group row">
					<label for="staticEmail" class="col-sm-4 col-form-label">Product Name</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="productname" placeholder="Enter Product name" required>
					</div>
				  </div>
				  <div class="form-group row">
					<label for="inputPassword" class="col-sm-4 col-form-label">Price</label>
					<div class="col-sm-8">
					  <input type="text" class="form-control" name="productprice" placeholder="Enter Product price" required>
					</div>
				  </div>
				  <div class="form-group row">
					<label for="inputPassword" class="col-sm-4 col-form-label">Unit</label>
					<div class="col-sm-8">
					  <select class="form-control" name="productunit" required>
						 <option>Select product unit</option>
						 <option value="Kg">Kg</option>
						 <option value="Mtr">Mtr</option>
						 <option value="Ltr">Ltr</option>
					  </select>
					</div>
				  </div>				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			  </div>
			  </form>
			</div>
		  </div>
		</div>
		<div class="row">	
			<table class="table table-striped">
			  <thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Image</th>
				  <th scope="col">Name</th>
				  <th scope="col">Unit</th>
				  <th scope="col">Price</th>
				</tr>
			  </thead>
			  <tbody>
				 @foreach ($products as $product)
				  <tr>
				  <td>{{ $product->id }}</td>
				  <td><img src="images/{{ $product->image }}" width="50" /></td>
				  <td>{{ $product->name }}</td>
				  <td>{{ $product->unit }}</td>
				  <td>{{ $product->price }}</td>
				  </tr>
				  @endforeach
			  </tbody>
			</table>	
		</div>
	</div>
</body>
</html>
<script>
function logout() {
  if (confirm('Are you sure want to Logout ?')) {
	  window.location.href = '/logout';
  } 
}
</script>
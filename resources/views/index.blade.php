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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<body>
	<br /><br /> 
	<div class="container">
		<h4 class="text-success"><b><i>Product List</i></b></h4><br />	
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" id="tags" placeholder="Search your product here.." aria-label="Recipient's username" aria-describedby="basic-addon2">
				  <div class="input-group-append">
					<button class="btn btn-info" type="button">Search</button>
				  </div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
		<hr />
		<div class="row">
			@foreach ($products as $product)				
			<div class="col-md-4">
			  <div class="card" id="product_{{ $product->id }}">
				<center>
				<img class="card-img-top" src="images/{{$product->image}}" alt="Card image" style="width:25%">
				<div class="card-body">
				  <h4 class="card-title">{{ $product->name }}</h4>
				  <p class="card-text">Unit : {{ $product->unit }}</p>
				  <p class="card-text">Price : {{ $product->price }}</p>
				</div>
				</center>
			  </div><br />		  
			</div>
			@endforeach
		</div>
	</div>
</body>
</html>
<?php
$list = array();
foreach ($products as $product){
	$list[] = $product->name;
}
?>
<script>
  $( function() {
    var availableTags = <?php echo json_encode($list)?>;
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>

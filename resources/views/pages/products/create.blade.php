<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Document</title>
</head>
<body>
	
	<div class="container mt-5">
		<form method="POST">

			@csrf

			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class='form-control bg-secondary' name="name">
			</div>
			<div class="form-group">
				<label for="">Price</label>
				<input type="text" class='form-control bg-secondary' name="price">
			</div>
			<div class="form-group">
				<label for="">Count</label>
				<input type="text" class='form-control bg-secondary' name="count">
			</div>
			<div class="form-group">
				<label for="">Description</label>
				<textarea class='form-control bg-secondary' name="description"></textarea>
			</div>
			<div>
				<input type="submit" class="btn btn-danger" value="New">
			</div>
		</form>
	</div>
</body>
</html>
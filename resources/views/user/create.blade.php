<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8">
	<title>create</title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h3>Users Table</h3>
		<form class="form-horizontal" action="{{route('store')}}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-4">
					<input type="text" name="name" class="form-control" id="name" placeholder="Name">
				</div>
			</div>

			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-4">
					<input type="email" name="email" class="form-control" id="email" placeholder="Email">
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-4">
					<input type="password" name="password" class="form-control" id="password" placeholder="Password">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-2">
					<button type="submit" class="btn btn-primary">添加</button>		
				</div>
			</div>
		</form>
	</div>
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>
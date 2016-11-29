<!DOCTYPE html>
<html>
<head>
	<title>users</title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h3>Users Table</h3>
		<div class="table-responsive">
			<table class="table table-hover table-striped">
				<tr>
					<th>id</th>
					<th>name</th>
					<th>email</th>
					<th>create_at</th>
				</tr>

				@foreach ($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->created_at }}</td>
					</tr>
			        
			    @endforeach
			</table>
	    </div>
		{{ $users->links() }}

		
	</div>
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>
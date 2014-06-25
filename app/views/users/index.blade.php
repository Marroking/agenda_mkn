<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel CRUD</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<style>
		body {
			width: 750px;
			margin: 50px auto;
		}
		.badge {
			float: right;
		}
	</style>
</head>
<body>
	<center>
		<h2>Mi primera aplicación Laravel</h2>
	</center>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
				<a class="navbar-brand" href="/users">MarroKing!</a>
  			</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li class="active"><a href="/users">Listado</a></li>
        			<li><a href="/users/create">Nuevo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-warning">
  		<div class="panel-heading">
  			<h4>Lista de usuarios</h4>
  		</div>

  		<div class="panel-body">
    		<table class="table">
				<thead>
					<tr>
						<th>Clave</th>
						<th>Nombre</th>
						<th>Twitter</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->twitter }}</td>
							<td>
								<a href="/users/show/{{ $user->id }}"><span class="label label-info">Ver</span></a>
								<a href="/users/edit/{{ $user->id }}"><span class="label label-success">Editar</span></a>
								<a href="{{ url('/users/destroy',$user->id) }}"><span class="label label-danger">Eliminar</span></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
  		</div>
  	</div>

  	@if(Session::has('message'))
	    <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
	@endif

</body>
</html>
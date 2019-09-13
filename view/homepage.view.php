<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>МуBlog</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">MyBlog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/">Главная<span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>
<div class="container">
	
	<div class="row">
		<a href="/create" class="btn btn-success mt-3">Добавить пост</a>
		<table class="table mt-3">
		  <thead>
		    <tr>
		      <th scope="col">id</th>
		      <th scope="col">Заголовок</th>
		      <th scope="col">Действие</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php foreach ($posts as $value): ?>
		  		<tr>
			      <th scope="row"><?php echo $value['id']; ?></th>
			      <td><?php echo $value['title']; ?></td>
			      <td>
					<a href="/edit" class="btn btn-warning">Редактировать</a>
					<a href="/delete" class="btn btn-danger">Удалить</a>
			      </td>
			    </tr>
		  	<?php endforeach ?>
		  </tbody>
		</table>
	</div>

</div>
</body>
</html>
<html>
<head> 
<title>Add items</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<form action="/items/create" method="post">
{{csrf_field() }}

<!-- <input type="text" name="name" placeholder="Введите что-то" autofocus="true" required>  -->

             <tr> 
			 <center>
			 <br><br><br><br><br>
				<h2>Введите что-то</h2> <br><br>
				<td><input type="text" name="name"></td>
			</tr>
<input type="submit" name="submit" value="добавить">
			</center>

</form>
</body>

<html>
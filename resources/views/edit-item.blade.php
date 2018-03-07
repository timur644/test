<html>
<head>
<title>Изменить</title>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<form action="/items/update" method="post">
{{csrf_field() }}

<!-- <input type="text" name="name" placeholder="Введите что-то" autofocus="true" required>  -->

             <tr> 
			 <center>
			 <br><br><br><br>
				<h3>Изменить данные</h3><br><br>
                <td><input type="hidden" name="id" value="{{$items[0]->id}}"></td>
				<td><input type="text" name="name" value="{{$items[0]->name}}"></td>
			</tr>
<input type="submit" name="submit" value="сохранить">
</center>
</form>
</body>
</html>

<html>
<head>
<title>Список продуктов</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<center>
<br><br><br>
<table>
    <tr>  
        <th>№</th>
        <br><br><br>
        <th>продукт</th>
        <th>операции</th>
        
    </tr>
    @foreach($items as $item)
    <tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->name }}</td>
    <td>
    <a href = "/items/update?id={{$item->id}}">изменить</a> 
    <a href = "/items/delete?id={{$item->id}}">удалить</a>
    </td>
    </tr>
    @endforeach
</table>
</center>

</body>

</html>
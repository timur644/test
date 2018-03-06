
<table>
    <tr>  
        <th>id</th>
        <th>item</th>
        <th>edit</th>
    </tr>
    @foreach($items as $item)
    <tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->name }}</td>
    <td>
    <a href = "/items/update?id={{$item->id}}">изменить</a> 
    </td>
    </tr>
    @endforeach

</table>
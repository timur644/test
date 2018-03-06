<form action="/items/update" method="post">
{{csrf_field() }}

<!-- <input type="text" name="name" placeholder="Введите что-то" autofocus="true" required>  -->

             <tr> 
				<td>Изменить данные</td>
                <td><input type="hidden" name="id" value="{{$items[0]->id}}"></td>
				<td><input type="text" name="name" value="{{$items[0]->name}}"></td>
			</tr>

<input type="submit" name="submit" value="сохранить">

</form>
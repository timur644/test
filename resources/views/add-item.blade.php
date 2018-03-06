<form action="/items/create" method="post">
{{csrf_field() }}

<!-- <input type="text" name="name" placeholder="Введите что-то" autofocus="true" required>  -->

             <tr> 
				<td>Введите что-то</td>
				<td><input type="text" name="name"></td>
			</tr>
<input type="submit" name="submit" value="добавить">

</form>
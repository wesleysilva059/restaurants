<h1>Inserção de Restaurantes</h1>

<hr>

<form action="{{route('restaurant.store')}}" method="post">
	{{csrf_field()}}
	<p>
		<label for="">Nome do Restaurante</label><br>
		<input type="text" name="name">
	</p>
	<p>
		<label for="">Endereço</label><br>
		<input type="text" name="adress">
	</p>
		<p>
		<label for="">Fale sobre o Restaurante</label><br>
		<textarea name="description" id="" cols="30" rows="10"></textarea>
	</p>
	<input type="submit" value="Cadastrar">
</form>
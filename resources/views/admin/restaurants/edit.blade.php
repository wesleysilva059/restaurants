<h1>Inserção de Restaurantes</h1>

<hr>

<form action="{{route('restaurant.update', ['restaurant' => $restaurant->id])}}" method="post">
	{{csrf_field()}}
	<p>
		<label for="">Nome do Restaurante</label><br>
		<input type="text" name="name" value="{{$restaurant->name}}">
	</p>
	<p>
		<label for="">Endereço</label><br>
		<input type="text" name="adress" value="{{$restaurant->adress}}">
	</p>
		<p>
		<label for="">Fale sobre o Restaurante</label><br>
		<textarea name="description" id="" cols="30" rows="10">{{$restaurant->description}}</textarea>
	</p>
	<input type="submit" value="Cadastrar">
</form>
<h1>Inserção de Restaurantes</h1>

<hr>

<form action="{{route('restaurant.store')}}" method="post">

	{{csrf_field()}}  <!-- Gera token de segurança do laravel para validação de formulario -->
	
	<p>
		<label for="">Nome do Restaurante</label><br>
		<input type="text" name="name" value="{{old('name')}}"><br>
		@if($errors->has('name'))
			{{$errors->first('name')}}
		@endif
	</p>
	
	<p>
		<label for="">Endereço</label><br>
		<input type="text" name="adress" value="{{old('name')}}"><br>
		@if($errors->has('adress'))
			{{$errors->first('adress')}}
		@endif
	</p>
	
	<p>
		<label for="">Fale sobre o Restaurante</label><br>
		<textarea name="description" id="" cols="30" rows="10">{{old('name')}}</textarea><br>
		@if($errors->has('description'))
			{{$errors->first('description')}}
		@endif
	</p>
	
	<input type="submit" value="Cadastrar">

</form> 


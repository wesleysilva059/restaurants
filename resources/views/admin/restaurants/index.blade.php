<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Criado em</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		@foreach($restaurants as $r)
			<tr>
				<th>{{$r->id}}</th>
				<th>{{$r->name}}</th>
				<th>{{$r->created_at}}</th>
				<th>
					<a href="{{route('restaurant.edit', ['restaurant' => $r->id])}}">EDITAR</a>
					<a href="{{route('restaurant.remove', ['id' => $r->id])}}">EXCLUIR</a>
				</th>
			</tr>
		@endforeach
	</tbody>
</table>
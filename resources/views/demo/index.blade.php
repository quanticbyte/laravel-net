@extends("layouts.app")  {{-- coje cascaron --}} 

@section("content")		{{-- extiende en seccion contenido --}}
	<ul>
		@foreach ( $tools1 as $tool)
			<li>{{$tool->name}}</li>
		@endforeach
	</ul>
@endsection
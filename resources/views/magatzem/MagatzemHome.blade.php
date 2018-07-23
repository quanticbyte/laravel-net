{{-- Aqui tenim que fer filtratge d'usuaris avans de res chekejar user i rool --}}


	@extends('magatzem.MagatzemDefault')
	@section('content')
	    
	    <h1>Aixó es la pagina de magatzem</h1>

	@stop


{{--

	mirar el tema de filtrar rol user amb @extends( (condition) ? 'layout1' : 'layout2')
	Auth::user()->rol == 2

--}}

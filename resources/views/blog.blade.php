@extends('template')

@section('content')

<h1>Listado</h1>

	<hr>
@foreach( $posts as $post )
<p>
	<strong>{{ $post->id }}</strong>
	<a href="{{ route('post', $post->id) }}">
		{{ $post->breed }}
	</a>

    <h1>{{ $password }}</h1>
</p>
<br>
@endforeach

@endsection
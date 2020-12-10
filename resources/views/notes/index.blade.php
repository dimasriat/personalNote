@extends('layouts.app')
@section('content')

@foreach($notes as $note)
<x-box>
	<h2>{{ $note->title }}</h2>
	<div class="post-control">
		<a href="/notes/{{ $note->id }}">👀 Read</a>
		<a href="/notes/{{ $note->id }}/edit">✏ Edit</a>
		<a href="#">❌ Delete</a>
	</div>
</x-box>
@endforeach

@endsection
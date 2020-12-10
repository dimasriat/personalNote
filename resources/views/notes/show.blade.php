@extends('layouts.app')
@section('content')
<x-box>
	<h2>{{ $note->title }}</h2>
	<p>{{ $note->content }}</p>
	<div class="post-control">
		<a href="/notes">🏠 Back</a>
		<a href="/notes/{{ $note->id }}/edit">✏ Edit</a>
		<a href="#">❌ Delete</a>
	</div>
</x-box>
@endsection
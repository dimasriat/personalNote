@extends('layouts.app')
@section('content')
<x-box>
	<h2>New Post</h2>
	<form method="post" action="/notes">
		@csrf
		<div style="margin: 0.5rem 0;">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control" />
		</div>
		<div style="margin: 0.5rem 0;">
			<label for="content">Content</label>
			<textarea id="content" name="content" class="form-control"></textarea>
		</div>

		<div class="post-control">
			<a href="/notes">🏠 Back</a>
			<input type="submit" value="📓 Write" class="submit-control"/>
		</div>
	</form>
</x-box>
@endsection
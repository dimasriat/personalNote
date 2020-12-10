<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Personal Note!</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
	<div class="wrapper">
		<x-box>
			<div style="display: flex; align-items: center;">
				<div style="width: 80%;">
					<h1>My Note</h1>
				</div>
				<div style="width: 20%;">
					<a style="font-weight: bold;" href="/notes/create">📔 New Post</a>
				</div>
			</div>
		</x-box>
		@yield("content")
	</div>
</body>

</html>
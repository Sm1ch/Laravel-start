<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<x-layout>
	@foreach ($posts as $post)
		<div>
			<h2>{{ $post->name }}</h2>
			<div>
				{{ $post->text }}
			</div>
		</div>
	@endforeach
</x-layout>
</table>
</body>
</html>
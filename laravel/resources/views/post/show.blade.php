
	@foreach ($posts as $post)
		<div>
			<h2>{{ $post->name }}</h2>
			<div>
				{{ $post->text }}
			</div>
		</div>
	@endforeach
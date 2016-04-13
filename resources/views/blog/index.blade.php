<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>laravel academy practice</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
		<div class="container-fluid">
			<h1>{{ config('blog.title') }}</h1>
			<h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
			<hr>
			<ul>
			@foreach ($posts as $posts)
				
				<li>
					<a href="/blog/{{$post->slug}}">{{ $post->title }}</a>
					<em>( {{ $post->published_at }} )</em>
					<p>
						{{ str_limit($post->content)}}
					</p>
				</li>
			@endforeach
			</ul>
			<hr>
			{!! $posts->render() !!}
		</div>
</body>
</html>
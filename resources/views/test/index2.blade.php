<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>{{ $article->title }}</title>
	<!--uso de css  (link)-->
	<!--	<link rel="stylesheet" type="text/css" href="/css/general.css">  No funciono-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css')}}"><!--asset lo que hace es posicionarse en la carpeta public-->
</head>
<body>
	HOLA CODIGO NELSON
	<br><br>
	<h1>{{ $article->title }}</h1>
	<hr>
	{{ $article->content }}
	<hr>
	{{ $article->user->name }} | {{ $article->category->name }} |

	@foreach($article->tags as $tag)
		{{ $tag->name }}
	@endforeach

</body>
</html>
	
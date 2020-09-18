@extends('app')

@section('content')
	<h1>Page title: {{ $title }}</h1>
	<p>This is a text supporting the title.</p>
	
	@auth
		<nav>
			<a href="{{ route('account') }}">Account</a>
		</nav>
	@endauth
	
	@foreach($articles as $article)
		<article>
			<h1><a href="{{ route('articles.show', ['id' => $article->id]) }}">{{ $article->title }}</a></h1>
		</article>
	@endforeach
@endsection
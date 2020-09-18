@extends('app')

@section('content')
	<h1>Page title: {{ $title }}</h1>
	<p>This is a text supporting the title.</p>
	
	@auth
		<nav>
			<a href="{{ route('account') }}" @if($route->selected)checked="asdf"@endif>Account</a>
		</nav>
	@endauth
	
	@foreach($articles as $article)
		<article>
			<h1><a href="{{ route('articles.show', ['id' => $article->id]) }}">{{ $article->title }}</a></h1>
		</article>
	@endforeach
	
	<x-test-test.test test="test">
		@if($test)
			<div @if($test)checked="checked"@endif></div>
			<div @if($test->property)checked="checked"@endif></div>
		@endif
	</x-test-test.test>
@endsection

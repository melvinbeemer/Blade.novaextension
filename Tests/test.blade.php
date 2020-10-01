@extends('app')

@section('content')
	<h1>Page title: {{ $title }}</h1>
	<p>This is a text supporting the title.</p>
	
	@if(request()->get('test') == 'test')
		test
	@endif
	
	@auth
		<nav>
			<a href="{{ route('account') }}" @if($route->selected) checked="asdf" @endif>Account</a>
		</nav>
	@endauth
	
	@forelse($articles as $article)
		@php
			$test = "test";
		@endphp
		
		@continue($orders->count() == 0)
		@continue
		@auth($test)
		<article>
			<h1><a href="{{ route('articles.show', ['id' => $article->id]) }}">{{ $article->title }}</a></h1>
		</article>
	@empty
		<div>No articles.</div>
	@endforelse
	
	<x-test-test.test test="test">
		@if($test)
			<div @auth($test)checked="checked"@endif></div>
			<div @if($test->property)checked="checked"@endif></div>
		@endif
	</x-test-test.test>
	
	@php
		$test = "Test";
	@endphp
@endsection

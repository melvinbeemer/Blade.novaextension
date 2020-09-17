<h1>This is a title</h1>
<p>This is a text supporting the title.</p>

{{ $test }}

{!! if($name == "test") !!}

@guest
	<div></div>
	{{ $test }}
@endguest

@foreach
	@if
		<div>test</div>
		
		@yield('')
		<div>
			{{ $name }}
		</div>
	@endif
@endforeach
extends('layouts.master')

{{ session('locale') }}
	<a href="language/en">english</a>
	<a href="language/tr">turkish</a>

	{{ trans('general.title') }}

@section('content')
    <p>This is appended to the master content.</p>
@stop

@extends('app')

@section('extra-includes')

	{!! HTML::style('css/fullcalendar.css') !!}
	{!! HTML::script('lib/jquery.min.js') !!}
	{!! HTML::script('lib/moment.min.js') !!}
	{!! HTML::script('js/fullcalendar.js') !!}
	{!! HTML::script('js/lang/es.js') !!}

@endsection

@section('content')
	<div id="calendar"></div>
    {!! $calendar->script() !!}

@endsection


@extends('layouts.layouts')

@section('title')
  URL
@stop

@section('container')

@endsection

<a href="{{ url('blade') }}">Go to Blade</a>
<br>
<a href="{{ action('StudentController@blade') }}">Function for Blade</a>
<br>
<a href="{{ route('url') }}">Route Name for url to Blade</a>
<br>



@section('footer')
  @parent
@endsection

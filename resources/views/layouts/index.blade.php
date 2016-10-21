@extends('layouts.layouts')

@section('title')
  Index
@stop

@section('container')

{{ time() }}

{{ date('Y-m-d H:i:s',time()) }}
@endsection

@section('footer')

@endsection

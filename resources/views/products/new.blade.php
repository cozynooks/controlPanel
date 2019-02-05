@extends('layouts.app')

@section('content')
    {!! Form::open(['url' => 'products/new', 'method' => 'post']) !!}
        {!! Form::text('username') !!}
    {!! Form::close() !!}
@endsection

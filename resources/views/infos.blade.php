@extends('template')

@section('title')
    Information utilisateurs
@stop

@section('content')
    {!! Form::open(['url' => 'users/infos']) !!}
    {!! Form::label('nom', 'Entrez votre nom : ') !!}
    {!! Form::text('nom') !!}
    {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
@stop
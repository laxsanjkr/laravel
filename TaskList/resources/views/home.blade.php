@extends('layouts.app')

@section('content')
    <!-- {{$api_data}} -->
        <Dashboard :api-data="{{$api_data}}"></Dashboard>
        
@endsection

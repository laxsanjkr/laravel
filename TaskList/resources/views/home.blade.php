@extends('layouts.app')

@section('content')
    <!-- {{$api_data}} -->
    <!-- Profils -->
    <div class="card-header" style="background-color: #4e6669;color:WHITE;">    
        {{('Bonjour, ').$api_data['name']}}
    </div>  
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <Dashboard :api-data="{{$api_data}}"></Dashboard>
    </div>
    
        
@endsection

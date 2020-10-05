@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$emp -> name}} {{$emp -> lastname}} </div>
                <div class="card-body">
                   <h2>NOME : {{$emp -> name}}</h2>
                   <h2>COGNOME : {{$emp -> lastname}} </h2>
                    <h3>NATO IL : {{$emp -> BD}}</h3>
                    <h3>LAVORA PRESSO : {{$emp -> location -> name}} [{{$emp -> location -> state}}]</h3>
                    @auth
                    <a href="{{route('emp-edit', $emp -> id)}} " class="btn btn-primary">EDIT</a>
                    <a href="{{route('emp-del', $emp-> id)}} " class="btn btn-danger">DEL!</a>
                    @else 
                    <h4>Per modificare o eliminare è necessario effettuare il <a href="{{url('/login')}}">LogIn</a> </h3>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
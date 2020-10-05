@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$emp -> name}} {{$emp -> lastname}} </div>
                <div class="card-body">
                    <form action="{{route('emp-update', $emp -> id)}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="{{$emp -> name}}">
                      </div>
                      <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" class="form-control"  value="{{$emp -> lastname}} ">
                      </div>
                      <div class="form-group">
                        <label for="BD">Anno di Nascita</label>
                        <input type="date" name="BD" class="form-control"  value="{{$emp -> BD}}">
                      </div>
                      <div class="form-group">
                        <label for="location_id">Lastname</label>
                        <select name="location_id">
                            @foreach ($locs as $loc)
                                <option value="{{$loc ->id}}"
                                  @if ($loc-> id == $emp-> location_id)
                                      selected
                                  @endif
                                  >{{$loc -> city}}-{{$loc-> state}}</option>
                            @endforeach
                          </select>
                        </div>

                      <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
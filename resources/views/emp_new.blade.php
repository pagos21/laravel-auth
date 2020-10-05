@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Emp </div>
                <div class="card-body">
                    <form action="{{route('emp-store')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="BD">Anno di Nascita</label>
                        <input type="date" name="BD" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="location_id">Lastname</label>
                        <select name="location_id">
                            @foreach ($locs as $loc)
                                <option value="{{$loc ->id}}"
                                  >{{$loc -> city}}-{{$loc-> state}}</option>
                            @endforeach
                          </select>
                        </div>

                      <button type="submit" class="btn btn-primary">Insert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
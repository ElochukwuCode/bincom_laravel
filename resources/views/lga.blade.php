@extends('layouts.layout')

@section('content')
        <div class="main_div">
            <h1>LIST OF LOCAL GOVERNMENT AREAS</h1>
            <form action="/lga/poll_count" method="post">
            @csrf
                <select class="form-select" name="LGAs" id="lgas">
                    <option value="no_option">No option</option>
                    @foreach($lgas as $lga)
                    <option value="{{$lga->uniqueid}}">{{$lga->lga_name}}</option>
                    @endforeach
                </select>
                <button class="btn btn-primary" type="submit">Check poll count</button>
            </form>
        </div>


@endsection        
   
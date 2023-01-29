@extends('layouts.layout')

@section('content')
        <div class="main_div">
            <h1>WELCOME TO BINCOM POLL RESULT SITE</h1>
            <div>
                <a href="/lga"><button class="btn btn-info">VIEW LGAs</button></a>
               <a href="/polling_units"><button class="btn btn-danger">VIEW ALL POLLING UNITS</button></a>
               <a href="/new_poll"><button class="btn btn-success">ENTER NEW POLL RECORD</button></a>

            </div>
            <div >
                <h3 class='mssg'>{{ session('mssg') }}</h3>
            </div>
            
            
        </div>
@endsection        
   
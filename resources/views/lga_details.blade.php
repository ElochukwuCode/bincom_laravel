@extends('layouts.layout')

@section('content')
        <div class="main_div">
                <h1>Poll count for {{$lga}}</h1>
                @php
                   $counter=0;
                @endphp
                @foreach($polling_units as $polling_unit)
                   <strong>{{$polling_unit->polling_unit_name}}</strong><br>
                   @php
                   $count=0;
                   @endphp
                   @foreach($polling_unit->announced_pu_results as $pu_result)
                   @php
                   $count += $pu_result->party_score;
                   @endphp

                   <p>{{$pu_result->party_abbreviation}} - {{$pu_result->party_score}}</p>
                       
                   @endforeach   

                   <p><strong>Subtotal: {{$count}}</strong></p>
                   <br>   
                   @php
                   $counter += $count;
                   @endphp


                @endforeach
                <h2><strong>Total votes for {{$lga}}: {{$counter}}</strong></h2>



        </div>
@endsection                
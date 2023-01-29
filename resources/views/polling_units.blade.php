@extends('layouts.layout')

@section('content')
<div>
  <h1 class="main_div">LIST OF POLLING UNITS AND RESULTS</h1>

  <div class="table-responsive">
    <table class="table table-bordered border-primary">
      <thead class="table-dark">            
        <tr>
          <th>polling unit name</th>
          @for($x = 0; $x <= 13; $x++)
          <th>Party Abbrv.</th>
          <th>Party score</th>  
          @endfor  
        </tr>
      </thead>
      <tbody class="table-secondary">
        @foreach($polling_units as $polling_unit)
        <tr>
          <td class="table-info"><strong>{{$polling_unit->polling_unit_name}}</strong></td>
          @foreach($polling_unit->announced_pu_results as $pu_result)
          <td class="table-success"><strong>{{$pu_result->party_abbreviation}}</strong></td>
          <td>{{$pu_result->party_score}}</td>
          @endforeach
        </tr>
        @endforeach
      </tbody>  
    </table>
  </div>          
</div>
@endsection        
   
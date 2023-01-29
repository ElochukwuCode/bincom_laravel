@extends('layouts.layout')

@section('content')
        <div class="main_div">
            <h1>Polling Unit Poll Result Entry Page</h1>
            <div>
                <form action="/new_poll" method="post">
                @csrf
                   <div class="mb-3 row">
                       <label for="polling_unit_name" class="col-sm-3 col-form-label">Polling unit name</label>
                       <div class="col-sm-9">
                           <input type="text" class="form-control" name="polling_unit_name" id="polling_unit_name">
                       </div>                       
                   </div>
                   <div class="mb-3 row">
                        <label for="polling_unit_number" class="col-sm-3 col-form-label">Polling unit number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="polling_unit_number" id="polling_unit_number" >
                        </div>
                          
                   </div>
                   <div class="mb-3 row">
                       <label for="polling_unit_description" class="col-sm-3 col-form-label">Polling unit description</label>
                       <div class="col-sm-9">
                           <input class="form-control" type="text" name="polling_unit_description" id="polling_unit_description" >
                       </div>                   
                   </div>
                   <div class="mb-3 row">
                        <label for="polling_unit_id" class="col-sm-3 col-form-label">Polling unit ID</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="number" name="polling_unit_id" id="polling_unit_id" >
                        </div>                   
                   </div>                   
                   <div class="mb-3 row">
                       <label for="ward_id" class="col-sm-3 col-form-label">Ward ID</label>
                       <div class="col-sm-9">
                            <input class="form-control" type="number" id="ward_id" name="ward_id" >
                       </div>                   
                   </div> 
                   <div class="mb-3 row">
                        <label for="lga_id" class="col-sm-3 col-form-label">LGA ID</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="number" id="lga_id" name="lga_id" >
                        </div>                   
                   </div>
                   <div class="mb-3 row">
                       <label for="uniquewardid" class="col-sm-3 col-form-label">Unique ward ID</label>
                       <div class="col-sm-9">
                       <input class="form-control" type="number" id="uniquewardid" name="uniquewardid" >
                       </div>                   
                   </div> 
                   <div class="mb-3 row">
                       <label for="lat" class="col-sm-3 col-form-label">Latitide</label>
                       <div class="col-sm-9">
                           <input class="form-control" type="number" id="lat" name="lat" >
                       </div>                   
                   </div>
                   <div class="mb-3 row">
                       <label for="long" class="col-sm-3 col-form-label">Longitude</label>
                       <div class="col-sm-9">
                           <input class="form-control" type="number" id="long" name="long">
                       </div>                   
                   </div> 
                   <div class="mb-3 row">
                       <label for="entered_by_user" class="col-sm-3 col-form-label">Name of user</label>
                       <div class="col-sm-9">
                           <input class="form-control" type="text" id="entered_by_user" name="entered_by_user">
                       </div>
                   </div>  
                   <div class="mb-3 row">
                       <label for="user_ip_address" class="col-sm-3 col-form-label">User IP address</label>
                       <div class="col-sm-9">
                           <input class="form-control" type="text" id="user_ip_address" name="user_ip_address"> 
                       </div>                  
                   </div>                         
                                     
                   <h3>PARTY SCORE</h3>
                   <div class="form-check">
                   <fieldset>
                    <legend>Select the correct party</legend>
                   @foreach($parties as $party)
                   <label for="{{$party->partyname}}" class="form-check-label fm-chk"><input class="form-check-input" type="radio" id="{{$party->partyname}}" name="party_abbreviation" value="{{$party->partyname}}">{{$party->partyname}}</label>
                   @endforeach
                   </fieldset>
                   </div>
                   <input class="form-control" type="number" name="party_score" placeholder="Enter party score">

                   <button type="submit" class="btn btn-primary btn-sub">SUBMIT REPORT</button>
                </form>
            </div>
            
        </div>
@endsection        
   
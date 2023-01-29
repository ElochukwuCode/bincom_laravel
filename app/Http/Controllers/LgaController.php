<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lga;
use App\Models\Polling_unit;
use App\Models\Announced_pu_result;
use App\Models\Party;

class LgaController extends Controller
{
    public function lgaDetails_post() {
        $lga_id = request('LGAs');
        $lga = Lga::where('uniqueid', $lga_id)->firstorfail();
        $lga_name = $lga->lga_name;
        $polling_units = Polling_unit::with('announced_pu_results')->where('lga_id', $lga_id)->get();
        
        return view('lga_details', ['polling_units' => $polling_units, 'lga'=> $lga_name]);
    }
    public function pollingUnits_get() {
        $polling_units = Polling_unit::with('announced_pu_results')->get();
        
        return view('polling_units', ['polling_units' => $polling_units]);
    }
    public function lgas_get() {
        $lgas = Lga::all();
        return view('lga', ['lgas' => $lgas] );
    }
    public function index() {
        $noNav = false;
        return view('welcome');
    }
    public function store_results_get() {
        $parties = Party::all();
        return view('results_form', ['parties' => $parties]);
    }
    public function store_results_post() {
        try{
            $isPollExisting = Polling_unit::where('polling_unit_id', '=', request('polling_unit_id'))->first();
            if($isPollExisting) {
                $isPollResult = Announced_pu_result::where('polling_unit_uniqueid', '=', $isPollExisting->uniqueid)->where('party_abbreviation', '=', request('party_abbreviation'))->first();
                if(!$isPollResult) {
                    $newPollResult = new Announced_pu_result();
                    $newPollResult->polling_unit_uniqueid = $isPollExisting->uniqueid;
                    $newPollResult->party_abbreviation = request('party_abbreviation');
                    $newPollResult->party_score = request('party_score');
                    $newPollResult->entered_by_user = request('entered_by_user');
                    $newPollResult->date_entered = date("Y-m-d H:i:s");
                    $newPollResult->user_ip_address = request('user_ip_address');
                    $newPollResult->save();
                    return redirect('/')->with('mssg', 'Poll result saved');
                } else {
                    return redirect('/')->with('mssg', 'Nothing saved!!');
                }
            } else {
                $newPollingUnit = new Polling_unit();
                $newPollResult = new Announced_pu_result();

                $newPollingUnit->polling_unit_name = request('polling_unit_name');
                $newPollingUnit->polling_unit_description = request('polling_unit_description');
                $newPollingUnit->polling_unit_number = request('polling_unit_number');
                $newPollingUnit->polling_unit_id = request('polling_unit_id');
                $newPollingUnit->ward_id = request('ward_id');
                $newPollingUnit->lga_id = request('lga_id');
                $newPollingUnit->uniquewardid = request('uniquewardid');
                $newPollingUnit->lat = request('lat');
                $newPollingUnit->long = request('long');
                $newPollingUnit->entered_by_user = request('entered_by_user');
                $newPollingUnit->date_entered = date("Y-m-d H:i:s");
                $newPollingUnit->user_ip_address = request('user_ip_address');
                if($newPollingUnit->save()){      

                    $newPollResult->polling_unit_uniqueid = $newPollingUnit->id;
                    $newPollResult->party_abbreviation = request('party_abbreviation');
                    $newPollResult->party_score = request('party_score');
                    $newPollResult->entered_by_user = request('entered_by_user');
                    $newPollResult->date_entered = date("Y-m-d H:i:s");
                    $newPollResult->user_ip_address = request('user_ip_address');
                    $newPollResult->save();
                    return redirect('/')->with('mssg', 'Polling Unit and Poll result saved');
                } else {
                    return redirect('/')->with('mssg', 'Nothing saved!!');
                }
                
            }
        } catch(\Exception $e) {
            return redirect('/');
        }
    }
}   
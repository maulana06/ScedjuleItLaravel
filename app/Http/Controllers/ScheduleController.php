<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Schedule;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    protected function index()
    {
    	
		return view('schedule');
    }


	protected function create(Request $request)
    {

        $user = Auth::id();
    	$data = new Schedule;
    	$data->subject = $request->subject;
    	$data->schedule_date = $request->scheduleDate;
    	$data->description = $request->desc;
    	$data->any_destination = $request->onoffswitch;
    	$data->from = $request->from;
    	$data->to = $request->to;
        $data->id_user = $user;
        //dd($data);
        $data->save();

         //$data = new Schedule;

        // $data->subject= Input::get('subject');
        // $data->schedule_date= Input::get('scheduleDate');
        // $data->description= Input::get('desc');
        // $data->any_destination= Input::get('onoffswitch');
        // $data->from= Input::get('from');
        // $data->to= Input::get('to');
        // $data->id_user= 1;
        // dd($data->all());





    	   // return Schedule::create([
        //     'name' => $request['subject'],
        //     'shedule_date' => $request['shedule_date'],
        //     'description' => $request['description'],
        //     'any_destination' => $request['any_destination'],
        //     'to' => $request['to'],
        // 	'from' => $request['from'],
        // 	'id_user' => $request['id_user']),
        // ]);
    }

    protected function listEntry()
    {

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Validator;

class passengerdetails extends Controller
{
    //
    public function index(){
        return view('passengers-details');
    }


    public function sendrequest(ContactRequest $request)
    {

        return $request->validated();
    }

    }


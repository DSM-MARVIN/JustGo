<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;

class apitripsummary extends Controller
{
    //
    public function trip()
    {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://justgoapi-laravel.zerobox.co.za/api/bus/get-bus-trip-summary?session_id=JUSTGO-268484-63ce5f3c372ca&outbound_results_id=190454',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMzg2NDRkMGMxZDA2ODQ5MWMxMTc1OGRkMmFlZjkzOGQwMjQ5Nzk3ZjZlNzk0ZjRhYTBhZmJlMGU4NWRkNWQzNGZlMmJlYWIwYTRhZjQ1ZjAiLCJpYXQiOjE2NzQxNjM1NDEsIm5iZiI6MTY3NDE2MzU0MSwiZXhwIjoxNzA1Njk5NTQxLCJzdWIiOiIzMSIsInNjb3BlcyI6W119.E6rr8sMkzDXeBz21KsN1R-wkdYg018l0mLSOtNXJdAFdSZgJAqfFLPLNzRn32LNVOVkC1Je9lVIVpCDvc-_7nSsR_5B4AeXvA2DXmK-D_lqp8Mwx8e8rT_UYqkS7lq_B58uJ03tWx2CU3kuBMiorzcxevmVlTBaa1yO7rqZQ2JEtvrdkB366Yza1PeIptd1BcUjcj4ZhZbY5JtjF9kROu7tQ0VNGk-AWhjCSCAlqaGtiGl4zqS-cBTbO9C1pszy3RGY2WNng1QYdtiefJIp5W88HrhtZFCwJwOdAnjXBJj3cmI6btgPwIc0sjuDIEn0HadKCQwKM8WoaCEcOzYvCmFKM4MkBXpsA2YcACwtEf70KgBXxxBn0Cb7d7s4lSiGtRyUlkPnaP7EMJp1ZP49yu1FtJY4PARePjof5r3ycgiENJ3nTgst_-j5ss5V2oixzrWsLVqOYaJGHhn3a3Cg1LJ99F2TqAS56fxSo4MQLFCIWRwMhEz9t1S-aTyWJ6P4vZGjM1SaPkJ-92Plzq57IMei4J9pFnyIjZ0EHepmWxYNsL3tz2o07koi61YDFTsoF7YGw7ZO0Q1ZKWDvC0xG3MCNYSti39opQ8VPDNP3ghVpwXoKc2idWgi3cpjEJcdUfgd3vZokpTdImCUP5-LRjY2zJJg4vSiAS3fwKdf2L5hg'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);


    $body =  json_decode($response, false);
    $res = $body->outbound_trip_summary;

    $data = [
      'total_passengers' => $body->outbound_trip_summary->total_passengers,
      'departure_place' => $body->outbound_trip_summary->departure_place,
      'arrival_place' => $body->outbound_trip_summary->arrival_place,
      'depature_date' => $body->outbound_trip_summary->depature_date,
      'depature_time' => $body->outbound_trip_summary->depature_time,
      'price' => $body->outbound_trip_summary->price,
    ];


    // $assigned_time = "2012-05-21 22:02:00";
    // $completed_time= "2012-05-22 05:02:00";   
    
    // $d1 = new DateTime($assigned_time);
    // $d2 = new DateTime($completed_time);
    // $interval = $d2->diff($d1);

    $duration =  (int)$body->outbound_trip_summary->depature_time;

// j gives days
    $time = date ( 's', $duration);




    return view('trip-summary',[
      'response' => $data,
      'time' => $time,

    ]);

    }
}

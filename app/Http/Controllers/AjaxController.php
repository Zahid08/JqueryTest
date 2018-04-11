<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AjaxController extends Controller
{
    public function accountinfo(Request $request)
    {
    	$id = $request->accid;
    	$acc = DB::table('accounts')
    		->where('accId', $id)
    		->first();

    	return response()->json($acc);
    	//echo json_encode($acc);
    }

    public function accnumbers(Request $request)
    {
    	$term = $request->term;
    	$acclist = DB::table('accounts')
    		->where('accNo', 'like', "%$term%")
    		->get();
    	$accnumbers = [];
    	foreach($acclist as $acc)
    	{
    		array_push($accnumbers, $acc->accNo);
    	}
    	return response()->json($accnumbers);
    }
}

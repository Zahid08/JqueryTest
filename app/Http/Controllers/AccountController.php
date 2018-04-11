<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Account;
use App\AccountType;
use App\Http\Requests\AccountRequest;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        
        
    	//$accounts = Account::all();
    	$accounts = DB::table('accounts')
            ->join('account_types', 'accounts.typeId', '=', 'account_types.typeId')
            ->get();
    	return view('account.index')
    		->with('accounts', $accounts);
        //echo json_encode($accounts);\
        //return response()->json($accounts);
    }

    public function show($id)
    {
    	//$account = Account::find($id);
    	$account = DB::table('accounts')
            ->join('account_types', 'accounts.typeId', '=', 'account_types.typeId')
    		->where('accId', $id)
    		->first();

    	return view('account.details')
    		->with('account', $account);
    }

    public function create()
    {
        $typeList = AccountType::all();
    	return view('account.create')
            ->with('accountTypes', $typeList);
    }

    public function store(AccountRequest $request)
    {

        /*$this->validate($request,[
            'accountNo' => 'required|unique:accounts,accNo',
            'accountName' => 'required',
            'initialBalance' => 'required|numeric'
        ]);*/

        
        /*
        Validator::make($request->all(), [

            'accountNo' => 'required|unique:accounts,accNo',
            'accountName' => 'required',
            'initialBalance' => 'required|numeric'
        ])->validate();
        */


        /*$validator = Validator::make($request->all(), [

            'accountNo' => 'required|unique:accounts,accNo',
            'accountName' => 'required',
            'initialBalance' => 'required|numeric'
        ]);


        if($validator->fails())
        {
            return redirect()   
                ->back()
                ->with('errors', $validator->errors())
                ->withInput();
        }*/

    	$acc = new Account();
    	$acc->accNo = $request->accountNo;
    	$acc->accName = $request->accountName;
    	$acc->balance = $request->initialBalance;
        $acc->typeId = $request->accTypeId;
    	
    	date_default_timezone_set('Asia/Dhaka');
    	$acc->lastTransaction = date('Y-m-d H:i:s');
    	$acc->save();
    	//return redirect()->route('account.index');
    	//return redirect()->route('account.show', $acc->accId);
        return response()->json($acc);
    }

    public function edit(Account $account)
    {
    	//$account = Account::find($id);
    	// $account = DB::table('accounts')
    	// 	->where('accId', $id)
    	// 	->first();

    	return view('account.edit')
    		->with('account', $account);
    }

    public function update(Request $request)
    {
    	$id = $request->accountId;
    	$acc = Account::find($id);
    	
    	$acc->accName = $request->accountName;
    	
    	$acc->save();
    	//return redirect()->route('account.index');
    	return redirect()->route('account.show', $acc->accId);
    }

    public function delete($id)
    {
    	//$account = Account::find($id);
    	$account = DB::table('accounts')
    		->where('accId', $id)
    		->first();

    	return view('account.delete')
    		->with('account', $account);
    }

    public function destroy(Request $request)
    {
    	$id = $request->accountId;
    	Account::destroy($id);
    	
    	return redirect()->route('account.index');
    }
}

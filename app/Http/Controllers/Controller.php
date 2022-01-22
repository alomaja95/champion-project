<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\Odd;
use App\Models\Receipt;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use MongoDB\Driver\Session;
use function GuzzleHttp\Promise\all;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //for odds
    public function allOdds()
     {
         $odds  = Odd::all();
         return view('all-odds', ['odds' => $odds]) ;
     }
     public function addOdds()
     {
         return view('add-odds');
     }
    public function saveOdds(Request $request)
    {
        $this->validate($request, [
            'odds' => 'required'
        ]);
        if (Odd::where('odds', $request->odds)->first())
        {
            return redirect('/add-odds')->with(['odds_error' => 'odd_name is already in use']);
        }
        Odd::create([
            'odds'          => $request->odds
        ]);
        return redirect('/all-odds');
    }
    public function editOdds($id)
    {
        $odds = Odd::find($id);
        return view('edit-odds', ['odds' => $odds]);
    }
    public function updateOdds(Request $request, $id)
    {
        $odds = Odd::find($id);
        $odds -> odds = $request->input('odds');
        $odds -> save();
        return redirect('/all-odds');
    }

    //for merchants
    public function allMerchant()
    {
        $states = DB::table('state_tbl')->get();
        $merchants  = Merchant::all();
        return view('all-merchant',
            [
                'states' => $states,
                'merchants'   => $merchants,
            ]);
    }
    public function addMerchant()
    {
        $states = DB::table('state_tbl')->get();
        $odds   = DB::table('odds')->get();
        return view('add-merchant',compact('states','odds'));
    }
    public function saveMerchant(Request $request)
    {
        $this->validate($request,[
            'state'          =>'required',
            'first_name'     =>'required',
            'last_name'      =>'required',
            'business_name'  =>'required',
            'agent_id'       =>'required|max:20'
        ]);
        Merchant::create([
            'state'         => $request->state,
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'business_name' => $request->business_name,
            'agent_id'      => $request->agent_id,
            'odd1'          => $request->odd1,
            'odd2'          => $request->odd2,
            'odd3'          => $request->odd3,
            'odd4'          => $request->odd4,
            'odd5'          => $request->odd5,
            'odd6'          => $request->odd6,
        ]);
        return redirect('/all-merchant');
    }
    public function editMerchant($id)
    {
        $merchants = Merchant::find($id);
        $odds = Odd::all();
        $states = DB::table('state_tbl')->get();
        return view('edit-merchant',
            ['merchants' => $merchants,
                'odds' =>  $odds,
                'states' => $states
            ]);
    }
    public function updateMerchant(Request $request, $id)
    {
        $merchants = Merchant::find($id);
        $odds = Odd::all();
        $states = DB::table('state_tbl')->get();
        $merchants -> first_name    = $request->input('first_name');
        $merchants -> last_name     = $request->input('last_name');
        $merchants -> business_name = $request->input('business_name');
        $merchants -> agent_id      = $request->input('agent_id');
        $merchants ->  odd1         = $request->input('odd1');
        $merchants ->  odd2         = $request->input('odd2');
        $merchants ->  odd3         = $request->input('odd3');
        $merchants ->  odd4         = $request->input('odd4');
        $merchants ->  odd5         = $request->input('odd5');
        $merchants ->  odd6         = $request->input('odd6');
        $merchants->   state        = $request->input('state');
        $merchants -> save();
        return redirect('/all-merchant');
    }

    //receipt
    public function allReceipt()
    {
        $receipts = Receipt::all();
        return view('/all-receipt', compact('receipts'));
    }
    public function addReceipt()
    {
        $states     = DB::table('state_tbl')->get();
        $merchants  = Merchant::all();
        return view('/add-receipt', compact('states','merchants'));
    }
    public function search()
    {
        $states = DB::table('state_tbl')->get();
        $search = $_GET['query'];
        $merchants = Merchant::where('state','LIKE', '%'.$search.'%')->get();
        return view('/search', compact('merchants','states'));
    }
    public function newReceipt($id)
    {
        $merchants = Merchant::find($id);
        return view('/new-receipt', compact('merchants'));
    }
    public function saveReceipt(Request $request)
    {
//        $this->validate($request, [
//            'year_week_no' => 'required',
//            'state'        => 'required',
//            Rule::unique('state', 'year_week_no','merchant_id')
//        ]);
        $this->validate($request, [
            'year_week_no' => ['required'],
//            'merchant_id'  => ['required'],
//            'state' => [
//                'required'],
//                Rule::unique('receipts',['state','year_week_no','merchant_id'])
            ]);
        Receipt::create([
            'year_week_no'             => $request->year_week_no,
            'state'                    => $request->state,
            'business_name'            => $request->business_name,
            'merchant_id'              => $request->agent_id,
            'cash'                     => $request->cash,
            'teller'                   => $request->teller,
            'total_deposit'            => $request->total_deposit,
            'odd1'                     => $request->odd1,
            'odd2'                     => $request->odd2,
            'odd3'                     => $request->odd3,
            'odd4'                     => $request->odd4,
            'odd5'                     => $request->odd5,
            'odd6'                     => $request->odd6,
            'g_odd1'                   => $request->g_odd1,
            'g_odd1_1'                 => $request->g_odd1_1,
            'g_odd1_2'                 => $request->g_odd1_2,
            'g_odd1_3'                 => $request->g_odd1_3,
            'g_odd2'                   => $request->g_odd2,
            'g_odd2_1'                 => $request->g_odd2_1,
            'g_odd2_2'                 => $request->g_odd2_2,
            'g_odd2_3'                 => $request->g_odd2_3,
            'g_odd3'                   => $request->g_odd3,
            'g_odd3_1'                 => $request->g_odd3_1,
            'g_odd3_2'                 => $request->g_odd3_2,
            'g_odd3_3'                 => $request->g_odd3_3,
            'g_odd4'                   => $request->g_odd4,
            'g_odd4_1'                 => $request->g_odd4_1,
            'g_odd4_2'                 => $request->g_odd_4_2,
            'g_odd4_3'                 => $request->g_odd4_3,
            'g_odd5'                   => $request->g_odd5,
            'g_odd5_1'                 => $request->g_odd5_1,
            'g_odd5_2'                 => $request->g_odd5_2,
            'g_odd5_3'                 => $request->g_odd5_3,
            'g_odd6'                   => $request->g_odd6,
            'g_odd6_1'                 => $request->g_odd6_1,
            'g_odd6_2'                 => $request->g_odd6_2,
            'g_odd6_3'                 => $request->g_odd6_3,
            'total'                    => $request->total,
            'total_1'                  => $request->total_1,
            'total_2'                  => $request->total_2,
            'total_3'                  => $request->total_3,
            'loan'                     => $request->loan,
            'balance_merchant'         => $request->balance_merchant,
            'balance_company'          => $request->balance_company
        ]);
        return redirect('/all-receipt');
    }
    public function editReceipt($id)
    {
        $receipts = Receipt::find($id);
        return view('/edit-receipt', ['receipts' => $receipts]);
    }
    public function adminEditReceipt(){
        $receipts = Receipt::find($id);
        return view('/edit-receipt', ['receipts' => $receipts]);
    }
    public function updateReceipt(Request $request, $id)
    {
        $reciepts = Receipt::find($id);
        $reciepts ->  year_week_no         = $request->input('year_week_no');
        $reciepts ->  state                = $request->input('state');
        $reciepts ->  business_name        = $request->input('business_name');
        $reciepts ->  merchant_id          = $request->input('agent_id');
        $reciepts ->  cash                 = $request->input('cash');
        $reciepts ->  teller               = $request->input('teller');
        $reciepts ->  total_deposit        = $request->input('total_deposit');
        $reciepts ->  g_odd1               = $request->input('g_odd1');
        $reciepts ->  g_odd1_1             = $request->input('g_odd1_1');
        $reciepts ->  g_odd1_2             = $request->input('g_odd1_2');
        $reciepts ->  g_odd1_3             = $request->input('g_odd1_3');
        $reciepts ->  g_odd2               = $request->input('g_odd2');
        $reciepts ->  g_odd2_1             = $request->input('g_odd2_1');
        $reciepts ->  g_odd2_2             = $request->input('g_odd2_2');
        $reciepts ->  g_odd2_3             = $request->input('g_odd2_3');
        $reciepts ->  g_odd3               = $request->input('g_odd3');
        $reciepts ->  g_odd3_1             = $request->input('g_odd3_1');
        $reciepts ->  g_odd3_2             = $request->input('g_odd3_2');
        $reciepts ->  g_odd3_3             = $request->input('g_odd3_3');
        $reciepts ->  g_odd4               = $request->input('g_odd4');
        $reciepts ->  g_odd4_1             = $request->input('g_odd4_1');
        $reciepts ->  g_odd4_2             = $request->input('g_odd4_2');
        $reciepts ->  g_odd4_3             = $request->input('g_odd4_3');
        $reciepts ->  g_odd5               = $request->input('g_odd5');
        $reciepts ->  g_odd5_1             = $request->input('g_odd5_1');
        $reciepts ->  g_odd5_2             = $request->input('g_odd5_2');
        $reciepts ->  g_odd5_3             = $request->input('g_odd5_3');
        $reciepts ->  g_odd6               = $request->input('g_odd6');
        $reciepts ->  g_odd6_1             = $request->input('g_odd6_1');
        $reciepts ->  g_odd6_2             = $request->input('g_odd6_2');
        $reciepts ->  g_odd6_3             = $request->input('g_odd6_3');
        $reciepts ->  loan                 = $request->input('loan');
        $reciepts ->  balance_merchant     = $request->input('balance_merchant');
        $reciepts ->  balance_company      = $request->input('balance_company');
        $reciepts->save();
        return redirect('/all-receipt');
    }

    public function printReceipt()
    {
        $states = DB::table('state_tbl')->get();
        return view('/print-receipt', compact('states'));
    }
    public function printPreview(Request $request)
    {
        $merchants = Merchant::all();
        $receipts = DB::table('receipts')->where([
            ['state', 'LIKE', '%' . $request->state . '%'],
            ['year_week_no', 'LIKE', '%' . $request->year . '%']
        ])->get();
        return view('/print-preview', compact('receipts', 'merchants'));
    }
    public function deleteOdds(Request $request, $id)
    {
        $odds = Odd::find($id);
        $odds->delete();
        return back();
    }

    public function logini()
    {
        return view('/log-in');
    }
    public function regLogin()
    {
        return view('/reg-login');
    }
    public function performLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}


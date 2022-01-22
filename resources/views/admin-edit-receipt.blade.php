@extends('componets.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Add Receipt</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="/all-merchant" onClick="return false;">Receipt</a>
                            </li>
                            <li class="breadcrumb-item active">Add Receipt</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>CHAMPOIN</strong> FIXED ODD RECEIPT</h2>
                        </div>
                        @if (count($errors) > 0)
                            <div class = "alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form style="height: 10%;" method="post" action="{{route('updatereceipt' ,$receipts->id)}}">
                            @csrf
                            @method('patch')
                            <div class="modal-body">
                                <div class="col-sm-12">
                                    <label> state:</label>
                                    <input type="text" name="state" value="{{$receipts->state}}" readonly
                                           style="height: 15px; width: 8%;font-size: 15px;color:#0be63b; "><br>
                                    <label> Week no:</label>
                                    <input type="text" name="year_week_no" value="{{$receipts->year_week_no}}" readonly
                                           style="height: 15px; width: 8%;font-size: 15px;color:#0be63b; "><br>
                                    @if(Session::get('receipt_error'))
                                        <p>year/date is already in use</p>
                                    @endif
                                    <label> Business Name:</label>
                                    <input type="text" name="business_name" value="{{$receipts->business_name}}" readonly
                                           style="height: 15px; width: 8%;font-size: 15px;color:#0be63b; "><br>
                                    <label> Merchant ID: </label>
                                    <input type="text" name="agent_id"  value="{{$receipts->merchant_id}}" readonly
                                           style="height: 15px; width: 10%;font-size: 15px;color:#0be63b; text-underline-mode : none; "><br><br><br>
                                    <label style="width: 40%;height: 10px; position: absolute; right: 2px; top:-15px;"> DEPOSITS </label>

                                </div>
                                <div class="body table-responsive">
                                    <table class="table table-bordered"
                                           style="height: 10px; width: 40%; position: absolute; right: 2px; margin-right: 30px; top: 2px;" >
                                        <tbody>
                                        <tr>
                                            <td>CASH</td>
                                            <td><input type="text" name="cash"  value="{{$receipts->cash}}"
                                                       style="height: 15px; width: 82px;font-size: 15px;color:#0be63b; ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TELLER</td>
                                            <td><input type="text" name="teller" value="{{$receipts->teller}}"
                                                       style="height: 15px; width: 82px;font-size: 15px;color:#0be63b; ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TOTAL DEPOSIT</td>
                                            <td><input type="text" name="total_deposit" value="{{$receipts->total_deposit}}"
                                                       style="height: 15px; width: 82px;font-size: 15px;color:#0be63b; ">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="body table-responsive">
                                    <table class="table table-bordered" style="height: 50px;">
                                        <thead>
                                        <tr>
                                            <th>N/S</th>
                                            <th>(ONLINE POS) 100-1</th>
                                            <th>(ONLINE TAB) 100-1</th>
                                            <th>(COUPON) 100-1</th>
                                            <th>(ONLINE POS) 40-1</th>
                                            <th>(ONLINE TAB) 40-1</th>
                                            <th>(COUPON) 40-1</th>
                                            <th>TOTAL</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">GROSS</th>
                                            <td><input type="text" name="g_odd1" value="{{$receipts->g_odd1}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd2" value="{{$receipts->g_odd2}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd3" value="{{$receipts->g_odd3}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd4" value="{{$receipts->g_odd4}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd5" value="{{$receipts->g_odd5}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd6" value="{{$receipts->g_odd6}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="total" value="{{$receipts->total}}"style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">COMMISSION</th>
                                            <td><input type="text" name="g_odd1_1" value="{{$receipts->g_odd1_1}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd2_1" value="{{$receipts->g_odd2_1}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd3_1" value="{{$receipts->g_odd3_1}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd4_1" value="{{$receipts->g_odd4_1}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd5_1" value="{{$receipts->g_odd5_1}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd6_1" value="{{$receipts->g_odd6_1}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="total_1" value="{{$receipts->total_1}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">NET</th>
                                            <td><input type="text" name="g_odd1_2" value="{{$receipts->g_odd1_2}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd2_2" value="{{$receipts->g_odd2_2}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd3_2" value="{{$receipts->g_odd3_2}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd4_2" value="{{$receipts->g_odd4_2}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd5_2" value="{{$receipts->g_odd5_2}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd6_2" value="{{$receipts->g_odd6_2}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="total_2" value="{{$receipts->total_2}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">WINNING</th>
                                            <td><input type="text" name="g_odd1_3" value="{{$receipts->g_odd1_3}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd2_3" value="{{$receipts->g_odd2_3}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd3_3" value="{{$receipts->g_odd3_3}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd4_3" value="{{$receipts->g_odd4_3}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd5_3" value="{{$receipts->g_odd5_3}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd6_3" value="{{$receipts->g_odd6_3}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="total_3" value="{{$receipts->total_3}}" style="height: 15px; width: 80px;font-size: 15px;color:#0be63b; "></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <label> LOAN </label>
                                    <input type="text" name="loan" value="{{$receipts->loan}}"
                                           style="height: 15px; width: 8%;font-size: 15px;color:#0be63b; "><br>
                                    <label> BALANCE MERCHANT(AGENT) </label>
                                    <input type="text" name="balance_merchant" value="{{$receipts->balance_merchant}}"
                                           style="height: 15px; width: 8%;font-size: 15px;color:#0be63b; "><br>
                                    <label> BALANCE COMPANY </label>
                                    <input type="text" name="balance_company" value="{{$receipts->balance_company}}"
                                           style="height: 15px; width: 8%;font-size: 15px;color:#0be63b; "><br>
                                </div>
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button type="submit"
                                        class="btn btn-info waves-effect">Save</button>
                                <button type="button" class="btn btn-danger waves-effect"
                                        data-bs-dismiss="modal"><a href="/all-receipt" style="color: inherit;"> Cancel </a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

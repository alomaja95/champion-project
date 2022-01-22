@extends('componets.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Receipt Preview</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="/all-merchant">Receipt</a>
                            </li>
                            <li class="breadcrumb-item active">Receipt Print</li>
                        </ul>
                        <button
                            class="btn btn-info btn-border-radius waves-effect" onclick="window.print();">Print
                        </button>
                    </div>
                </div>
            </div>
            @if (session()->has('message'))
                <div class = "alert alert-danger">
                    <ul>
                            <li>{{session()->get('message') }}</li>
                    </ul>
                </div>
            @elseif(session()->has('error'))
                <div class = "alert alert-danger">
                    <ul>
                        <li>{{ session()->get('error') }}</li>
                    </ul>
                </div>
            @endif
            <style>
                @media print {
                    /* Hide every other thing*/
                    body * {
                        visibility: hidden;
                    }
                    /* show the print container*/
                    .print-container, .print-container * {
                        visibility: visible;
                    }
                    /* Adjusting the Position to always start from the top*/
                    .print-container {
                        position: absolute;
                        top: 0px;
                        font-weight: 900;
                        border-bottom: none;
                    }
                }
            </style>
{{--            @if (session()->has('message'))--}}
{{--                --}}{{--                            {{session()->forget('message')}}--}}
{{--                <div class="alert alert-success">--}}
{{--                    {{session()->get('message')}}--}}
{{--                </div>--}}
{{--            @elseif(session()->has('error'))--}}
{{--                <div class="alert alert-danger">--}}
{{--                    {{session()->get('error')}}--}}
{{--                </div>--}}
{{--            @endif--}}
            <div class="row print-container" id="example" >
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                            @foreach($receipts as $receipt)
                        <div class="header ">
                            <h2> <strong>CHAMPION</strong> FIXED ODD RECEIPT</h2>
                        </div>
                            <div class="modal-body">
                                <div class="body table-responsive" id="example">
                                    <table class="table table-bordered"
                                           style="height: 10px; width: 40%; position: absolute; left: 2px; margin-left: 30px;  top: 2px;" >
                                        <tbody>
                                        <tr>
                                            <td>STATE:</td>
                                            <td><input type="text" name="state" value="{{$receipt->state}}" readonly style="height: 15px;font-size:20px;color:#0be63b; border-bottom: none; font-weight: 900;font-family: Garamond,Serif;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>WEEK NO:</td>
                                            <td><input type="text" name="year_week_no" value="{{$receipt->year_week_no}}" readonly style="height: 15px;font-size:20px;color:#0be63b; border-bottom: none; font-weight: 900;font-family: Garamond,Serif;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>BUSINESS NAME:</td>
                                            <td><input type="text" name="business_name" value="{{$receipt->business_name}}" readonly style="height: 15px;font-size:20px;color:#0be63b; border-bottom: none; font-weight: 900;font-family: Garamond,Serif;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>MERCHANT ID:</td>
                                            <td><input type="text" name="agent_id"  value="{{$receipt->merchant_id}}" readonly style="height: 15px;font-size:20px;color:#0be63b; border-bottom: none; font-weight: 900;font-family: Garamond,Serif;" ></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
{{--                                <div class="col-sm-12">--}}
{{--                                    <label> <b>state:</b></label>--}}
{{--                                    <strong><input type="text" name="state" value="{{$receipt->state}}" readonly--}}
{{--                                           style="height: 20px; width: 8%;font-size: 15px;color:#0be63b; font-weight: 900; "></strong><br>--}}
{{--                                    <label> <strong><b>Week no:</b></strong></label>--}}
{{--                                    <input type="text" name="year_week_no" value="{{$receipt->year_week_no}}" readonly required--}}
{{--                                           style="height: 20px; width: 8%;font-size: 15px;color:#0be63b;font-weight: 900; "></b><br>--}}
{{--                                    @if(Session::get('receipt_error'))--}}
{{--                                        <p>year/date is already in use</p>--}}
{{--                                    @endif--}}
{{--                                    <label> <strong>Business Name:</strong></label>--}}
{{--                                    <input type="text" name="business_name" value="{{$receipt->business_name}}" readonly--}}
{{--                                           style="height: 20px; width: 12%;font-size: 15px;color:#0be63b;font-weight: 900; "><br>--}}
{{--                                    <label> <strong>Merchant ID:</strong> </label>--}}
{{--                                    <input type="text" name="agent_id"  value="{{$receipt->merchant_id}}" readonly--}}
{{--                                           style="height: 20px; width: 12%;font-size: 15px;color:#0be63b; font-weight: 900; text-underline-mode : none; "><br><br><br>--}}
{{--                                    <label style="width: 40%;height: 10px; position: absolute; right: 2px; top:-15px;"> <strong>DEPOSITS </strong></label>--}}
{{--                                </div>--}}
                                <div class="body table-responsive" id="example">
                                    <table class="table table-bordered"
                                           style="height: 9px; width: 40%; position: absolute; right: 2px; margin-right: 30px;  top: 2px;" >
                                        <tbody>
                                        <tr>
                                            <td>CASH</td>
                                            <td><input type="text" name="cash" value="{{$receipt->cash}}" readonly style="height: 15px; width: 82px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TELLER</td>
                                            <td><input type="text" name="teller" value="{{$receipt->teller}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TOTAL DEPOSIT</td>
                                            <td><input type="text" name="total_deposit" value="{{$receipt->total_deposit}}" readonly style="height: 15px; border-bottom: none;font-size: 15px;color:#0be63b; font-weight: 900;">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="body table-responsive">
                                    <table class="table table-bordered" style="height: 50px; margin-top:128px;margin-left: 3px">
                                        <thead>
                                        <tr>
                                            <th>N/S</th>
                                            <th>{{$receipt->odd1}}</th>
                                            <th>{{$receipt->odd2}}</th>
                                            <th>{{$receipt->odd3}}</th>
                                            <th>{{$receipt->odd4}}</th>
                                            <th>{{$receipt->odd5}}</th>
                                            <th>{{$receipt->odd6}}</th>
                                            <th>TOTAL</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">GROSS</th>
                                            <td><input type="text" name="g_odd1" value="{{$receipt->g_odd1}}" readonly style="height: 15px; border-bottom: none;font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd2" value="{{$receipt->g_odd2}}" readonly style="height: 15px; border-bottom: none;font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd3" value="{{$receipt->g_odd3}}" readonly style="height: 15px; border-bottom: none;font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd4" value="{{$receipt->g_odd4}}" readonly style="height: 15px; border-bottom: none;font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd5" value="{{$receipt->g_odd5}}" readonly style="height: 15px; border-bottom: none;font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd6" value="{{$receipt->g_odd6}}" readonly style="height: 15px; border-bottom: none;font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="total" value="{{$receipt->total}}" readonly style="height: 15px; border-bottom: none;font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">COMMISSION</th>
                                            <td><input type="text" name="g_odd1_1" value="{{$receipt->g_odd1_1}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd2_1" value="{{$receipt->g_odd2_1}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd3_1" value="{{$receipt->g_odd3_1}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd4_1" value="{{$receipt->g_odd4_1}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd5_1" value="{{$receipt->g_odd5_1}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd6_1" value="{{$receipt->g_odd6_1}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="total_1" value="{{$receipt->total_1}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">NET</th>
                                            <td><input type="text" name="g_odd1_2" value="{{$receipt->g_odd1_2}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd2_2" value="{{$receipt->g_odd2_2}}" readonly style="height: 15px;border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd3_2" value="{{$receipt->g_odd3_2}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd4_2" value="{{$receipt->g_odd4_2}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd5_2" value="{{$receipt->g_odd5_2}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd6_2" value="{{$receipt->g_odd6_2}}" readonly style="height: 15px; border-bottom: none;  font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="total_2" value="{{$receipt->total_2}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">WINNING</th>
                                            <td><input type="text" name="g_odd1_3" value="{{$receipt->g_odd1_3}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd2_3" value="{{$receipt->g_odd2_3}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd3_3" value="{{$receipt->g_odd3_3}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd4_3" value="{{$receipt->g_odd4_3}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd5_3" value="{{$receipt->g_odd5_3}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="g_odd6_3" value="{{$receipt->g_odd6_3}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                            <td><input type="text" name="total_3" value="{{$receipt->total_3}}" readonly style="height: 15px; border-bottom: none; font-size: 15px;color:#0be63b; font-weight: 900;"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <label> LOAN: </label>
                                    <input type="text" name="loan" value="{{$receipt->loan}}" readonly
                                           style="height: 15px; width: 8%;font-size: 15px;color:#0be63b; border-bottom: none; font-weight: 900; "><br>
                                    <label> BALANCE MERCHANT(AGENT): </label>
                                    <input type="text" name="balance_merchant" value="{{$receipt->balance_merchant}}" readonly
                                           style="height: 15px; width: 8%;font-size: 15px;color:#0be63b; border-bottom: none; font-weight: 900"><br>
                                    <label> BALANCE COMPANY: </label>
                                    <input type="text" name="balance_company" value="{{$receipt->balance_company}}" readonly
                                           style="height: 15px; width: 8%;font-size: 15px;color:#0be63b; border-bottom: none; font-weight: 900;"><br>
                                </div>
                                <br>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

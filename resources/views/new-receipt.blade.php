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
                                <strong>CHAMPION</strong> FIXED ODD RECEIPT</h2>
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
                        <form style="height: 10%;" method="post" action="{{route('savereceipt')}}">
                            @csrf
                            <div class="modal-body">
                                <div class="col-sm-12">
                                    <label> state:</label>
                                    <input type="text" name="state" value="{{$merchants->state}}" readonly
                                           style="height: 15px; width: 8%;font-size: 15px;color:#0be63b;border-bottom: none; "><br>
                                    <label> Week no:</label>
                                    <input type="text" name="year_week_no" required
                                           style="height: 15px; width: 10%;font-size: 15px;color:#0be63b; "><br>
                                    @if(Session::get('receipt_error'))
                                        <p>year/date is already in use</p>
                                    @endif
                                    <label> Business Name:</label>
                                    <input type="text" name="business_name" value="{{$merchants->business_name}}" readonly
                                           style="height: 15px; width: 20%;font-size: 15px;color:#0be63b;border-bottom: none; "><br>
                                    <label> Merchant ID: </label>
                                    <input type="text" name="agent_id"  value="{{$merchants->agent_id}}" readonly
                                           style="height: 15px; width: 20%;font-size: 15px;color:#0be63b; border-bottom : none; "><br><br><br>
                                    <label style="width: 40%;height: 10px; position: absolute; right: 2px; top:-15px;"> DEPOSITS </label>

                                </div>
                                <div class="body table-responsive">
                                    <table class="table table-bordered"
                                           style="height: 10px; width: 40%; position: absolute; right: 2px; margin-right: 30px; top: 2px;" >
                                        <tbody>
                                        <tr>
                                            <td>CASH</td>
                                            <td><input type="text" onkeyup="findTotalDeposit()" name="cash"  style="height: 15px; font-size: 15px;color:#0be63b; ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TELLER</td>
                                            <td><input type="text" onkeyup="findTotalDeposit()" name="teller" style="height: 15px; font-size: 15px;color:#0be63b; ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TOTAL DEPOSIT</td>
                                            <td><input type="text" name="total_deposit" readonly onclick="meeh()" style="height: 15px; font-size: 15px;color:#0be63b;border-bottom: none; ">
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
                                            <th><textarea class="table" name="odd1" readonly style="overflow: hidden; border: none;  width: 100px;" wrap="soft">{{optional($merchants->merchantOdd1)->odds}}</textarea> </th>
                                            <th><textarea class="table" name="odd2" readonly style="overflow: hidden; border: none;  width: 100px;" wrap="soft">{{optional($merchants->merchantOdd2)->odds}}</textarea>  </th>
                                            <th><textarea class="table" name="odd3" readonly style="overflow: hidden; border: none;  width: 100px;" wrap="soft">{{optional($merchants->merchantOdd3)->odds}}</textarea>  </th>
                                            <th><textarea class="table" name="odd4" readonly style="overflow: hidden; border: none;  width: 100px;" wrap="soft">{{optional($merchants->merchantOdd4)->odds}}</textarea> </th>
                                            <th><textarea class="table" name="odd5" readonly style="overflow: hidden; border: none;  width: 100px;" wrap="soft">{{optional($merchants->merchantOdd5)->odds}}</textarea>  </th>
                                            <th><textarea class="table" name="odd6" readonly style="overflow: hidden; border: none;  width: 100px;" wrap="soft">{{optional($merchants->merchantOdd6)->odds}}</textarea>  </th>
                                            <th>TOTAL</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">GROSS</th>
                                            <td><input type="text" onkeyup="findGross()" name="g_odd1" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" onkeyup="findGross()" name="g_odd2" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" onfocus="meeh()" name="g_odd3" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" onkeyup="findGross()" name="g_odd4" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" onkeyup="findGross()" name="g_odd5" style="height: 15px; font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" onkeyup="findGross()" name="g_odd6" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" name="total" readonly style="height: 15px; font-size: 15px;color:#0be63b; border-bottom: none "></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">COMMISSION</th>
                                            <td><input type="text" name="g_odd1_1" onkeyup="findCommission()" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" name="g_odd2_1" onkeyup="findCommission()" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" name="g_odd3_1" onkeyup="findCommission()" style="height: 15px; font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd4_1" onkeyup="findCommission()" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" name="g_odd5_1" onkeyup="findCommission()" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" name="g_odd6_1" onkeyup="findCommission()" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" name="total_1" readonly style="height: 15px; font-size: 15px;color:#0be63b; border-bottom: none "></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">NET</th>
                                            <td><input type="text" name="g_odd1_2" onkeyup="findNet()" style="height: 15px; font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd2_2" onkeyup="findNet()" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" name="g_odd3_2" onkeyup="findNet()" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" name="g_odd4_2" onkeyup="findNet()" style="height: 15px; font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd5_2" onkeyup="findNet()" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" name="g_odd6_2" onkeyup="findNet()" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" name="total_2" readonly style="height: 15px; font-size: 15px;color:#0be63b; border-bottom: none "></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">WINNING</th>
                                            <td><input type="text" name="g_odd1_3" onkeyup="findWinning()" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" name="g_odd2_3" onkeyup="findWinning()" style="height: 15px; font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="g_odd3_3" onkeyup="findWinning()" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" name="g_odd4_3" onkeyup="findWinning()" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" name="g_odd5_3" onkeyup="findWinning()" style="height: 15px; font-size: 15px;color:#0be63b;  "></td>
                                            <td><input type="text" name="g_odd6_3" onkeyup="findWinning()" style="height: 15px; font-size: 15px;color:#0be63b; "></td>
                                            <td><input type="text" name="total_3" readonly style="height: 15px; font-size: 15px;color:#0be63b; border-bottom: none"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <label> LOAN: </label>
                                    <input type="text" name="loan" onclick="meeh()"
                                           style="height: 15px; width: 8%;font-size: 15px;color:#0be63b; "><br>
                                    <label> BALANCE MERCHANT(AGENT): </label>
                                    <input type="text" onfocus="balanceAgent()"  readonly name="balance_merchant"
                                           style="height: 15px; width: 8%;font-size: 15px;color:#0be63b; "><br>
                                    <label> BALANCE COMPANY: </label>
                                    <input type="text" onfocus="balanceCompany()" readonly name="balance_company"
                                           style="height: 15px; width: 8%;font-size: 15px;color:#0be63b; "><br>
                                </div>
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button type="submit"
                                        class="btn btn-info waves-effect" onclick="balanceAgent();balanceCompany()">Save</button>
                                <button type="button" class="btn btn-danger waves-effect"
                                        data-bs-dismiss="modal"><a href="/all-receipt" style="color: inherit"> Cancel </a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

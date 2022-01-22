@extends('componets.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Receipt</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="/index">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Receipt</a>
                            </li>
                            <li class="breadcrumb-item active">All Receipt</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Receipt</strong>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example contact_list">
                                    <thead>
                                    <tr>
                                        <th class="center"> State</th>
                                        <th class="center">Business Name </th>
                                        <th class="center"> Merchant ID </th>
                                        <th class="center"> Year/Week No </th>
                                        <th class="center"> Invoice </th>
                                        <th class="center"> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($receipts as $receipt)
                                        <tr>
                                            <td class="center">{{$receipt->state}}</td>
                                            <td class="center">{{$receipt->business_name}}</td>
                                            <td class="center">{{$receipt->merchant_id}}</td>
                                            <td class="center">{{$receipt->year_week_no}}</td>
                                            <td class="center">
                                                <a class="invoice" href="../../assets/images/test.pdf" target="_blank">
                                                    <i class="far fa-file-pdf"></i>
                                                </a>
                                            </td>
                                            <td class="center">
                                                <a href="/edit-receipt/{{$receipt->id}}" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="/edit-receipt/{{$receipt->id}}" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th class="center"> State</th>
                                        <th class="center"> Business Name </th>
                                        <th class="center"> Merchant ID </th>
                                        <th class="center"> Year/Week No </th>
                                        <th class="center"> Invoice </th>
                                        <th class="center"> Action </th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

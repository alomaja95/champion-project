@extends('componets.app')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">All Merchants</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="/index">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="/all-merchant" onClick="return false;">Merchants</a>
                            </li>
                            <li class="breadcrumb-item active">All Merchants</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>All</strong> Merchants
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row">
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example contact_list">
                                    <thead>
                                    <tr>
                                        <th class="center"> Agent ID </th>
                                        <th class="center"> State </th>
                                        <th class="center"> Name </th>
{{--                                        <th class="center"> Year </th>--}}
{{--                                        <th class="center"> Week </th>--}}
                                        <th class="center"> Business Name </th>
                                        <th class="center"> Odd 1 </th>
                                        <th class="center"> Odd 2 </th>
                                        <th class="center"> Odd 3 </th>
                                        <th class="center"> Odd 4 </th>
                                        <th class="center"> Odd 5 </th>
                                        <th class="center"> Odd 6 </th>
                                        <th class="center"> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($merchants)

                                        @foreach ($merchants as $merchant)
                                            <tr class="odd gradeX">
                                                <td class="center"> {{$merchant->agent_id}}</td>
                                                <td class="center"> {{$merchant->state}}</td>
                                                <td class="center"> {{$merchant->first_name. ' '.$merchant->last_name}}</td>
{{--                                                <td class="center"> {{$merchant->year}} </td>--}}
{{--                                                <td class="center"> {{$merchant->week}}</td>--}}
                                                <td class="center"> {{$merchant->business_name}}</td>
                                                <td class="center"> {{optional($merchant->merchantOdd1)->odds}} </td>
                                                <td class="center"> {{optional($merchant->merchantOdd2)->odds}} </td>
                                                <td class="center"> {{optional($merchant->merchantOdd3)->odds}} </td>
                                                <td class="center"> {{optional($merchant->merchantOdd4)->odds}} </td>
                                                <td class="center"> {{optional($merchant->merchantOdd5)->odds}} </td>
                                                <td class="center"> {{optional($merchant->merchantOdd6)->odds}} </td>
                                                <td class="center">
                                                    <a href="edit-merchant/{{$merchant->id}}" class="btn btn-tbl-edit">
                                                        <i class="material-icons">create</i>
                                                    </a>
                                                    <a href="edit-merchant/{{$merchant->id}}" class="btn btn-tbl-delete">
                                                        <i class="material-icons">delete_forever</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    @endif()
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th class="center"> Agent ID </th>
                                        <th class="center"> State </th>
                                        <th class="center"> Name </th>
{{--                                        <th class="center"> Year </th>--}}
{{--                                        <th class="center"> Week </th>--}}
                                        <th class="center"> Business Name </th>
                                        <th class="center"> Odd 1 </th>
                                        <th class="center"> Odd 2 </th>
                                        <th class="center"> Odd 3 </th>
                                        <th class="center"> Odd 4 </th>
                                        <th class="center"> Odd 5 </th>
                                        <th class="center"> Odd 6 </th>
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

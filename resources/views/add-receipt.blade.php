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
                        </div>
                        <div class="body row">
                            <form type="get" action="{{route ('search')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-2">
                                        <select class="list-group row-cols-md-4 bg-black" name="query">
                                            <option value="" disabled selected>Choose state</option>
                                            @foreach($states as $state)
                                                <option value="{{$state->state_name}}">{{$state->state_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2 button-demo">
                                        <button type="submit" class="btn btn-outline-info btn-border-radius">Search</button>
                                    </div>
                                </div>
                            </form>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example contact_list">
                                        <thead>
                                        <tr>
                                            <th class="center"> State</th>
                                            <th class="center">Business Name </th>
                                            <th class="center"> Merchant ID </th>
                                            <th class="center"> Invoice </th>
                                            <th class="center"> Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($merchants as $merchant)
                                            <tr>
                                                <td class="center">{{$merchant->state}}</td>
                                                <td class="center">{{$merchant->business_name}}</td>
                                                <td class="center">{{$merchant->agent_id}}</td>
                                                <td class="center">
                                                    <a class="invoice" href="../../assets/images/test.pdf" target="_blank">
                                                        <i class="far fa-file-pdf"></i>
                                                    </a>
                                                </td>
                                                <td class="center">
                                                    <a href="/new-receipt/{{$merchant->id}}" class="btn btn-tbl-edit">
                                                        <i class="material-icons">create</i>
                                                    </a>
                                                    <a href="#" class="btn btn-tbl-delete">
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
        </div>
    </section>
@endsection

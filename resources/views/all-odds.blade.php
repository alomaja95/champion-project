@extends('componets.app')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Add Odds</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="/all-odds" onClick="return false;">Odds</a>
                            </li>
                            <li class="breadcrumb-item active">Add Odds</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Add</strong> Odds</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example contact_list">
                                    <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th class="center"> odds </th>
                                        <th class="center"> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($odds)
                                        @foreach ($odds as $odd)
                                            <tr>
                                                <td class="center">{{$loop->index+1}}</td>
                                                <td class="center">{{$odd->odds}}</td>
                                                <td class="center js-sweetalert">
                                                    <a href="/edit-odds/{{$odd->id}}" class="btn btn-tbl-edit">
                                                        <i class="material-icons">create</i>
                                                    </a>
{{--                                                    <a href="/edit-odds/{{$odd->id}}" class="btn btn-tbl-delete">--}}
{{--                                                        <i class="material-icons">delete_forever</i>--}}
{{--                                                    </a>--}}
                                                        <button id="{{$odd->id}}" class="btn btn-tbl-delete waves-effect" data-type="confirm">
                                                            <i class="material-icons">delete_forever</i>
                                                        </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th class="center">#</th>
                                        <th class="center"> Odds </th>
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

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
                                <a href="/all-merchant" onClick="return false;">Odds</a>
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
                        @if (count($errors) > 0)
                            <div class = "alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{route('updateodds', $odds->id)}}" >
                            @csrf
                            @method('patch')
                            <div class="row">
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Odds Name" name="odds" value="{{$odds->odds}}"/>
                                                @if(Session::get('odds_error'))
                                                    <p>Odds name is already in use</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20 text-center">
                                    <button type="submit" class="btn btn-success waves-effect m-r-15" >Submit</button>
                                    <button type="button" class="btn btn-danger waves-effect">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

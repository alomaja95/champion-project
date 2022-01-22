@extends('componets.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Print Receipt</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="/all-merchant" onClick="return false;">Receipt</a>
                            </li>
                            <li class="breadcrumb-item active">Print Receipt</li>
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
                            <form type="get" action="{{route ('printpreview')}}">
                                @csrf
                                <div class="body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <select class="list-group row-cols-md-4" name="state" required>
                                                <option value="" disabled selected>Choose state</option>
                                                @foreach($states as $state)
                                                    <option value="{{$state->state_name}}">{{$state->state_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="search" class="form-control" placeholder="Year/Week no" name="year" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 button-demo">
                                            <button type="submit" class="btn btn-outline-info btn-border-radius">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                       data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                       aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

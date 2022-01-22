        @extends('componets.welcome')

        @section('content')


            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-bs-toggle="collapse"
                           data-target="#navbar-collapse" aria-expanded="false"></a>
                        <a href="#" onClick="return false;" class="bars"></a>
                        <a class="navbar-brand" href="/index">
                            <img src="{{asset ('assets/images/logo.png')}}" alt="" />
                            <span class="logo-name">PEGGROV GCC</span>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="pull-left">
                            <li>
                                <a href="#" onClick="return false;" class="sidemenu-collapse">
                                    <i data-feather="menu"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Full Screen Button -->
                            <li class="fullscreen">
                                <a href="javascript:;" class="fullscreen-btn">
                                    <i class="fas fa-expand"></i>
                                </a>
                            </li>
                            <!-- #END# Full Screen Button -->
                            <!-- #START# Notifications-->
                            <!-- #END# Notifications-->
                            <li class="dropdown user_profile">
                                <div class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <img src="{{asset ('assets/images/user.jpg')}}" alt="user">
                                </div>
                                <ul class="dropdown-menu pullDown">
                                    <li class="body">
                                        <ul class="user_dw_menu">
                                            <li>
                                                <a href="#" onClick="return false;">
                                                    <i class="material-icons">person</i>Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('performLogout')}}">
                                                    <i class="material-icons">power_settings_new</i>Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- #END# Tasks -->
                            <li class="pull-right">
                                <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                                    <i class="fas fa-cog"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- #Top Bar -->
            <div>
                <!-- Left Sidebar -->
                <aside id="leftsidebar" class="sidebar">
                    <!-- Menu -->
                    <div class="menu">
                        <ul class="list">
                            <li class="sidebar-user-panel active">
                                <div class="user-panel">
                                    <div class=" image">
                                        <img src="{{asset ('assets/images/usrbig.jpg')}}" class="user-img-style" alt="User Image" />
                                    </div>
                                </div>
                                <div class="profile-usertitle">
                                    <div class="sidebar-userpic-name"> Classic </div>
                                    <div class="profile-usertitle-job ">Manager </div>
                                </div>
                            </li>
                            <li class="header">-- Main</li>
                            <li>
                                <a href="#" onClick="return false;" class="menu-toggle">
                                    <i data-feather="users"></i>
                                    <span>Merchant</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="/all-merchant">All Merchant</a>
                                    </li>
                                    <li>
                                        <a href="/add-merchant">Add Merchant</a>
                                    </li>
                                </ul>

                            </li>
                            <li>
                                <a href="#" onClick="return false;" class="menu-toggle">
                                    <i data-feather="book-open"></i>
                                    <span>Receipt</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="/all-receipt">All Receipt</a>
                                    </li>
                                    <li>
                                        <a href="/add-receipt">New Receipt</a>
                                    </li>
                                    <li>
                                        <a href="/print-receipt"> Print Receipt</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" onClick="return false;" class="menu-toggle">
                                    <i data-feather="book"></i>
                                    <span>Odds</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="/all-odds">All Odds</a>
                                    </li>
                                    <li>
                                        <a href="/add-odds">Add Odds</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- #Menu -->
                </aside>
                <!-- #END# Left Sidebar -->
                <!-- Right Sidebar -->
                <aside id="rightsidebar" class="right-sidebar">
                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                        <li role="presentation">
                            <a href="#skins" data-bs-toggle="tab" class="active">SKINS</a>
                        </li>
                        <li role="presentation">
                            <a href="#settings" data-bs-toggle="tab">SETTINGS</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                            <div class="demo-skin">
                                <div class="rightSetting">
                                    <p>SIDEBAR COLOR</p>
                                    <div class="selectgroup selectgroup-pills sidebar-color mt-3">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="1"
                                                   class="btn-check selectgroup-input select-sidebar" checked>
                                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                                  data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="2"
                                                   class="btn-check selectgroup-input select-sidebar">
                                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                                  data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="rightSetting">
                                    <p>THEME COLORS</p>
                                    <div class="btn-group theme-color mt-3" role="group"
                                         aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio" value="1" id="btnradio1"
                                               autocomplete="off" checked>
                                        <label class="radio-toggle btn btn-outline-primary" for="btnradio1">Light</label>
                                        <input type="radio" class="btn-check" name="btnradio" value="2" id="btnradio2"
                                               autocomplete="off">
                                        <label class="radio-toggle btn btn-outline-primary " for="btnradio2">Dark</label>
                                    </div>
                                </div>
                                <div class="rightSetting">
                                    <p>SKINS</p>
                                    <ul class="demo-choose-skin choose-theme list-unstyled">
                                        <li data-theme="black">
                                            <div class="black-theme"></div>
                                        </li>
                                        <li data-theme="white">
                                            <div class="white-theme white-theme-border"></div>
                                        </li>
                                        <li data-theme="purple">
                                            <div class="purple-theme"></div>
                                        </li>
                                        <li data-theme="blue">
                                            <div class="blue-theme"></div>
                                        </li>
                                        <li data-theme="cyan">
                                            <div class="cyan-theme"></div>
                                        </li>
                                        <li data-theme="green">
                                            <div class="green-theme"></div>
                                        </li>
                                        <li data-theme="orange">
                                            <div class="orange-theme"></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="rightSetting">
                                    <p>RTL Layout</p>
                                    <div class="switch mt-3">
                                        <label>
                                            <input type="checkbox" class="layout-change">
                                            <span class="lever switch-col-red layout-switch"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="rightSetting">
                                    <p>DISK SPACE</p>
                                    <div class="sidebar-progress">
                                        <div class="progress m-t-20">
                                            <div class="progress-bar l-bg-cyan shadow-style width-per-45" role="progressbar"
                                                 aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="progress-description">
                                    <small>26% remaining</small>
                                </span>
                                    </div>
                                </div>
                                <div class="rightSetting">
                                    <p>Server Load</p>
                                    <div class="sidebar-progress">
                                        <div class="progress m-t-20">
                                            <div class="progress-bar l-bg-orange shadow-style width-per-63" role="progressbar"
                                                 aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="progress-description">
                                    <small>Highly Loaded</small>
                                </span>
                                    </div>
                                </div>
                                <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                    <button type="button"
                                            class="btn btn-outline-primary btn-border-radius btn-restore-theme">Restore
                                        Default</button>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                            <div class="demo-settings">
                                <p>GENERAL SETTINGS</p>
                                <ul class="setting-list">
                                    <li>
                                        <span>Report Panel Usage</span>
                                        <div class="switch">
                                            <label>
                                                <input type="checkbox" checked>
                                                <span class="lever switch-col-green"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <span>Email Redirect</span>
                                        <div class="switch">
                                            <label>
                                                <input type="checkbox">
                                                <span class="lever switch-col-blue"></span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                                <p>SYSTEM SETTINGS</p>
                                <ul class="setting-list">
                                    <li>
                                        <span>Notifications</span>
                                        <div class="switch">
                                            <label>
                                                <input type="checkbox" checked>
                                                <span class="lever switch-col-purple"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <span>Auto Updates</span>
                                        <div class="switch">
                                            <label>
                                                <input type="checkbox" checked>
                                                <span class="lever switch-col-cyan"></span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                                <p>ACCOUNT SETTINGS</p>
                                <ul class="setting-list">
                                    <li>
                                        <span>Offline</span>
                                        <div class="switch">
                                            <label>
                                                <input type="checkbox" checked>
                                                <span class="lever switch-col-red"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <span>Location Permission</span>
                                        <div class="switch">
                                            <label>
                                                <input type="checkbox">
                                                <span class="lever switch-col-lime"></span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- #END# Right Sidebar -->
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="block-header">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <ul class="breadcrumb breadcrumb-style ">
                                    <li class="breadcrumb-item">
                                        <h4 class="page-title">Dashboard</h4>
                                    </li>
                                    <li class="breadcrumb-item bcrumb-1">
                                        <a href="/index">
                                            <i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card l-bg-purple">
                                <div class="info-box-5 p-4">
                                    <div class="card-icon card-icon-large"><i class="far fa-window-restore"></i></div>
                                    <div class="mb-4">
                                        <h5 class="font-20 mb-0">Projects</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                125
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="fw-bold">24.7% <i class="fa fa-arrow-up"></i></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card l-bg-blue-dark">
                                <div class="info-box-5 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                    <div class="mb-4">
                                        <h5 class="font-20 mb-0">New Merchant</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                213
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span>5.28% <i class="fa fa-arrow-up"></i></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-bar l-bg-green" role="progressbar" data-width="25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card l-bg-green-dark">
                                <div class="info-box-5 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-tasks"></i></div>
                                    <div class="mb-4">
                                        <h5 class="font-20 mb-0">Running Tasks</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                10,225
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span>16% <i class="fa fa-arrow-up"></i></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card l-bg-orange-dark">
                                <div class="info-box-5 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-money-check-alt"></i></div>
                                    <div class="mb-4">
                                        <h5 class="font-20 mb-0">Earning</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                &#8358; 2,658
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span>5.07% <i class="fa fa-arrow-up"></i></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <!-- Task Info -->
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

                        </div>
                        <!-- #END# Task Info -->
                        <!-- Browser Usage -->
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>TODO </strong>List</h2>
                                </div>
                                <div class="body">
                                    <div class="tdl-content">
                                        <ul class="to-do-list ui-sortable">
                                            <li class="clearfix">
                                                <div class="form-check m-l-10">
                                                    <label class="form-check-label"> <input class="form-check-input"
                                                                                            type="checkbox" value="">
                                                        Add salary details in system <span class="form-check-sign"> <span
                                                                class="check"></span>
                                                </span>
                                                    </label>
                                                </div>
                                                <div class="todo-actionlist pull-right clearfix">
                                                    <a href="#"> <i class="material-icons">clear</i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="form-check m-l-10">
                                                    <label class="form-check-label"> <input class="form-check-input"
                                                                                            type="checkbox" value="">
                                                        Announcement for holiday <span class="form-check-sign"> <span
                                                                class="check"></span>
                                                </span>
                                                    </label>
                                                </div>
                                                <div class="todo-actionlist pull-right clearfix">
                                                    <a href="#"> <i class="material-icons">clear</i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="form-check m-l-10">
                                                    <label class="form-check-label"> <input class="form-check-input"
                                                                                            type="checkbox" value="">
                                                        call bus driver <span class="form-check-sign"> <span
                                                                class="check"></span>
                                                </span>
                                                    </label>
                                                </div>
                                                <div class="todo-actionlist pull-right clearfix">
                                                    <a href="#"> <i class="material-icons">clear</i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="form-check m-l-10">
                                                    <label class="form-check-label"> <input class="form-check-input"
                                                                                            type="checkbox" value="">
                                                        Office Picnic <span class="form-check-sign"> <span class="check"></span>
                                                </span>
                                                    </label>
                                                </div>
                                                <div class="todo-actionlist pull-right clearfix">
                                                    <a href="#"> <i class="material-icons">clear</i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="form-check m-l-10">
                                                    <label class="form-check-label"> <input class="form-check-input"
                                                                                            type="checkbox" value="">
                                                        Website Must Be Finished <span class="form-check-sign"> <span
                                                                class="check"></span>
                                                </span>
                                                    </label>
                                                </div>
                                                <div class="todo-actionlist pull-right clearfix">
                                                    <a href="#"> <i class="material-icons">clear</i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="form-check m-l-10">
                                                    <label class="form-check-label"> <input class="form-check-input"
                                                                                            type="checkbox" value="">
                                                        Recharge My Mobile <span class="form-check-sign"> <span
                                                                class="check"></span>
                                                </span>
                                                    </label>
                                                </div>
                                                <div class="todo-actionlist pull-right clearfix">
                                                    <a href="#"> <i class="material-icons">clear</i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="form-check m-l-10">
                                                    <label class="form-check-label"> <input class="form-check-input"
                                                                                            type="checkbox" value="">
                                                        Add salary details in system <span class="form-check-sign"> <span
                                                                class="check"></span>
                                                </span>
                                                    </label>
                                                </div>
                                                <div class="todo-actionlist pull-right clearfix">
                                                    <a href="#"> <i class="material-icons">clear</i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <input type="text" class="tdl-new form-control-radious" placeholder="Enter Todo...">
                                </div>
                            </div>
                        </div>
                        <!-- #END# Browser Usage -->
                    </div>
                </div>
            </section>
        @endsection


{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}

{{--        @extends('componets.welcome')--}}

{{--        @section('content')--}}
{{--            --}}

{{--        @endsection--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                <x-jet-welcome />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}

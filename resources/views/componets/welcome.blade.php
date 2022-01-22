<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Company Management Admin </title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset ('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset ('assets/css/app.min.css')}}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset ('assets/css/style.css')}}" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{asset ('assets/css/styles/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="light">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30">
            <img class="loading-img-spin" src="{{asset ('assets/images/loading.png')}}" alt="admin">
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->

<div>
    @yield('content')
</div>


<script src="{{asset ('assets/js/app.min.js')}}"></script>
<script src="{{asset ('assets/js/chart.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset ('assets/js/admin.js')}}"></script>
<script src="{{asset ('assets/js/bundles/echart/echarts.js')}}"></script>
<script src="{{asset ('assets/js/bundles/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset ('assets/js/pages/index.js')}}"></script>
<script src="{{asset ('assets/js/pages/todo/todo.js')}}"></script>

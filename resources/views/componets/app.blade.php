<!DOCTYPE html>
<html lang="en">
<link>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Company Management Admin </title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset ('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset ('assets/css/style.css')}}" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{asset ('assets/css/styles/all-themes.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset ('css/toastr.css')}}">

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css">--}}

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"></script>--}}

{{--    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.jqueryui.min.css">--}}

{{--    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.1/css/buttons.dataTables.min.css">--}}

{{--    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>--}}

{{--    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.3.0-beta.1/pdfmake.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.3.0-beta.1/vfs_fonts.min.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>--}}

{{--    <script type="text/javascript">--}}
{{--        $(document).ready(function ()--}}
{{--        {--}}
{{--            $('#example').DataTable(--}}
{{--                {--}}
{{--                    "lengthMenu":[[10,25,50-1],[10,25,50, "All"]],--}}
{{--                dom: 'Blfrtip',--}}
{{--                    buttons:[--}}
{{--                        {--}}
{{--                            extend:'excelHtml5',--}}
{{--                            title:'Excel MK',--}}
{{--                            text: 'Export to Excel'--}}
{{--                        },--}}
{{--                        {--}}
{{--                            extend:'csvHtml5',--}}
{{--                            title:'CSV MK',--}}
{{--                            text: 'Export to CSV'--}}
{{--                        },--}}
{{--                        {--}}
{{--                            extend:'pdfHtml5',--}}
{{--                            title:'PDF MK',--}}
{{--                            text: 'Export to PDF'--}}
{{--                        },--}}
{{--                    ]--}}
{{--        } );--}}
{{--            $('.btn_pdf').attr("class","btn btn-success");--}}
{{--        });--}}
{{--    </script>--}}


    <!-- livewire styles -->
    <livewire:styles />
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
                        <img src="{{asset('assets/images/user.jpg')}}" alt="user">
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
                            <img src="{{asset ('../../assets/images/usrbig.jpg')}}" class="user-img-style" alt="User Image" />
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

<div>
    @yield('content')
</div>

<script data-cfasync="false" src="{{asset ('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="../../assets/js/app.min.js"></script>
<script src="{{asset ('assets/js/table.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset ('assets/js/admin.js')}}"></script>
<script src="{{asset ('assets/js/pages/tables/jquery-datatable.js')}}"></script>
<script src="{{asset ('js/toastr.js')}}"></script>
<script src="{{asset ('assets/js/pages/ui/dialogs.js')}}"></script>

<!-- // effect js-->
<script>
    window.livewire.on('alert', param => {
        toastr[param['type']](param['message'], param['type']);
    });
</script>
<script src="{{asset('assets/jquery.js')}}"></script>
<script>
    $(document).ready(function(){
        $("name").on('select',function (){
            $("#" + $(this).val()).fadeIn(700);
        });
    });
</script>
<script type="text/javascript">
    function getSelectedValue(select1)
    {
        if(select1 != '')
        {
            $("#select2 option[value='"+select1+"']").hide();
            $("#select3 option[value='"+select1+"']").hide();
            $("#select4 option[value='"+select1+"']").hide();
            $("#select5 option[value='"+select1+"']").hide();
            $("#select6 option[value='"+select1+"']").hide();

            $("#select2 option[value!='"+select1+"']").show();
            $("#select3 option[value!='"+select1+"']").show();
            $("#select4 option[value!='"+select1+"']").show();
            $("#select5 option[value!='"+select1+"']").show();
            $("#select6 option[value!='"+select1+"']").show();
            $("#select7 option[value!='"+select1+"']").show();
        }
    }
    function getSelectedValueMe(select1,select2)
    {
        if(select2 != '')
        {
            $("#select3 option[value='"+select1+""+select2+"']").hide();

        }
    }
</script>
<script type="text/javascript">
    function findTotalDeposit() {
      let num1 = document.getElementsByName("cash")[0].value;
      let num2 = document.getElementsByName("teller")[0].value;
      let sum = Number(num1) + Number(num2);
        document.getElementsByName('total_deposit')[0].value = sum;
    }
    function findGross() {
        let num1 = document.getElementsByName("g_odd1")[0].value;
        let num2 = document.getElementsByName("g_odd2")[0].value;
        let num3 = document.getElementsByName("g_odd3")[0].value;
        let num4 = document.getElementsByName("g_odd4")[0].value;
        let num5 = document.getElementsByName("g_odd5")[0].value;
        let num6 = document.getElementsByName("g_odd6")[0].value;
        let sum = Number(num1) + Number(num2) + Number(num3) + Number(num4) + Number(num5) + Number(num6);
        document.getElementsByName('total')[0].value = sum;
    }
    function findCommission() {
        let num1 = document.getElementsByName("g_odd1_1")[0].value;
        let num2 = document.getElementsByName("g_odd2_1")[0].value;
        let num3 = document.getElementsByName("g_odd3_1")[0].value;
        let num4 = document.getElementsByName("g_odd4_1")[0].value;
        let num5 = document.getElementsByName("g_odd5_1")[0].value;
        let num6 = document.getElementsByName("g_odd6_1")[0].value;
        let sum = Number(num1) + Number(num2) + Number(num3) + Number(num4) + Number(num5) + Number(num6);
        document.getElementsByName('total_1')[0].value = sum;
    }
    function findNet() {
        let num1 = document.getElementsByName("g_odd1_2")[0].value;
        let num2 = document.getElementsByName("g_odd2_2")[0].value;
        let num3 = document.getElementsByName("g_odd3_2")[0].value;
        let num4 = document.getElementsByName("g_odd4_2")[0].value;
        let num5 = document.getElementsByName("g_odd5_2")[0].value;
        let num6 = document.getElementsByName("g_odd6_2")[0].value;
        let sum = Number(num1) + Number(num2) + Number(num3) + Number(num4) + Number(num5) + Number(num6);
        document.getElementsByName('total_2')[0].value = sum;
    }
    function findWinning() {
        let num1 = document.getElementsByName("g_odd1_3")[0].value;
        let num2 = document.getElementsByName("g_odd2_3")[0].value;
        let num3 = document.getElementsByName("g_odd3_3")[0].value;
        let num4 = document.getElementsByName("g_odd4_3")[0].value;
        let num5 = document.getElementsByName("g_odd5_3")[0].value;
        let num6 = document.getElementsByName("g_odd6_3")[0].value;
        let sum = Number(num1) + Number(num2) + Number(num3) + Number(num4) + Number(num5) + Number(num6);
        document.getElementsByName('total_3')[0].value = sum;
    }

    function balanceAgent() {
        let num1 = document.getElementsByName("total_3")[0].value;
        let num2 = document.getElementsByName("total_deposit")[0].value;
        let num3 = document.getElementsByName("total_2")[0].value;
        let sum = Number(num3) - Number(num2);
        let sum1 = Number(num1) - Number(sum);
        if (sum1 < 0){
            document.getElementsByName("balance_merchant")[0].value = 0;
        }else{
            document.getElementsByName("balance_merchant")[0].value = sum1.toLocaleString("en-US");
            document.getElementsByName("total_deposit")[0].value = num2.toLocaleString("en-US")

        }
    }
    function balanceCompany() {
        let num1 = document.getElementsByName("total_3")[0].value;
        let num2 = document.getElementsByName("total_deposit")[0].value;
        let num3 = document.getElementsByName("total_2")[0].value;
        let sum = Number(num3) - Number(num2);
        let sum1 = Number(num1) - Number(sum);
        if (sum1 > 0){
            document.getElementsByName("balance_company")[0].value = 0;
        }else{
            document.getElementsByName("balance_company")[0].value = sum1.toLocaleString("en-US");
            document.getElementsByName("total_deposit")[0].value = num2.toLocaleString("en-US")
        }

        // $.fn.digits = function(){
        //     return this.each(function(){
        //         $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );
        //     })
        // }
    }
</script>
<script>
    // $.fn.digits = function(){
    //     return this.each(function(){
    //         $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );
    //     })
    // }
    var ope = 123456789;
    ope = ope.toLocaleString("en-US");
    console.log(ope);
</script>
<script >
    function meeh()
    {
        // alert("Not Blocked by Classic");
        // return false;
         if (document.getElementsByName("total_deposit")[0].value == ""){
             alert("Blocked by Classic");
             return false;
         }else{
             findGross();
         }
    }

</script>
</body>
</html>

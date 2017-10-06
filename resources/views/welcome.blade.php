<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"> 
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Company</title>
    <!-- Favicon-->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="/css/material-fonts.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>Company</b>Panel</a>            
        </div>
        <div class="card">
            <div class="body">
                                
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))                    
                    <div class="alert alert-{{$msg}} alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        {{ Session::get('alert-' . $msg) }}
                    </div>                    
                    @endif
                @endforeach                    
               <!--  <button type="button" class="btn btn-block btn-lg btn-success waves-effect">Check In</button>
                <button type="button" class="btn btn-block btn-lg btn-danger waves-effect">Check Out</button> -->
                <div class="panel-group" id="accordion_17" role="tablist" aria-multiselectable="true">                    
                    <div class="panel panel-col-teal">
                        <div class="panel-heading" role="tab" id="headingThree_17">
                            <h4 class="panel-title">
                                <a class="collapsed col-white" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseThree_17" aria-expanded="false" aria-controls="collapseThree_17">
                                    <i class="material-icons">trending_up</i> Check In
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_17" aria-expanded="false">
                            <div class="panel-body">
                                <form method="POST" action="{{ route('user.checkin') }}">
                                    {{ csrf_field() }}
                                    <label for="employee_number">Employee Number</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="employee_number" name="employee_number" class="form-control" placeholder="Enter your Employee Number" />
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Process</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-col-orange">
                        <div class="panel-heading" role="tab" id="headingFour_17">
                            <h4 class="panel-title">
                                <a class="collapsed col-white" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseFour_17" aria-expanded="false" aria-controls="collapseFour_17">
                                    <i class="material-icons">trending_down</i> Check Out
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_17" aria-expanded="false">
                            <div class="panel-body">
                                <form method="POST" action="{{ route('user.checkout') }}">
                                    {{ csrf_field() }}
                                    <label for="employee_number">Employee Number</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="employee_number" name="employee_number" class="form-control" placeholder="Enter your Employee Number" />
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Process</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="/js/admin.js"></script>
    <script src="/js/sign-in.js"></script>
</body>

</html>
@extends('layouts.layout')

@section('content')

<head>
  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/nouislider.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/select2.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/bootstrap-material-datetimepicker.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.knob.js"></script>
<script src="asset/js/plugins/ion.rangeSlider.min.js"></script>
<script src="asset/js/plugins/bootstrap-material-datetimepicker.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>
<script src="asset/js/plugins/jquery.mask.min.js"></script>
<script src="asset/js/plugins/select2.full.min.js"></script>
<script src="asset/js/plugins/nouislider.min.js"></script>
<script src="asset/js/plugins/jquery.validate.min.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.dateAnimate').bootstrapMaterialDatePicker({ weekStart : 0, time: false,animation:true});
    $('.date').bootstrapMaterialDatePicker({ weekStart : 0, time: false});
    $('.time').bootstrapMaterialDatePicker({ date: false,format:'HH:mm',animation:true});
    $('.datetime').bootstrapMaterialDatePicker({ format : 'YYYY-MM-DD hh:mm:ss',animation:true});
    $('.date-fr').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', lang : 'fr', weekStart : 1, cancelText : 'ANNULER'});
    $('.min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });


    $('#myonoffswitch').change(function() {
        if(this.checked) {
            document.getElementById('desti').style.display = "block";
        }else{
            document.getElementById('desti').style.display = "none";
        }
    });
  });
</script>

<div class="container">
    <div class="row">
        <div class="col-md-12 style="padding:20px;>
            <div class="col-md-12 padding-0">
                                <div class="col-md-6">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Add your Schedule here</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-user icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/create') }}">
                        {{ csrf_field() }}

<div class="col-md-12 panel" style="padding:50px;padding-bottom:70px;">
                        <div class="form-group form-animate-text">
                          <input type="text" name="subject" class="form-text" required>
                          <span class="bar"></span>
                          <label>Subject</label>
                        </div>
                        <div class="form-group form-animate-text">
                          <input type="text" name="scheduleDate" class="form-text datetime" required>
                          <span class="bar"></span>
                          <label><span class="fa fa-calendar"></span>Select Date Time</label>
                        </div>
                        <div class="form-group form-animate-text">
                          <input type="text" name="desc" class="form-text" required>
                          <span class="bar"></span>
                          <label>Your Schedule Desription</label>
                        </div>
                        <div class="form-group">
                          <center>
                            <div class="col-md-12 padding-0">
                              <div class="col-md-6">
                                <h5>Any Destination?</h5>
                                <div class="mini-onoffswitch onoffswitch-success">
                                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
                                  <label class="onoffswitch-label" for="myonoffswitch"></label>
                                </div>
                              </div>
                            </div>
                          </center>
                        </div>
                        <div class="form-group form-animate-text" id="desti" style="display:none; ">
                            <center>
                            <div class="col-md-12 padding-0">
                              <div class="col-md-6">
                                <input type="text" name="from" class="form-text" required>
                                <span class="bar"></span>
                                <label>From</label>  
                              </div>
                              <div class="col-md-6">
                                <input type="text" name="to" class="form-text" required>
                                <span class="bar"></span>
                                <label>To</label>  
                              </div>
                            </div>
                          </center>
                      </div>
                </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                          <h4 class="text-left" ;">On Going Schedule</h4>
                                          <hr/>
                                      </div>
                                      <div class="panel-body text-center">
                                      </div>
                                    </div>
                                </div>  
                                <div class="col-md-4">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                          <h4 class="text-left" ;">On Going Schedule</h4>
                                          <hr/>
                                      </div>
                                      <div class="panel-body text-center">
                                      </div>
                                    </div>
                                </div>  
        </div>
    </div>
</div>


@endsection


@extends('layouts.layout')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miminium</title>

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

<!-- start: Content -->
            <div id="content">
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 padding-0">
                    <div class="col-md-5">
                    <div class="col-md-12 panel" style="padding:50px;padding-bottom:70px;">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required>
                          <span class="bar"></span>
                          <label>TextBox</label>
                        </div>
                        <div class="form-group form-animate-text">
                          <input type="text" class="form-text datetime" required>
                          <span class="bar"></span>
                          <label><span class="fa fa-calendar"></span> Date Time Picker</label>
                        </div>
                        <div class="form-group form-animate-text">
                          <input type="text" class="form-text date-fr" required>
                          <span class="bar"></span>
                          <label><span class="fa fa-calendar"></span> Week starts at Monday</label>
                        </div>
                        <div class="form-group form-animate-text">
                          <input type="text" class="form-text min-date" required>
                          <span class="bar"></span>
                          <label><span class="fa fa-calendar"></span> Min Date Set</label>
                        </div>
                        <div class="form-group">
                          <center>
                            <div class="col-md-12 padding-0">
                              <div class="col-md-6">
                                <h5>Switch</h5>
                                <div class="mini-onoffswitch onoffswitch-danger">
                                  <input type="checkbox" name="onoffswitch1A" class="onoffswitch-checkbox" id="myonoffswitch1A" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch1A"></label>
                                </div>
                                <div class="mini-onoffswitch onoffswitch-warning">
                                  <input type="checkbox" name="onoffswitch1B" class="onoffswitch-checkbox" id="myonoffswitch1B" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch1B"></label>
                                </div>
                                <div class="mini-onoffswitch onoffswitch-success">
                                  <input type="checkbox" name="onoffswitch1C" class="onoffswitch-checkbox" id="myonoffswitch1C" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch1C"></label>
                                </div>
                                <div class="mini-onoffswitch onoffswitch-info">
                                  <input type="checkbox" name="onoffswitch1D" class="onoffswitch-checkbox" id="myonoffswitch1D" checked>
                                  <label class="onoffswitch-label" for="myonoffswitch1D"></label>
                                </div>
                              </div>
                            </div>
                          </center>
                        </div>
                        
                    </div>
                  </div>
                <div class="col-md-7 padding-0">
                  <div class="col-md-12 panel form-element-padding" style="padding-bottom:80px;">
                    
                  </div>
                </div>
                  </div>
                <div class="col-md-12 padding-0">
                  <div class="col-md-2">
                    <div class="col-md-12 panel" style="padding-top:30px;padding-bottom:30px;">
                      <div class="col-md-12 panel-body">
                       <div class="col-md-8 padding-0">
                        <center><div type="text" id="noui-range" style="height:400px;"></div>
                        </center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
              </div>
              </div>
              </div>
              </div>
            </div>
          <!-- end: content -->

      

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
    $('.datetime').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm',animation:true});
    $('.date-fr').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', lang : 'fr', weekStart : 1, cancelText : 'ANNULER'});
    $('.min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });
  });
</script>
<!-- end: Javascript -->
</body>
</html>
@endsection

@extends('layouts.app')


@push('styles') 

    <!-- Bootstrap -->
    {{Html::style('vendors/bootstrap/dist/css/bootstrap.min.css')}}
    <!-- Font Awesome -->
    {{Html::style('vendors/font-awesome/css/font-awesome.min.css')}}
    <!-- NProgress -->
    {{Html::style('vendors/nprogress/nprogress.css')}}
    <!-- iCheck -->
    {{Html::style('vendors/iCheck/skins/flat/green.css')}}
    <!-- bootstrap-progressbar -->
    {{Html::style('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}
    <!-- JQVMap -->
    {{Html::style('vendors/jqvmap/dist/jqvmap.min.css')}}
    <!-- bootstrap-daterangepicker -->
    {{Html::style('vendors/bootstrap-daterangepicker/daterangepicker.css')}}

    <!-- Datatables -->
    {{Html::style('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}
    {{Html::style('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}

    <!-- Custom Theme Style -->
    {{Html::style('build/css/custom.min.css')}}
    {{Html::style('css/custom.css')}}

@endpush


@section('content')
 <body class="nav-md">
  <div class="container body">
    <div class="main_container">
      
      @include('layouts.sidebar')


            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                        </div>

                        <div class="title_right">
                            <!--<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                                </div>
                            </div>-->
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>ข้อมูลผู้ใช้บริการหมายเลข : {{$patient->cn}}</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content">
                                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                        
                                        <h3>{{$patient->name}}</h3>

                                        <ul class="list-unstyled user_data">
                                            <li>
                                                <h4>{{$patient->faculty()}}</h4>
                                            </li>
                                            <li>
                                                <h4>ชั้นปีที่ {{$patient->studied_year}}</h4>
                                            </li>
                                        </ul>

                                        <div class="ln_solid"></div>

                                        <h4><strong>หมายเลขติดต่อฉุกเฉิน</strong></h4>
                                        <ul class="list-unstyled user_data">

                                        @if($patient->emergency_1_name)
                                            <li>
                                                <p>{{$patient->emergency_1_name}} ({{$patient->emergency_1_raletionship}}) </p>
                                            </li>
                                            <li>
                                                <p>โทร. {{$patient->emergency_1_phone}}</p>
                                            </li>
                                        @endif

                                        @if($patient->emergency_2_name)
                                            <li>
                                                <p>{{$patient->emergency_2_name}} ({{$patient->emergency_2_raletionship}})</p>
                                            </li>
                                            <li>
                                                <p>โทร. {{$patient->emergency_2_phone}}</p>
                                            </li>
                                        @endif

                                        </ul>

                                        <div class="ln_solid"></div>

                                         <h4><strong>หมายเลขติดต่อ Advisor</strong></h4>
                                        <ul class="list-unstyled user_data">
                                            <li>
                                                <p>{{$patient->doctor_name}}</p>
                                            </li>
                                            <li>
                                                <p>โทร. {{$patient->doctor_phone}}</p>
                                            </li>
                                        </ul>

                                        <div class="ln_solid"></div>


                                        <h4>สาเหตุที่เข้าใช้บริการ</h4>
                                        <!-- start of user-activity-graph -->
                                        <div class="col-xs-12">
                                            <canvas id="reason_bar" height="250px"></canvas>
                                        </div>
                                        <!-- end of user-activity-graph -->

                                        <!--<a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>-->
                                        <br />

                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-12">

                                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">บันทึกการเข้าใช้บริการ</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">เพิ่มบันทึกใหม่</a>
                                                </li>
                                                <!--<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                                                </li>-->
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                                    <!-- start recent activity -->
                                                    <ul class="messages">
                                                        <?php 

                                                        $thai_month_arr=array(
                                                            "0"=>"",
                                                            "1"=>"ม.ค.",
                                                            "2"=>"ก.พ.",
                                                            "3"=>"มี.ค.",
                                                            "4"=>"เม.ย.",
                                                            "5"=>"พ.ค.",
                                                            "6"=>"มิ.ย.", 
                                                            "7"=>"ก.ค.",
                                                            "8"=>"ส.ค.",
                                                            "9"=>"ก.ย.",
                                                            "10"=>"ต.ค.",
                                                            "11"=>"พ.ย.",
                                                            "12"=>"ธ.ค."                 
                                                        );
                                                        ?>

                                                        @foreach($histories as $key=>$history)
                                                        <li>
                                                            <div class="message_date">
                                                                <h3 class="date text-info">{{thaidate( 'j', strtotime($history->created_at), true)}}</h3>
                                                                <p class="month">{{$thai_month_arr[date("n",strtotime($history->created_at))]}}</p>
                                                                <p class="year">{{thaidate( 'Y', strtotime($history->created_at), true)}}</p>
                                                            </div>
                                                            <div class="message_wrapper">
                                                                <h4 class="heading"><span>เข้าพบ: {{$history->advisor->name}} ด้วยปัญหา {{$history->symptom->name}}</span></h4>
                                                                <blockquote class="message">{{$history->note}}</blockquote>
                                                                 <h5>
                                                                    <span><strong>ลักษณะที่อยู่:</strong> {{$history->living_place}}</span> 
                                                                    <span><strong>อาศัยอยู่กับ:</strong> {{$history->living_with}}</span>
                                                                </h5>
                                                                <br />
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                    <!-- end recent activity -->

                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                                                        <div class="form-group">
                                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">ปัญหานำ</label>
                                                            <div class="col-md-6 col-sm-9 col-xs-12">
                                                                <select class="form-control">
                                                                    <option>ความรักและความสัมพันธ์</option>
                                                                    <option>สัมพันธภาพกับอาจารย์</option>
                                                                    <option>เศรษฐสภานะ</option>
                                                                    <option>สุขภาพ</option>
                                                                    <option>เป้าหมายในชีวิต</option>
                                                                    <option>การปรับตัว</option>
                                                                    <option>การงานอาชีพ</option>
                                                                    <option>การเห็นคุณค่าในตนเองต่ำ</option>
                                                                    <option>ไม่ยืดหยุ่นทางความคิดและจิตใจ</option>
                                                                    <option>ติดเกม</option>
                                                                    <option>ถูกลงโทษทางวินัย</option>
                                                                    <option>การใช้สารเสพติด</option>
                                                                    <option>ถูกทำร้ายทางร่างกาย / อารมณ์</option>
                                                                    <option>ถูกล่วงละเมิดทางเพศ</option>
                                                                    <option>การล่วงละเมิดทางเพศ</option>
                                                                    <option>สับสนในอัตลักษณ์ทางเพศ</option>
                                                                    <option>พฤติกรรมเสี่ยงทางเพศ</option>
                                                                    <option>การตั้งครรภ์ไม่พึงประสงค์</option>
                                                                    <option>มีปัญหาในการนอน</option>
                                                                    <option>ความคิดและพฤติกรรมฆ่าตัวตาย</option>
                                                                    <option>การควบคุมอารมณ์โกรธ</option>
                                                                    <option>ซึมเศร้า</option>
                                                                    <option>โรคอารมณ์สองขั้ว</option>
                                                                    <option>ความผิดปกติในการรับประทาน</option>
                                                                    <option>ความเครียดหลังประสบเหตุการณ์ร้ายแรง</option>
                                                                    <option>โรคย้ำคิดย้ำทำ</option>
                                                                    <option>วิตกกังวล</option>
                                                                    <option>ตื่นตระหนก</option>
                                                                    <option>ความกลัวแบบเฉพาะเจาะจง</option>
                                                                    <option>อาการทางกายที่มาจากสาเหตุทางจิตใจ</option>
                                                                    <option>โรคจิต</option>
                                                                    <option>หวาดระแวง</option>
                                                                    <option>โรคสมาธิสั้น</option>
                                                                    <option>ออทิซึม</option>
                                                                    <option>การดูแลบุคคลที่มีปัญหาสุขภาพจิต</option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="form-group">

                                                            <div class="col-md-10 col-md-offset-1 col-sm-6 col-xs-12">
                                                                <h3>บันทึกการเข้าพบ </h3>
                                                                <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                                                                    <div class="btn-group">
                                                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                                                        <ul class="dropdown-menu">
                                                                        </ul>
                                                                    </div>

                                                                    <div class="btn-group">
                                                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                                                        <ul class="dropdown-menu">
                                                                            <li>
                                                                                <a data-edit="fontSize 5">
                                                                                    <p style="font-size:17px">Huge</p>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a data-edit="fontSize 3">
                                                                                    <p style="font-size:14px">Normal</p>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a data-edit="fontSize 1">
                                                                                    <p style="font-size:11px">Small</p>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="btn-group">
                                                                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                                                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                                                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                                                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                                                    </div>

                                                                    <div class="btn-group">
                                                                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                                                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                                                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                                                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                                                    </div>

                                                                    <div class="btn-group">
                                                                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                                                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                                                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                                                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                                                    </div>

                                                                    <div class="btn-group">
                                                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                                                        <div class="dropdown-menu input-append">
                                                                            <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                                                            <button class="btn" type="button">Add</button>
                                                                        </div>
                                                                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                                                    </div>

                                                                    <div class="btn-group">
                                                                        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                                                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                                                    </div>

                                                                    <div class="btn-group">
                                                                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                                                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                                                    </div>
                                                                </div>

                                                                <div id="editor" class="editor-wrapper"></div>

                                                                <textarea name="descr" id="descr" style="display:none;"></textarea>

                                                            </div>

                                                        </div>

                                                        <div class="ln_solid"></div>
                                                        <div class="form-group">
                                                            <div class="col-xs-12 text-center">
                                                                <button type="submit" class="btn btn-primary">ยกเลิก</button>
                                                                <button type="submit" class="btn btn-success">บันทึก</button>
                                                            </div>
                                                        </div>

                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
@endsection



@push('scripts') 
    <!-- jQuery -->
    {{Html::script('vendors/jquery/dist/jquery.min.js')}}
    <!-- Bootstrap -->
    {{Html::script('vendors/bootstrap/dist/js/bootstrap.min.js')}}
    <!-- FastClick -->
    {{Html::script('vendors/fastclick/lib/fastclick.js')}}
    <!-- NProgress -->
    {{Html::script('vendors/nprogress/nprogress.js')}}
    <!-- iCheck -->
    {{Html::script('vendors/iCheck/icheck.min.js')}}
    <!-- Chart.js -->
    {{Html::script('vendors/Chart.js/dist/Chart.min.js')}}

    <!-- bootstrap-progressbar -->
    {{Html::script('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}
    <!-- bootstrap-daterangepicker -->
    {{Html::script('vendors/moment/min/moment.min.js')}}
    {{Html::script('vendors/bootstrap-daterangepicker/daterangepicker.js')}}

    <!-- bootstrap-wysiwyg -->
    {{Html::script('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}
    {{Html::script('vendors/jquery.hotkeys/jquery.hotkeys.js')}}
    {{Html::script('vendors/google-code-prettify/src/prettify.js')}}

    <!-- Custom Theme Scripts -->
    {{Html::script('build/js/custom.min.js')}}

    <script>


        $(function () {
            $.getJSON("/wellness/patient/{{$patient->id}}/chart", function (result) {

                var labels = [],data=[];

                for (var i = 0; i < result.length; i++) {
                    labels.push(result[i].name);
                    data.push(result[i].total);
                }

                console.log(labels);
                console.log(data);

                var horizon_opt = {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: false,
                    scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },
                };


                var bar_data = {
                    labels: labels,
                    datasets: [{
                        backgroundColor: "#88C100",
                        data: data
                    }]
                };

                // Bar chart
                var ctx = document.getElementById("reason_bar");
                var mybarChart = new Chart(ctx, {
                    type: 'horizontalBar',
                    data: bar_data,
                    options: horizon_opt,
                });

            });
        });
    </script>

    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>
    <!-- /datepicker -->

    <!-- bootstrap-wysiwyg -->
    <script>
        $(document).ready(function () {
            function initToolbarBootstrapBindings() {
                var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                    'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                    'Times New Roman', 'Verdana'
                ],
                    fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                $.each(fonts, function (idx, fontName) {
                    fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                });
                $('a[title]').tooltip({
                    container: 'body'
                });
                $('.dropdown-menu input').click(function () {
                    return false;
                })
                    .change(function () {
                        $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                    })
                    .keydown('esc', function () {
                        this.value = '';
                        $(this).change();
                    });

                $('[data-role=magic-overlay]').each(function () {
                    var overlay = $(this),
                        target = $(overlay.data('target'));
                    overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                });

                if ("onwebkitspeechchange" in document.createElement("input")) {
                    var editorOffset = $('#editor').offset();

                    $('.voiceBtn').css('position', 'absolute').offset({
                        top: editorOffset.top,
                        left: editorOffset.left + $('#editor').innerWidth() - 35
                    });
                } else {
                    $('.voiceBtn').hide();
                }
            }

            function showErrorAlert(reason, detail) {
                var msg = '';
                if (reason === 'unsupported-file-type') {
                    msg = "Unsupported format " + detail;
                } else {
                    console.log("error uploading file", reason, detail);
                }
                $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
            }

            initToolbarBootstrapBindings();

            $('#editor').wysiwyg({
                fileUploadError: showErrorAlert
            });

            window.prettyPrint;
            prettyPrint();
        });
    </script>
@endpush
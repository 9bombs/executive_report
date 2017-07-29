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

                <div class="page-title">
                    <div class="title_left">
                        <h3>เพิ่มกิจกรรมใหม่</h3>
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
                                <h2>รายชื่อผู้ใช้บริการ</h2>
                                <!--<ul class="nav navbar-right panel_toolbox">
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
                                </ul>-->
                                <div class="clearfix"></div>
                            </div>
                            
                            <div class="x_content">
                                <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>CN</th>
                                            <th>รหัสนิสิต</th>
                                            <th>ชื่อ - นามสกุล</th>
                                            <th>คณะ</th>
                                            <th>ชั้นปี</th>
                                            <th>ระดับ</th>
                                            <th>อาชีพ</th>
                                            <th>เพศ</th>
                                            <th>รับบริการครั้งล่าสุด</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($patients as $key=>$patient) 

                                        
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$patient->cn}}</td>
                                            <td>{{$patient->personal_id}}</td>
                                            <td><a href="/wellness/patient/{{$patient->id}}">{{$patient->name}}</a></td>
                                            <td>
                                                @if($patient->type=="บุคลากร"||$patient->type=="อาจารย์")
                                                    {{$patient->workplace}}
                                                @else
                                                    {{$patient->faculty()}}
                                                @endif
                                            </td>
                                            <td>
                                                @if($patient->type=="บุคลากร"||$patient->type=="อาจารย์")
                                                    {{$patient->position}}
                                                @else
                                                    {{$patient->studied_year}}
                                                @endif
                                            </td>
                                            <td>
                                                @if($patient->type=="บุคลากร"||$patient->type=="อาจารย์")
                                                    -
                                                @else
                                                    {{$patient->student_level}}
                                                @endif
                                            
                                            </td>
                                            <td>{{$patient->type}}</td>
                                            <td>{{$patient->gender}}</td>
                                            <td>{{thaidate( 'j F พ.ศ.Y', strtotime($patient->histories()->latest()->first()->created_at), true)}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
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

    <!-- Datatables -->
    {{Html::script('vendors/datatables.net/js/jquery.dataTables.min.js')}}
    {{Html::script('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}
    {{Html::script('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}
    {{Html::script('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}
    {{Html::script('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}
    {{Html::script('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}
    {{Html::script('vendors/datatables.net-buttons/js/buttons.print.min.js')}}
    {{Html::script('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}
    {{Html::script('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}
    {{Html::script('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}
    {{Html::script('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}
    {{Html::script('vendors/datatables.net-scroller/js/datatables.scroller.min.js')}}
    {{Html::script('vendors/jszip/dist/jszip.min.js')}}
    {{Html::script('vendors/pdfmake/build/pdfmake.min.js')}}
    {{Html::script('vendors/pdfmake/build/vfs_fonts.js')}}

    <!-- Custom Theme Scripts -->
    {{Html::script('build/js/custom.min.js')}}

    <!-- Datatables -->
    <script>
        $(document).ready(function () {
            var handleDataTableButtons = function () {
                if ($("#datatable-buttons").length) {
                    $("#datatable-buttons").DataTable({
                        dom: "Bfrtip",
                        buttons: [
                            {
                                extend: "copy",
                                className: "btn-sm"
                            },
                            {
                                extend: "csv",
                                className: "btn-sm"
                            },
                            {
                                extend: "excel",
                                className: "btn-sm"
                            },
                            {
                                extend: "pdfHtml5",
                                className: "btn-sm"
                            },
                            {
                                extend: "print",
                                className: "btn-sm"
                            },
                        ],
                        responsive: true
                    });
                }
            };

            TableManageButtons = function () {
                "use strict";
                return {
                    init: function () {
                        handleDataTableButtons();
                    }
                };
            }();

            $('#datatable').dataTable({
                "lengthMenu": [20, 50, 75, 100],
                "pageLength": 20
            });


        });
    </script>
    <!-- /Datatables -->

@endpush
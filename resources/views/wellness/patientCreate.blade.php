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
                <h3>เพิ่มผู้ใช้บริการใหม่</h3>
              </div>

            </div>
            <div class="clearfix"></div>


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ข้อมูลผู้ใช้บริการใหม่</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    {{Form::open(array('route' => array('wellnessPatientStore'),'class' => 'form-horizontal form-label-left'))}}
                        {{ Form::hidden('cn', $cn, array('id' => 'invisible_id')) }}
                    
                      <h3>ข้อมูลส่วนตัว</h3>

                     <div class="form-group">
                        {{Form::label('', 'ประเภทผู้ใช้บริการ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::radio('type', 'นิสิตภาคปกติ') }} นิสิตภาคปกติ {{ Form::radio('type', 'นิสิตอินเตอร์') }} นิสิตอินเตอร์ {{ Form::radio('type', 'อาจารย์') }} อาจารย์ {{ Form::radio('type', 'บุคลากร') }} บุคลากร
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('name', 'ชื่อ-นามสกุล', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'name', null, ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('personal_id', 'รหัสนิสิต/เลขบัตรประชาชน', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'personal_id', null, ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('', 'เพศ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::radio('gender', 'ชาย') }} ชาย {{ Form::radio('gender', 'หญิง') }} หญิง {{ Form::radio('gender', 'ไม่ระบุ') }} ไม่ระบุ 
                        </div>
                      </div>
                      
                      <div class="form-group">
                        {{Form::label('email', 'Email', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'email', null, ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>
                      
                      <div class="form-group">
                        {{Form::label('birthdate', 'วัน/เดือน/ปี เกิด', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" name="birthdate" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('address', 'ที่อยู่', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::textarea('address','', ['class' => 'form-control col-md-7 col-xs-12','size' => '30x3']) }} 
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('mobile', 'เบอร์มือถือ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'mobile', null, ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('telephone', 'เบอร์บ้าน', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'telephone', null, ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                    <div class="student-info">

                      <div class="form-group">
                        {{Form::label('nickname', 'ชื่อเล่น', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'nickname', null, ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('', 'นิสิตระดับ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::radio('student_level', 'ปริญญาตรี') }} ปริญญาตรี {{ Form::radio('student_level', 'ปริญญาโท') }} ปริญญาโท {{ Form::radio('student_level', 'ปริญญาเอก') }} ปริญญาเอก 
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('studied_year', 'ชั้นปีที่', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::selectRange('studied_year', 1, 10, null, ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('faculty_id', 'คณะ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <?php $faculties = DB::table('faculties')->select('id','name')->get(); ?>
                          <select name="faculty_id" class="form-control col-md-7 col-xs-12" >
                            @foreach($faculties as $faculty) 
                              <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('field', 'สาขาวิชา', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'field', null, ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                      </div>

                      <div class="employee-info">

                      <div class="form-group">
                        {{Form::label('workplace', 'หน่วยงานสังกัด', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'workplace', null, ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('position', 'ตำแหน่ง', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'position', null, ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                    </div>

                      <div class="ln_solid"></div>
                      <h3>ข้อมูลติดต่อกรณีฉุกเฉิน</h3>
                      
                      <h4>ผู้ติดต่อที่ 1</h4>

                      <div class="form-group">
                        {{Form::label('emergency_1_name', 'ชื่อผู้ติดต่อ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'emergency_1_name', '', ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('emergency_1_raletionship', 'ความสัมพันธ์', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'emergency_1_raletionship', '', ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('emergency_1_phone', 'หมายเลขติดต่อ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'emergency_1_phone', '', ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                       <h4>ผู้ติดต่อที่ 2</h4>

                      <div class="form-group">
                        {{Form::label('emergency_2_name', 'ชื่อผู้ติดต่อ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'emergency_2_name', '', ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('emergency_2_raletionship', 'ความสัมพันธ์', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'emergency_2_raletionship', '', ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('emergency_2_phone', 'หมายเลขติดต่อ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'emergency_2_phone', '', ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <h3>ประวัติการรักษา</h3>

                      <div class="form-group">
                        {{Form::label('doctor_hospital', 'โรงพยาบาล', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'doctor_hospital', '', ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('doctor_name', 'แพทย์ผู้รักษา', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'doctor_name', '', ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('doctor_phone', 'เบอร์ติดต่อ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::input('text', 'doctor_phone', '', ['class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        {{Form::label('allergic', 'ยาที่แพ้', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {{ Form::textarea('allergic','', ['class' => 'form-control col-md-7 col-xs-12','size' => '30x3']) }} 
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <h3>ผู้ให้คำปรึกษาประจำตัว</h3>

                      <div class="form-group">
                        {{Form::label('advisor_id', 'ผู้ให้คำปรึกษา', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))}}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <?php $advisors = DB::table('wn_advisors')->select('id','name')->get(); ?>
                          <select name="advisor_id" class="form-control col-md-7 col-xs-12" >
                            @foreach($advisors as $advisor) 
                              <option value="{{$advisor->id}}">{{$advisor->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>



                      </div>
                      <div class="clearfix"></div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-xs-12 text-center">
                          {{ Form::submit('บันทึก', array('class' => 'btn btn-success')) }}
                        </div>
                      </div>

                    {{ Form::close() }}
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

    <!-- bootstrap-daterangepicker -->
    {{Html::script('vendors/moment/min/moment.min.js')}}
    {{Html::script('vendors/bootstrap-daterangepicker/daterangepicker.js')}}
  <!-- Custom Theme Scripts -->
  {{Html::script('build/js/custom.min.js')}}


  <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {

        $('#birthday').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4",
          locale: {
            format: 'YYYY-MM-DD'
          },
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });

        $("input[name='type']").click(function() {

          var typeRadio = $('input:radio[name=type]:checked').val();

          if( typeRadio=="นิสิตภาคปกติ" || typeRadio=="นิสิตอินเตอร์"){
              $(".student-info").show();
              $(".employee-info").hide();
          } else {
              $(".employee-info").show();
              $(".student-info").hide();
          }
        });

      });
    </script>
    <!-- /bootstrap-daterangepicker -->


@endpush



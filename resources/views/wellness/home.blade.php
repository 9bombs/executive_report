
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
            <h3>รายงานภาพรวมหน่วยส่งเสริมสุขภาวะนิสิต ปีการศึกษา 2559</h3>
          </div>
          <div class="title_right">

          </div>
          <div class="clearfix"></div>

          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-area-chart" aria-hidden="true"></i> จำนวนผู้เข้าใช้บริการเดือนนี้ (คน)</span>
              <div class="count">147</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-area-chart" aria-hidden="true"></i> จำนวนผู้เข้าใช้บริการเดือนนี้ (ครั้ง)</span>
              <div class="count">250</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-female"  aria-hidden="true"></i> ระดับความพึงพอใจ</span>
              <div class="count">4.78/5.0</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-male" aria-hidden="true"></i> เหตุวิกฤติ (ครั้ง)</span>
              <div class="count">5</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-female"  aria-hidden="true"></i> จำนวนผู้เข้าร่วมกิจกรรมทางวิชาการ (ภายใน)</span>
              <div class="count">345</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-male" aria-hidden="true"></i> จำนวนผู้เข้าร่วมกิจกรรมทางวิชาการ (ภายนอก)</span>
              <div class="count">150</div>
            </div>
          </div>

          <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

        <div class="row">

          <div class="col-md-12 col-sm-6 col-xs-12">
            <div class="x_panel tile">
              <div class="x_title">
                <h2>จำนวนผู้เข้าใช้บริการหน่วยส่งเสริมสุขภาวะนิสิต จำแนกตามคณะและเพศ</h2>
                <div class="form-group col-xs-4 pull-right">
                  <div class="col-xs-6">
                    <select id="usage-month" class="form-control">
                            <option>มกราคม</option>
                            <option>กุมภาพันธ์</option>
                            <option>มีนาคม</option>
                            <option>เมษายน</option>
                            <option>พฤษภาคม</option>
                            <option>มิถุนายน</option>
                            <option>กรกฎาคม</option>
                            <option>สิงหาคม</option>
                            <option>กันยายน</option>
                            <option>ตุลาคม</option>
                            <option>พฤศจิกายน</option>
                            <option>ธันวาคม</option>
                          </select>
                  </div>
                  <div class="col-xs-3">
                    <select id="usage-year" class="form-control">
                            <option>2558</option>
                            <option>2559</option>
                            <option>2560</option>
                          </select>
                  </div>
                  <div class="col-xs-3"><button type="submit" class="btn btn-primary">แสดงผลใหม่</button></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <canvas id="act_bar" height="350px"></canvas>
                <div id="act_bar_legend" class="legend"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile">
              <div class="x_title">
                <h2>7 ปัญหานำที่มีผู้เข้ามาใช้บริการสูงสุด</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <canvas id="top_problem" height="570px"></canvas>
                <div id="topproblem_legend" class="legend"></div>
              </div>
            </div>
          </div>




          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile">
              <div class="x_title">
                <h2>ปัญหาและจำนวนนิสิตที่ต้องได้รับการดูแลใกล้ชิด</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content onradar-list">

                <table class="table table-hover" id="stduent-list">
                  <thead>
                    <tr>
                      <th>ปัญหานำ</th>
                      <th>จำนวนนิสิต</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">ถูกล่วงละเมิดทางเพศ</th>
                        <td>4</td>
                    </tr>
                    <tr>
                      <td scope="row">ความเครียดหลังประสบเหตุการณ์ร้ายแรง</th>
                        <td>3</td>
                    </tr>

                    <tr>
                      <td scope="row">การใช้สารเสพติด</th>
                        <td>3</td>
                    </tr>
                    <tr>
                      <td scope="row">ถูกทำร้ายทางร่างกาย / อารมณ์</th>
                        <td>2</td>
                    </tr>
                    <tr>
                      <td scope="row">ความคิดและพฤติกรรมฆ่าตัวตาย</th>
                        <td>2</td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>
          </div>



          <div class="col-xs-6">
            <div class="x_panel wellness">
              <div class="x_title col-xs-12">
                <h2>สถิติความพึงพอใจของผู้ใช้บริการการปรึกษาเชิงจิตวิทยา</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <canvas id="mood_line" height="250px"></canvas>
                <div id="mood_line_legend" class="legend"></div>
              </div>
            </div>
          </div>

          <div class="col-xs-6">
            <div class="x_panel wellness">
              <div class="x_title col-xs-12">
                <h2>กิจกรรมหน่วยส่งเสริมสุขภาวะนิสิต</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">พิธีมอบทุนนักศึกษาโดยบริษัท ไทยออยล์ จำกัด</a>
                    <p>จัดโดย <span>หน่วยงานภายนอก</span></p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">พิธีมอบทุนนักศึกษาโดยบริษัท ไทยออยล์ จำกัด</a>
                    <p>จัดโดย <span>หน่วยงานภายนอก</span></p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">ม.สงขลานครินทร์ วิทยาเขตปัตตานีเยี่ยมชมสำนักบริหารกิจการนิสิต</a>
                    <p>จัดโดย <span>หน่วยงานภายนอก</span></p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">ม.สงขลานครินทร์ วิทยาเขตปัตตานีเยี่ยมชมสำนักบริหารกิจการนิสิต</a>
                    <p>ห้องประชุม 1 อาคารจุลจักรพงษ์ สำนักบริหารกิจการนิสิต จัดโดย <span>หน่วยงานภายนอก</span></p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">โครงการ ซ่อมฝายชะลอน้ำ อาสาทำโปร่งเทียม เยี่ยมชมปางสีดา สหเวชฯจุฬาร่วมใจ</a>
                    <p>ณ. อุทยานแห่งชาติปางสีดา อำเภอเมืองสระแก้ว จังหวัดสระแก้ว จัดโดย <span>หน่วยงานภายนอก</span></p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">พิธีถวายสักการะ และรับโอวาทจากอธิการบดี เนื่องในโอกาสเข้าร่วมการแข่งขันกีฬามหาวิทยาลัยแห่งประเทศไทย ครั้งที่ 44</a>
                    <p>ณ.สนามหน้าพระบรมราชานุสาวรีย์</p>
                  </div>
                </article>
              </div>
            </div>
          </div>



          <div class="col-xs-6">
            <div class="x_panel wellness">
              <div class="x_title col-xs-12">
                <h2>สถิติการให้บริการทางวิชาการที่จัดโดยหน่วยส่งเสริมสุขภาวะนิสิต</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table class="table table-hover" id="stduent-list">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th class="text-center">วันที่</th>
                      <th class="text-center">หัวข้อ</th>
                      <th class="text-center">ผู้เข้าร่วม</th>
                      <th class="text-center">จำนวนผู้เข้าร่วม</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td colspan="4">รวมทั้งสิ้น</td>
                      <td>500</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-xs-6">
            <div class="x_panel wellness">
              <div class="x_title col-xs-12">
                <h2>สถิติการให้บริการทางวิชาการที่จัดโดยหน่วยงานภายนอก</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table class="table table-hover" id="stduent-list">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th class="text-center">วันที่</th>
                      <th class="text-center">หัวข้อ</th>
                      <th class="text-center">หน่วยงานที่ขอความอนุเคราะห์</th>
                      <th class="text-center">ผู้เข้าร่วม</th>
                      <th class="text-center">จำนวนผู้เข้าร่วม</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>คณะสหเวชศาสตร์</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>คณะสหเวชศาสตร์</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>คณะสหเวชศาสตร์</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>คณะสหเวชศาสตร์</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>คณะสหเวชศาสตร์</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>คณะสหเวชศาสตร์</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>คณะสหเวชศาสตร์</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>คณะสหเวชศาสตร์</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>24 ก.ย.58</td>
                      <td>บรรยายให้ความรู้ในหัวข้อ การดูแลสุขภาวะเบื้องต้น</td>
                      <td>คณะสหเวชศาสตร์</td>
                      <td>นิสิตคณะครุศาสตร์ สาขาวิชาศิลปศึกษา ภาควิชาศิลปะ ดนตรีและนาฏศิลป์ศึกษา</td>
                      <td>30</td>
                    </tr>
                    <tr>
                      <td colspan="5">รวมทั้งสิ้น</td>
                      <td>500</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <div class="row">

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

{{-- This is for putting all required scripts to scripts stack in wellness\home.blad.php --}}
@push('scripts')

 <!-- jQuery -->
  {{Html::script('vendors/jquery/dist/jquery.min.js')}}

  <!-- Bootstrap -->
  {{Html::script('vendors/bootstrap/dist/js/bootstrap.min.js')}}

  <!-- FastClick -->
  {{Html::script('vendors/fastclick/lib/fastclick.js')}}

  <!-- NProgress -->
  {{Html::script('vendors/nprogress/nprogress.js')}}

  <!-- Chart.js -->
  {{Html::script('vendors/Chart.js/dist/Chart.min.js')}}

  <!-- bootstrap-progressbar -->
  {{Html::script('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}

  <!-- bootstrap-daterangepicker -->
  {{Html::script('vendors/moment/min/moment.min.js')}}
  {{Html::script('vendors/bootstrap-daterangepicker/daterangepicker.js')}}

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

  <!-- bootstrap-daterangepicker -->
  <script>
    $(document).ready(function () {

      var cb = function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      };

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
  <!-- /bootstrap-daterangepicker -->

  <script type="text/javascript">
    var opt = {
      responsive: true,
      maintainAspectRatio: false,
      legend: false,
      events: false,
      tooltips: {
        enabled: false
      },
      hover: {
        animationDuration: 0
      },
      animation: {
        duration: 500,
        easing: "easeOutQuart",
        onComplete: function () {
          var ctx = this.chart.ctx;
          ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
          ctx.textAlign = 'center';
          ctx.textBaseline = 'bottom';

          this.data.datasets.forEach(function (dataset) {
            for (var i = 0; i < dataset.data.length; i++) {
              var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
              ctx.fillStyle = '#444';
              var y_pos = model.y - 2;
              // Make sure data value does not get overflown and hidden
              // when the bar's value is too close to max value of scale
              // Note: The y value is reverse, it counts from top down
              if ((scale_max - model.y) / scale_max >= 0.93)
                y_pos = model.y + 18;
              ctx.fillText(dataset.data[i], model.x, y_pos);
            }
          });
        }
      }
    };

    var bar_data = {
      labels: {!!$labels!!},
      datasets: {!!$datasets!!}
    };

    // Bar chart
    var ctx = document.getElementById("act_bar");
    var mybarChart = new Chart(ctx, {
      type: 'bar',
      data: bar_data,
      options: opt
    });

    document.getElementById("act_bar_legend").innerHTML = mybarChart.generateLegend();


    var options = {
      responsive: true,
      maintainAspectRatio: false,
      legend: false,
      events: false,
      animation: {
        duration: 0,
        onComplete: function () {
          var self = this,
            chartInstance = this.chart,
            ctx = chartInstance.ctx;

          ctx.font = '15px tahoma';
          ctx.textAlign = "center";
          ctx.fillStyle = "#ffffff";

          Chart.helpers.each(self.data.datasets.forEach((dataset, datasetIndex) => {
            var meta = self.getDatasetMeta(datasetIndex),
              total = 0, //total values to compute fraction
              labelxy = [],
              offset = Math.PI / 2, //start sector from top
              radius,
              centerx,
              centery,
              lastend = 0; //prev arc's end line: starting with 0

            for (var val of dataset.data) { total += val; }

            Chart.helpers.each(meta.data.forEach((element, index) => {
              radius = 0.9 * element._model.outerRadius - element._model.innerRadius;
              centerx = element._model.x;
              centery = element._model.y;
              var thispart = dataset.data[index],
                arcsector = Math.PI * (2 * thispart / total);
              if (element.hasValue() && dataset.data[index] > 0) {
                labelxy.push(lastend + arcsector / 2 + Math.PI + offset);
              }
              else {
                labelxy.push(-1);
              }
              lastend += arcsector;
            }), self)

            var lradius = radius * 3 / 4;
            for (var idx in labelxy) {
              if (labelxy[idx] === -1) continue;
              var langle = labelxy[idx],
                dx = centerx + lradius * Math.cos(langle),
                dy = centery + lradius * Math.sin(langle),
                //val = Math.round(dataset.data[idx] / total * 100);
                val = dataset.data[idx] + " คน";
              ctx.fillText(val, dx, dy);
            }

          }), self);
        }
      },
    };

    var horizon_opt = {
      responsive: true,
      maintainAspectRatio: false,
      legend: false,
      events: false,
      tooltips: {
        enabled: false
      },
      hover: {
        animationDuration: 0
      },
      animation: {
        duration: 500,
        easing: "easeOutQuart",
        onComplete: function () {
          var ctx = this.chart.ctx;
          ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
          ctx.textAlign = 'right';
          ctx.textBaseline = 'middle';

          this.data.datasets.forEach(function (dataset) {
            for (var i = 0; i < dataset.data.length; i++) {
              var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
              ctx.fillStyle = '#000';
              var y_pos = model.y - 2;
              var x_pos = model.x + 20
              // Make sure data value does not get overflown and hidden
              // when the bar's value is too close to max value of scale
              // Note: The y value is reverse, it counts from top down

              ctx.fillText(dataset.data[i], x_pos, y_pos);
            }
          });
        }
      }
    };

    var bar_data = {
      labels: ["วิตกกังวล", "ซึมเศร้า", "เรียน", "เพื่อน", "ไม่ยืดหยุ่นทางความคิดและจิตใจ", "ความรักและความสัมพันธ์", "ครอบครัว"],
      datasets: [{
        label: "ชาย",
        backgroundColor: "#73e600",
        data: [67, 56, 45, 37, 26, 27, 11]
      }, {
        label: "หญิง",
        backgroundColor: "#408000",
        data: [113, 102, 85, 64, 37, 51, 48]
      }]
    };

    // Bar chart
    var ctx = document.getElementById("top_problem");
    var mybarChart = new Chart(ctx, {
      responsive: true,
      type: 'horizontalBar',
      data: bar_data,
      options: horizon_opt
    });

    document.getElementById("topproblem_legend").innerHTML = mybarChart.generateLegend();

    function ran() {
      return Math.random() * 0.8 + 4.2;
    }

    var mood_line_chart = document.getElementById("mood_line");
    var lineChart = new Chart(mood_line_chart, {
      type: 'line',
      min: 4.0,
      data: {
        labels: ["สิงหาคม 2559", "กันยายน 2559", "ตุลาคม 2559", "พฤศจิกายน 2559", "ธันวาคม 2559", "มกราคม 2560", "กุมภาพันธ์ 2560", "มีนาคม 2560", "เมษายน 2560"],
        datasets: [{
          fill: false,
          label: "ประโยชน์ที่ได้รับ",
          borderColor: "#ccff33",
          backgroundColor: "#ccff33",
          lineTension: 0.2,
          pointBorderWidth: 1,
          pointRadius: 2,

          //hit chart data
          data: [null, null, null, 4.57, 4.61, 4.63, 4.54, 4.61, 4.68]
        }, {
          fill: false,
          label: "ความพึงพอใจต่อนักจิตวิทยา/จิตแพทย์",
          lineTension: 0.2,
          backgroundColor: "#009900",
          borderColor: "#009900",
          pointBorderWidth: 1,
          pointRadius: 2,

          //hit chart data
          data: [null, null, null, 4.65, 4.75, 4.74, 4.70, 4.67, 4.81]
        }, {
          fill: false,
          label: "ความพึงพอใจในภาพรวม",
          lineTension: 0.2,
          backgroundColor: "#006600",
          borderColor: "#006600",
          pointBorderWidth: 1,
          pointRadius: 2,

          //hit chart data
          data: [4.29, 4.61, 4.52, 4.65, 4.67, 4.67, 4.66, 4.64, 4.71]
        }]
      },
      options: {
        min: 4.0,
        legend: false,
        events: false,
        responsive: true,
        maintainAspectRatio: false,
      }
    });

    document.getElementById("mood_line_legend").innerHTML = lineChart.generateLegend();

  </script>

@endpush
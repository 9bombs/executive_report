
@extends('layouts.app')


@section('content')
   <body class="nav-md">
  <div class="container body">
    <div class="main_container">
      
      @include('layouts.sidebar')

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">{{$user->name}}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="{{URL::route('logout')}}"><i class="fa fa-sign-out pull-right"></i> ออกจากระบบ</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row tile_count">
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-institution"></i> นิสิตทั้งหมด</span>
            <div class="count">37,189</div>
            <span class="count_bottom">คน</span>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-money"></i> งบประมาณกิจกรรมนิสิต</span>
            <div class="count">10,524,154</div>
            <span class="count_bottom">บาท</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-graduation-cap"></i> จำนวนทุนการศึกษา</span>
            <div class="count">2,500</div>
            <span class="count_bottom">ทุน</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-heart"></i> ใช้บริการส่งเสริมสุขภาวะ</span>
            <div class="count">1500</div>
            <span class="count_bottom">คน</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> จำนวนนิสิตหอพัก</span>
            <div class="count">3,390</div>
            <span class="count_bottom">คน</span>
          </div>
        </div>
        <!-- /top tiles -->

        <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="x_panel residence">
              <div class="x_title">
                <h2>กิจกรรมหน่วยหอพักนิสิต</h2>
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

          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="x_panel funding">
              <div class="x_title">
                <h2>กิจกรรมฝ่ายทุนการศึกษาและบริการนิสิต</h2>
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

          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="x_panel development">
              <div class="x_title">
                <h2>กิจกรรมฝ่ายพัฒนานิสิต </h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">โครงการส่งเสริมและพัฒนาศักยภาพเยาวชนด้อยดอกาสในชุมชนแออัด (จุฬาฯอาสา)</a>
                    <p>โรงเรียนชุมชนหมู่บ้าพัฒนา คลองเตย จัดโดย <span>อบจ.</span></p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">ค่ายแนะแนวการศึกษาจังหวัดระยองครั้งที่ 17</a>
                    <p>โรงเรียนบ้านฉางกาญจยกุลวิทยา จ.ระยอง จัดโดย <span>อบจ</span></p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">ไหว้ครูล้านนา กิ๋นอ้อผญาคนเมือง ครั้งที่ 14</a>
                    <p>ศูนย์ส่งเสริมวัฒนธรรมแห่งจุฬาลงกรณ์มหาวิทยาลัย (เรือนไทย) จัดโดย <span>อบจ</span></p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">ปฐมนิเทศนิสิตระดับบัณฑิตศึกษาและพิธีถวายสัตยปฏิญาณตนเปนนิสิตจุฬาลงกรณมหาวิทยาลัย</a>
                    <p>หอประชุมจุฬาลงกรณ และลานพระบรมราชานุสาวรียสมเด็จพระปยมหาราชและสมเด็จพระมหาธีรราชเจา จัดโดย <span>อบจ</span></p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">สัมมนาคณะกรรมการประสานงานเครือข่ายกิจการนิสิต</a>
                    <p>ณ. ศูนย์การเรียนรู้และบริการวิชาการ เครือข่ายแห่งจุฬาฯ อำเภอเมือง จังหวัดน่าน จัดโดย <span>อบจ</span></p>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">
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

          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="x_panel cooperate">
              <div class="x_title">
                <h2>กิจกรรมฝ่ายประสานงานและเครือข่ายกิจการนิสิต</h2>
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
        </div>
        <!--
        <div class="row">


          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile">
              <div class="x_title">
                <h2>นิสิตที่ไ้ดรับทุนจำแนกตามจังหวัด <small></small></h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <div id="thai_vmap" style="height:620px;"></div>

              </div>
            </div>
          </div>


          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile">
              <div class="x_title">
                <h2>ทุนอุดหนุนการศึกษาจำแนกตามประเภททุน <small>(ล้านบาท)</small></h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <canvas id="funding_pie"></canvas>
                <div id="pieLegend" class="legend"></div>

              </div>
            </div>
          </div>

        </div>-->

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

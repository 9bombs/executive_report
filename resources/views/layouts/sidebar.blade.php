

<div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><span>Executive Report</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>ยินดีต้อนรับ,</span>
              <h2>{{$user->name}}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>เมนูหลัก</h3>
              <ul class="nav side-menu">

                <li><a href="{{URL::route('home')}}"><i class="fa fa-home"></i> แผงควบคุม </span></a></li>
                <li><a><i class="fa fa-home"></i> ประสานงานและเครือข่าย <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="cooperate.html">รายงานภาพรวม</a>
                    </li>
                    <li>
                      <a href="cooperate-form.html">นำเข้าข้อมูล</a>
                    </li>
                    <li>
                      <a href="act-form.html">สร้างกิจกรรมใหม่</a>
                    </li>
                  </ul>
                </li>

                <li><a><i class="fa fa-edit"></i> พัฒนานิสิต <span class="fa fa-chevron-down"></span></a>

                  <ul class="nav child_menu">
                    <li>
                      <a href="development.html">รายงานภาพรวม</a>
                    </li>
                    <li>
                      <a href="development-form.html">นำเข้าข้อมูล</a>
                    </li>
                    <li>
                      <a href="act-form.html">สร้างกิจกรรมใหม่</a>
                    </li>
                  </ul>
                </li>

                <li><a><i class="fa fa-sitemap"></i> ทุนและบริการนิสิต <span class="fa fa-chevron-down"></span></a>

                  <ul class="nav child_menu">
                    <li>
                      <a href="scholarship.html">รายงานภาพรวม</a>
                    </li>
                    <li>
                      <a href="scholarship-data.html">รายชื่อนิสิตทุน</a>
                    </li>
                    <li>
                      <a href="scholarship-new-form.html">เพิ่มทุนภายนอกใหม่</a>
                    </li>
                    <li>
                      <a href="act-form.html">สร้างกิจกรรมใหม่</a>
                    </li>
                    <li>
                      <a href="scholarship-report-data.html">นำเข้าข้อมูลรายงานรายเดือน</a>
                    </li>
                  </ul>
                </li>

                <li><a><i class="fa fa-sitemap"></i> หอพักนิสิต <span class="fa fa-chevron-down"></span></a>

                  <ul class="nav child_menu">
                    <li>
                      <a href="residence.html">รายงานภาพรวม</a>
                    </li>
                    <li>
                      <a href="act-form.html">สร้างกิจกรรมใหม่</a>
                    </li>
                    <li>
                      <a href="residence-report-data.html">นำเข้าข้อมูลรายงานรายเดือน</a>
                    </li>
                  </ul>
                </li>

                <li><a><i class="fa fa-sitemap"></i> ส่งเสริมสุขภาวะนิสิต <span class="fa fa-chevron-down"></span></a>

                  <ul class="nav child_menu">
                    <li>
                      <a href="{{URL::route('wellnessHome')}}">รายงานภาพรวม</a>
                    </li>
                    <li>
                      <a href="{{URL::route('wellnessPatientList')}}">ผู้ใช้บริการทั้งหมด</a>
                    </li>
                    <li>
                      <a href="{{URL::route('wellnessPatientCreate')}}">เพิ่มผู้ใช้บริการใหม่</a>
                    </li>
                    <li>
                      <a href="act-form.html">สร้างกิจกรรมใหม่</a>
                    </li>
                    <li>
                      <a href="wellness-report-data.html">นำเข้าข้อมูลรายงานรายเดือน</a>
                    </li>
                  </ul>
                </li>

              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

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
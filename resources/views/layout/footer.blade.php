
  <!-- jQuery -->
  <script src="vendors/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- FastClick -->
  <script src="vendors/fastclick/lib/fastclick.js"></script>

  <!-- NProgress -->
  <script src="vendors/nprogress/nprogress.js"></script>

  <!-- Chart.js -->
  <script src="vendors/Chart.js/dist/Chart.min.js"></script>

  <!-- gauge.js -->
  <script src="vendors/gauge.js/dist/gauge.min.js"></script>

  <!-- bootstrap-progressbar -->
  <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

  <!-- iCheck -->
  <script src="vendors/iCheck/icheck.min.js"></script>

  <!-- Flot plugins -->
  <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="vendors/flot.curvedlines/curvedLines.js"></script>

  <!-- DateJS -->
  <script src="vendors/DateJS/build/date.js"></script>

  <!-- JQVMap -->
  <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="vendors/jqvmap/dist/maps/jquery.vmap.thai.js"></script>
  <script src="vendors/jqvmap/dist/data/thai.sampledata.js"></script>

  <!-- bootstrap-daterangepicker -->
  <script src="vendors/moment/min/moment.min.js"></script>
  <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- PNotify -->
  <script src="vendors/pnotify/dist/pnotify.js"></script>
  <script src="vendors/pnotify/dist/pnotify.buttons.js"></script>
  <script src="vendors/pnotify/dist/pnotify.nonblock.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="build/js/custom.min.js"></script>



  <!-- JQVMap -->

  <script type="text/javascript">
    jQuery(document).ready(function () {
      jQuery('#thai_vmap').vectorMap({
        map: 'thai_en',
        backgroundColor: '#null',
        color: '#ffffff',
        hoverOpacity: 0.7,
        selectedColor: '#999999',
        enableZoom: true,
        values: thai_sample_data,
        showTooltip: true,
        scaleColors: ['#C1ED8B', '#579900'],
        normalizeFunction: 'polynomial',
        onLabelShow: function (event, label, code) {
          label.append(': ' + thai_sample_data[code] + ' คน');
        }
      });

    });
  </script>
  <!-- /JQVMap -->

  <!-- PNotify -->
  <script>
    $(document).ready(function () {

      // new PNotify({
      //   title: 'Sticky Success',
      //   text: 'Sticky success... I\'m not even gonna make a joke.',
      //   type: 'success',
      //   hide: false,
      //   styling: 'bootstrap3'
      // });

    });
  </script>
  <!-- /PNotify -->


  <script type="text/javascript">
    var options = {
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
                val = dataset.data[idx] + " ทุน";
              ctx.fillText(val, dx, dy);
            }

          }), self);
        }
      },
    };

    // Pie chart
    var ctx = document.getElementById("funding_pie");
    var data = {
      datasets: [{
        data: [50, 200, 175, 325],
        backgroundColor: [
          "#00DFFC",
          "#00B4CC",
          "#008C9E",
          "#005F6B"
        ]
      }],
      labels: [
        "ประเภท ก",
        "ประเภท ข (1)",
        "ประเภท ข (2)",
        "ประเภท ค"
      ]
    };

    var pieChart = new Chart(ctx, {
      data: data,
      type: 'pie',
      options: options
    });

    document.getElementById("pieLegend").innerHTML = pieChart.generateLegend();
  </script>

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
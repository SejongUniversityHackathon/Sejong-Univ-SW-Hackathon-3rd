        <div class="content">
            <!-- START Sub-Navbar with Header only-->
<div class="sub-navbar sub-navbar__header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header m-t-0">
                    <h3 class="m-t-0">교수 재실 여부</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Sub-Navbar with Header only-->

<!-- START Sub-Navbar with Header and Breadcrumbs-->
<div class="sub-navbar sub-navbar__header-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 sub-navbar-column">
                <div class="sub-navbar-header">
                    <h3>교수 재실 여부</h3>
                </div>
                <ol class="breadcrumb navbar-text navbar-right no-bg">
                    <li class="current-parent">
                        <a class="current-parent" href="../index.html">
                            <i class="fa fa-fw fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            출입 관리
                        </a>
                    </li>
                    <li class="active">교수 재실 여부</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- END Sub-Navbar with Header and Breadcrumbs-->



<div class="container">
    <div class="row">
        <div class="col-lg-12">

            <!-- START Basic Example Table -->
            <h4 class="m-t-3">교수 재실 여부</h4>
            <p class="m-b-2">
                교수님들의 현재 연구실 재실 여부를 표시합니다.
            </p>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 table-responsive">
            <style scoped>
              table.accessTable tr th { text-align: center; }
              table.accessTable tr td { vertical-align: middle; }
            </style>
            <table class="table table-bordered accessTable text-white text-center">
                <tr>
                  <th>교수명</th>
                  <th>층</th>
                  <th>호수</th>
                  <th>재실 여부</th>
                </tr>
<?php foreach($professors as $row): ?>
                <tr>
                  <td><?=$row->name?></td>
                  <td><?=$row->f?>F</td>
                  <td><?=$row->f?>0<?=$row->room?>호</td>
                  <td>
                    <?php if($row->stay == 1) { ?>
                    <button class="btn btn-primary">재실중</button>
                    <?php } else { ?>
                    <button class="btn btn-default">부재중</button>
                    <?php } ?>
                  </td>
                </tr>
<?php endforeach; ?>
            </table>

        </div>
    </div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&#xD7;</span></button>
      </div>
      <div class="modal-body" style="background-image: url(<?=site_url()?>assets/sims/images/face-access-origin.jpg); background-size: cover;">
        <img src="<?=site_url()?>assets/sims/images/face-access-origin.jpg" style="width: 100%; visibility: hidden;">
      </div>
    </div>
  </div>
</div>



    <!-- <div class="row">
        <div class="col-lg-12">

            <h4 class="m-t-3">현재 상태</h4>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 text-right">
            <span>최근 1시간</span>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>층</th>
                    <th>관리번호</th>
                    <th>송신량</th>
                    <th>수신량</th>
                    <th>수신률</th>
                </tr>
                <tr>
                    <td>1F</td>
                    <td>W-01F-01</td>
                    <td>90</td>
                    <td>86</td>
                    <td>95%</td>
                </tr>
            </table>
        </div>
    </div> -->
</div>
<!-- 

main.humidity
main.pressure
main.temp
weather.main
wind.deg
wind.speed
 -->

<script type="text/javascript">
    function temperatureConverter(valNum) {
      valNum = parseFloat(valNum);
      return valNum-273.15;
    }

    (function() {
      /**
       * Decimal adjustment of a number.
       *
       * @param {String}  type  The type of adjustment.
       * @param {Number}  value The number.
       * @param {Integer} exp   The exponent (the 10 logarithm of the adjustment base).
       * @returns {Number} The adjusted value.
       */
      function decimalAdjust(type, value, exp) {
        // If the exp is undefined or zero...
        if (typeof exp === 'undefined' || +exp === 0) {
          return Math[type](value);
        }
        value = +value;
        exp = +exp;
        // If the value is not a number or the exp is not an integer...
        if (value === null || isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
          return NaN;
        }
        // If the value is negative...
        if (value < 0) {
          return -decimalAdjust(type, -value, exp);
        }
        // Shift
        value = value.toString().split('e');
        value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
        // Shift back
        value = value.toString().split('e');
        return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
      }

      // Decimal round
      if (!Math.round10) {
        Math.round10 = function(value, exp) {
          return decimalAdjust('round', value, exp);
        };
      }
      // Decimal floor
      if (!Math.floor10) {
        Math.floor10 = function(value, exp) {
          return decimalAdjust('floor', value, exp);
        };
      }
      // Decimal ceil
      if (!Math.ceil10) {
        Math.ceil10 = function(value, exp) {
          return decimalAdjust('ceil', value, exp);
        };
      }
    })();

    $(document).ready(function() {
        $.ajax({
            url: 'https://api.openweathermap.org/data/2.5/weather?lat=37.551278&lon=127.0751693&APPID=4070ec6ec4b6259b309b7fca68b69724',
            success: function(r) {
                $('span.weather').text(r.weather[0].main);
                $('span.temp').text(Math.round(temperatureConverter(r.main.temp)) + '°C');
                $('span.humidity').text(r.main.humidity + '%');
                $('span.pressure').text(r.main.pressure + 'hPa');
                $('span.speed').text(r.wind.speed + 'm/s');
                $('span.deg').text(r.wind.deg + '°');
            }
        });
        var d = new Date();
        var datetime = d.getFullYear() + '년 '
                    + (d.getMonth() + 1) + '월 '
                    + d.getDate() + '일 '
                    + d.getHours() + '시 '
                    + d.getMinutes() + '분 '
                    + d.getSeconds() + '초 ';

        $('span.currentTime').text(datetime);

        $('span.eastSunshine').text(Math.round10((Math.random() * 12) + 1, -1));
        $('span.southSunshine').text(Math.round10((Math.random() * 12) + 1, -1));
        $('span.westSunshine').text(Math.round10((Math.random() * 12) + 1, -1));
        $('span.northSunshine').text(Math.round10((Math.random() * 12) + 1, -1));
    })


</script>


</div>
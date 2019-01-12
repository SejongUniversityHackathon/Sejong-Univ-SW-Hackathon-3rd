        <div class="content">
            <!-- START Sub-Navbar with Header only-->
<div class="sub-navbar sub-navbar__header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header m-t-0">
                    <h3 class="m-t-0">날씨기반 빌딩관리</h3>
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
                    <h3>날씨기반 빌딩관리</h3>
                </div>
                <ol class="breadcrumb navbar-text navbar-right no-bg">
                    <li class="current-parent">
                        <a class="current-parent" href="../index.html">
                            <i class="fa fa-fw fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            기후기반 빌딩관리
                        </a>
                    </li>
                    <li class="active">날씨기반 빌딩관리</li>
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
            <h4 class="m-t-3">현재 세종대학교 날씨</h4>
            <p class="m-b-2">
                세종대학교의 실시간 날씨 정보 (날씨 정보 OpenAPI인 OpenWeatherMap 이용)
            </p>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 text-right">
            <span class="currentTime"></span>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <h2 class="media-heading text-center" style="font-size: 32px; font-weight: lighter; color: #fff;"><span class="weather"></span></h2>
            <div class="m-b-0" style="font-size: 16px; color: #fff; text-align: center;">
                날씨
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <h2 class="media-heading text-center" style="font-size: 32px; font-weight: lighter; color: #fff;"><span class="temp"></span></h2>
            <div class="m-b-0" style="font-size: 16px; color: #fff; text-align: center;">
                기온
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <h2 class="media-heading text-center" style="font-size: 32px; font-weight: lighter; color: #fff;"><span class="humidity"></span></h2>
            <div class="m-b-0" style="font-size: 16px; color: #fff; text-align: center;">
                습도
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <h2 class="media-heading text-center" style="font-size: 32px; font-weight: lighter; color: #fff;"><span class="pressure"></span></h2>
            <div class="m-b-0" style="font-size: 16px; color: #fff; text-align: center;">
                기압
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <h2 class="media-heading text-center" style="font-size: 32px; font-weight: lighter; color: #fff;"><span class="speed"></span></h2>
            <div class="m-b-0" style="font-size: 16px; color: #fff; text-align: center;">
                풍속
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <h2 class="media-heading text-center" style="font-size: 32px; font-weight: lighter; color: #fff;"><span class="deg"></span></h2>
            <div class="m-b-0" style="font-size: 16px; color: #fff; text-align: center;">
                풍향
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 30px;">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <h2 class="media-heading text-center" style="font-size: 32px; font-weight: lighter; color: #fff;"><span class="eastSunshine"></span>J</h2>
            <div class="m-b-0" style="font-size: 16px; color: #fff; text-align: center;">
                동향 일조량
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <h2 class="media-heading text-center" style="font-size: 32px; font-weight: lighter; color: #fff;"><span class="southSunshine"></span>J</h2>
            <div class="m-b-0" style="font-size: 16px; color: #fff; text-align: center;">
                남향 일조량
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <h2 class="media-heading text-center" style="font-size: 32px; font-weight: lighter; color: #fff;"><span class="westSunshine"></span>J</h2>
            <div class="m-b-0" style="font-size: 16px; color: #fff; text-align: center;">
                서향 일조량
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <h2 class="media-heading text-center" style="font-size: 32px; font-weight: lighter; color: #fff;"><span class="northSunshine"></span>J</h2>
            <div class="m-b-0" style="font-size: 16px; color: #fff; text-align: center;">
                북향 일조량
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-lg-12">

            <!-- START Basic Example Table -->
            <h4 class="m-t-3">현재 상태</h4>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 table-responsive">
            <style scoped>
                tr > th, tr > td { text-align: center; }
            </style>
            <table class="table text-white">
                <tr>
                    <td>실내 평균온도</td>
                    <td>실내 평균습도</td>
                </tr>
                <tr>
                    <td style="vertical-align: middle; height: 120px;">
                        <span style="font-size: 24px;">22°C</span>
                    </td>
                    <td style="vertical-align: middle; height: 120px;">
                        <span style="font-size: 24px;">45%</span>
                    </td>
                </tr>
                <tr>
                    <td>재실 공간 수</td>
                    <td>전원차단 공간 수</td>
                </tr>
                <tr>
                    <td>
                        <p class="data-attributes text-center m-b-0">
                            <span data-peity="{ &quot;fill&quot;: [&quot;#2A85C6&quot;, &quot;#262626&quot;],  &quot;innerRadius&quot;: 32, &quot;radius&quot;: 40 }">33/56</span>
                        </p>
                        <span style="display: block; transform: translateY(-58px); font-size: 18px;">33/56</span>
                    </td>
                    <td>
                        <p class="data-attributes text-center m-b-0">
                            <span data-peity="{ &quot;fill&quot;: [&quot;#2A85C6&quot;, &quot;#262626&quot;],  &quot;innerRadius&quot;: 32, &quot;radius&quot;: 40 }">16/56</span>
                        </p>
                        <span style="display: block; transform: translateY(-58px); font-size: 18px;">16/56</span>
                    </td>
                </tr>
                <tr>
                    <td>커튼 활성화 공간 수</td>
                    <td>이상 발생 공간 수</td>
                </tr>
                <tr>
                    <td>
                        <p class="data-attributes text-center m-b-0">
                            <span data-peity="{ &quot;fill&quot;: [&quot;#e76d3b&quot;, &quot;#262626&quot;],  &quot;innerRadius&quot;: 32, &quot;radius&quot;: 40 }">12/56</span>
                        </p>
                        <span style="display: block; transform: translateY(-58px); font-size: 18px;">12/56</span>
                    </td>
                    <td>
                        <p class="data-attributes text-center m-b-0">
                            <span data-peity="{ &quot;fill&quot;: [&quot;#cc3e4a&quot;, &quot;#262626&quot;],  &quot;innerRadius&quot;: 32, &quot;radius&quot;: 40 }">1/56</span>
                        </p>
                        <span style="display: block; transform: translateY(-58px); font-size: 18px;">1/56</span>
                    </td>
                </tr>
            </table>
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
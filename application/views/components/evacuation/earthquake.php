        <div class="content">
            <!-- START Sub-Navbar with Header only-->
<div class="sub-navbar sub-navbar__header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header m-t-0">
                    <h3 class="m-t-0">지진 발생</h3>
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
                    <h3>지진 발생</h3>
                </div>
                <ol class="breadcrumb navbar-text navbar-right no-bg">
                    <li class="current-parent">
                        <a class="current-parent" href="../index.html">
                            <i class="fa fa-fw fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            재난경보 시스템
                        </a>
                    </li>
                    <li class="active">지진 발생</li>
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
            <h4 class="m-t-3">화재 발생</h4>
            <p class="m-b-2">
                지진 발생시 특정 층의 실시간 대피도입니다.
            </p>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <!-- START Basic Example Table -->
            <h4 class="m-t-3">8층 대피도</h4>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
<style scoped>
.building {
  margin: 30px auto;
  padding-top: 5px;
  width: 760px;
  height: auto;
  
  font-family: monospace;
  color: #333;
}

.line {
  padding: 5px;
  
  font-size: 38px;
  font-weight: normal;
  line-height: .8em;
  
  text-shadow: 5px 5px 1px #aaa;
  text-shadow: 0px 0px 0 #ccc,1px 1px 0 #ccc,2px 2px 0 #ccc,3px 3px 0 #ccc,4px 4px 0 #ccc,5px 5px 0 #ccc,3px 3px 0 #ccc,3px 3px 0 #ccc,4px 4px 0 #ccc,4px 4px 0 #ccc,5px 5px 0 #ccc,5px 5px 0 #ccc,6px 6px 0 #ccc,6px 6px 0 #ccc,7px 7px 0 #ccc,7px 7px 0 #ccc,8px 8px 0 #ccc;
    
  cursor: crosshair;
  background-color: rgba(0, 0, 0, 0) !important;
}
</style>
            <div class="building" style="perspective: 1000px; position: relative;">
            <pre class="line" style="transform: translateY(-100px) rotateX(40deg) rotateZ(20deg); position: absolute; top: 0; z-index: 10;">
  ┌────────┬────────┬────────┐
  │        │        │        │
  │        │        │        │
  │        │  ELV   │        │
  │        │        │        │
  │        ├──── ───┤    ┌───┤
  │                      │   │
  ├──────┬─┘        └────┴  ─┤
  │                          │
  │  계단                     │
  │                          │
  ├──────┴─────  ────┬──  ───┤
  │                  │       │
  │                  │       │  
  │                          │
  │                          │
  │                          │
  │                          │
  │                  │       │
  │                  │       │
  └──────────────────┴───────┘
            </pre>
           <pre class="line" style="transform: translateY(-100px) rotateX(40deg) rotateZ(20deg); position: absolute; top: 0; color: #ff0000; z-index: 0;">
  ┌────────┬────────┬────────┐
  │        │        │        │
  │        │        │        │
  │    │   │        │  │     │
  │    │   │        │  │     │
  │    │   ├──── ───┤  │ ┌───┤
  │    └─────┐    ┌────┘ │   │
  ├──────┬─┘ │    │ └────┴  ─┤
  │     ─────┘    │          │
  │     ──────────┘          │
  │     ───────┬─────────┐   │
  ├──────┴─────│ ────┬── │───┤
  │            │     │   │   │
  │            │     │   │   │  
  │            │         │   │
  │            │         │   │
  │            │         │   │
  │            │         │   │
  │                  │       │
  │                  │       │
  └──────────────────┴───────┘
            </pre>
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
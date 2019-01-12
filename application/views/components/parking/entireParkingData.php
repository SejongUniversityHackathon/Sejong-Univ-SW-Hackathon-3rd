        <div class="content">
            <!-- START Sub-Navbar with Header only-->
<div class="sub-navbar sub-navbar__header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header m-t-0">
                    <h3 class="m-t-0">실시간 주차현황</h3>
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
                    <h3>실시간 주차현황</h3>
                </div>
                <ol class="breadcrumb navbar-text navbar-right no-bg">
                    <li class="current-parent">
                        <a class="current-parent" href="../index.html">
                            <i class="fa fa-fw fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            주차관리
                        </a>
                    </li>
                    <li class="active">실시간 주차현황</li>
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
            <h4 class="m-t-3">실시간 주차현황</h4>
            <p class="m-b-2">지하주차장 층을 선택하여 자세한 정보를 볼 수 있습니다.</p>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center">
            <style scoped>
                .floorContainer { perspective: 1000px; }
                .floor { width: 240px; height: 240px; border-radius: 10%; border: 1px solid #fff; margin: auto; font-size: 64px; padding-top: 50px; transition: all .4s; cursor: pointer; color: #fff; }
                .floor:nth-child(1) { background: #1a6da4; opacity: .9; transform: translateY(100px) rotateX(45deg) rotateZ(45deg); }
                .floor:nth-child(1):hover { opacity: .96; transform: translateY(100px) rotateX(45deg) rotateZ(45deg) scale(1.2); }
                .floor:nth-child(2) { background: #1a6da4; opacity: .7; transform: translateY(0px) rotateX(45deg) rotateZ(45deg); }
                .floor:nth-child(2):hover { opacity: .96; transform: translateY(0px) rotateX(45deg) rotateZ(45deg) scale(1.2); }
                .floor:nth-child(3) { background: #1a6da4; opacity: .4; transform: translateY(-100px) rotateX(45deg) rotateZ(45deg); }
                .floor:nth-child(3):hover { opacity: .96; transform: translateY(-100px) rotateX(45deg) rotateZ(45deg) scale(1.2); }
                .numberOfCars { font-size: 24px; display: block; text-align: center; }
                .table-bordered, .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th { border: 1px solid #aaa; }
                .floorGridContainer td.possible { color: #beff00; transform: scale(1.4); }
            </style>
            <div class="floorContainer">
                <div class="floor" data-target="floorGridB3"><span>B3</span><span class="numberOfCars"></span></div>
                <div class="floor" data-target="floorGridB4"><span>B4</span><span class="numberOfCars"></span></div>
                <div class="floor" data-target="floorGridB5"><span>B5</span><span class="numberOfCars"></span></div>
            </div>
            <div class="floorGridContainer">
                <div class="floorGridB3 table-responsive">
                    <h3>지하 3층 주차장 현황</h3>
                    <table class="floorGird table table-bordered">
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="floorGridB4">
                    <h3>지하 4층 주차장 현황</h3>
                    <table class="floorGird table table-bordered">
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="floorGridB5">
                    <h3>지하 5층 주차장 현황</h3>
                    <table class="floorGird table table-bordered">
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="empty">
                            <td colspan="10"></td>
                        </tr>
                        <tr class="parkingRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        var data = <?=$parkingData?>;
        var b3 = data.splice(0, 100);
        var b4 = data.splice(0, 100);
        var b5 = data.splice(0, 100);
        var b3Count = 0;
        var b4Count = 0;
        var b5Count = 0;
        $.each(b3, function(index, value) { 
            if(value.status == 1) {
                b3Count++;
                $('.floorGridB3 tr.parkingRow td').eq(index).text('불가').removeClass('possible');
            } else if(value.status == 0) {
                $('.floorGridB3 tr.parkingRow td').eq(index).text('가능').addClass('possible');
            }
        });
        $.each(b4, function(index, value) { 
            if(value.status == 1) {
                b4Count++;
                $('.floorGridB4 tr.parkingRow td').eq(index).text('불가').removeClass('possible');
            } else if(value.status == 0) {
                $('.floorGridB4 tr.parkingRow td').eq(index).text('가능').addClass('possible');
            }
        });
        $.each(b5, function(index, value) { 
            if(value.status == 1) {
                b5Count++;
                $('.floorGridB5 tr.parkingRow td').eq(index).text('불가').removeClass('possible');
            } else if(value.status == 0) {
                $('.floorGridB5 tr.parkingRow td').eq(index).text('가능').addClass('possible');
            }
        });
        $('.floor:nth-child(1) span.numberOfCars').text((b3.length - b3Count) + '대 가능');
        $('.floor:nth-child(2) span.numberOfCars').text((b4.length - b4Count) + '대 가능');
        $('.floor:nth-child(3) span.numberOfCars').text((b5.length - b5Count) + '대 가능');
        $(document).on('click', '.floor', function(e) {
            e.preventDefault();
            var target = $('.' + $(this).data('target'));
            var body = $("html, body");
            body.stop().animate({scrollTop:target.offset().top - 100}, 500, 'swing', function() { 

            });
        });
    });
</script>





</div>
        <div class="content">
            <!-- START Sub-Navbar with Header only-->
<div class="sub-navbar sub-navbar__header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header m-t-0">
                    <h3 class="m-t-0">데이터분석기반 예측</h3>
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
                    <h3>데이터분석기반 예측</h3>
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
                    <li class="active">데이터분석기반 예측</li>
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
            <h4 class="m-t-3">데이터분석기반 예측</h4>
            <p class="m-b-2">
                강수량, 기온, 습도, 일조량, 풍속, 적설량, 이벤트 여부(어린이대공원, 교내 컨퍼런스 등), 학기 중 여부, 주말 여부 등의 데이터를 기반으로 만차 도달 시간을 예측한 결과입니다.
            </p>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h4 class="m-t-3">예상 만차시간</h4>
            <p class="m-b-2">만차가 없는 것으로 예상되는 날은 '주차가능'으로 표시됩니다.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h2 class="media-heading text-center" style="font-size: 96px; font-weight: lighter; color: #fff;"><?=$predictionData->today != 0 ? $predictionData->today . ":00" : "주차가능" ?></h2>
            <div class="m-b-0" style="font-size: 16px; color: #fff; text-align: center;">
                오늘
            </div>
        </div>
        <div class="col-lg-6">
            <h2 class="media-heading text-center" style="font-size: 96px; font-weight: lighter; color: #fff;"><?=$predictionData->tomorrow != 0 ? $predictionData->tomorrow . ":00" : "주차가능" ?></h2>
            <div class="m-b-0" style="font-size: 16px; color: #fff; text-align: center;">
                내일
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h4 class="m-t-3">분석에 사용된 데이터</h4>
            <p class="m-b-2">특정 사건의 여부에 따른 데이터의 값이 1이면 사건이 발생한 것입니다.</p>
            <p class="m-b-2">이외의 데이터는 각 값의 기본 단위에 따릅니다.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 table-responsive">
            <style scoped>
                tr > th { text-align: center; }
            </style>
            <table class="table table-bordered table-condensed text-white text-center">
                <tr>
                    <th>날짜</th>
                    <th>평균기온</th>
                    <th>최고기온</th>
                    <th>최저기온</th>
                    <th>강우량</th>
                    <th>평균풍속</th>
                    <th>최고풍속</th>
                    <th>평균습도</th>
                    <th>최저습도</th>
                    <th>적설량</th>
                    <th>행사여부</th>
                    <th>주말여부</th>
                    <th>학기중여부</th>
                    <th>일조량</th>
                </tr>
<?php foreach($predictionSource as $row): ?>
                <tr>
<?php foreach($row as $row2): ?>
                    <td><?=$row2?></td>
<?php endforeach; ?>
                </tr>
<?php endforeach; ?>
            </table>
        </div>
    </div>
</div>


</div>
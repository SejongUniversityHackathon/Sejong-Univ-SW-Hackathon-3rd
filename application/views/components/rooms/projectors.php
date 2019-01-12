        <div class="content">
            <!-- START Sub-Navbar with Header only-->
<div class="sub-navbar sub-navbar__header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header m-t-0">
                    <h3 class="m-t-0">프로젝터 관리</h3>
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
                    <h3>프로젝터 관리</h3>
                </div>
                <ol class="breadcrumb navbar-text navbar-right no-bg">
                    <li class="current-parent">
                        <a class="current-parent" href="../index.html">
                            <i class="fa fa-fw fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            강의실 관리
                        </a>
                    </li>
                    <li class="active">프로젝터 관리</li>
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
            <h4 class="m-t-3">강의실 프로젝터 목록</h4>
            <p class="m-b-2"><kbd>상세정보</kbd> 버튼을 클릭하여 강의실 프로젝터의 상세한 정보를 볼 수 있습니다.</p>

            <table class="table table-condensed table-responsive">
                <thead>
                    <tr>
                        <th class="small text-muted text-uppercase"><strong>#</strong>
                        </th>
                        <th class="small text-muted text-uppercase"><strong>강의실</strong>
                        </th>
                        <th class="small text-muted text-uppercase"><strong>브랜드</strong>
                        </th>
                        <th class="small text-muted text-uppercase"><strong>모델명</strong>
                        </th>
                        <th class="small text-muted text-uppercase"><strong>상태</strong>
                        </th>
                        <th class="small text-muted text-uppercase text-right"><strong>상세정보</strong>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="v-a-m"><span class="text-white">1</span></td>
                        <td class="v-a-m"><span class="text-white">401호</span></td>
                        <td class="v-a-m"><span class="text-white">SONY</span></td>
                        <td class="v-a-m"><span class="text-white">VPL-PXZ10</span>
                        </td>
                        <td class="v-a-m"><i class="fa fa-circle-o text-danger m-r-1"></i> <span class="text-white">고장</span>
                        </td>
                        <td class="text-right v-a-m">
                            <a class="btn btn-default" href="<?=site_url('rooms/pcs/get/')?>">
                                상세정보
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="v-a-m"><span class="text-white">2</span></td>
                        <td class="v-a-m"><span class="text-white">402호</span></td>
                        <td class="v-a-m"><span class="text-white">SONY</span></td>
                        <td class="v-a-m"><span class="text-white">VPL-PXZ10</span>
                        </td>
                        <td class="v-a-m"><i class="fa fa-circle-o text-gray m-r-1"></i> <span class="text-white">절전</span>
                        </td>
                        <td class="text-right v-a-m">
                            <a class="btn btn-default" href="<?=site_url('rooms/pcs/get/')?>">
                                상세정보
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="v-a-m"><span class="text-white">3</span></td>
                        <td class="v-a-m"><span class="text-white">403호</span></td>
                        <td class="v-a-m"><span class="text-white">EPSON</span></td>
                        <td class="v-a-m"><span class="text-white">EH-TW5350</span>
                        </td>
                        <td class="v-a-m"><i class="fa fa-circle-o text-mint-green m-r-1"></i> <span class="text-white">정상</span>
                        </td>
                        <td class="text-right v-a-m">
                            <a class="btn btn-default" href="<?=site_url('rooms/pcs/get/')?>">
                                상세정보
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Basic Example Table -->
        </div>
    </div>
</div>






</div>
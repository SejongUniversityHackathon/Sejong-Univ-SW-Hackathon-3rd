        <div class="content">
            <!-- START Sub-Navbar with Header only-->
<div class="sub-navbar sub-navbar__header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header m-t-0">
                    <h3 class="m-t-0">세종이노베이션센터 빌딩관리시스템</h3>
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
                    <h3>세종이노베이션센터 빌딩관리시스템</h3>
                </div>
                <ol class="breadcrumb navbar-text navbar-right no-bg">
                    <li class="current-parent">
                        <a class="current-parent" href="../index.html">
                            <i class="fa fa-fw fa-home"></i>
                        </a>
                    </li>
                    <li class="active">세종이노베이션센터 빌딩관리시스템</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- END Sub-Navbar with Header and Breadcrumbs-->


<div class="container">
    <!-- START EDIT CONTENT -->
    <div class="row m-t-2">

        <div class="col-lg-12 canvasContainer">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/89/three.min.js"></script>
    <script>
        var scene = new THREE.Scene();
        scene.background = new THREE.Color( 0x212121 );
        var camera = new THREE.PerspectiveCamera(75, window.innerWidth/window.innerHeight, 1, 10000);
        var renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        $('.canvasContainer').append(renderer.domElement);
        var geometry = new THREE.BoxGeometry(500, 850, 500, 10, 17, 10);
        var material = new THREE.MeshBasicMaterial({color: 0xffffff, wireframe: true});
        var cube = new THREE.Mesh(geometry, material);
        scene.add(cube);
        var geometry2 = new THREE.BoxGeometry(32, 32, 32, 1, 1, 1);
        var material2 = new THREE.MeshBasicMaterial({color: 0xff0000, wireframe: false});
        var cube2 = new THREE.Mesh(geometry2, material2);
        cube2.position.y = 120;
        scene.add(cube2);

// var geometry2 = new THREE.SphereGeometry( 32, 32, 32, 0, 6.3, 0, 6.3 );
// var material2 = new THREE.MeshBasicMaterial( {color: 0xff0000} );
// var sphere2 = new THREE.Mesh( geometry2, material2 );
// sphere2.position.x = 100;
// sphere2.position.y = 100;
// scene.add( sphere2 );

// var geometry3 = new THREE.SphereGeometry( 32, 32, 32, 0, 6.3, 0, 6.3 );
// var material3 = new THREE.MeshBasicMaterial( {color: 0xff0000} );
// var sphere3 = new THREE.Mesh( geometry3, material3 );
// sphere3.position.x = -200;
// sphere3.position.y = -100;
// scene.add( sphere3 );

// var geometry4 = new THREE.SphereGeometry( 32, 32, 32, 0, 6.3, 0, 6.3 );
// var material4 = new THREE.MeshBasicMaterial( {color: 0xff0000} );
// var sphere4 = new THREE.Mesh( geometry4, material4 );
// sphere4.position.x = 234;
// sphere4.position.y = 409;
// scene.add( sphere4 );

        camera.position.z = 1000;        
        function render() {
            requestAnimationFrame(render);
            // cube.rotation.x += 0.001;
            cube.rotation.y += 0.001;
            cube2.rotation.y += 0.001;
            // sphere2.rotation.y += 0.001;
            // sphere3.rotation.y += 0.001;
            // sphere4.rotation.y += 0.001;

            renderer.render(scene, camera);
        };
        render();
    </script>
        </div>
    </div>
</div>
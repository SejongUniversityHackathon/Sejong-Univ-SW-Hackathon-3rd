<html>
<head>
	<title>My first Three.js app</title>
	<style>canvas { width: 100%; height: 100% }</style>
</head>
<body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/89/three.min.js"></script>
	<script>
		var scene = new THREE.Scene();
		scene.background = new THREE.Color( 0xffffff );
		var camera = new THREE.PerspectiveCamera(75, window.innerWidth/window.innerHeight, 1, 10000);
		var renderer = new THREE.WebGLRenderer();
		renderer.setSize(window.innerWidth, window.innerHeight);
		document.body.appendChild(renderer.domElement);
		var geometry = new THREE.BoxGeometry(500, 850, 500, 10, 17, 10);
		var material = new THREE.MeshBasicMaterial({color: 0x33aaff, wireframe: true});
		var cube = new THREE.Mesh(geometry, material);
		scene.add(cube);

var geometry2 = new THREE.SphereGeometry( 32, 32, 32, 0, 6.3, 0, 6.3 );
var material2 = new THREE.MeshBasicMaterial( {color: 0xff0000} );
var sphere2 = new THREE.Mesh( geometry2, material2 );
sphere2.position.x = 100;
sphere2.position.y = 200;
scene.add( sphere2 );

var geometry3 = new THREE.SphereGeometry( 32, 32, 32, 0, 6.3, 0, 6.3 );
var material3 = new THREE.MeshBasicMaterial( {color: 0xff0000} );
var sphere3 = new THREE.Mesh( geometry3, material3 );
sphere3.position.x = -200;
sphere3.position.y = -100;
scene.add( sphere3 );

var geometry4 = new THREE.SphereGeometry( 32, 32, 32, 0, 6.3, 0, 6.3 );
var material4 = new THREE.MeshBasicMaterial( {color: 0xff0000} );
var sphere4 = new THREE.Mesh( geometry4, material4 );
sphere4.position.x = 234;
sphere4.position.y = 409;
scene.add( sphere4 );

		camera.position.z = 1000;        
		function render() {
			requestAnimationFrame(render);
			// cube.rotation.x += 0.001;
			cube.rotation.y += 0.001;
			sphere2.rotation.y += 0.001;
			sphere3.rotation.y += 0.001;
			sphere4.rotation.y += 0.001;

			renderer.render(scene, camera);
		};
		render();
	</script>
</body>
</html>
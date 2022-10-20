// import * as THREE from 'three';
// import { OrbitControls } from 'https://unpkg.com/three@0.143.0/examples/jsm/controls/OrbitControls.js';
// import { RGBELoader } from '/planet-reflection/js/RGBELoader.js';  
// import { AmbientLight, PerspectiveCamera, PointLight } from 'three';
import { FlakesTexture } from 'https://leviathan-pacifique.com/wp-content/themes/leviathan-pacifique/js/FlakesTexture.js';  

let scene, camera, renderer, controls, pointlight, ambienlight, aspect, canvas, width, height, ballMesh, cloudMesh, dirlight;

function init(){
    scene = new THREE.Scene();

    renderer = new THREE.WebGL1Renderer({alpha:true,antialias:true});
    renderer.setPixelRatio(window.devicePixelRatio);
    let container = document.querySelector('#three-container');
    container.appendChild(renderer.domElement);

    canvas = renderer.domElement;
    width = canvas.clientWidth;
    height = canvas.clientHeight;
    aspect = height / width;

    renderer.setSize(width,height,false);

    camera = new THREE.PerspectiveCamera(50,aspect,1,1000);
    camera.position.set(0,0,400);
    // controls = new THREE.OrbitControls( camera, renderer.domElement );

    renderer.outputEncoding = THREE.sRGBEncoding;
    renderer.toneMapping = THREE.ACESFilmicToneMapping;
    renderer.toneMappingExposure = 1.6;

    dirlight = new THREE.DirectionalLight(0x323232,8);
    dirlight.position.set(250,250,-200);
    scene.add(dirlight); 

    let rwidth = 750;
    let rheight = 750;
    let intensity = 0.75;
    let rectLight = new THREE.RectAreaLight( 0xffffff, intensity,  rwidth, rheight );
    rectLight.position.set( 100, 200, 200 );
    rectLight.lookAt( 0, 0, 0 );
    scene.add( rectLight );
    console.log(rectLight);


    ambienlight = new THREE.AmbientLight(0xffffff,0.2);
    scene.add(ambienlight);

    const imageTexture = new THREE.TextureLoader().load( theme_directory + '/assets/textures/earth-map.jpg' );
    const roughnessTexture = new THREE.TextureLoader().load( theme_directory + '/assets/textures/earth-bump-map.jpg' );
    const specularTexture = new THREE.TextureLoader().load( theme_directory + '/assets/textures/earth-specular-map.jpg' );
    const normalTexture = new THREE.TextureLoader().load( theme_directory + '/assets/textures/earth-normal-map.jpg' );

    const ballMaterial = {
        clearcoat : 0.6,
        clearcoatRoughness : 0.8,
        metalness : 0.4,
        roughness:0.6,
        color: 0x92a4d4,
        roughnessMap:roughnessTexture,  
        bumpMap:roughnessTexture,  
        bumpScale:1,
        map:imageTexture,
        specularMap:specularTexture,    
        normalMap:normalTexture,
        normalScale : new THREE.Vector2(0.5,0.5)
    }

    let ballGeo = new THREE.SphereGeometry(120,64,64);
    let ballMat = new THREE.MeshPhysicalMaterial(ballMaterial);
    ballMesh = new THREE.Mesh(ballGeo,ballMat);
    ballMesh.receiveShadow = false;
    ballMesh.castShadow = false;


    // cloud Geometry
    let cloudGeometry = new THREE.SphereGeometry(124, 64, 64);

    // cloud material
    let cloudMaterial = new THREE.MeshPhongMaterial({
        map: THREE.ImageUtils.loadTexture(theme_directory + '/assets/textures/earth-cloud-map.jpg'),
        transparent: true,
        opacity:0.08
    });

    // cloud mesh
    cloudMesh = new THREE.Mesh(cloudGeometry, cloudMaterial);

    console.log(ballMat);


    scene.add(ballMesh);
    scene.add(cloudMesh);
    animate();
}

function resizeCanvasToDisplaySize() {

    // you must pass false here or three.js sadly fights the browser    
    if (canvas.width !== width ||canvas.height !== height) {
        renderer.setSize(width, height, false);
        camera.aspect = aspect;
        camera.updateProjectionMatrix();
    }
}


function animate(){
    // controls.update();
    renderer.render(scene,camera);
    requestAnimationFrame(animate);
    resizeCanvasToDisplaySize();
    cloudMesh.rotation.y += 0.001;
    cloudMesh.rotation.z += 0.001;
    ballMesh.rotation.y += 0.002;
}

const onWindowResize = () => {
    camera.aspect = aspect;
    camera.updateProjectionMatrix();
    renderer.setSize(aspect);
}

window.addEventListener('resize', () => {
    onWindowResize();
}, false);



init();



let tl = new gsap.timeline({
    scrollTrigger:{
        trigger:'#three-container',
        toggleActions:"play pause resume restart",
    },
    repeat:-1,
    yoyo:true
});

// window.addEventListener('load', function () {

//     tl.to(camera.position, {
//         z: 600,
//         y: 400,
//         duration:4,
//         ease:'Power2.ease',
//         onUpdate: function () {
//             camera.lookAt(0, 0,0);
//         }
//     });

// })
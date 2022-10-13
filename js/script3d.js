


const scene = new THREE.Scene();

//renderer

const renderer = new THREE.WebGLRenderer({
    antialias: true,
    alpha : true
});



// renderer.shadowMap.enabled = true;
// renderer.shadowMap.type = THREE.PCFShadowMap;
renderer.setPixelRatio(window.devicePixelRatio);
// renderer.setSize(width,height);
let container = document.querySelector('#three-container');
container.appendChild(renderer.domElement);

const canvas = renderer.domElement;
const width = canvas.clientWidth;
const height = canvas.clientHeight;

// camera
const fov = 60;
// const aspect = window.innerWidth / window.innerHeight;
const aspect = height / width;
// const aspect = width / height;
const near = 1;
const far = 1000.0;

const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
camera.position.set(-28, 14, 0);
camera.lookAt(0, 0, 0);

function resizeCanvasToDisplaySize() {

  if (canvas.width !== width ||canvas.height !== height) {
    // you must pass false here or three.js sadly fights the browser
    renderer.setSize(width, height, false);
    camera.aspect = aspect;
    camera.updateProjectionMatrix();

    // set render target sizes here
  }
}


// orbitcontrols

// const controls = new THREE.OrbitControls( camera, renderer.domElement );


// Instantiate a loader
const gltfLoader = new THREE.GLTFLoader();

// Load a glTF resource
let url = theme_directory + '/assets/models/castle-low-poly.glb';
console.log(url);

// Load a glTF resource
gltfLoader.load(
    // resource URL
    url,
    // called when the resource is loaded
    function (gltf) {

        scene.add(gltf.scene);
    },
    // called while loading is progressing
    function (xhr) {

        console.log((xhr.loaded / xhr.total * 100) + '% loaded');

    },
    // called when loading has errors
    function (error) {
        console.log('An error happened');
    }
);

// const loader = new THREE.CubeTextureLoader();
// const texture = loader.load([
//     'textures/posx.png',
//     'textures/negx.png',
//     'textures/posy.png',
//     'textures/negy.png',
//     'textures/posz.png',
//     'textures/negz.png',
// ]);
// scene.background = texture;


const light = new THREE.AmbientLight( 0x6060d4 , 1.2 ); // medium white light
scene.add( light );

// const hemisphereLight = new THREE.HemisphereLight( 0xdedeff, 0x080820, 0.96 );
// scene.add( hemisphereLight );

var hemiLight = new THREE.HemisphereLight( 0xffffff, 0x444444 );
hemiLight.position.set( 0, 300, 0 );
scene.add( hemiLight );

var dirLight = new THREE.DirectionalLight( 0xffffff );
dirLight.position.set( 75, 50, -75 );
scene.add( dirLight );

function animate() {
    requestAnimationFrame(animate);
    resizeCanvasToDisplaySize();
    renderer.render(scene, camera);

}
animate();

// const onWindowResize = () => {
//     camera.aspect = aspect;
//     camera.updateProjectionMatrix();
//     renderer.setSize(aspect);
// }

// window.addEventListener('resize', () => {
//     onWindowResize();
// }, false);





let tl = new gsap.timeline({
    scrollTrigger:{
        trigger:'#three-container',
        toggleActions:"play pause resume restart",
    },
    repeat:-1,
    yoyo:true
});

window.addEventListener('load', function () {

    // gsap.to('#jumbo',{
    //         scrollTrigger:{
    //         trigger:'#jumbo',
    //         start: "top top",
    //         end: this.window.innerHeight,
    //         pin: "#jumbo .section__body .flap__right #three-container",
    //         scrub: 4,
    //     }
    // })


    tl.to(camera.position, {
        z: 4,
        x: -18,
        y: 4,
        duration:6,
        ease:'Power2.ease',
        onUpdate: function () {
            camera.lookAt(0, 0, 0);
        }
    }).to(camera.position,{
        z:8,
        x:-24,
        y:16,
        duration:4,
        ease:'Power2.easeOut',
        onUpdate: function () {
            camera.lookAt(0, 0, 0);
        }
    }).to(camera.position,{
        z:6,
        x:-24,
        y:6,
        duration:4,
        ease:'Power2.easeOut',
        onUpdate: function () {
            camera.lookAt(0, 0, 0);
        }
    }).to(camera.position,{
        z:-56,
        x:-32,
        y:10,
        duration:4,
        ease:'Power2.easeIn',
        onUpdate: function () {
            camera.lookAt(0, 0, 0);
        }
    })


})


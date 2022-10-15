


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
const aspect = height / width;
const near = 1;
const far = 1000.0;

const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
camera.position.set(-24, 18, 0);
camera.lookAt(0, 0, 0);

function resizeCanvasToDisplaySize() {

  if (canvas.width !== width ||canvas.height !== height) {
    // you must pass false here or three.js sadly fights the browser
    renderer.setSize(width, height, false);
    camera.aspect = aspect;
    camera.updateProjectionMatrix();
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


const light = new THREE.AmbientLight( 0x606060 , 0.5 ); // weak white light
scene.add( light );

const light2 = new THREE.AmbientLight( 0xa4a4e4 , 0.72 ); // medium blue-white light
scene.add( light2 );


let upColour = 0x727292;
let downColour = 0x404056;

var hemiLight = new THREE.HemisphereLight( upColour , downColour );
scene.add( hemiLight );


var dirLight = new THREE.DirectionalLight( 0xaabbff , 0.5);
scene.add( dirLight );


function animate() {
    requestAnimationFrame(animate);
    resizeCanvasToDisplaySize();
    renderer.render(scene, camera);

}
animate();

const onWindowResize = () => {
    camera.aspect = aspect;
    camera.updateProjectionMatrix();
    renderer.setSize(aspect);
}

window.addEventListener('resize', () => {
    onWindowResize();
}, false);



let tl = new gsap.timeline({
    scrollTrigger:{
        trigger:'#three-container',
        toggleActions:"play pause resume restart",
    },
    repeat:-1,
    yoyo:true
});

window.addEventListener('load', function () {


    tl.to(camera.position, {
        z: 6,
        x: -20,
        y: 12,
        duration:4,
        ease:'Power2.ease',
        onUpdate: function () {
            camera.lookAt(0, 0, 0);
        }
    }).to(camera.position,{
        z:8,
        x:-20,
        y:8,
        duration:4,
        ease:'Power2.ease',
        onUpdate: function () {
            camera.lookAt(0, 0, 0);
        }
    }).to(camera.position,{
        z:-10,
        x:-20,
        y:10,
        duration:4,
        ease:'Power2.easeOut',
        onUpdate: function () {
            camera.lookAt(0, 0, 0);
        }
    })


})




// const pointLight = new THREE.PointLight( 0xaabbff, 1 );
// pointLight.position.set( 0, 50, 0 );
// scene.add( pointLight );
// let myXPos = 0;
// let myZPos = 0;

// let inputXPos = document.querySelector('#xPos');
// let inputZPos = document.querySelector('#zPos');


// let inputLight = document.querySelector('#lights');

// inputLight.addEventListener('change',function(){
//     // console.log(dirLight.intensity);
//     var value = jQuery(this).val();
//     dirLight.intensity = value;
// })


// inputXPos.addEventListener('change',function(){
//     var value = jQuery(this).val();
//     myXPos = value;
//     dirLight.position.set (myXPos,100,myZPos);
//     console.log(dirLight.position);
// })

// inputZPos.addEventListener('change',function(){
//     var value = jQuery(this).val();
//     myZPos = value;
//     dirLight.position.set (myXPos,100,myZPos);
//     console.log(dirLight.position);
// })
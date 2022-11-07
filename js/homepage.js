/****************************** */
/****   gsap animations    **** */
/****************************** */

// import { Observer } from "gsap/Observer";
// import { ScrollToPlugin } from "gsap/ScrollToPlugin";

gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(Observer);

if (window.matchMedia("(max-width: 800px)").matches) {
    // animations mobiles
}
else
{

    gsap.from(".cta svg", {
        scrollTrigger: ".g-text-cta",
        duration: 1,
        y:-40,
        ease: "Power2.easeOut"
    });


    gsap.to(".cta svg path", {
        stroke:'#fff',
        duration:1.2,
        ease: "Power2.easeOut",
    });


    gsap.from(".flap .flap__right img", {
        duration: 4,
        scale: 0.72,
        y: 40,

    });


}

gsap.from(".g-text", {
    scrollTrigger: ".g-text",
    opacity: 0,
    duration: 2.4,
    y: -50,
    stagger: (0.6)
});

gsap.from(".g-text-name", {
    scrollTrigger: ".g-text",
    opacity: 0,
    duration: 1,
    y:-50
});

gsap.to(".g-text-cta span", {
    scrollTrigger: ".g-text-cta",
    textShadow:'0px 0px 0px #fffc,0px 0px 0px #fffc',
    stagger:(0.1),
    duration:0.05
});

gsap.from(".g-text-triggered", {
    scrollTrigger: ".large-text-banner__body",
    opacity: 0,
    duration: 2.4,
    y: -60,
    stagger: (0.6)
});

gsap.from('.three-container',{
    opacity:0,
    ease:'Power2.easeIn',
    duration:3.2
})

gsap.to('#activities .item:nth-child(1) svg path:nth-child(3)',{
    fill:'var(--text-canari)',
    scaleX:0.1,
    duration:2,
    transformOrigin:'center',
    yoyo:true,
    repeat:-1
})



const handleAutoSlideAnimation = () => {
    gsap.to('.autoslide__body__top .scrolling-frame',{
        scrollTrigger:{
            trigger:".autoslide__body__top .scrolling-frame",
            toggleActions:'restart pause reverse pause',
            scrub:8
        },
        duration:16,
        x: '-50%'
    })
    gsap.to('.autoslide__body__bottom .scrolling-frame',{
        scrollTrigger:{
            trigger:".autoslide__body__bottom .scrolling-frame",
            toggleActions:'restart pause reverse pause',
            scrub:8,
            // markers:true
        },
        duration:16,
        x: '50%'
    })
}


if(window.matchMedia("(min-width:800px)").matches)
{
    handleAutoSlideAnimation();
}



/****************************** */
/****** handle navtabs ******** */
/****************************** */


// lorsqu'on clique sur un onglet
// si il a la classe active on lui enleve
let tablinks = document.querySelectorAll('#activities .tabs li');
tablinks.forEach((e) => {
    e.addEventListener('click',function(){

        if(window.matchMedia('max-width:800px')){
            // pas d'interaction mais rendre visible toutes les cards 

        }
        let activeLink = document.querySelector('#activities .tabs li.active');
        let activeContent = document.querySelector('#activities .skill-card.active');
        // let activePicture = document.querySelector('.activities__footer img.active');
        activeLink.classList.remove('active');
        activeContent.classList.remove('active');
        // activePicture.classList.remove('active');
        if(e.classList.contains('active')){
            e.classList.remove('active');
        }
        else
        {
            e.classList.add('active');
        }
        // on lit le data-id du link cliqué
        let dataClicked = e.dataset.id;
        console.log(dataClicked);
        // on display l'element qui a la valeur de data-id
        let contentToDisplay = document.querySelector('#activities .skill-card[data-id='+dataClicked+']');
        // let pictureToDisplay = document.querySelector('.activities__footer img[data-id='+dataClicked+']');
        contentToDisplay.classList.add('active');
        // pictureToDisplay.classList.add('active');
    })
})


/****************************** */
/*** intersection observer  *** */
/****************************** */

const threshold = 0.6;

const activate = function (elem) {
    const id = elem.getAttribute('id');
    const anchor = document.querySelector(`a[href='#${id}']`);
    if (anchor === null) {
        return null;
    }
    anchor.parentElement.parentElement
        .querySelectorAll('.special-active')
        .forEach(node => node.classList.remove('special-active'));
    anchor.parentElement.classList.add('special-active')
}

const callback = function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > threshold) {
            activate(entry.target);
        }
    })
}

const spies = document.querySelectorAll('[data-spy]');

if (spies.length > 0) {
    const observer = new IntersectionObserver(callback, {
        threshold: threshold
    })
    spies.forEach(function (spy) {
        observer.observe(spy);
    })
}


/****************************** */
/****** star animation ******** */
/****************************** */

// handle star animation 
// script qui clone mon objet x fois et l'insere dans le jumbo de manière aléatoire des que le DOM est chargé

const cloneStar = (nbStar) => {

    let item = document.querySelector('#star-animation');
    let container = document.querySelector('#jumbo .section__header');
    let cloneArray = [];
    for (let i = 0; i < nbStar; i++){
        let clone = item.cloneNode(true);
        setStarPosition(clone);
        setStarWidth(clone);
        setInitialStarRotation(clone);
        container.append(clone);
        cloneArray.push(clone)
    }

}

const setRandoms = () => {

    let item = document.querySelector('#star-animation');
    setStarWidth(item);
    setStarPosition(item);
    setInitialStarRotation(item);

}


function randomIntFromInterval(min, max) { // min and max included 
return Math.floor(Math.random() * (max - min + 1) + min)
}


const setStarPosition = (item) => {

    let randomTop = Math.floor(Math.random() * 100);
    let randomLeft = Math.floor(Math.random() * 100);
    item.style.top = randomTop + '%';
    item.style.left = randomLeft + '%';
}

const setStarWidth = (item) => {
    let randomWidth = randomIntFromInterval(0.25,1);
    item.style.width = randomWidth + '%';
}

const setInitialStarRotation = (item) => {
    let randomRotation = Math.floor(Math.random() * 360);
    item.style.transform = "rotate(" + randomRotation + "deg)";
}


const handleStarAnimation = () => {
    gsap.to('#star-animation',{
        opacity:1
    })

    var starTl = gsap.timeline ()
    .to('#star-animation',{
        x: "random(-400, 400, 10)",
        y: "random(-400, 200, 10)",
        duration:'random(6,12)',
        ease:"Power2.ease",
        rotate:"random(0,90)",
        scale:"random(0.5,0.75)",
        repeat:-1,
        repeatRefresh:true, // gets a new random x and y value on each repeat
        yoyo:true
    })

}

const disableLinks = () => {
    let allCategoryLinks = document.querySelectorAll('.project-card__footer a');
    allCategoryLinks.forEach((e) => {
        e.style.pointerEvents = 'none';
    })
}



document.addEventListener('DOMContentLoaded', function () {

    var splide = new Splide('.splide', {
        type: 'loop',
        perPage: 3,
        gap: '3.2rem',
        breakpoints: {
            1200:{
                perPage: 2,
                pagination: false
            },
            800: {
                perPage: 1,
                pagination: false,
                padding: '4rem',
                gap:'2rem'
            },
        }
    });

    splide.mount();
    setRandoms();
    cloneStar(48);
    handleStarAnimation();
    // disableLinks();



    if(window.matchMedia("(max-width:800px)").matches)
    {
        handleMobileGsapAnimation();
    }
})


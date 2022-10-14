/****************************** */
/**** evenement scrolltop  **** */
/****************************** */

const scrollFunction = () => {
    if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 80) {
        jQuery("#header").addClass('navbar-fixed');
    } else {
        jQuery("#header").removeClass('navbar-fixed');
    }
}

const disableLinks = () => {
    let allCategoryLinks = document.querySelectorAll('.project-card__footer a');
    allCategoryLinks.forEach((e) => {
        e.style.pointerEvents = 'none';
    })
}

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

gsap.from(".g-text-triggered", {
    scrollTrigger: ".large-text-banner__body",
    opacity: 0,
    duration: 2.4,
    y: -60,
    stagger: (0.6)
});




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

// handle scrollbar 

gsap.from('.scrollBar',{
    scrollTrigger:{
        trigger:'body',
        start:'top top',
        end: "bottom 100%",
        scrub:3.2,
    },
    backgroundColor:'var(--text-canari)',
    scaleX:0,
    transformOrigin:'left center'
})


/************************************* */
/****   gsap animations mobile    **** */
/************************************* */

const handleMobileGsapAnimation = () => {

    gsap.from(".skill-card:nth-child(1)", {
        scrollTrigger: ".skill-card:nth-child(1)",
        opacity: 0,
        duration: 3,
        scale: 0.40,
        y: -100
    });
    gsap.from(".skill-card:nth-child(2)", {
        scrollTrigger: ".skill-card:nth-child(2)",
        opacity: 0,
        duration: 2.4,
        scale: 0.56,
        y: -80
    });
    gsap.from(".skill-card:nth-child(3)", {
        scrollTrigger: ".skill-card:nth-child(3)",
        opacity: 0,
        duration: 3,
        scale: 0.40,
        y: -100
    });
    gsap.from(".skill-card:nth-child(4)", {
        scrollTrigger: ".skill-card:nth-child(4)",
        opacity: 0,
        duration: 2.4,
        scale: 0.56,
        y: -80
    });

}



/****************************** */
/*** intersection observer  *** */
/****************************** */


let statContainer = document.getElementById('stats');

const config = {
    root: null, // viewport
    rootMargin: '0px',
    threshold: 0.75
};

let observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio >= config.threshold) {
            bar.animate(0.48); // Number from 0.0 to 1.0
            barTwo.animate(0.16); // Number from 0.0 to 1.0
            barThree.animate(0.4); // Number from 0.0 to 1.0
            // entry.target.classList.add("active");
        }
    });
}, config);


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
/****   cursor animation   **** */
/****************************** */


var rjs_cursor = document.getElementById("rjs_cursor"); //Getting the cursor
var body = document.querySelector("body"); //Get the body element

//Functions for showing and hiding the cursor
//They are referenced the 
function rjs_show_cursor(e) { //Function to show/hide the cursor
    if (rjs_cursor.classList.contains('rjs_cursor_hidden')) {
        rjs_cursor.classList.remove('rjs_cursor_hidden');
    }
    rjs_cursor.classList.add('rjs_cursor_visible');
}

function rjs_hide_cursor(e) {
    if (rjs_cursor.classList.contains('rjs_cursor_visible')) {
        rjs_cursor.classList.remove('rjs_cursor_visible');
    }
    rjs_cursor.classList.add('rjs_cursor_hidden');
}


function rjs_mousemove(e) { //Function to correctly position the cursor
    rjs_show_cursor(); //Toggle show/hide

    var rjs_cursor_width = rjs_cursor.offsetWidth * 0.5;
    var rjs_cursor_height = rjs_cursor.offsetHeight * 0.5;

    var rjs_cursor_x = e.clientX - rjs_cursor_width; //x-coordinate
    var rjs_cursor_y = e.clientY - rjs_cursor_height; //y-coordinate
    var rjs_cursor_pos = `translate(${rjs_cursor_x}px, ${rjs_cursor_y}px)`;
    rjs_cursor.style.transform = rjs_cursor_pos;
}


//Hover behaviour

function rjs_hover_cursor(e) {
    rjs_cursor.classList.add('rjs_cursor_hover');
}

function rjs_unhover_cursor(e) {
    rjs_cursor.classList.remove('rjs_cursor_hover');
}

// hover input behavior

function rjs_hover_input_cursor(e) {
    rjs_cursor.classList.add('rjs_cursor_hover_input');
}

function rjs_unhover__input_cursor(e) {
    rjs_cursor.classList.remove('rjs_cursor_hover_input');
}


document.querySelectorAll('a, #footer .frame svg,.splide__arrow,.cta,button,.activities__body__left ul li').forEach(item => {
    item.addEventListener('mouseover', rjs_hover_cursor);
    item.addEventListener('mouseleave', rjs_unhover_cursor);
})

document.querySelectorAll('input:not([type="submit"]),textarea').forEach(item => {
    item.addEventListener('mouseover', rjs_hover_input_cursor);
    item.addEventListener('mouseleave', rjs_unhover__input_cursor);
})

/****************************** */
/****** theme selector ******** */
/****************************** */


const themeStylesheet = document.getElementById('themeStylesheet');

var rad = document.querySelectorAll('#themeSelect input');
var prev = null;
for (var i = 0; i < rad.length; i++) {
    rad[i].addEventListener('change', function () {
        (prev) ? console.log(prev.value): null;
        if (this !== prev) {
            prev = this;
        }
        themeStylesheet.setAttribute('href',
            'https://leviathan-pacifique.com/wp-content/themes/leviathan-pacifique/assets/css/themes/' + this.value + '.css');
    });
}

const toggleArrow = document.querySelector('.theme-picker__heading');

const initThemeSwitcherStatus = () => {
    let toggleBox = toggleArrow.parentElement.children[1];
    jQuery(toggleBox).hide();
    jQuery(toggleArrow.parentElement).addClass('small-window');

}

initThemeSwitcherStatus();

toggleArrow.addEventListener('click', function () {
    let toggleBox = this.parentElement.children[1];
    jQuery(toggleBox).slideToggle();
    jQuery(this.parentElement).toggleClass('small-window', 1000, "easeOutSine");

    setTimeout(function(){
        jQuery(toggleBox).slideToggle(500);
        jQuery(toggleArrow.parentElement).addClass('small-window');
    },4800)
})

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
        let activePicture = document.querySelector('.activities__footer img.active');
        activeLink.classList.remove('active');
        activeContent.classList.remove('active');
        activePicture.classList.remove('active');
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
        let pictureToDisplay = document.querySelector('.activities__footer img[data-id='+dataClicked+']');
        contentToDisplay.classList.add('active');
        pictureToDisplay.classList.add('active');
    })
})


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
        scale:"random(0.25,0.75)",
        repeat:-1,
        repeatRefresh:true, // gets a new random x and y value on each repeat
        yoyo:true
    })


}



//Eventlisteners

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
                pagination: false
            },
        }
    });

    splide.mount();
    disableLinks();
    window.onscroll = function () {
        scrollFunction();
    };
    if(window.matchMedia("(max-width:800px)").matches)
    {
        handleMobileGsapAnimation();
    }

    // cursor events 
    window.addEventListener('mousemove', rjs_mousemove); //Attach an event listener
    body.addEventListener('mouseleave', rjs_hide_cursor);

    setRandoms();
    cloneStar(72);
    handleStarAnimation();

});



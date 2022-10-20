
/****************************** */
/****   cursor animation   **** */
/****************************** */


// var rjs_cursor = document.getElementById("rjs_cursor"); //Getting the cursor
// var body = document.querySelector("body"); //Get the body element

// //Functions for showing and hiding the cursor
// //They are referenced the 
// function rjs_show_cursor(e) { //Function to show/hide the cursor
//     if (rjs_cursor.classList.contains('rjs_cursor_hidden')) {
//         rjs_cursor.classList.remove('rjs_cursor_hidden');
//     }
//     rjs_cursor.classList.add('rjs_cursor_visible');
// }

// function rjs_hide_cursor(e) {
//     if (rjs_cursor.classList.contains('rjs_cursor_visible')) {
//         rjs_cursor.classList.remove('rjs_cursor_visible');
//     }
//     rjs_cursor.classList.add('rjs_cursor_hidden');
// }


// function rjs_mousemove(e) { //Function to correctly position the cursor
//     rjs_show_cursor(); //Toggle show/hide

//     var rjs_cursor_width = rjs_cursor.offsetWidth * 0.5;
//     var rjs_cursor_height = rjs_cursor.offsetHeight * 0.5;

//     var rjs_cursor_x = e.clientX - rjs_cursor_width; //x-coordinate
//     var rjs_cursor_y = e.clientY - rjs_cursor_height; //y-coordinate
//     var rjs_cursor_pos = `translate(${rjs_cursor_x}px, ${rjs_cursor_y}px)`;
//     rjs_cursor.style.transform = rjs_cursor_pos;
// }


// //Hover behaviour

// function rjs_hover_cursor(e) {
//     rjs_cursor.classList.add('rjs_cursor_hover');
// }

// function rjs_unhover_cursor(e) {
//     rjs_cursor.classList.remove('rjs_cursor_hover');
// }

// // hover input behavior

// function rjs_hover_input_cursor(e) {
//     rjs_cursor.classList.add('rjs_cursor_hover_input');
// }

// function rjs_unhover__input_cursor(e) {
//     rjs_cursor.classList.remove('rjs_cursor_hover_input');
// }


// document.querySelectorAll('a, #footer .frame svg,.splide__arrow,.cta,button,.activities__body__left ul li').forEach(item => {
//     item.addEventListener('mouseover', rjs_hover_cursor);
//     item.addEventListener('mouseleave', rjs_unhover_cursor);
// })

// // document.querySelectorAll('input:not([type="submit"]):not([type="radio"])),textarea').forEach(item => {
// document.querySelectorAll('input[type="text"],textarea').forEach(item => {
//     item.addEventListener('mouseover', rjs_hover_input_cursor);
//     item.addEventListener('mouseleave', rjs_unhover__input_cursor);
// })




// //Eventlisteners

// document.addEventListener('DOMContentLoaded', function () {

//     // cursor events 
//     window.addEventListener('mousemove', rjs_mousemove); //Attach an event listener
//     body.addEventListener('mouseleave', rjs_hide_cursor);


// });

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


document.addEventListener('DOMContentLoaded', function () {

    window.onscroll = function () {
        scrollFunction();
    };

})
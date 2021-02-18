/* Cookies popup */
setTimeout(() => {
    let btn = document.querySelector(".cc-dismiss");
    let cookiesWindow = document.querySelector(".cc-window");
    const cookiesImg = document.querySelector(".cookiesImg");
    setTimeout(() => {

    }, 1000);
    if(cookiesWindow) {
        let cookiesHeight = cookiesWindow.clientHeight;
        console.log(cookiesHeight / 2);
        if(cookiesHeight === 0) {
            cookiesImg.style.display = "none";
        }
        cookiesImg.style.bottom = cookiesHeight / 2 + "px";
    }
    else {
        cookiesImg.style.display = "none";
    }
    if(btn) {
        btn.addEventListener("click", () => {
            cookiesImg.style.display = "none";
            console.log("click!");
        });
    }
}, 1000);

/* Hamburger menu */

const openMenu = () => {
    document.querySelector(".mobileMenuContainer").style.display = "block";
    document.querySelector("body").style.height = "100vh";
    document.querySelector("body").style.overflowY = "hidden";

    let tl = gsap.timeline();

    tl.to(".mobileMenuContainer", { height: window.screen.height, duration: .5, ease: Power3.easeOut })
        .to(".mobileMenuTop", { opacity: 1, duration: .2 })
        .to(".mobileMenu", { opacity: 1, duration: .2 })
        .to(".mobileMenuBottom", { opacity: 1, duration: .2 });
}

const closeMenu = () => {
    let tl = gsap.timeline();

    tl.to(".mobileMenuBottom", { opacity: 0, duration: .2 })
        .to(".mobileMenu", { opacity: 0, duration: .2 })
        .to(".mobileMenuTop", { opacity: 0, duration: .2 })
        .to(".mobileMenuContainer", { height: 0, duration: .5, ease: Power3.easeOut })
        .then(() => {
            setTimeout(() => {
                document.querySelector("body").style.height = "auto";
                document.querySelector("body").style.overflowY = "visible";
                document.querySelector(".mobileMenuContainer").style.display = "none";
            }, 500);
        });
}

const konferencja = (n) => {
    let el;
    switch(n) {
        case 1:
            el = document.querySelector("#oKonferencji");
            break;
        case 2:
            el = document.querySelector("#agenda");
            break;
        case 3:
            el = document.querySelector("#pregegenci");
            break;
        case 4:
            el = document.querySelector("#galeria");
            break;
        default:
            el = document.querySelector("#partnerzy");
            break;
    }

    el.scrollIntoView({
        top: 140,
        behavior: "smooth"
    });
}

const optionsSection1 = {
    root: null,
    rootMargin: '500px',
    threshold: 1
};

/* Wjezdzanie elementow na stronie glownej */
let onPage = [false, false, false, false, false];
const firstSection = document.querySelector("#firstSection");
const secondSection = document.querySelector("#secondSection");
const thirdSection = document.querySelector("#thirdSection");
const fourthSection = document.querySelector("#fourthSection");
const fifthSection = document.querySelector("#fifthSection");
const misjaLeft = document.querySelector(".misjaLeft");
const misjaRight = document.querySelector(".misjaRight");
const threeBoxes = document.querySelector(".threeBoxes");
const wierzymyLeft = document.querySelector(".wierzymyLeft");
const wierzymyRight = document.querySelector(".wierzymyRight");
const oferta = document.querySelector(".oferta");
const referencjeLeft = document.querySelector(".referencjeLeft");
const referencjeRight = document.querySelector(".referencjeRight");

let observerSection1 = new IntersectionObserver((entries) => {
    for (const entry of entries) {
        if(entry.isIntersecting) {
            if((entry.target.id === 'firstSection')&&(!onPage[0])) {
                onPage[0] = true;
                gsap.fromTo([misjaLeft, misjaRight], { y: 300 }, { y: 0, duration: .5, ease: Power1.easeOut });
                gsap.fromTo([misjaLeft, misjaRight], { opacity: 0 }, { opacity: 1, duration: 1 });
            }
            else if((entry.target.id === 'secondSection')&&(!onPage[1])) {
                onPage[1] = true;
                gsap.fromTo(threeBoxes, { y: 300 }, { y: 0, duration: .5, ease: Power1.easeOut });
                gsap.fromTo(threeBoxes, { opacity: 0 }, { opacity: 1, duration: 1 });
            }
            else if((entry.target.id === 'thirdSection')&&(!onPage[2])) {
                onPage[2] = true;
                gsap.fromTo([wierzymyLeft, wierzymyRight], { y: 300 }, { y: 0, duration: .5, ease: Power1.easeOut });
                gsap.fromTo([wierzymyLeft, wierzymyRight], { opacity: 0 }, { opacity: 1, duration: 1 });
            }
            else if((entry.target.id === 'fourthSection')&&(!onPage[3])) {
                onPage[3] = true;
                gsap.fromTo(oferta, { y: 300 }, { y: 0, duration: .5, ease: Power1.easeOut });
                gsap.fromTo(oferta, { opacity: 0 }, { opacity: 1, duration: 1 });
            }
            else if((entry.target.id === 'fifthSection')&&(!onPage[4])) {
                onPage[4] = true;
                gsap.fromTo([referencjeLeft, referencjeRight], { y: 300 }, { y: 0, duration: .5, ease: Power1.easeOut });
                gsap.fromTo([referencjeLeft, referencjeRight], { opacity: 0 }, { opacity: 1, duration: 1 });

            }
        }
    }
}, optionsSection1);

if(misjaLeft !== null) {
    gsap.set([misjaLeft, misjaRight, wierzymyLeft, wierzymyRight, threeBoxes, oferta, referencjeLeft, referencjeRight], {y: 300, opacity: 0});
    observerSection1.observe(firstSection);
    observerSection1.observe(secondSection);
    observerSection1.observe(thirdSection);
    observerSection1.observe(fourthSection);
    observerSection1.observe(fifthSection);
}

/* Konferencja - zmiana koloru elementow menu */
let konfMenu1 = document.querySelector("#konfMenu1");
let konfMenu2 = document.querySelector("#konfMenu2");
let konfMenu3 = document.querySelector("#konfMenu3");
let konfMenu4 = document.querySelector("#konfMenu4");
let konfMenu5 = document.querySelector("#konfMenu5");

const konfMenuArr = [konfMenu1, konfMenu2, konfMenu3, konfMenu4, konfMenu5];

const konferencjaMenu = () => {
    let options1 = {
        root: null,
        rootMargin: '0px',
        threshold: 1
    };
    let options2 = {
        root: null,
        rootMargin: '0px',
        threshold: .3
    };
    let options3 = {
        root: null,
        rootMargin: '0px',
        threshold: .2
    };
    let options4 = {
        root: null,
        rootMargin: '0px',
        threshold: .5
    };
    let options5 = {
        root: null,
        rootMargin: '0px',
        threshold: .9
    };

    let observer1 = new IntersectionObserver((entries) => {
        for (const entry of entries) {
            if(entry.isIntersecting) {
               konfMenuArr.forEach(item => {
                  if(item !== null) {
                      item.style.fontWeight = "400";
                      item.style.color = "#BABDBC";
                  }
               });
               konfMenu1.style.fontWeight = "700";
               konfMenu1.style.color = "#3D4543";
            }
        }
    }, options1);
    let observer2 = new IntersectionObserver((entries) => {
        for (const entry of entries) {
            if(entry.isIntersecting) {
                konfMenuArr.forEach(item => {
                    if(item !== null) {
                        item.style.fontWeight = "400";
                        item.style.color = "#BABDBC";
                    }
                });
                konfMenu2.style.fontWeight = "700";
                konfMenu2.style.color = "#3D4543";
            }
        }
    }, options2);
    let observer3 = new IntersectionObserver((entries) => {
        for (const entry of entries) {
            if(entry.isIntersecting) {
                konfMenuArr.forEach(item => {
                    if(item !== null) {
                        item.style.fontWeight = "400";
                        item.style.color = "#BABDBC";
                    }
                });
                konfMenu3.style.fontWeight = "700";
                konfMenu3.style.color = "#3D4543";
            }
        }
    }, options3);
    let observer4 = new IntersectionObserver((entries) => {
        for (const entry of entries) {
            if(entry.isIntersecting) {
                konfMenuArr.forEach(item => {
                    if(item !== null) {
                        item.style.fontWeight = "400";
                        item.style.color = "#BABDBC";
                    }
                });
                konfMenu4.style.fontWeight = "700";
                konfMenu4.style.color = "#3D4543";
            }
        }
    }, options4);
    let observer5 = new IntersectionObserver((entries) => {
        for (const entry of entries) {
            if(entry.isIntersecting) {
                konfMenuArr.forEach(item => {
                    if(item !== null) {
                        item.style.fontWeight = "400";
                        item.style.color = "#BABDBC";
                    }
                });
                konfMenu5.style.fontWeight = "700";
                konfMenu5.style.color = "#3D4543";
            }
        }
    }, options5);

    let sec1 = document.querySelector(".oKonferencji");
    let sec2 = document.querySelector(".agenda");
    let sec3 = document.querySelector(".prelegenci");
    let sec4 = document.querySelector(".galeria");
    let sec5 = document.querySelector(".partnerzy");

    if(sec1 !== null) observer1.observe(sec1);
    if(sec2 !== null) observer2.observe(sec2);
    if(sec3 !== null) observer3.observe(sec3);
    if(sec4 !== null) observer4.observe(sec4);
    if(sec5 !== null) observer5.observe(sec5);
}

if(document.querySelector("#oKonferencji") !== null) {
    konferencjaMenu();
}

if(document.querySelector(".konferencjaContainer") !== null) {
    konferencjaMenu();
}

/* Lean nawigator - poziomy progressBar */
const pbPoziomo = document.querySelector(".progressGreenNawigator");
let i = 1, tmp;

const boxItem1 = document.querySelector("#boxItem1");
const boxItem2 = document.querySelector("#boxItem2");
const boxItem3 = document.querySelector("#boxItem3");

const boxItemCircle1 = document.querySelector("#boxItem1>.circleOuter");
const boxItemCircle2 = document.querySelector("#boxItem2>.circleOuter");
const boxItemCircle3 = document.querySelector("#boxItem3>.circleOuter");

const boxItemInner1 = document.querySelector("#boxItem1>.circleOuter>.circleInner");
const boxItemInner2 = document.querySelector("#boxItem2>.circleOuter>.circleInner");
const boxItemInner3 = document.querySelector("#boxItem3>.circleOuter>.circleInner");

window.addEventListener("scroll", () => {
    if(pbPoziomo !== null) {
        if(window.pageYOffset < 900) {
            pbPoziomo.style.width = (window.pageYOffset * 1.6) + "px";
        }

        console.log(window.pageYOffset);

        /* Box item 1 */
        if((window.pageYOffset > 10)&&(window.pageYOffset < 300)) {
            boxItem1.style.borderColor = "#6E8A37";
            boxItemInner1.style.background = "#6E8A37";
            boxItemCircle1.style.background = "#D4DEC0";
        }
        else {
            boxItem1.style.borderColor = "#EDEDED";
            boxItemInner1.style.background = "#BABDBC";
            boxItemCircle1.style.background = "#f8f8f8";
        }

        /* Box item 2 */
        if((window.pageYOffset >= 300)&&(window.pageYOffset < 600)) {
            boxItem2.style.borderColor = "#6E8A37";
            boxItemInner2.style.background = "#6E8A37";
            boxItemCircle2.style.background = "#D4DEC0";
        }
        else {
            boxItem2.style.borderColor = "#EDEDED";
            boxItemInner2.style.background = "#BABDBC";
            boxItemCircle2.style.background = "#f8f8f8";
        }

        /* Box item 3 */
        if(window.pageYOffset >= 600) {
            boxItem3.style.borderColor = "#6E8A37";
            boxItemInner3.style.background = "#6E8A37";
            boxItemCircle3.style.background = "#D4DEC0";
        }
        else {
            boxItem3.style.borderColor = "#EDEDED";
            boxItemInner3.style.background = "#BABDBC";
            boxItemCircle3.style.background = "#f8f8f8";
        }
    }
});

/* Lean nawigator - pionowy progressBar */
const rect1 = document.querySelector("#rect1");
const rect2 = document.querySelector("#rect2");
const rect3 = document.querySelector("#rect3");

const rect1Arrow = document.querySelector("#rect1>.arrow-right");
const rect2Arrow = document.querySelector("#rect2>.arrow-right");
const rect3Arrow = document.querySelector("#rect3>.arrow-right");

const smsCircle1 = document.querySelector("#smsCircle1");
const smsCircle2 = document.querySelector("#smsCircle2");
const smsCircle3 = document.querySelector("#smsCircle3");

const smsCircleInner1 = document.querySelector("#smsCircleInner1");
const smsCircleInner2 = document.querySelector("#smsCircleInner2");
const smsCircleInner3 = document.querySelector("#smsCircleInner3");

const pbPionowo = document.querySelector(".progressBarPionowo");

let optionsPB = {
    root: null,
    rootMargin: '0px',
    threshold: 1
};

let newPoint, startPoint, first2 = true, top2 = true;

window.addEventListener("scroll", () => {
    if(!first2) {
        console.log(newPoint-startPoint);

        /* Pierwsza baza */
        if (newPoint - startPoint > 260) {
            rect1.style.background = "#6E8A37";
            rect1Arrow.style.borderLeftColor = "#6E8A37";

            smsCircle1.style.background = "#D4DEC0";
            smsCircleInner1.style.background = "#6E8A37";
        } else {
            rect1.style.background = "#BABDBC";
            rect1Arrow.style.borderLeftColor = "#BABDBC";

            smsCircle1.style.background = "#F8F8F8";
            smsCircleInner1.style.background = "#BABDBC";
        }

        /* Druga baza */
        if (newPoint - startPoint > 650) {
            rect2.style.background = "#6E8A37";
            rect2Arrow.style.borderLeftColor = "#6E8A37";

            smsCircle2.style.background = "#D4DEC0";
            smsCircleInner2.style.background = "#6E8A37";
        } else {
            rect2.style.background = "#BABDBC";
            rect2Arrow.style.borderLeftColor = "#BABDBC";

            smsCircle2.style.background = "#F8F8F8";
            smsCircleInner2.style.background = "#BABDBC";
        }

        /* Trzecia baza */
        if (newPoint - startPoint > 990) {
            rect3.style.background = "#6E8A37";
            rect3Arrow.style.borderLeftColor = "#6E8A37";

            smsCircle3.style.background = "#D4DEC0";
            smsCircleInner3.style.background = "#6E8A37";
        } else {
            rect3.style.background = "#BABDBC";
            rect3Arrow.style.borderLeftColor = "#BABDBC";

            smsCircle3.style.background = "#F8F8F8";
            smsCircleInner3.style.background = "#BABDBC";
        }

        if (window.pageYOffset > 1850) {
            pbPionowo.style.height = "100%";
            rect3.style.background = "#6E8A37";
            rect3Arrow.style.borderLeftColor = "#6E8A37";

            smsCircle3.style.background = "#D4DEC0";
            smsCircleInner3.style.background = "#6E8A37";
        } else {
            newPoint = window.pageYOffset;
            pbPionowo.style.height = (newPoint - startPoint - 210) + "px";
        }
    }
});

let observerPB = new IntersectionObserver((entries) => {
    for (const entry of entries) {
        if(entry.isIntersecting) {
            if(entry.target.id === "rect1") {
                if(top2) {
                    startPoint = window.pageYOffset;
                    top2 = false;
                }
                if(first2) {
                    /* Rozpoczynamy napelnianie linii */
                    first2 = false;
                }
            }
            /*else if(entry.target.id === "rect2") {
                rect2.style.background = "#6E8A37";
                rect2Arrow.style.borderLeftColor = "#6E8A37";

                smsCircle2.style.background = "#D4DEC0";
                smsCircleInner2.style.background = "#6E8A37";
            }
            else if(entry.target.id === "rect3") {
                rect3.style.background = "#6E8A37";
                rect3Arrow.style.borderLeftColor = "#6E8A37";

                smsCircle3.style.background = "#D4DEC0";
                smsCircleInner3.style.background = "#6E8A37";
            }*/
        }
    }
}, optionsPB);

if(rect1 !== null) observerPB.observe(rect1);
if(rect2 !== null) observerPB.observe(rect2);
if(rect3 !== null) observerPB.observe(rect3);

/* Walidacja formularza */
if(document.querySelector("form") !== null) {
    const submitBtn = document.querySelector("input[type=submit]");

    submitBtn.addEventListener("click", () => {

       setTimeout(() => {
           if(document.querySelector(".your-name>.wpcf7-not-valid-tip") !== null) {
               document.querySelector(".your-name").style.borderBottom = "2px solid red";
               document.querySelector("input[name=your-name]").style.borderBottom = "none";
           }
           else {
               document.querySelector(".your-name").style.borderBottom = "none";
               document.querySelector("input[name=your-name]").style.borderBottom = "2px solid #BABDBC";
           }

           if(document.querySelector(".your-email>.wpcf7-not-valid-tip") !== null) {
               document.querySelector(".your-email").style.borderBottom = "2px solid red";
               document.querySelector("input[name=your-email]").style.borderBottom = "none";
           }
           else {
               document.querySelector(".your-email").style.borderBottom = "none";
               document.querySelector("input[name=your-email]").style.borderBottom = "2px solid #BABDBC";
           }

           if(document.querySelector(".your-subject>.wpcf7-not-valid-tip") !== null) {
               document.querySelector(".your-subject").style.borderBottom = "2px solid red";
               document.querySelector("input[name=your-subject]").style.borderBottom = "none";
           }
           else {
               document.querySelector(".your-subject").style.borderBottom = "none";
               document.querySelector("input[name=your-subject]").style.borderBottom = "2px solid #BABDBC";
           }

       }, 300);
    });
}

/* Slider - progress circle */
let circle1 = document.querySelector('#circle1');
let circle2 = document.querySelector('#circle2');

let circle1M = document.querySelectorAll('#circle1M');
let circle2M = document.querySelectorAll('#circle2M');

let inner1 = document.querySelector('#circleI1');
let inner2 = document.querySelector('#circleI2');

let inner1M = document.querySelectorAll('#circleI1M');
let inner2M = document.querySelectorAll('#circleI2M');

let slide1 = document.querySelector("#landing1");
let slide2 = document.querySelector("#landing2");

let left1 = document.querySelector("#left1");
let left2 = document.querySelector("#left2");

const circles = [circle1, circle2];
const inners = [inner1, inner2];

/* Array od arrays */
const circlesM = [circle1M, circle2M];
const innersM = [inner1M, inner2M];

const slides = [slide1, slide2];
const lefts = [left1, left2];

let radius, circumference;

if((circle1 !== null)||(circle1M !== null)) {
    if(window.innerWidth > 1100) {
        radius = circle1.r.baseVal.value;
        circumference = radius * 2 * Math.PI;

        for(let i=0; i<2; i++) {
            circles[i].style.strokeDasharray = `${circumference} ${circumference}`;
            circles[i].style.strokeDashoffset = "0";
        }
    }
    else {
        radius = circle1M[0].r.baseVal.value;
        circumference = radius * 2 * Math.PI;

        for(let i=0; i<2; i++) {
            circlesM[i].forEach(item => {
                item.style.strokeDasharray = `${circumference} ${circumference}`;
                item.style.strokeDashoffset = "0";
            });
        }
    }
}

const setProgress = (circle, percent) => {
    const offset = circumference - percent / 300 * circumference;
    circles[circle].style.strokeDashoffset = offset.toString();
}

const setMobileProgress = (circle, percent) => {
    const offset = circumference - percent / 300 * circumference;
    if(circlesM[circle] !== undefined) {
        circlesM[circle].forEach((item) => {
            item.style.strokeDashoffset = offset.toString();
        });
    }
}

let slide = 0;
let stopSlider = false;

const goSlider = (n) => {
    let i = 0, circle = n, tmp;
    circles[n].style.stroke = "#6E8A37";
    inners[n].style.fill = "#6E8A37";

    gsap.set(lefts, { opacity: 0, x: -50 });
    gsap.fromTo(slides, { x: 0 }, { x: 2000, opacity: 0, duration: 1 });
    gsap.fromTo(slides[n], { x: -2000 }, { x: 0, opacity: 1, duration: 1 })
        .then(() => {
           gsap.to(lefts, { opacity: 1, x: 0, duration: .4 });
        });

    let sliderInterval = setInterval(() => {
        if(i === 2) {
            circles[circle].style.stroke = "#6E8A37";
        }

        if(i <= 300) {
            if(stopSlider) {
                stopSlider = false;
                resetCircles(slide); /* Wysylamy slide, ktory bedzie naszym nowym slidem */
                clearInterval(sliderInterval);
            }
            setProgress(circle, i);
            i++;
        }
        else {
            slide++;
            inners[circle].style.fill = "#cdcdcd";
            circles[circle].style.stroke = "none";
            circle++;
            if(circle === 2) circle = 0;
            inners[circle].style.fill = "#6E8A37";
            i = 0;

            if(circle === 0) tmp = 1;
            else tmp = circle - 1;

            gsap.set(lefts, { opacity: 0, x: -50 });
            gsap.fromTo(slides[tmp], { x: 0 }, { x: 2000, opacity: 0, duration: 1 });
            gsap.fromTo(slides[circle], { x: -2000 }, { x: 0, opacity: 1, duration: 1 })
                .then(() => {
                    gsap.to(lefts, { opacity: 1, x: 0, duration: .4 });
                });

        }
    }, 30);
}

const resetCircles = (slide) => {
    for(let i=0; i<2; i++) {
        inners[i].style.fill = "#cdcdcd";
        circles[i].style.stroke = "none";
    }
    inners[slide].style.fill = "#6E8A37";
}

const nextSlide = (n = -1) => {
    if(n === -1) slide++;
    else slide = n;
    if(slide === 2) slide = 0;
    stopSlider = true;
    goSlider(slide);
}

/* Slider - mobile */
const goSliderMobile = (n, different = false) => {
    let i = 0, circle = n, tmp;
    if((circlesM[n] !== undefined)&&(innersM[n] !== undefined)) {
        circlesM[n].forEach(item => {
            item.style.stroke = "#6E8A37";
        });
        innersM[n].forEach(item => {
            item.style.fill = "#6E8A37";
        });
    }

    if(different) {
        gsap.fromTo(slides, { x: 0 }, { x: -2000, opacity: 0, duration: 1 });
        gsap.fromTo(slides[n], { x: 2000 }, { x: 0, opacity: 1, duration: 1 });
    }
    else {
        gsap.fromTo(slides, { x: 0 }, { x: 2000, opacity: 0, duration: 1 });
        gsap.fromTo(slides[n], { x: -2000 }, { x: 0, opacity: 1, duration: 1 });
    }

    let sliderInterval = setInterval(() => {
        if(i === 2) {
            if(circlesM[circle] !== undefined) {
                circlesM[circle].forEach(item => {
                    item.style.stroke = "#6E8A37";
                });
            }
        }

        if(i <= 300) {
            if(stopSlider) {
                stopSlider = false;
                resetMobileCircles(slide);
                clearInterval(sliderInterval);
            }
            setMobileProgress(circle, i);
            i++;
        }
        else {
            slide++;
            if((innersM[circle] !== undefined)&&(circlesM[circle] !== undefined)) {
                innersM[circle].forEach(item => {
                    item.style.fill = "#cdcdcd";
                });
                circlesM[circle].forEach(item => {
                    item.style.stroke = "none";
                });
            }
            circle++;
            if(circle === 2) circle = 0;
            if(innersM[circle] !== undefined) {
                innersM[circle].forEach(item => {
                    item.style.fill = "#6E8A37";
                });
            }
            i = 0;

            if(circle === 0) tmp = 1;
            else tmp = circle - 1;

            gsap.fromTo(slides[tmp], { x: 0 }, { x: 2000, opacity: 0, duration: 1 });
            gsap.fromTo(slides[circle], { x: -2000 }, { x: 0, opacity: 1, duration: 1 });
        }
    }, 30);
}

const resetMobileCircles = () => {
    for(let i=0; i<2; i++) {
        if((innersM[i] !== undefined)&&(circlesM[i] !== undefined)) {
            innersM[i].forEach(item => {
                item.style.fill = "#cdcdcd";
            });
            circlesM[i].forEach(item => {
                item.style.stroke = "none";
            });
        }
    }
    if(innersM[slide] !== undefined) {
        innersM[slide].forEach(item => {
            item.style.fill = "#6E8A37";
        });
    }
}

const nextMobileSlide = (n = -1, different = true) => {
    if(n === -1) slide++;
    else slide = n;
    if(slide === 2) slide = 0;
    stopSlider = true;
    goSliderMobile(slide, different);
}

if(window.innerWidth > 1100) {
    goSlider(0);
}
else {
    goSliderMobile(0);
}

/* Slider on mobile - swipe */

document.querySelector(".landing").addEventListener('touchstart', handleTouchStart, { passive: true });
document.querySelector(".landing").addEventListener('touchmove', handleTouchMove, { passive: true });
var xDown = null;
var yDown = null;

function handleTouchStart(evt) {
    xDown = evt.touches[0].clientX;
    yDown = evt.touches[0].clientY;
}

function handleTouchMove(evt) {
    if ( ! xDown || ! yDown ) {
        return;
    }
    var xUp = evt.touches[0].clientX;
    var yUp = evt.touches[0].clientY;
    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {
        if ( xDiff > 0 ) { // W lewo
            if(slide === 3) slide = 0;
            else slide++;
            nextMobileSlide(slide);
        } else { // W prawo
            if(slide === 0) slide = 1;
            else slide--;
            nextMobileSlide(slide, false);
        }
    }

    /* reset values */
    xDown = null;
    yDown = null;
}

/* Licznik */
const c1 = document.querySelector("#count1");
const c2 = document.querySelector("#count2");
const c3 = document.querySelector("#count3");
const c4 = document.querySelector("#count4");
const c5 = document.querySelector("#count5");
const c6 = document.querySelector("#count6");
const c7 = document.querySelector("#count7");

const c1Value = c1.textContent;
const c2Value = c2.textContent;
const c3Value = c3.textContent;
const c4Value = c4.textContent;
const c5Value = c5.textContent;
const c6Value = c6.textContent;
const c7Value = c7.textContent;

let first = true;

window.addEventListener("scroll", () => {
   if(window.pageYOffset > 300) {
        if(first) {
            startCounting();
            first = false;
        }
   }
});

const startCounting = () => {
    let i1 = c1Value,
        i2 = c2Value,
        i3 = c3Value,
        i4 = c4Value,
        i5 = c5Value,
        i6 = c6Value,
        i7 = c7Value;
    let val1, val2, val3, val4, val5, val6, val7;

    let interval1 = setInterval(() => {
        if(i1 >= 0) {
            val1 = c1Value - i1;
            c1.textContent = val1.toString();
            i1--;
        }
        else {
            clearInterval(interval1);
        }
    }, 100);

    let interval2 = setInterval(() => {
        if(i2 >= 0) {
            val2 = c2Value - i2;
            c2.textContent = val2.toString();
            i2--;
        }
        else {
            clearInterval(interval2);
        }
    }, 20);

    let interval3 = setInterval(() => {
        if(i3 >= 0) {
            val3 = c3Value - i3;
            c3.textContent = val3.toString();
            i3--;
        }
        else {
            clearInterval(interval3);
        }
    }, 100);

    let interval4 = setInterval(() => {
        if(i4 >= 0) {
            val4 = c4Value - i4;
            c4.textContent = val4.toString();
            i4--;
        }
        else {
            clearInterval(interval4);
        }
    }, 100);

    let interval5 = setInterval(() => {
        if(i5 >= 0) {
            val5 = c5Value - i5;
            c5.textContent = val5.toString();
            i5--;
        }
        else {
            clearInterval(interval5);
        }
    }, 5);

    let interval6 = setInterval(() => {
        if(i6 >= 0) {
            val6 = c6Value - i6;
            c6.textContent = val6.toString();
            i6--;
        }
        else {
            clearInterval(interval6);
        }
    }, 8);

    let interval7 = setInterval(() => {
        if(i7 >= 0) {
            val7 = c7Value - i7;
            c7.textContent = val7.toString();
            i7--;
        }
        else {
            clearInterval(interval7);
        }
    }, 20);
}

/* Progress bar */
let enableProgress = false;
const progress = document.querySelector(".progressGreen");

window.addEventListener("scroll", () => {
    if(window.pageYOffset > window.innerHeight - 150) {
        enableProgress = true;
    }

    if(enableProgress) {
        progress.style.width = (window.pageYOffset - 800) + "px";
    }
});

/* Referencje slider */
const refLeft = document.querySelector(".referencjeLeftBtn");
const refRight = document.querySelector(".referencjeRightBtn");
let refActive = 0;

const refDot1 = document.querySelector("#refDot1");
const refDot2 = document.querySelector("#refDot2");

const ref1 = document.querySelector("#ref1");
const ref2 = document.querySelector("#ref2");

const refs = [ref1, ref2];
const dotArr = [refDot1, refDot2];

const refLeftClick = () => {
    let previousSlide;

    dotArr[refActive].style.background = "#F8F8F8";
    previousSlide = refActive;
    refActive--;
    if(refActive<0) refActive = 1;
    dotArr[refActive].style.background = "#6E8A37";

    changeSlide(previousSlide, refActive);
}

const refRightClick = () => {
    let previousSlide = refActive;

    dotArr[refActive].style.background = "#F8F8F8";
    refActive++;
    if(refActive > 1) refActive = 0;
    dotArr[refActive].style.background = "#6E8A37";

    changeSlide(previousSlide, refActive);
}

const changeSlide = (prev, next) => {
    let tl = gsap.timeline();

    tl.to(refs[prev], { opacity: 0, duration: .5 })
        .set(refs[prev], { display: "none" })
        .set(refs[next], { display: "flex" })
        .to(refs[next], { opacity: 1, duration: .5 })
}
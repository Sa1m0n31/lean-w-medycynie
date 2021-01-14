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
        top: 0,
        behavior: "smooth"
    });
}

/* Slider - progress circle */
let circle1 = document.querySelector('#circle1');
let circle2 = document.querySelector('#circle2');
let circle3 = document.querySelector('#circle3');
let circle4 = document.querySelector('#circle4');

let circle1M = document.querySelector('#circle1M');
let circle2M = document.querySelector('#circle2M');
let circle3M = document.querySelector('#circle3M');
let circle4M = document.querySelector('#circle4M');

let inner1 = document.querySelector('#circleI1');
let inner2 = document.querySelector('#circleI2');
let inner3 = document.querySelector('#circleI3');
let inner4 = document.querySelector('#circleI4');

let inner1M = document.querySelector('#circleI1M');
let inner2M = document.querySelector('#circleI2M');
let inner3M = document.querySelector('#circleI3M');
let inner4M = document.querySelector('#circleI4M');

let slide1 = document.querySelector("#landing1");
let slide2 = document.querySelector("#landing2");
let slide3 = document.querySelector("#landing3");
let slide4 = document.querySelector("#landing4");

let radius, circumference;

if((circle1 !== null)||(circle1M !== null)) {
    if(window.innerWidth > 700) {
        radius = circle1.r.baseVal.value;
        circumference = radius * 2 * Math.PI;
    }
    else {
        radius = circle1M.r.baseVal.value;
        circumference = radius * 2 * Math.PI;
    }

    circle1.style.strokeDasharray = `${circumference} ${circumference}`;
    circle1.style.strokeDashoffset = "0";

    circle2.style.strokeDasharray = `${circumference} ${circumference}`;
    circle2.style.strokeDashoffset = "0";

    circle3.style.strokeDasharray = `${circumference} ${circumference}`;
    circle3.style.strokeDashoffset = "0";

    circle4.style.strokeDasharray = `${circumference} ${circumference}`;
    circle4.style.strokeDashoffset = "0";
}

const circles = [circle1, circle2, circle3, circle4];
const inners = [inner1, inner2, inner3, inner4];

const circlesM = [circle1M, circle2M, circle3M, circle4M];
const innersM = [inner1M, inner2M, inner3M, inner4M];

const slides = [slide1, slide2, slide3, slide4];

const setProgress = (circle, percent) => {
    const offset = circumference - percent / 300 * circumference;
    circles[circle].style.strokeDashoffset = offset.toString();
}

const setMobileProgress = (circle, percent) => {
    const offset = circumference - percent / 100 * circumference;
    circlesM[circle].style.strokeDashoffset = offset.toString();
}

let slide = 0;
let stopSlider = false;

const goSlider = (n) => {
    let i = 0, circle = n, tmp;
    let tl = gsap.timeline();
    circles[n].style.stroke = "#6E8A37";
    inners[n].style.fill = "#6E8A37";

    gsap.fromTo(slides, { x: 0 }, { x: 2000, opacity: 0, duration: 1 });
    gsap.fromTo(slides[n], { x: -2000 }, { x: 0, opacity: 1, duration: 1 });

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
            if(circle === 4) circle = 0;
            inners[circle].style.fill = "#6E8A37";
            i = 0;

            if(circle === 0) tmp = 3;
            else tmp = circle - 1;

            gsap.fromTo(slides[tmp], { x: 0 }, { x: 2000, opacity: 0, duration: 1 });
            gsap.fromTo(slides[circle], { x: -2000 }, { x: 0, opacity: 1, duration: 1 });

        }
    }, 30);
}

const resetCircles = (slide) => {
    for(let i=0; i<4; i++) {
        inners[i].style.fill = "#cdcdcd";
        circles[i].style.stroke = "none";
    }
    inners[slide].style.fill = "#6E8A37";
}

const nextSlide = (n = -1) => {
    if(n === -1) slide++;
    else slide = n;
    if(slide === 4) slide = 0;
    stopSlider = true;
    goSlider(slide);
}

const goSliderMobile = (n) => {
    console.log("go mobile");
    let i = 0, circle = n;
    circlesM[n].style.stroke = "#6E8A37";
    innersM[n].style.fill = "#6E8A37";
    let sliderInterval = setInterval(() => {
        if(i === 2) {
            circlesM[circle].style.stroke = "#6E8A37";
        }

        if(i <= 100) {
            if(stopSlider) {
                stopSlider = false;
                resetMobileCircles();
                clearInterval(sliderInterval);
            }
            setMobileProgress(circle, i);
            i++;
        }
        else {
            slide++;
            innersM[circle].style.fill = "#cdcdcd";
            circlesM[circle].style.stroke = "none";
            circle++;
            if(circle === 4) circle = 0;
            innersM[circle].style.fill = "#6E8A37";
            i = 0;
        }
    }, 30);
}

const resetMobileCircles = () => {
    for(let i=0; i<4; i++) {
        innersM[i].style.fill = "#cdcdcd";
        circlesM[i].style.stroke = "none";
    }
}

const nextMobileSlide = (n = -1) => {
    if(n === -1) slide++;
    else slide = n;
    if(slide === 4) slide = 0;
    stopSlider = true;
    goSliderMobile(slide);
}

if(window.innerWidth > 700) {
    goSlider(0);
}
else {
    goSliderMobile(0);
}

/* Licznik */
const c1 = document.querySelector("#count1");
const c2 = document.querySelector("#count2");
const c3 = document.querySelector("#count3");
const c4 = document.querySelector("#count4");
const c5 = document.querySelector("#count5");
const c6 = document.querySelector("#count6");

const c1Value = c1.textContent;
const c2Value = c2.textContent;
const c3Value = c3.textContent;
const c4Value = c4.textContent;
const c5Value = c5.textContent;
const c6Value = c6.textContent;

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
        i6 = c6Value;
    let val1, val2, val3, val4, val5, val6;

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
        console.log("licze");
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
        console.log("licze");
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
        console.log("licze");
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
        console.log("licze");
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
        console.log("licze");
        if(i6 >= 0) {
            val6 = c6Value - i6;
            c6.textContent = val6.toString();
            i6--;
        }
        else {
            clearInterval(interval6);
        }
    }, 20);
}

/* Progress bar */
let enableProgress = false;
let progressCounter = 250;
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
const refDot3 = document.querySelector("#refDot3");
const refDot4 = document.querySelector("#refDot4");

const dotArr = [refDot1, refDot2, refDot3, refDot4];

const refLeftClick = () => {
    dotArr[refActive].style.background = "#F8F8F8";
    refActive--;
    if(refActive<0) refActive = 3;
    dotArr[refActive].style.background = "#6E8A37";
}

const refRightClick = () => {
    dotArr[refActive].style.background = "#F8F8F8";
    refActive++;
    if(refActive > 3) refActive = 0;
    dotArr[refActive].style.background = "#6E8A37";
}
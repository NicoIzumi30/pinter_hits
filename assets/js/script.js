
const navBar = document.getElementById("navbar");
const navCont = document.getElementById("navCont");

function scroll() {
    let calc = window.scrollY;
    if (calc > 0) {
        navBar.classList.replace("bg-transparent", "bg-green");
        navBar.classList.add('fixed-top');
    } else if (calc <= 0) {
        navBar.classList.replace("bg-green", "bg-transparent");
        navBar.classList.remove('fixed-top');
    }
}


scroll();


window.onscroll = () => {
    scroll();
};
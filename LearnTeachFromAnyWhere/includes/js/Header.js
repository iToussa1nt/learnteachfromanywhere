var currentClicked = null;
function navLinkClicked(ev) {
    if (currentClicked !== null) {
        currentClicked.style.color = 'whitesmoke';
        ev.preventDefault();
    }
    currentClicked = ev.currentTarget;
    currentClicked.style.color = '#0088ff';
    ev.preventDefault();
}
let navLinks=document.getElementsByClassName('navLink');
for(let i = 0; i < navLinks.length; i++){
    navLinks[i].addEventListener('click', navLinkClicked);
}
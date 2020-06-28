// menu controller
const menuBtn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu');
const menuText = document.querySelector('.menu-btn__text');
const menuIcon = document.querySelector('.menu-btn__icon');

function changeClass() {
	menuIcon.classList.toggle('open');
	menuText.classList.toggle('open');
  menu.classList.toggle('open');
}

function closeMenu() {
	menuIcon.classList.toggle('open');
	menuText.classList.toggle('open');
  menu.classList.toggle('open');
}

menuIcon.addEventListener('click', changeClass, false);
menuIcon.addEventListener('click', changeClass, false);

/* Breadcrumbs apply .current css class*/
//query all the breadcrumbs
const breadCrumbs = document.querySelectorAll('.hero__breadcrumbs');
//set the current page url
let currentURL = window.location.href;
console.log(currentURL);
//loop through the nodelist, compare and add class if matches currentURL
for (let i = 0; i < breadCrumbs.length; i++) {
	let breadCrumbURL = breadCrumbs[i].attributes.href.nodeValue;
	if (currentURL.localeCompare(breadCrumbURL) === 0) {
		breadCrumbs[i].classList.add('current');
	}

}

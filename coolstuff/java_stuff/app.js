const navSlide = () => {
	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.links');
	const links = document.querySelectorAll('.links li');
	//toggle nav
	burger.addEventListener('click', () => {
		nav.classList.toggle('nav-active');
	//links animate
		
		//burger x 
		burger.classList.toggle('toggle');
	}); 
}
navSlide(); 
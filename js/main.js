const wrapper =      document.querySelector('.wrapper');
const btnPopup =     document.querySelector('.btnLogin-popup');
const iconClose =    document.querySelector('.icon-close');
const loginLink =    document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

const toggleBtn = document.querySelector('.toggle-btn');
const navbar = document.querySelector('.header .navbar');

registerLink.onclick = () => {
    wrapper.classList.add('active');   
}
loginLink.onclick = () => {
    wrapper.classList.remove('active');   
}
btnPopup.onclick = () =>{
    wrapper.classList.add('active-popup');
}
iconClose.onclick = () =>{
    wrapper.classList.remove('active-popup');
}

toggleBtn-addEventListener('click',()=>{
    toggleBtn.classList.toggle('active');
    navbar.classList.toggle('active')
});
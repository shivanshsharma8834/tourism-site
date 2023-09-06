//for search bar
let searchBtn=document.querySelector('#search-btn');
let searchBar=document.querySelector('.search-bar-container');

searchBtn.addEventListener('click' ,()=>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('hidden');
});

/*searchBtn.onclick=()=>{
    searchBar.classList.toggle('active');
    searchBtn.classList.toggle('fas fa-search');
}*/

//for login form

let formBtn=document.querySelector('#login-btn');
let loginForm=document.querySelector('.login-form-container');
let formClose=document.querySelector('#form-close');

formBtn.addEventListener('click' ,()=>{
    loginForm.classList.remove('active');
    loginForm.classList.add('onTop');
});

formClose.addEventListener('click' ,()=>{
    loginForm.classList.add('active');
    loginForm.classList.remove('onTop');
});

//for menu icon
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

menu.addEventListener('click' ,()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle("active");
    navbar.classList.toggle('onTop');

});

//for video button

let videoBtn=document.querySelectorAll('.vid-btn');

videoBtn.forEach(btn =>{
    btn.addEventListener('click',()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src= btn.getAttribute('data-src');
        document.querySelector('#video-slider').src=src;

    });

});

/*var sliderNav =function(manual){
    videoBtn.forEach((videoBtn)=>{
        videoBtn.classList.remove("active")
    })
    videoBtn[manual].classList.add("active");
}

videoBtn.forEach((videoBtn ,i) =>{
    videoBtn.addEventListener("click" ,() =>{
        sliderNav(i);
    })

});*/


//for scrolling related

window.onscroll=()=>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.add('active');
};





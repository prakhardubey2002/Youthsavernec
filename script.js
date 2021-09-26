let hamburger = document.querySelector('.hamburger');
let times = document.querySelector('.times');
let mobilenav =document.querySelector('.mobilenav');
hamburger.addEventListener('click',function(){
    mobilenav.classList.add('open');
});
times.addEventListener('click',function(){
    mobilenav.classList.remove('open');
});

function scrollAppear(){
    var introText =document.querySelector('.about');
    var position =introText.getBoundingClientRect().top;
    var screenposition = window.innerHeight;

    if(position < screenposition){
        introText.classList.add('about-appear');
    }
}
addEventListener('scroll',scrollAppear)



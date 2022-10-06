var btn = document.querySelector('.show-or-hide');
var btn2 = document.querySelector('.show-or-hide2');
var container = document.querySelector('.media-player');

btn.addEventListener('click', function(){
    if(container.style.display ==='block'){
        container.style.display = 'none';
       
    } else {
       container.style.display = 'block';
    
    }

});

btn2.addEventListener('click', function(){
    if(container.style.display ==='block'){
        container.style.display = 'none';
       
    } else {
       container.style.display = 'block';
    
    }

});



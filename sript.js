
const main = document.getElementById('main')
const button = document.getElementById('btn')

function toggle(){
    if(main.classList.contains('dark')){
        main.removeAttribute('class','dark');
        document.getElementById('header').removeAttribute('class','dark');
    }else{
        main.setAttribute('class','dark');
        document.getElementById('header').setAttribute('class','dark');
    }
}

button.addEventListener('click',toggle)
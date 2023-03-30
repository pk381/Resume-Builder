const readMorebutton=document.querySelector('.read-more-btn');
const text=document.querySelector('.text');
readMorebutton.addEventListener('click',(e)=>{
    text.classList.toggle('show-more');
    if(readMorebutton.innerText === 'Read More'){
        readMorebutton.innerText = 'Read Less';
       }else{
         readMorebutton.innerText = 'Read More';
       }
        })


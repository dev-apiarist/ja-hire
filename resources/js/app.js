import './bootstrap';


let innerCursor = document.querySelector('.inner-cursor');
let outerCursor = document.querySelector('.outer-cursor');

document.addEventListener('mousemove',moveCursor);

function moveCursor(e){
    let x = e.clientX;
    let y = e.clientY;

    innerCursor.style.left = `${x}px`;
    innerCursor.style.top = `${y}px`;
    outerCursor.style.left = `${x}px`;
    outerCursor.style.top = `${y}px`;

    let links = Array.from(document.querySelectorAll('a'));
    let buttons = Array.from(document.querySelectorAll('button'));
    let ctas = links.concat(buttons);

    ctas.forEach(cta=>{
        cta.addEventListener("mouseover", ()=>{
            innerCursor.classList.add('grow');
            outerCursor.classList.add('round');
        });
        cta.addEventListener("mouseleave", ()=>{
            innerCursor.classList.remove('grow');
            outerCursor.classList.remove('round');
        });
    })
}
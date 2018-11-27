

let checkbox = document.querySelectorAll(".hidden");
let star = document.querySelectorAll(".hiddenstar");


for (let i = 0; i < checkbox.length; i++) {
    checkbox[i].addEventListener('click', (el)=>{
        let box = el.target; 
        let button = box.previousElementSibling;
        button.classList.toggle('selected');
    });  
}

for (let j = 0; j < checkbox.length; j++) {
    star[j].addEventListener('click', (el)=>{
        let box = el.target; 
        let button = box.previousElementSibling;
        button.classList.toggle('selectedstar');
    });  
}
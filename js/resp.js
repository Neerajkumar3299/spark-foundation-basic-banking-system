let nav=document.querySelector(".navbar");
let heading=document.querySelector(".heading");
let link=document.querySelector(".link");
let menu=document.querySelector(".menu")
console.log(menu)
console.log(nav);
console.log(heading);
console.log(link);

// Toggle
menu.addEventListener("click",()=>{
    nav.classList.toggle("h-nav-resp")
    heading.classList.toggle("v-class-resp")
    link.classList.toggle("v-class-resp")
})

const a = document.querySelector(".a");
const b = document.querySelector(".b");
const c = document.querySelector(".c");
const ab = document.querySelector(".ab");
const cd = document.querySelector(".cd");
const de = document.querySelector(".de");

a.addEventListener("click", ()=>{
  
    a.classList.add("active");
    b.classList.remove("active");
    c.classList.remove("active");

    ab.classList.add("active");
    cd.classList.remove("active");
    de.classList.remove("active");

});

b.addEventListener("click", ()=>{
    
    b.classList.add("active");
    a.classList.remove("active");
    c.classList.remove("active");

    cd.classList.add("active");
    ab.classList.remove("active");
    de.classList.remove("active");

});

c.addEventListener("click", ()=>{

    c.classList.add("active");
    a.classList.remove("active");
    b.classList.remove("active");

    de.classList.add("active");
    cd.classList.remove("active");
    ab.classList.remove("active");

});
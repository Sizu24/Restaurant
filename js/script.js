const hamburger = document.getElementById("hamburger");
const mainItems = document.getElementById("main-items");

window.addEventListener("click", e =>{
    if(e.target.id === "hamburger" || e.target.className === "line"){
        console.log("click");
    }
})

window.addEventListener("load", e =>{
    $("#main-items").animate({"opacity": "1"}, 2500);
    console.log("loaded");
});
function fadeInPage() {
  window.addEventListener("load", () =>{
    $(".home").animate({"opacity": "1"}, 3000);
  });
}

export default fadeInPage;
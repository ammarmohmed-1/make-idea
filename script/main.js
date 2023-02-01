var bar =document.querySelector(".bar");
var nav =document.querySelector("nav");

console.log(nav);
var botton = [
`<img style="width:40px; height:auto;" src="images/icon/close.png" alt="botton">`,
`<img style="width:40px; height:auto;" src="images/icon/menu.png" alt="botton">`,
];

let A = 0;
bar.addEventListener("click",()=>{
  bar.innerHTML = botton[A++];
  if(A >= botton.length ){ A=0 }

  nav.classList.toggle("navbar")
})














var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

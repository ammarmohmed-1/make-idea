// contact us FROM
var icon_form = document.querySelector(".icon_form");
var form = document.querySelector(".form");


var start_now = document.querySelector(".start_now");
start_now.addEventListener("click",()=>{
  form.classList.toggle("form_close");
});

icon_form.addEventListener("click",()=>{
  form.classList.toggle("form_close");
});

// Hide the message after 2 seconds
var message = document.querySelector(".massage");
var btn_form = document.querySelector(".btn_form");

var hideMessage = ()=> {
  message.classList.add("massage_none");
}
setTimeout(hideMessage, 2000);





// # when user make a scroll in page
window.onscroll = ()=>{
    form.classList.add("form_close");

}
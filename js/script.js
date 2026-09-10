const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const wrap = document.querySelector('.img-wrap');
const imgs = document.querySelectorAll('.img-wrap img');

let idx = 0;

function showImg() {
    if (idx >= imgs.length) idx = 0;
    if (idx < 0) idx = imgs.length - 1;
    wrap.style.transform = `translateX(-${idx * 100}%)`;
}

next.addEventListener('click', () => {
    idx++;
    showImg();
});

prev.addEventListener('click', () => {
    idx--;
    showImg();
});

setInterval(() => {
    idx++;
    showImg();
}, 3000);

showImg();

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
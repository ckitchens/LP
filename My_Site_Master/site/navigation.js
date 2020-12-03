//Toggle mobile Menu
const toggle = document.querySelector('.toggle');
const parent = document.querySelector('.parent');

/* Toggle mobile menu */
function toggleParent() {
    if (parent.classList.contains("active")) {
        parent.classList.remove("active");
        // adds the menu (hamburger) icon
        toggle.querySelector("a").innerHTML = "<i class='fas fa-bars'></i>";
    } else {
        parent.classList.add("active");
        // adds the close (x) icon
        toggle.querySelector("a").innerHTML = "<i class='fas fa-times’></i>";
    }
}
toggle.addEventListener('click', toggleParent, false);

//Close submenu from anywhere on Page

function closeSubParent(e){
  let isClickInside = parent.contains(e.target);

  if(!isClickInside && parent.querySelector('.parent-active')){
    parent.querySelector('.parent-active').classList.remove('parent-active');
  }
  document.addEventListener('click' , closeParent, false);
}

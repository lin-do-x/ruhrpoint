


const drawer = document.getElementById('drawer-navigation');
const openDrawerButton = document.getElementById('open-drawer');
const closeDrawerButton = drawer.querySelector('[data-drawer-hide="drawer-navigation"]');
const overlay = document.getElementById('overlay');

function addEffect() {
  var sidebar_ul_lis = document.querySelectorAll(".side_ul_lis");
  sidebar_ul_lis.forEach((li) => {

    li.className = 'side_ul_lis animate__animated animate__fadeInRight';
    console.log(li)
    li.addEventListener('click', function(){
      drawer.classList.remove('translate-x-0');
  drawer.classList.add('translate-x-full');
  overlay.classList.add('hidden');
  removeEffect()
    })
  })
}
function removeEffect() {
  var sidebar_ul_lis = document.querySelectorAll(".side_ul_lis");
  sidebar_ul_lis.forEach((li) => {

    li.className = 'side_ul_lis';
    console.log(li)
  })
}


openDrawerButton.addEventListener('click', () => {
  drawer.classList.remove('translate-x-full');
  drawer.classList.add('translate-x-0');
  overlay.classList.remove('hidden');
  addEffect()
});

closeDrawerButton.addEventListener('click', () => {
  drawer.classList.remove('translate-x-0');
  drawer.classList.add('translate-x-full');
  overlay.classList.add('hidden');
  removeEffect()
});
overlay.addEventListener('click', () => {
  drawer.classList.remove('translate-x-0');
  drawer.classList.add('translate-x-full');
  overlay.classList.add('hidden');
  removeEffect()

})
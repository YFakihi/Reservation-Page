// window.addEventListener('scroll', function() {
//     var div = document.getElementById('fixedDiv');
//     var scrollPosition = window.scrollY || window.pageYOffset;
  
//     if (scrollPosition > 0) {
//       div.classList.add('top-0');
//     } else {
//       div.classList.remove('top-0');
//     }
//   });
  
const stickyDiv = document.querySelector('.sticky');
const bottomLimit = 50; // Adjust this value as needed

window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;

    if (scrollPosition >= bottomLimit) {
        stickyDiv.classList.add('sticky-bottom-limit');
    } else {
        stickyDiv.classList.remove('sticky-bottom-limit');
    }
});
// This is an example of how you could use JavaScript to make the navigation menu more dynamic

// Get all the links in the navbar
// var links = document.querySelectorAll("nav a");

// Iterate through each link and add an event listener
// for (var i = 0; i < links.length; i++) {
//   links[i].addEventListener("click", function (event) {
//     event.preventDefault();
//     var target = event.target.getAttribute("href");
//     document.querySelector(target).scrollIntoView({
//       behavior: "smooth",
//     });
//   });
// }

// $(document).ready(function() {
//     // when a circle is clicked
//     $('.circleInfraction').click(function() {
//         // get the ID of the popup to show
//         var popupId = $(this).data('popup');
//         // show the corresponding popup
//         $('#' + popupId).show();
//     });
//     // when the close button of a popup is clicked
//     $('.close').click(function() {
//         // hide the popup
//         $(this).parent().hide();
//     });
// });

document.addEventListener('DOMContentLoaded', function () {
  const circleInfractions = document.querySelectorAll('.circleInfraction');
  const modals = document.querySelectorAll('.modal');
  const closeBtns = document.querySelectorAll('.close');

  circleInfractions.forEach(function (circleInfraction) {
    circleInfraction.addEventListener('click', function () {
      const popupId = this.getAttribute('data-popup');
      const popup = document.querySelector('#' + popupId);
      popup.style.display = "block";
    });
  });

  closeBtns.forEach(function (closeBtn) {
    closeBtn.addEventListener('click', function () {
      const popup = this.parentElement.parentElement;
      popup.style.display = "none";
    });
  });

  window.addEventListener('click', function (event) {
    modals.forEach(function (modal) {
      if (event.target === modal) {
        modal.style.display = "none";
      }
    });
  });
});



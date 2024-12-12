// FAQ
// const accordion = document.querySelectorAll(".faq .accordion");
// for (i = 0; i < accordion.length; i++) {
//   accordion[i].addEventListener("click", function (event) {
//     let tmp = event.target.parentNode.parentNode;
//     for (e = 0; e < accordion.length; e++) {
//       if (accordion[e] == tmp) {
//         accordion[e].classList.toggle("active");
//       } else {
//         accordion[e].classList.remove("active");
//       }
//     }
//   });
//   if ("#" + accordion[i].id == window.location.hash) {
//     accordion[i].classList.add("active");
//   }
// }

$(function () {
  // Po kliknięciu na pytanie pokaż lub ukryj odpowiedź
  $(document).on('click', '.faq-single', function () {
      // Zamknij wszystkie inne otwarte odpowiedzi
      $(this).siblings().removeClass('active');

      $(this).toggleClass('active');
      $(this).siblings().find('.faq-answer').slideUp();

      $(this).find('.faq-answer').slideToggle();
  });

})
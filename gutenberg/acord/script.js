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
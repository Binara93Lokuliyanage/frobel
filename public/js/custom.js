$(document).ready(function () {
    $('.hero-banner-section').owlCarousel({
      items: 1,
      loop: true,
      center: true,
      margin: 0,
      autoplay: true,
      animateOut: 'fadeOut', 
      animateIn: 'fadeIn',
      nav: false,
      navContainer: '.success-slider .custom-nav',
      dots: true,
      dotsContainer: '.hero-banner-dots',
      navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    });
  });

  $(document).ready(function () {
    $('.testimonial-items-wrapper').owlCarousel({
      items: 1,
      loop: true,
      center: true,
      margin: 0,
      autoplay: true,
      nav: true,
      navContainer: ['.testimonial-btn-prev', '.testimonial-btn-next'],
      dots: true,
      dotsContainer: '.testimonial-dots',
      navText: ['Previous', 'Next'],
      onChanged: function(event) {
        var currentItemIndex = event.item.index-1;
        $('#testimonial-id').text(currentItemIndex.toString().padStart(2, '0'));
    }
    });
    $('#testimonial-id').text('01');
  });

  $(document).ready(function() {
    $('.menu-item').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        if (target !== '#') {
            var offsetTop = $(target).offset().top - 100;
            $('html, body').animate({
                scrollTop: offsetTop
            }, 100);
        }
    });
});

$(document).ready(function() {
  $('.footer-link-item').on('click', function(e) {
      e.preventDefault();
      var target = $(this).attr('href');
      if (target !== '#') {
          var offsetTop = $(target).offset().top - 100;
          $('html, body').animate({
              scrollTop: offsetTop
          }, 100);
      }
  });
})

$(document).ready(function() {
  $('.main-navigator__item').on('click', function(e) {
      e.preventDefault();
      var target = $(this).attr('href');
      if (target !== '#') {
          var offsetTop = $(target).offset().top - 100;
          $('html, body').animate({
              scrollTop: offsetTop
          }, 100);
      }
  });
})

$(document).ready(function() {
  $('.mobile-menu-wrapper').click(function() {
      $(this).toggleClass('mobile-menu-active');
      $('.mobile-menu-content-wrapper').toggleClass('content-active ');
  });

  $('.mobile-menu').click(function() {
    $('.mobile-menu-content-wrapper').removeClass('content-active ');
});

});

 
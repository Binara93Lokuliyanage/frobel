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

 
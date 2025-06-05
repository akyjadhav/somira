jQuery(document).ready(function () {

  jQuery('.custom-accordion .accordion-item .title').on('click', function () {
    const parent = jQuery(this).closest('.accordion-item');
    if (parent.hasClass('active')) {
      parent.removeClass('active');
      parent.find('.accordion-content').slideUp();
      parent.find('.icon').text('+');
    } else {
      jQuery('.custom-accordion .accordion-item').removeClass('active');
      jQuery('.custom-accordion .accordion-content').slideUp();
      jQuery('.custom-accordion .icon').text('+');

      parent.addClass('active');
      parent.find('.accordion-content').slideDown();
      parent.find('.icon').text('−');
    }
  });
  jQuery('#aboutAccordion .accordion-collapse').on('hide.bs.collapse', function (e) {
    // Check if it's the only one currently open
    if (jQuery('#aboutAccordion .accordion-collapse.show').length === 0) {
      e.preventDefault(); // Stop it from collapsing
    }
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 50) { // adjust the threshold
      jQuery('nav').addClass('scrolled');
    } else {
      jQuery('nav').removeClass('scrolled');
    }
  });
  jQuery("#menuToggle").on("click touchstart", function () {
    jQuery("#mobileMenu").css("transform", "translateX(0)");
  });
  jQuery("#menuClose").on("click touchstart", function () {
    jQuery("#mobileMenu").css("transform", "translateX(100%)");
  });

  console.log(my_ajax_obj.ajax_url); 

  jQuery('#ajaxAddToCartForm').submit(function (e) {
    e.preventDefault();

    let productID = jQuery('input[name="product_id"]').val();
    let quantity = parseInt(jQuery('#quantity').val());

    jQuery.ajax({
      type: 'POST',
      url: my_ajax_obj.ajax_url,
      data: {
        action: 'ajax_add_to_cart',
        product_id: productID,
        quantity: quantity
      },
      success: function (response) {
        alert('Product added to cart!');
      },
      error: function (xhr, status, error) {
        console.log('AJAX Error:', error);
      }
    });
  });

  const jQueryzoomContainer = jQuery('.zoom-container');
  const jQueryzoomImage = jQuery('.zoom-image');

  jQueryzoomContainer.on('mousemove', function (e) {
    const offset = jQuery(this).offset();
    const width = jQuery(this).width();
    const height = jQuery(this).height();
    const x = ((e.pageX - offset.left) / width) * 100;
    const y = ((e.pageY - offset.top) / height) * 100;

    jQueryzoomImage.css('transform-origin', `jQuery{x}% jQuery{y}%`);
  });


  jQueryzoomContainer.on('mouseleave', function () {
    jQueryzoomImage.css('transform-origin', `center center`);
  });
  jQuery(".gallery-img").click(function () {
    var src = jQuery(this).attr("src");
    jQuery("#mainImage").attr("src", src);
    jQuery(".gallery-img").removeClass("active");
    jQuery(this).addClass("active");
  });
  const images = [];
  jQuery('.thumb-img').each(function () {
    images.push(jQuery(this).data('large'));
  });
  let currentIndex = 0;
  updateMainImage(0);
  function updateMainImage(index) {
    currentIndex = index;
    jQuery('#mainImage').attr('src', images[index]);
    jQuery('.thumb-img').removeClass('active');
    jQuery('.thumb-img').eq(index).addClass('active');
  }

  jQuery('.left-arrow').on('click', function () {
    const newIndex = (currentIndex - 1 + images.length) % images.length;
    updateMainImage(newIndex);
  });

  jQuery('.right-arrow').on('click', function () {
    const newIndex = (currentIndex + 1) % images.length;
    updateMainImage(newIndex);
  });
  jQuery('.qty-plus').click(function () {
    var jQueryqty = jQuery('#quantity');
    var current = parseInt(jQueryqty.val());
    jQueryqty.val(current + 1);
  });

  jQuery('.qty-minus').click(function () {
    var jQueryqty = jQuery('#quantity');
    var current = parseInt(jQueryqty.val());
    if (current > 1) {
      jQueryqty.val(current - 1);
    }
  });

});
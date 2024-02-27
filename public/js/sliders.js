//home slider
$("#owl-homeslider").owlCarousel({
  loop: true,
  margin: 0,
  nav: false,
  autoplay: true,
  autoplayTimeout: 10000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

//welcome slider
const prevIconWelcome =
  '<button class="welcomebtn-left position-absolute d-flex justify-content-center align-items-center rounded-circle button"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: #FF5500;transform: ;msFilter:;"><path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg></button>';
const nextIconWelcome =
  '<button class="welcomebtn-right position-absolute d-flex justify-content-center align-items-center rounded-circle button"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: #FF5500;transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg></button>';

$("#owl-welcome").owlCarousel({
  loop: true,
  margin: 15,
  navText: [prevIconWelcome, nextIconWelcome],
  nav: true,
  autoplay: true,
  autoplayTimeout: 10000,
  autoplayHoverPause: true,
  dots: false,

  responsive: {
    0: {
      items: 1,
    },
    375: {
      items: 1,
    },
    465: {
      items: 2,
    },
    720: {
      items: 3,
    },
    1000: {
      items: 4,
      margin: 28,
    },
    1025: {
      items: 3,
      margin: 200,
    },
    1400: {
      items: 3,
    },
  },
});

// product slider
const prevIconPopular =
  '<button class="circlebtn-left position-absolute d-flex justify-content-center align-items-center rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: #716D6D;transform: ;msFilter:;"><path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg></button>';

const nextIconPopular =
  '<button class="circlebtn-right position-absolute d-flex justify-content-center align-items-center rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: #716D6D;transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg></button>';

$("#owl-popularproduct, #owl-featureproduct").owlCarousel({
  items: 4,
  margin: 331,
  autoHeight: true,
  loop: true,
  nav: true,
  navText: [prevIconPopular, nextIconPopular],
  autoplay: true,
  autoplayTimeout: 10000,
  autoplayHoverPause: true,
  dots: false,

  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
      margin: 60,
    },
    1000: {
      items: 4,
      margin: 300,
    },
    1025: {
      items: 3,
      margin: 0,
    },
    1400: {
      items: 4,
      margin: 30,
    },
  },
});

//testimonials

$(document).ready(function () {
  let sync1 = $("#owl-testimonials");
  let sync2 = $("#owl-testcircle");

  const prevIconTest =
    '<button class="testbtn-left position-absolute d-flex justify-content-center align-items-center rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: #08BC3F;transform: ;msFilter:;"><path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg></button>';
  const nextIconTest =
    '<button class="testbtn-right position-absolute d-flex justify-content-center align-items-center rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: #08BC3F;transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg></button>';

  sync1.owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    nav: true,
    navText: [prevIconTest, nextIconTest],
    onChanged: syncPosition,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  //testimonials circle

  //      const prevtestcircle =
  //      '<button class="testbtn-left position-absolute d-flex justify-content-center align-items-center rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: #08BC3F;transform: ;msFilter:;"><path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg></button>'
  //  const nexttestcircle =
  //      '<button class="testbtn-right position-absolute d-flex justify-content-center align-items-center rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: #08BC3F;transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg></button>'

  sync2.owlCarousel({
    loop: true,
    center: true,
    dots: false,
    onChanged: syncPosition2,
    responsive: {
      0: {
        items: 3,
        margin: 10,
      },
      426: {
        items: 3,
        margin: 30,
      },
      769: {
        items: 3,
        margin: 60,
      },
      1000: {
        items: 3,
        margin: 60,
      },
    },
  });

  function syncPosition(event) {
    if (!event.namespace || event.property.name !== "position") {
      return;
    }
    var target = event.relatedTarget.relative(event.property.value);
    sync2.trigger("to.owl.carousel", [target, 300, true]);
  }

  function syncPosition2(event) {
    if (!event.namespace || event.property.name !== "position") {
      return;
    }
    var target = event.relatedTarget.relative(event.property.value);
    sync1.trigger("to.owl.carousel", [target, 300, true]);
  }
});

//product info

$(document).ready(function () {
  let productImage = $("#owl-productImage");
  let productImageSlider = $("#owl-productInfo");

  const prevIconProductInfo =
    '<button class="productInfobtn-left position-absolute d-flex justify-content-center align-items-center rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: #716D6D;transform: ;msFilter:;"><path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg></button>';

  const nextIconProductInfo =
    '<button class="productInfobtn-right position-absolute d-flex justify-content-center align-items-center rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: #716D6D;transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg></button>';

  productImageSlider.owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: true,
    onChanged: productslider,
    navText: [prevIconProductInfo, nextIconProductInfo],
    responsive: {
      0: {
        items: 3,
        margin: 0,
      },
      375: {
        items: 3,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 3,
      },
    },
  });

  productImage.owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    onChanged: productImgSlider,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  function productslider(event) {
    if (!event.namespace || event.property.name !== "position") {
      return;
    }
    var target = event.relatedTarget.relative(event.property.value);
    productImage.trigger("to.owl.carousel", [target, 300, true]);
  }

  function productImgSlider(event) {
    if (!event.namespace || event.property.name !== "position") {
      return;
    }
    var target = event.relatedTarget.relative(event.property.value);
    productImageSlider.trigger("to.owl.carousel", [target, 300, true]);
  }
});

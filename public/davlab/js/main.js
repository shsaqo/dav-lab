const heroSwiper = new Swiper(".hero-swiper-container", {
  slidesPerView: 1,
  autoHeight: true,
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-hero-button-next",
    prevEl: ".swiper-hero-button-prev",
  },
});

const swiper = new Swiper(".branches-swiper-container", {
    slidesPerView: 4,
    spaceBetween: 30,
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      580: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 4,
      },
    },
  });
  const swiperPartner = new Swiper(".swiper-partners-container", {
    slidesPerView: 5,
    spaceBetween: 30,
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next-partners",
      prevEl: ".swiper-button-prev-partners",
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      580: {
        slidesPerView: 4,
        spaceBetween: 16,
      },
      992: {
        slidesPerView: 5,
        spaceBetween: 30,
      },
    },
  });
  const swiperNewsSuchImages = new Swiper(".swiper-such-images-container", {
    slidesPerView: 4,
    spaceBetween: 30,
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next-partners",
      prevEl: ".swiper-button-prev-partners",
    },
    breakpoints: {
      0: {
        slidesPerView: 2.2,
        spaceBetween: 5,
      },
      768: {
        slidesPerView: 2.5,
        spaceBetween: 14,
      },
      992: {
        slidesPerView: 3.4,
        spaceBetween: 30,
      }
    }
  });

  const swiperLicenseSlider = new Swiper(".swiper-license-container", {
    slidesPerView: 5,
    spaceBetween: 0,
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next-licenses",
      prevEl: ".swiper-button-prev-licenses",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      580: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 5,
      }
    },
  });

  const swiperLicenseImageSlider = new Swiper(".swiper-license-image-container", {
    slidesPerView: 5,
    spaceBetween: 14,
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next-licenses-images",
      prevEl: ".swiper-button-prev-licenses-images",
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      580: {
        slidesPerView: 4,
        spaceBetween: 18,
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 14,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });
  const modalOpeners = document.querySelectorAll(".modal-opener");
  const modals = document.querySelectorAll(".modal");
  const modalCloser = document.querySelectorAll(".modal-closer");

  modalOpeners.forEach((elem) => {
    elem.addEventListener("click", function (e) {
      e.preventDefault();
      document.body.classList.add('overflow-hidden');
      let path = e.currentTarget.getAttribute("data-path");

      modals.forEach((modal) => {
        modal.classList.remove("modal-show");
      });
      document
        .querySelector(`[data-target="${path}"]`).classList.add("modal-show");
    });
  });
  modals.forEach((modalItem) => {
    modalItem.addEventListener("click", function (e) {
      if (e.target === modalItem || e.target === modalCloser) {
        document.body.classList.remove('overflow-hidden');
        modalItem.classList.remove("modal-show");
      }
    });
  });
  modalCloser.forEach((item) => {
    item.addEventListener("click", function () {
      modals.forEach((modal) => {
        document.body.classList.remove('overflow-hidden');
        modal.classList.remove("modal-show");
      });
    });
  });



  const aboutTabs = document.querySelector(".tabs-parent");
  const tabButton = document.querySelectorAll(".tab-changer-item");
  const contents = document.querySelectorAll(".tab-one-content");
  const contentsMobile = document.querySelectorAll(".mobile-sub-items");
  const contactTabsBtns = document.querySelectorAll(".contact_page_specific_btns");
  if(aboutTabs) {
    aboutTabs.addEventListener("click", function(e) {
      const id = e.target.dataset.id;
      if (id) {
        Array.from(contactTabsBtns).forEach(btn => {
            btn.classList.remove("active");
        })
        // tabButton.forEach(btn => {
        //   btn.classList.remove("active");
        // });
        e.target.classList.add("active");

        contents.forEach(content => {
          content.classList.remove("active");
        });
        contentsMobile.forEach(contentMobile => {
          contentMobile.classList.remove("active");
        });

        const selector = 'tab-'+id.split('-').pop();

        const element = document.getElementById(selector);
        element.classList.add("active");
      }
    });

  $('.tabs-parent .accordeon-btn').click(function (){
    $('.accordeon-inner ').slideUp();
    if($(this).hasClass('active')){
        $(this).next().slideUp();
        $(this).removeClass('active');
    }
    else{
        $(this).next().slideDown();
        $('.tabs-parent .accordeon-btn').removeClass('active');
        $(this).addClass('active');
    }
  });
};
if($('.header-mobile-container').length > 0) {
  const accordeonBtn = document.querySelectorAll('.accordeon-btn');
  accordeonBtn.forEach(elem => {
    elem.addEventListener('click', function(){
      elem.classList.toggle('active');
      let accordeonContent = elem.nextElementSibling;
      if(accordeonContent.classList.contains('active')){
        accordeonContent.classList.remove('active')
      }else {
        accordeonContent.classList.add('active');
      }
    });
  });
}

const licenseMoreBtn = document.querySelectorAll('.licene-more-text-opener');
const licenseMoreText = document.querySelectorAll('.license-slide-text-content');
  licenseMoreText.forEach((elem) => {

    if(elem.children[0].offsetHeight > elem.offsetHeight) {
      elem.classList.add('has-more-4-line');
    }else {
      elem.classList.remove('has-more-4-line');
    }
});
licenseMoreBtn.forEach(elem => {
  elem.addEventListener("click", function(e){
    const licenseBtnClicked = e.currentTarget.previousElementSibling;
    licenseBtnClicked.classList.toggle('opened-all-text');
      if(licenseBtnClicked.classList.contains('opened-all-text')) {
        elem.textContent = "Փակել"
      }else {
        elem.textContent = "Ավելին"
      }
      swiperLicenseSlider.on('slideChange', function () {
          elem.textContent = "Ավելին";
          elem.classList.remove('has-more-4-line');
          licenseBtnClicked.classList.remove('opened-all-text');
      });
  });

});

// hamburger menu
const burgerToggler = document.querySelector('.icon-wrapper');
const mobileMenu = document.querySelector('.header-mobile-container');

if(burgerToggler) {
  burgerToggler.addEventListener('click', function() {
    burgerToggler.querySelector('.icon-humburger').classList.toggle('icon-humburger-active');
    mobileMenu.classList.toggle('active');
    if(mobileMenu.classList.contains('active')) {
      document.body.style = 'overflow: hidden;'
    }else {
      document.body.removeAttribute('style');
    }
  });
}

  $('.tab-chooser-has-sub-content').click(function (e){
      e.preventDefault();
      e.stopImmediatePropagation();
    $('.sidebar-tab-content').slideUp();
    if($(this).hasClass('active')){
        $(this).next().slideUp();
        $(this).removeClass('active');
    }
    else {
        $(this).next().slideDown();
        $('.tab-chooser-has-sub-content').removeClass('active');
        $(this).addClass('active');
    }
});
// price accorderon another logic end
// all price toggler

const priceToggler = document.querySelector('.all-analyzes');
const choosedItemList = document.querySelector('#chooses-list');

  // If a click happens somewhere outside the dropdown, close it.


window.addEventListener("click", function(e) {
  if(priceToggler) {
    if(e.target.hasAttribute("data-open-analyzer-opener")) {
      if(choosedItemList.classList.contains('visible-choosed')) {
        choosedItemList.classList.remove('visible-choosed');
      }else {
        choosedItemList.classList.add('visible-choosed');
      }
      return;
    }
    if (!e.target.closest(".visible-choosed")&& !e.target.closest(".close-analyse-list")) {
      choosedItemList.classList.remove("visible-choosed");
    }
  }

});
// all price toggler end
// datepicker
if( $("#date_input").length > 0) {
  $("#date_input").flatpickr();
}



$('.gallery').each(function() {
  $(this).magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: {
        enabled:true
      },
      callbacks: {

        buildControls: function() {
          this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
        }

      }
  });
});


// TODO: ACTIVATE THIS
$('.gallery').each(function() {
  $(this).magnificPopup({
      delegate: 'a',
      type: "image",
      gallery: {
        enabled:true
      },
      callbacks: {

        buildControls: function() {
          this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
        },
          elementParse: function(item) {

            if(item.el[0].className == 'imVideo') {
              item.type = 'iframe';
            } else {
              item.type = 'image';
            }

        }}
  });
});
// TODO: ACTIVATE THIS END





// const ChoosedList = document.getElementById('chooses-list');
// document.addEventListener('click', function(e){
// 	if (ChoosedList.contains(e.target)){
//   	alert("Clicked in Box");
//   } else{
//     alert("Clicked in Box");;
//   }
// })



    $(window).on("scroll resize", function (){

      if($('header.header').length > 0) {
        if($(window).scrollTop() >= $(".top-header").height()){
          $("body").addClass('scroled-content');
          $(".top-header").addClass('d-none');
          $(".header").addClass("fixed");
          $(".header").removeClass("transparent");

          $('.header-logo img').attr('src', `${location.origin}/davlab/img/scroled-logo.svg`)
        }else{
          $("body").removeClass('scroled-content');
          $(".top-header").removeClass('d-none');
          $(".header").addClass("transparent");
          $(".header").removeClass("fixed");
          $('.header-logo img').attr('src', `${location.origin}/davlab/img/logo.svg`)
        }
        if($(this).width() < 992) {
          $('.header-logo img').attr('src', `${location.origin}/davlab/img/logo.svg`)
        }
      }
      })


    var pageLocation = window.location.href;
    if(pageLocation.includes("about")){
        $("#about-page").addClass("active");
    } else if(pageLocation.includes("price")){
        $("#analyse-page").addClass("active");
    } else if(pageLocation.includes("news")){
        $("#news-page").addClass("active");
    } else if(pageLocation.includes("contact")){
        $("#contact-page").addClass("active");
    } else if(pageLocation.split("/").pop() === "hy" || pageLocation.split("/").pop() === "ru" || pageLocation.split("/").pop() === "en"){
        $("#main-page").addClass("active");
    }



      // bodymovin



      // const animation = bodymovin.loadAnimation({
      //   container: document.getElementById('bm'), // Required
      //   path: '../js/zommer.json',
      //   renderer: 'svg', // Required
      //   loop: true, // Optional
      //   autoplay: true, // Optional
      // })

// dynamic adaptive

const servicesItems = document.querySelectorAll('.our-services-item');
servicesItems.forEach(elem => {
  elem.addEventListener('mouseenter', function(e){
    let player = e.target.querySelector('lottie-player');
    player.play();
  });
  elem.addEventListener('mouseleave', function(e){
    let player = e.target.querySelector('lottie-player');
    player.stop();
  });
});

let textarea = document.querySelectorAll('#paper_page textarea');
textarea.forEach(elem => {
  elem.addEventListener('keydown', autosize);

function autosize(){
  let el = this;
  setTimeout(function(){
    el.style.cssText = 'height:auto; padding:0';
    // for box-sizing other than "content-box" use:
    // el.style.cssText = '-moz-box-sizing:content-box';
    el.style.cssText = 'height:' + el.scrollHeight + 'px';
  },0);
}
})


// Tooltip
const root = document.querySelector(':root');
const tooltipITem = document.querySelectorAll('.analyze-one-item.analyze-tooltip-item');

Array.from(tooltipITem).forEach(item => {
    item.addEventListener('mousemove', function(e) {
        const x = e.offsetX;
        root.style.setProperty('--leftPos', x + "px");
    })

})



const da = new DynamicAdapt("max");

da.init();

// var newsPath = window.location.href.split("/").pop();
// $("#share-facebook")[0].attributes[1].nodeValue = `https://www.facebook.com/sharer/sharer.php?u=https://test4.twelve.company/hy/news/${newsPath}`;


//===== Preloader
window.onload = function () {
    window.setTimeout(fadeout, 200);
}

function fadeout() {
    document.querySelector('.preloader').style.opacity = '0';
    document.querySelector('.preloader').style.display = 'none';
}



$(function() {
    
    "use strict";
    window.onscroll = function () {
        var header_navbar = document.querySelector(".navbar-area");
        var sticky = header_navbar.offsetTop;

        // show or hide the back-top-top button
        var backToTo = document.querySelector(".scroll-top");
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTo.style.display = "flex";
        } else {
            backToTo.style.display = "none";
        }
    };
	$('.add').click(function () {
        if ($(this).prev().val()) {
            $(this).prev().val(+$(this).prev().val() + 1);
        }
    });
    $('.sub').click(function () {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
        }
    });
	$('select').niceSelect();  
    let body = document.querySelector('body');
    function displayWindowSize(){
       var w = document.documentElement.clientWidth;

       if (w > 991) {
           // YOUR CODE...
           $('.main-navbar').removeClass('mobile-menu');
           $('.mega-dropdown-menu').removeClass('mobile-menu-dropdown');

           /*-------- Mobile Menu javascript Function --------*/
    
            /*Variables*/
            var $offCanvasNav = $('.mobile-menu');
            var $offCanvasNavSubMenu = $offCanvasNav.find('.sub-menu, .mega-dropdown-list ul');

            /*Add Toggle Button With Off Canvas Sub Menu*/
            $offCanvasNavSubMenu.parent().prepend('<span class="d-none"></span>');

            /*Close Off Canvas Sub Menu*/
            $offCanvasNavSubMenu.slideDown();

            /*Category Sub Menu Toggle*/
            $offCanvasNav.on('click', 'li a, li .menu-expand, .mega-dropdown-list .mega-title', function (e) {
                var $this = $(this);
                if (($this.parent().attr('class').match(('menu-item-has-children')))) {
                    
                    if ($this.siblings('ul:visible').length) {
                        e.preventDefault();
                            $this.parent('li').removeClass('active');
                            $this.siblings('ul').slideDown();
                        } else {
                            $this.parent('li').addClass('active');
                            $this.closest('li').siblings('li').find('ul:visible').slideDown();
                            $this.closest('li').siblings('li').removeClass('active');
                            $this.siblings('ul').slideUp();
                        }
                }
            });
       }
       else{
   
           $('.main-navbar').addClass('mobile-menu');
     
    

            var $offCanvasNav = $('.mobile-menu');
           
            $offCanvasNav.on('click', 'li a, li .menu-expand, .mega-dropdown-list .mega-title', function (e) {
                var $this = $(this);
                if (($this.parent().attr('class').match(('menu-item-has-children')))) {
                    
                    if ($this.siblings('ul:visible').length) {
                        e.preventDefault();
                            $this.parent('li').removeClass('active');
                            $this.siblings('ul').slideUp();
                        } else {
                            $this.parent('li').addClass('active');
                            $this.closest('li').siblings('li').find('ul:visible').slideUp();
                            $this.closest('li').siblings('li').removeClass('active');
                            $this.siblings('ul').slideDown();
                        }
                }
            });
       }
    } 
    window.addEventListener("resize", displayWindowSize);
    displayWindowSize();    
	

	$.validate({
        lang: 'es',
    });
    
    $('.product-active').slick({
        dots: false,
        infinite: false,
        arrows: true,
        prevArrow:'<span class="prev"><i class="mdi mdi-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="mdi mdi-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
    });



	$('.header-items-active').slick({
        dots: true,
        infinite: false,
        autoplay: true,
        arrows: false,
        prevArrow:'<span class="prev"><i class="mdi mdi-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="mdi mdi-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
    

    
    
    
    
    //====== counter up 
    var cu = new counterUp({
        start: 0,
        duration: 2000,
        intvalues: true,
        interval: 100,
        append: '+'
    });
    cu.start();
    
    
    
    // client-logo-active 
    $('.client-logo-active').slick({
        dots: false,
        infinite: false,
        autoplay: true,
        arrows: false,
        speed: 800,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });

});






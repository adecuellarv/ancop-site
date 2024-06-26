 <!-- footer begin -->
 <footer style="background: linear-gradient(45deg, #045c89, rgb(2 19 67 / 30%)), url('<?php bloginfo('template_url'); ?>/images/slider/SLIDER-2.jpg')no-repeat; background-size: cover; background-position: 50% 50%;">
     <div class="container">
         <div class="row">
             <div class="col-md-4">
                 <img style="    
                    width: 250px;" src="<?php bloginfo('template_url'); ?>/images/logo_white.png" class="logo-small" alt=""><br>
             </div>


             <div class="col-md-4">
                 <h3>Contacto</h3>
                 <div class="widget widget-address">
                     <address>
                         <span>Calle: Jose Bustamante, #130-A, Colonia Valle Alameda, Querétaro</span>
                         <span><strong style="color: #fff;">Tel:</strong>(442) 237 3145 / (442) 784 9686</span>
                         <span><strong style="color: #fff;">Email:</strong><a href="mailto:contacto@ancop.com.mx" style="color:#ccc;">contacto@ancop.com.mx</a></span>
                     </address>
                 </div>
             </div>
         </div>
     </div>

     <div class="subfooter">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     &copy; Copyright 2024 - Ancop
                 </div>
                 <div class="col-md-6 text-right">
                     <div class="social-icons">
                         <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                         <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                         <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                         <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                         <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                         <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </footer>
 <!-- footer close -->

 </div>



 <!-- Javascript Files
    ================================================== -->
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/jpreLoader.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.isotope.min.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/easing.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.countTo.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/validation.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.magnific-popup.min.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/enquire.min.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.stellar.min.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/designesia.js"></script>

 <!-- RS5.0 Core JS Files -->
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

 <!-- RS5.0 Extensions Files -->
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.video.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.actions.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.migration.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <script>
     jQuery(document).ready(function() {
         jQuery("#revolution-slider").revolution({
             sliderType: "standard",
             sliderLayout: "fullscreen",
             delay: 3500,
             navigation: {
                 arrows: {
                     enable: true
                 }
             },
             parallax: {
                 type: "mouse",
                 origo: "slidercenter",
                 speed: 2000,
                 levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
             },
             spinner: "off",
             gridwidth: 1140,
             gridheight: 640,
             disableProgressBar: "on"
         });
     });
 </script>
 <script>
     $(window).load(function() {
         var swiper = new Swiper('.swiper-cards', {
             slidesPerView: 4,
             spaceBetween: 30,
             centeredSlides: false,
             autoplay: {
                 delay: 2500,
                 disableOnInteraction: false,
             },
             /*
             pagination: {
                 el: '.swiper-pagination',
                 clickable: true,
             },
             navigation: {
                 nextEl: '.swiper-button-next',
                 prevEl: '.swiper-button-prev',
             },*/
         });
     })
     $(window).load(function() {
         var swiper2 = new Swiper(".mySwiper", {
             //spaceBetween: 20,
             effect: "fade",
             autoplay: {
                 delay: 3500,
                 disableOnInteraction: false,
             },
             navigation: {
                 nextEl: ".swiper-button-next",
                 prevEl: ".swiper-button-prev",
             },
             loop: true,
         });
     })

     function sendmail() {
         const urlRn = "https://ancop.com.mx/sendmail.php";
         const name = document.getElementById('name').value;
         const email = document.getElementById('email').value;
         const number = document.getElementById('phone').value;
         const msg = document.getElementById('message').value;

         const Toast = Swal.mixin({
             toast: true,
             position: 'bottom-end',
             showConfirmButton: false,
             timer: 5000,
             timerProgressBar: true,
             didOpen: (toast) => {
                 toast.addEventListener('mouseenter', Swal.stopTimer)
                 toast.addEventListener('mouseleave', Swal.resumeTimer)
             }
         })

         let mailOk = false;
         let numberOk = false;

         if (name && email && number && msg) {
             const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
             if (email.match(mailformat)) {
                 mailOk = true;
             } else {
                 document.getElementById('email').style.backgroundColor = 'rgb(' + 233 + ',' + 185 + ',' + 193 + ')';
             }

             const phoneformat = /^\d{10}$/
             if (number.match(phoneformat)) {
                 numberOk = true;
             } else {
                 document.getElementById('phone').style.backgroundColor = 'rgb(' + 233 + ',' + 185 + ',' + 193 + ')';
             }

             if (mailOk && numberOk) {
                 const values = {
                     name,
                     email,
                     number,
                     msg
                 }
                 $.ajax({
                     type: 'POST',
                     url: '' + urlRn + '',
                     data: values,
                     beforeSend: function() {
                         Swal.showLoading()
                     },
                     success: function(resp) {
                         setTimeout(() => {
                             Swal.fire(
                                 '¡Mensaje enviado!',
                                 'Gracias por contactarte con nosotros, en breve nos comunicaremos contigo',
                                 'success'
                             )

                             setTimeout(function() {
                                 location.reload();
                             }, 900);
                         }, 900);
                     },
                     error: function() {
                         setTimeout(() => {
                             Swal.fire({
                                 title: '¡Error!',
                                 text: 'Tuvimos problemas al enviar tu mensaje, favor de intentarlo nuevamente',
                                 icon: 'error',
                                 confirmButtonText: 'Ok'
                             })
                         }, 400);

                     }
                 });
             } else {
                 Toast.fire({
                     icon: 'error',
                     title: 'Error en formatos'
                 })
             }

         } else {
             Toast.fire({
                 icon: 'error',
                 title: 'Debes llenar los campos del formulario'
             })
         }

     };
 </script>
 </body>

 </html>